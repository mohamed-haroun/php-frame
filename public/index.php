<?php
declare(strict_types=1);
session_start();

use bootstrap\Application;
use bootstrap\Container;
use bootstrap\DB;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

require_once __DIR__ . '/../configs/path_config.php';
require_once ROOT_PATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

$configs = require_once CONFIG_PATH . '/configs.php';

$container = new Container();

$container->set(DB::class, (new DB($configs['db'])));

try {
    $app = $container->get(Application::class);
    $app->run();
} catch (NotFoundExceptionInterface|ContainerExceptionInterface|ReflectionException $e) {
    echo $e->getMessage();
}
