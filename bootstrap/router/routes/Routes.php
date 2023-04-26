<?php

declare(strict_types=1);

use controllers\AuthController;
use controllers\HomeController;
use controllers\UserController;

return [
    'get' => [
        '/'                 => [HomeController::class, 'index'          ],
        '/error'            => [HomeController::class, 'errorView'      ],
        '/contact'          => [HomeController::class, 'contact'        ],
        '/about'            => [HomeController::class, 'about'          ],
        '/login'            => [AuthController::class, 'loginView'      ],
        '/register'         => [AuthController::class, 'registerView'   ],
        '/profile'          => [UserController::class, 'profile'        ],
        '/logout'           => [UserController::class, 'logout'         ],

    ],
    'post' => [
        '/login'            => [AuthController::class, 'login'          ],
        '/register'         => [AuthController::class, 'register'       ],
        '/profile'          => [UserController::class, 'profile'        ],
        '/logout'           => [UserController::class, 'logout'         ],
    ]
];