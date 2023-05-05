<?php
declare(strict_types=1);


return [
    'db' => [
        'dbname'            => $_ENV['DB_NAME'],
        'user'              => $_ENV['DB_USER'],
        'password'          => $_ENV['DB_PASSWORD'],
        'host'              => $_ENV['DB_HOST'],
        'driver'            => $_ENV['DRIVER'],
    ]
];