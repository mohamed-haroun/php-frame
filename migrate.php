<?php

use bootstrap\DB;
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$configs =  [
                  'host'      => $_ENV['DB_HOST'],
                  'user'      => $_ENV['DB_USER'],
                  'password'  => $_ENV['DB_PASSWORD'],
                  'database'  => $_ENV['DB_NAME'],
                  'driver'    => $_ENV['DRIVER'] ?? 'pdo_mysql'
             ];

$db = new DB($configs);
$db->applyMigrations();