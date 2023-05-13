<?php
declare(strict_types=1);
namespace controllers;

use bootstrap\Application;
use DateTime;
use dispatcher\Request;
use dispatcher\Response;
use Doctrine\ORM\EntityManager;
use enums\ShipmentMode;
use enums\ShipmentStatus;
use enums\WeightTypes;
use models\Certificate;
use models\Documents;
use models\Invoices;
use models\Items;
use models\Notes;
use models\Packages;
use models\Policies;
use models\Postponements;
use models\Shipments;
use models\Statuses;
use models\UserModel;

class ShipmentController extends Controller
{
    private string $layout = 'main';
    private UserModel $user;
    private EntityManager $entityManager;
    public function __construct(
        private Request $request,
        private Response $response,
        private Shipments $shipments,
    ) {
        if (isset($_SESSION['user'])) {
            $this->user = unserialize($_SESSION['user']);
            $this->layout = 'main';
        } else {
            $this->response->redirect('/user/login');
        }

        $this->entityManager = Application::getDB()->entityManager();
    }


    public function overview(): void
    {
        $view = 'shipmentsOverview';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'Shipments',
            "{{user}}" => $this->user->first_name ?? 'user'
        ];

        $this->render($view, $layout, $args);
    }

    public function addShipment():void
    {
        if ($this->request->getMethod() == 'post') {

            $data = $this->request->getBody()['post'];

            $this->shipments->setShipmentDescription($data['description'])
                ->setShipperId((int)$data['shipper'])
                ->setConsigneeId((int)$data['consignee'])
                ->setShippedBy($data['shippedBy'])
                ->setDhl($data['dhl'])
                ->setPod($data['pod'])
                ->setPol($data['pol'])
                ->setShipmentOffice($data['office'])
                ->setShipmentMode(ShipmentMode::from($data['mode']))
                ->setCreatedAt(new DateTime())
                ->setCreatedBy(1)
                ->setShippingLineId((int)$data['line']);


            $status = (new Statuses())->setShipmentStatus(ShipmentStatus::Created)
                ->setStatusDate(new DateTime())
                ->setShipments($this->shipments);

            $this->shipments->addStatus($status);
            $_SESSION['newShipment'] = serialize($this->shipments);

            $this->response->redirect('/shipments/items');
        }
    }

    public function addItems(): void
    {

        $shipment = unserialize($_SESSION['newShipment']);
        $item = new Items();
        $invoice = new Invoices();

        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];

            // Inserting item data
            $itemData = array_slice($data, 0, 6);

            $item->setItemDescription($itemData['item'])
                ->setQuantity((float)$itemData['quantity'])
                ->setPricePerTon((float)$itemData['price'])
                ->setProductionDate((new DateTime($itemData['prodDate'])))
                ->setPalletsNumber((int)$itemData['palletNum'])
                ->setShipments($shipment);


            // Adding invoice for the item
            $invoice->setInvoiceNumber($itemData['invoiceNum'])
                ->setInvoiceDate(new DateTime())
                ->setItems($item);

            $item->setInvoices($invoice);


            $packages = array_slice($data, 6);

            for ($i = 1; $i <= count($packages) / 6; $i++) {
                $package = new Packages();
                $package->setNumberOfPackages((int)($packages["packageNum" . $i]))
                    ->setPackageType($packages["packageType" . $i])
                    ->setNetWeight((float)($packages["nw" . $i]))
                    ->setGrossWeight((float)($packages["gw" . $i]))
                    ->setLotNumber(($packages["lot" . $i]))
                    ->setWeightType(WeightTypes::from($packages['wunit' . $i]))
                    ->setItems($item);

                $item->addPackage($package);
            }

            $shipment->addItem($item);

            $_SESSION['newShipment'] = serialize($shipment);

            $this->response->redirect('/shipments/items');
        } else {
            $this->response->redirect('/error');
        }
    }

    public function saveShipment(): void
    {
        $this->entityManager->persist(unserialize($_SESSION['newShipment']));
        $this->entityManager->flush();

        unset($_SESSION['newShipment']);

        $this->response->redirect('/shipments/overview');
    }

    public function uploadPolicy(): void
    {
        if ($this->request->getMethod() == 'post') {
            $policyData = $this->request->getBody()['post'];

            $shipment = unserialize($_SESSION['shipment']);
            $shipment = $this->entityManager->find(Shipments::class ,$shipment->getId());

            // Creating new folder for shipment files
            $folderName = "shipment_" . $shipment->getId() . "_" . $shipment->getCreatedAt()->getTimestamp() . '/policy/';
            $documents = DOCS;
            if(! in_array($folderName ,scandir(DOCS))) {
                mkdir($documents . $folderName, 0777, true);
            }
            // Uploading policy file
            $policyFile = $_FILES;
            $uploadDir = $documents . $folderName;
            $uploadFile = $uploadDir . basename($policyFile['policy']['name']);
            $uploaded = move_uploaded_file($policyFile['policy']['tmp_name'], $uploadFile);

            if ($uploaded) {
                $policyNum = $policyData['policyNum'];
                $policyName = $_FILES['policy']['name'];
                $policy = (new Policies())
                    ->setPolicyNumber($policyNum)
                    ->setPolicy($policyName)
                    ->setCreatedAt(new DateTime())
                    ->setShipments($shipment);
                $this->entityManager->persist($policy);

                $status = (new Statuses())
                    ->setShipments($shipment)
                    ->setShipmentStatus(ShipmentStatus::Loaded)
                    ->setStatusDate(new DateTime($policyData['loadingDate']))
                    ->setShipments($shipment);
                $this->entityManager->persist($status);

                $this->entityManager->flush();
            } else {
                echo "File is not uploaded";
            }


            $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
        } else {
            echo "<h3>You are not allowed to be here <<<a href='/dashboard'>Home page?</a>>></h3>";
        }
    }

    public function uploadFiles(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class ,$shipment->getId());
        $folderName = "shipment_" . $shipment->getId() . "_" . $shipment->getCreatedAt()->getTimestamp();

        $numOfFiles = count($_FILES['shipFiles']['tmp_name']);

        if(!in_array($folderName ,scandir(DOCS))) {
            mkdir(DOCS . $folderName);
        }

        for ($i = 0; $i < $numOfFiles; $i++) {
            $uploadDir = DOCS . $folderName . '/';
            $uploadFile = $uploadDir . basename($_FILES['shipFiles']['name'][$i]);
            $uploaded = move_uploaded_file($_FILES['shipFiles']['tmp_name'][$i], $uploadFile);

            if ($uploaded) {
                $documents = (new Documents())
                    ->setDocumentName($_FILES['shipFiles']['name'][$i])
                    ->setUploadDate(new DateTime())
                    ->setShipments($shipment);

                $this->entityManager->persist($documents);
                $this->entityManager->flush();
            } else {
                echo "File Cannot be Uploaded";
            }
        }


        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());

    }

    public function newShipment(): void
    {
        $view = 'newShipment';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'new Shipment',
            "{{user}}" => $this->user->first_name ?? 'user'
        ];

        $this->render($view, $layout, $args);
    }

    public function items(): void
    {
        $view = 'items';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'Items',
            "{{user}}" => $this->user->first_name ?? 'user'
        ];

        $this->render($view, $layout, $args);
    }


    public function trackShipment(): void
    {
        var_dump($this->request->getBody());
    }

    public function getShipment($shipmentId): string|Shipments|null
    {
        $shipment = $this->entityManager->find(Shipments::class, $shipmentId);

        if ($shipment) {
             $_SESSION['shipment'] = serialize($shipment);
             return $_SESSION['shipment'];
        } else {
            unset($_SESSION['shipment']);
            return null;
        }
    }

    public function details(): void
    {
        if ($this->request->getMethod() == 'get') {
            if (isset($this->request->getBody()['get']['shipment'])) {
                $this->getShipment($this->request->getBody()['get']['shipment']);
            } else {
                unset($_SESSION['shipment']);
            }
        }
        $view = 'shipmentDetails';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'Details',
            "{{user}}" => $this->user->first_name ?? 'user'
        ];

        $this->render($view, $layout, $args);
    }

    public function addNote(): void
    {
        if ($this->request->getMethod() == 'post') {
            $noteData = $this->request->getBody()['post'];
            $shipment = unserialize($_SESSION['shipment']);
            $note = (new Notes())
                ->setNote($noteData['note'])
                ->setCreatedAt(new DateTime());
            $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
            $shipment->addNote($note);
            $this->entityManager->persist($shipment);
            $this->entityManager->flush();
            $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
        } else {
            echo 'No Data To return';
        }
    }

    public function updateReferences(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];
            if ($data['toUpdate'] == 'tracking') {
                $shipment->setTrackingNumber($data['value']);
            }
            if ($data['toUpdate'] == 'dhl') {
                $shipment->setDhl($data['value']);
            }
        }
        $this->entityManager->flush();
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }

    public function updateStatus(): void
    {
        /**
         * @var Statuses $status
         */

        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];
            $statuses = $shipment->getStatues();
            $status = $statuses->get($data['newStatus']);
            if ($data['date']) {
                if (! $status) {
                    $newStatus = (new Statuses());
                    if ($data['newStatus'] == 1) {
                        $newStatus->setShipmentStatus(ShipmentStatus::from('Loaded'))
                            ->setStatusDate(new DateTime($data['date']))
                            ->setShipments($shipment);
                    }
                    if ($data['newStatus'] == 2) {
                        $newStatus->setShipmentStatus(ShipmentStatus::from('Arrived'))
                            ->setStatusDate(new DateTime($data['date']))
                            ->setShipments($shipment);

                    }
                    if ($data['newStatus'] == 3) {
                        $newStatus->setShipmentStatus(ShipmentStatus::from('Delivered'))
                            ->setStatusDate(new DateTime($data['date']))
                            ->setShipments($shipment);
                    }
                    $this->entityManager->persist($newStatus);
                } else {
                    $status->setStatusDate(new DateTime($data['date']));
                }
            } else {
                $this->entityManager->remove($status);
            }
        }
        $this->entityManager->flush();
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }

    public function updateShippingInfo(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];

            $shipment->setShippingLineId((int)$data['line'])
                ->setShipmentMode(ShipmentMode::from($data['mode']))
                ->setShipmentOffice($data['office'])
                ->setShippedBy($data['shipBy']);

            $this->entityManager->flush();
        } else {
            echo "Not Allowed To get Here";
        }
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }

    public function updateAdditionalInfo(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];
            $shipment->setReliesDate(isset($data['reliesDate']) ? new DateTime($data['reliesDate']): $data['reliesDate'])
                ->setIncomingNumber($data['income'])
                ->setExchangeData($data['exchange']);

            $this->entityManager->flush();
        } else {
            echo "Not Allowed To get Here";
        }
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }

    public function updatePostponements(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];

            $postponement = (new Postponements())
                ->setDelayDate(isset($data['delayDate']) ? new DateTime($data['delayDate']): null)
                ->setReason($data['reason'])
                ->setShipments($shipment);

            $this->entityManager->persist($postponement);
            $this->entityManager->flush();
        } else {
            echo "Not Allowed To get Here";
        }
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }

    public function deletePostponement(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'get') {
            $data = $this->request->getBody()['get'];

            $postponements = $this->entityManager->find(Postponements::class, $data['postponement']);

            $this->entityManager->remove($postponements);
            $this->entityManager->flush();
        }
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }

    public function deleteNote(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class, $shipment->getId());
        if ($this->request->getMethod() == 'get') {
            $data = $this->request->getBody()['get'];

            $postponements = $this->entityManager->find(Notes::class, $data['note']);

            $this->entityManager->remove($postponements);
            $this->entityManager->flush();
        }
        $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());
    }


    public function addCertificate(): void
    {
        if ($this->request->getMethod() == 'post') {
            $certificateData = $this->request->getBody()['post'];

            $shipment = unserialize($_SESSION['shipment']);
            $shipment = $this->entityManager->find(Shipments::class ,$shipment->getId());

            // Creating new folder for shipment files
            $folderName = "shipment_" . $shipment->getId() . "_" . $shipment->getCreatedAt()->getTimestamp() . '/certificate/';
            $documents = DOCS;
            if(! in_array($folderName ,scandir(DOCS))) {
                mkdir($documents . $folderName, 0777, true);
            }
            // Uploading policy file
            $certificateFiles = $_FILES;
            $uploadDir = $documents . $folderName;
            $uploadFile = $uploadDir . basename($certificateFiles['certificate']['name']);
            $uploaded = move_uploaded_file($certificateFiles['certificate']['tmp_name'], $uploadFile);

            if ($uploaded) {
                $cerNum = $certificateData['cerNum'];
                $cerDate = new DateTime($certificateData['cerDate']);
                $cerName = $_FILES['certificate']['name'];

                $certificate = (new Certificate())
                    ->setCertificate($cerName)
                    ->setCertificateDelivery($cerDate)
                    ->setCertificateNumber($cerNum)
                    ->setShipments($shipment);
                $this->entityManager->persist($certificate);

                $this->entityManager->flush();
            } else {
                echo "File is not uploaded";
            }


            $this->response->redirect('/shipments/details?shipment=' . $shipment->getId());

        } else {
            echo "<h3>You are not allowed to be here <<<a href='/dashboard'>Home page?</a>>></h3>";
        }

    }

    public function setDocumented(): void
    {
        $shipment = unserialize($_SESSION['shipment']);
        $shipment = $this->entityManager->find(Shipments::class ,$shipment->getId());

        $documented =$shipment->getDocumented();
        $documented = isset($documented) ? null : true;
        $shipment->setDocumented($documented);
        $this->entityManager->flush();
    }

}