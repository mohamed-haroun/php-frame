<?php

namespace controllers;

use dispatcher\Response;
use models\UserModel;

class HomeController extends Controller
{

    private string $layout = 'main';
    private UserModel $user;
    public function __construct(private Response $response)
    {
        if (isset($_SESSION['user'])) {

            $this->user = unserialize($_SESSION['user']);

            $this->layout = 'main';
        }
    }

    public function dashboard(): void
    {
        $view = 'dashboard';
        $layout = $this->layout;
        $args = [
            "{{page_title}}" => 'Dashboard',
            "{{user}}" => $this->user->first_name ?? 'user'

        ];

        $this->render($view, $layout, $args);
    }

    public function index(): void
    {

        $this->response->redirect('/login');
//        $view = 'home';
//        $layout = $this->layout ;
//        $args = [
//            "{{page_title}}" => 'Home'
//        ];
//
//        if (isset($this->user)) {
//            $args['{{user}}'] = $this->user->first_name;
//        }
//
//        $this->render($view, $layout, $args);
    }

    public function errorView():void
    {
        $view = '_404';
        $layout = 'main';
        $args = [
            "{{page_title}}" => '404'
        ];
        http_response_code("404");
        $this->render($view, $layout, $args);
    }
}