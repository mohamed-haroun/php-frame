<?php

namespace dispatcher;

class Request
{
    public function __construct()
    {
    }

    public function getPath(): string
    {
        $uri = $_SERVER['REQUEST_URI'];
        return explode('?', $uri)[0];
    }

    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getBody(): array
    {
        $body = [];
        foreach ($_GET as $key => $value) {
            $body['get'][$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        foreach ($_POST as $key => $value) {
            $body['post'][$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        return $body;
    }

    public function isGet(): bool
    {
        return strtolower($this->getMethod()) === 'get';
    }

    public function isPost(): bool
    {
        return strtolower($this->getMethod()) === 'post';
    }
}