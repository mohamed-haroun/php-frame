<?php

namespace dispatcher;

class Response
{
    public function setStatusCode(int $statusCode): void
    {
        http_response_code($statusCode);
    }

    public function redirect(string $to):void
    {
        if (headers_sent()) {
            echo "Headers already sent";
        } else {
            header("Location: $to");
        }
    }
}