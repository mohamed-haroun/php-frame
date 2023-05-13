<?php

namespace controllers;

use bootstrap\Application;
use dispatcher\Request;
use dispatcher\Response;
use Doctrine\ORM\EntityManager;
use models\ShippingLine;
use models\UserModel;

class ShippingLineController extends Controller
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

    public function addShippingLine(): void
    {
        if ($this->request->getMethod() == 'post') {
            $shippingLineData = $this->request->getBody()['post'];
            $shippingLine = (new ShippingLine())
                ->setLineName($shippingLineData['shippingLine'])
                ->setTrackingPath($shippingLineData['trackingPath']);


            $this->entityManager->persist($shippingLine);
            $this->entityManager->flush();

            $this->response->redirect('/companies');
        }
    }

    public function updateShippingLine(): void
    {
        $shippingLineID = $_GET['shippingLine'];
        $shippingLine = $this->entityManager->find(ShippingLine::class, $shippingLineID);
        $data = $this->request->getBody()['post'];
        $shippingLine->setLineName($data['lineName'])
            ->setTrackingPath($data['linePath']);

        $this->entityManager->flush();
        $this->response->redirect('/companies');

    }
}