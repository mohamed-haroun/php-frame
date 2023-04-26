<?php
declare(strict_types=1);
namespace bootstrap;

use bootstrap\router\Router;
use PDO;

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

    public static function dbConnect(): PDO
    {
        return self::$db->connect();
    }
}