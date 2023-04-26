<?php

namespace bootstrap\router;

use configs\container\Container;
use dispatcher\Request;
use dispatcher\Response;

class Router
{
    protected readonly array $routes;
    public function __construct(private readonly Request $request, private readonly Response $response, private Container $container)
    {
    }

    public function register(array $routes): void
    {
        $this->routes = $routes;
    }

    public function resolve(): void
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $args = $this->request->getBody();
        if (isset($this->routes[$method][$path])) {
            $action = $this->routes[$method][$path];

            if (is_callable($action)) {
                call_user_func($action);
            }

            if (is_array($action)) {
                [$class, $method] = $action;
                if (class_exists($class)) {
                    $class = $this->container->get($class);

                    if (method_exists($class, $method)) {
                        call_user_func_array([$class, $method], [$args]);
                    }
                }
            }

        } else {
            $this->response->redirect('/error');
        }
    }
}