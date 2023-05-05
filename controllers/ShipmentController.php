<?php
declare(strict_types=1);
namespace controllers;

use bootstrap\Application;
use bootstrap\DB;
use dispatcher\Request;
use dispatcher\Response;
use Doctrine\ORM\EntityManager;
use enums\ShipmentMode;
use models\Invoices;
use models\Items;
use models\Packages;
use models\Policies;
use models\Shipments;
use models\ShippingLine;
use models\UserModel;

class ShipmentController extends Controller
{
    private string $layout = 'main';
    private UserModel $user;
    private EntityManager $entityManager;
    public function __construct(
        private Request $request,
        private Response $response,
        private Shipments $shipments
    ) {
        if (isset($_SESSION['user'])) {
            $this->user = unserialize($_SESSION['user']);
            $this->layout = 'main';
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

            $this->uploadPolicy($_FILES);
            $data = $this->request->getBody()['post'];

            $this->shipments->setShipmentDescription($data['description'])
                ->setShipperId((int)$data['shipper'])
                ->setConsigneeId((int)$data['consignee'])
                ->setShippedBy($data['shippedBy'])
                ->setDhl($data['dhl'])
                ->setPod($data['pod'])
                ->setPol($data['pol'])
                ->setTrackingNumber($data['trackingNum'])
                ->setShipmentOffice($data['office'])
                ->setShippingLineId((int)$data['line'])
                ->setLotNumber($data['lot'])
                ->setShipmentMode(ShipmentMode::from(strtolower($data['mode'])))
                ->setCreatedAt(new \DateTime())
                ->setCreatedBy(1);

            $policy = (new Policies())
                ->setPolicyNumber($data['lineNum'])
                ->setPolicy(basename($_FILES['bill']['name']))
                ->setCreatedAt(new \DateTime())
                ->setShipments($this->shipments);

            $this->shipments->setPolicies($policy);

            $_SESSION['newShipment'] = serialize($this->shipments);

            $this->response->redirect('/shipments/items');
        }
    }

    public function uploadPolicy(array $policy): bool
    {
        $uploadDir = POLICY_PATH;
        $uploadFile = $uploadDir . basename($policy['bill']['name']);

        return move_uploaded_file($policy['bill']['tmp_name'], $uploadFile);
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

    public function addItems(): void
    {

        $shipment = unserialize($_SESSION['newShipment']);
        $item = new Items();
        $invoice = new Invoices();

        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];

            // Inserting item data
            $itemData = array_slice($data, 0, 5);
            $item->setItemDescription($itemData['item'])
                ->setQuantity((float)$itemData['quantity'])
                ->setPricePerTon((float)$itemData['price'])
                ->setProductionDate((new \DateTime($itemData['prodDate'])))
                ->setShipments($shipment);


            // Adding invoice for the item
            $invoice->setInvoiceNumber((int)$itemData['invoiceNum'])
                ->setInvoiceDate(new \DateTime())
                ->setItems($item);

            $item->setInvoices($invoice);


            $packages = array_slice($data, 6);
            for ($i = 1; $i <= count($packages) /  4; $i++) {
                $package = new Packages();
                $package->setNumberOfPackages((int)($packages["packageNum" . $i]))
                    ->setPackageType($packages["packageType" . $i])
                    ->setNetWeight((float)($packages["nw" . $i]))
                    ->setGrossWeight((float)($packages["packageNum" . $i]))
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

    public function trackShipment(): void
    {
        var_dump($this->request->getBody());
    }

    public function details(): void
    {
        $view = 'shipmentDetails';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'Details',
            "{{user}}" => $this->user->first_name ?? 'user'
        ];

        $this->render($view, $layout, $args);
    }
}