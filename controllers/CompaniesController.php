<?php
declare(strict_types=1);
namespace controllers;

use bootstrap\Application;
use dispatcher\Request;
use dispatcher\Response;
use Doctrine\ORM\EntityManager;
use models\Company;
use models\Contacts;
use models\ShippingLine;
use models\UserModel;

class CompaniesController extends Controller
{
    private string $layout = 'main';
    private UserModel $user;
    private EntityManager $entityManager;
    public function __construct(private Request $request, private Response $response)
    {
        if (isset($_SESSION['user'])) {
            $this->user = unserialize($_SESSION['user']);
            $this->layout = 'main';
        }

        $this->entityManager = Application::getDB()->entityManager();
    }

    // All the company manipulating methods goes here....
    public function shippingCompsView(): void
    {
        $view = 'shippingComps';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'Companies',
            "{{user}}" => $this->user->first_name ?? 'user'
        ];

        $this->render($view, $layout, $args);
    }

    public function createNewCompany(): void
    {
        if ($this->request->getMethod() == 'post') {
            $companyDta = $this->request->getBody()['post'];

            $company = (new Company())
                ->setCompanyName($companyDta['companyName'])
                ->setAddress($companyDta['address'])
                ->setRegistrationNumber($companyDta['registerNum'])
                ->setVatNumber($companyDta['vatNum'])
                ->setTeleFax($companyDta['tele']);

            $this->entityManager->persist($company);
            $this->entityManager->flush();

            $this->response->redirect('/companies');
        }
    }

    public function addContact(): void
    {
        if ($this->request->getMethod() == 'post') {
            $contactData = $this->request->getBody()['post'];
            $company = $this->entityManager->find(Company::class, $_GET['company']);
            $contact = (new Contacts())
                ->setContact($contactData['contact'])
                ->setContactType($contactData['contactType'])
                ->setCompany($company);
            $this->entityManager->persist($contact);
            $this->entityManager->flush();

            $this->response->redirect('/companies');
        }
    }

    public function updateCompany(): void
    {
        $companyId = $_GET['company'];
        $company = $this->entityManager->find(Company::class, $companyId);
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getBody()['post'];

            $company->setCompanyName($data['comName'])
                ->setAddress($data['address'])
                ->setRegistrationNumber($data['registration'])
                ->setVatNumber($data['vat'])
                ->setTeleFax($data['tele']);

            $this->entityManager->flush();

            $this->response->redirect('/companies');
        }
    }

    public function deleteContact(): void
    {
        $companyId = $_GET['company'];
        $contactId = $_GET['contactId'];
        $company = $this->entityManager->find(Company::class, $companyId);

        foreach (($company->getContacts()->getValues()) as $contac) {
            if ($contac->getId() == $contactId) {
                $this->entityManager->remove($contac);
            }
        }
        $this->entityManager->flush();
        $this->response->redirect('/companies');

    }

}