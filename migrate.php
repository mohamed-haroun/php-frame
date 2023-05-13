<?php

use bootstrap\DB;
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$configs =  [
    'dbname'            => $_ENV['DB_NAME'],
    'user'              => $_ENV['DB_USER'],
    'password'          => $_ENV['DB_PASSWORD'],
    'host'              => $_ENV['DB_HOST'],
    'driver'            => $_ENV['DRIVER'],
];

$db = new DB($configs);
$db->applyMigrations();