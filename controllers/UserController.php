<?php

namespace controllers;

use dispatcher\Response;
use models\UserModel;

class UserController extends Controller
{
    public function __construct(private UserModel $user, private Response $response)
    {
        if (isset($_SESSION['user'])) {
            $this->user = unserialize($_SESSION['user']);
        }
    }

    public function profile(): void
    {

        $view = 'profile';
        $layout = 'dashboard';
        $args = [
            "{{page_title}}" => "Profile",
            "{{user}}" => $this->user->first_name ?? 'user'
        ];
        $this->render($view, $layout, $args);
    }

    public function logout(): void
    {
        unset($_SESSION['user']);
        unset($_SESSION['logged']);
        $this->response->redirect('/login');
    }
}