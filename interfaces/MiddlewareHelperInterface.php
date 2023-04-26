<?php

namespace interfaces;

use dispatcher\Request;
use dispatcher\Response;

interface MiddlewareHelperInterface
{
    public function process(Request $request, Response $response, array $args):void;
}