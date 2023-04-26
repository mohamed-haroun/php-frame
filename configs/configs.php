<?php
declare(strict_types=1);


return [
    'db' => [
        'host'      => $_ENV['DB_HOST'],
        'user'      => $_ENV['DB_USER'],
        'password'  => $_ENV['DB_PASSWORD'],
        'database'  => $_ENV['DB_NAME'],
        'driver'    => $_ENV['DRIVER'] ?? 'pdo_mysql'
    ],
];