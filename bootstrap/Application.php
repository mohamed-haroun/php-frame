<?php
declare(strict_types=1);
namespace bootstrap;

use Doctrine\DBAL\Connection;

class Application
{
    private static DB $db;
    public function __construct(private readonly Router $router, private readonly DB $DB) {
        self::$db = $this->DB;
    }

    public function run():void
    {
        $routes = require_once ROUTES_PATH . 'Routes.php';
        $this->router->register($routes);
        $this->router->resolve();
    }

    public static function dbConnect(): Connection
    {
        return self::$db->connect();
    }

    public static function getDB():DB
    {
        return static::$db;
    }
}