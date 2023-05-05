<?php

declare(strict_types=1);

use controllers\AuthController;
use controllers\DataLoader;
use controllers\HomeController;
use controllers\ShipmentController;
use controllers\UserController;

return [
    'get' => [
        '/'                     => [AuthController::class,      'loginView'      ],
        '/error'                => [HomeController::class,      'errorView'      ],
        '/dashboard'            => [HomeController::class,      'dashboard'      ],
        '/login'                => [AuthController::class,      'loginView'      ],
        '/register'             => [AuthController::class,      'registerView'   ],
        '/profile'              => [UserController::class,      'profile'        ],
        '/logout'               => [UserController::class,      'logout'         ],
        '/shipments/overview'   => [ShipmentController::class,  'overview'       ],
        '/shipments/new'        => [ShipmentController::class,  'newShipment'    ],
        '/shipments/tracking'   => [ShipmentController::class,  'trackShipment'  ],
        '/shipments/items'      => [ShipmentController::class,  'items'          ],
        '/shipments/details'    => [ShipmentController::class,  'details'        ],
        '/saveShipment'         => [ShipmentController::class,  'saveShipment'   ],
        '/data'                 => [DataLoader::class,          'data'           ],

    ],
    'post' => [
        '/login'                    => [AuthController::class,      'login'          ],
        '/register'                 => [AuthController::class,      'register'       ],
        '/profile'                  => [UserController::class,      'profile'        ],
        '/logout'                   => [UserController::class,      'logout'         ],
        '/new_shipment'             => [ShipmentController::class,  'addShipment'    ],
        '/shipments/add_items'      => [ShipmentController::class,  'addItems'       ],
    ]
];