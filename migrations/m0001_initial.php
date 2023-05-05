<?php

namespace migrations;
require_once __DIR__ . '/../vendor/autoload.php';

use bootstrap\DB;
use Doctrine\DBAL\Connection;
use PDO;

return new class
{

    private Connection $connection;
    public function __construct()
    {
        $configs =  [
            'dbname'            => $_ENV['DB_NAME'],
            'user'              => $_ENV['DB_USER'],
            'password'          => $_ENV['DB_PASSWORD'],
            'host'              => $_ENV['DB_HOST'],
            'driver'            => $_ENV['DRIVER'],
        ];

        $this->connection = (new DB($configs))->connect();

    }

    public function up()
    {
        $this->connection->executeQuery("
                                create table users(
                                user_id int unsigned serial default value,
                                first_name varchar(100) not null,
                                last_name varchar(100) not null,
                                email varchar(255) not null unique,
                                user_password varchar(255) not null,
                                created_at datetime not null default current_timestamp
                                );
        ");
    }

    public function down()
    {
        $this->connection->executeQuery("DROP TABLE users");
    }
};