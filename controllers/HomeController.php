<?php

namespace controllers;

use models\UserModel;

class HomeController extends Controller
{

    private string $layout = 'main';
    private UserModel $user;
    public function __construct()
    {
        if (isset($_SESSION['user'])) {

            $this->user = unserialize($_SESSION['user']);

            $this->layout = 'dashboard';
        }
    }

    public function index(): void
    {
        $view = 'home';
        $layout = $this->layout ;
        $args = [
            "{{page_title}}" => 'Home'
        ];

        if (isset($this->user)) {
            $args['{{user}}'] = $this->user->first_name;
        }

        $this->render($view, $layout, $args);
    }

    public function contact(): void
    {
        $view = 'contact';
        $layout = $this->layout ;
        $args = [
            "{{page_title}}" => 'Contact Us'
        ];

        if (isset($this->user)) {
            $args['{{user}}'] = $this->user->first_name;
        }
        $this->render($view, $layout, $args);
    }

    public function about(): void
    {
        $view = 'about';
        $layout = $this->layout ;
        $args = [
            "{{page_title}}" => 'About Us'
        ];

        if (isset($this->user)) {
            $args['{{user}}'] = $this->user->first_name;
        }
        $this->render($view, $layout, $args);
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