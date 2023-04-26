<?php
declare(strict_types=1);
namespace controllers;

use dispatcher\Request;
use dispatcher\Response;
use middlewares\SessionHandlerMiddleware;
use models\UserModel;

class AuthController extends Controller
{
    public function __construct(
        private readonly Request $request,
        private readonly Response $response,
        private readonly UserModel $userModel,
        private readonly SessionHandlerMiddleware $handlerMiddleware
    )
    {
        if (isset($_SESSION['user'])) {
            $this->response->redirect('/profile');
        }
    }
    public function loginView(): void
    {
        $view = 'login';
        $layout = 'main';
        $args = [
            "{{page_title}}" => 'Login'
        ];
        $this->render($view, $layout, $args);
    }

    public function registerView(): void
    {
        $view = 'register';
        $layout = 'main';
        $args = [
            "{{page_title}}" => 'Register'
        ];
        $this->render($view, $layout, $args);
    }

    public function login(): void
    {
        $data = $this->request->getBody();

        if ($this->request->getMethod() == 'post') {
            $data = $data['post'];
            $value = $this->userModel->getUser($data['email'], $data['password']);

            if ($value instanceof UserModel) {
                $_SESSION['user'] = serialize($this->userModel);
                $this->handlerMiddleware->setFlash('success', "Thanks for registration user " . $this->userModel->first_name);
                $this->response->redirect('/profile');
            } else {
                $_SESSION['data'] = $data;
                if ($value=='password') {
                    $_SESSION['password_message'] = "Password is not correct";
                } else {
                    $_SESSION['email_message'] = "User is not found";
                }
                $this->loginView();
            }
        }
    }

    public function register(): void
    {
        $this->userModel->loadData($this->request->getBody()['post']);
        if ($this->userModel->validateData()) {
            $saved = $this->userModel->save();
            if ($saved) {
                $this->response->redirect('/profile');
            }
        } else {
            $this->userModel->user_password = '';
            $this->userModel->confirmPassword = '';
            $_SESSION['user_register'] = serialize($this->userModel);
            $this->registerView();
        }
    }
}