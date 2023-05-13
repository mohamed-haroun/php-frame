<?php

declare(strict_types=1);

use controllers\AuthController;
use controllers\CompaniesController;
use controllers\DataLoader;
use controllers\HomeController;
use controllers\ShipmentController;
use controllers\ShippingLineController;
use controllers\UserController;

return [
    'get' => [
        '/'                                 => [AuthController::class,      'loginView'      ],
        '/error'                            => [HomeController::class,      'errorView'      ],
        '/dashboard'                        => [HomeController::class,      'dashboard'      ],
        '/user/login'                       => [AuthController::class,      'loginView'      ],
        '/user/register'                    => [AuthController::class,      'registerView'   ],
        '/user/profile'                     => [UserController::class,      'profile'        ],
        '/user/settings'                    => [UserController::class,      'settings'       ],
        '/user/logout'                      => [UserController::class,      'logout'         ],
        '/shipments/overview'               => [ShipmentController::class,  'overview'       ],
        '/shipments/new'                    => [ShipmentController::class,  'newShipment'    ],
        '/shipments/tracking'               => [ShipmentController::class,  'trackShipment'  ],
        '/shipments/items'                  => [ShipmentController::class,  'items'          ],
        '/shipments/details'                => [ShipmentController::class,  'details'        ],
        '/shipments/deletePostponement'     => [ShipmentController::class,  'deletePostponement'        ],
        '/shipments/deleteNote'             => [ShipmentController::class,  'deleteNote'        ],
        '/saveShipment'                     => [ShipmentController::class,  'saveShipment'   ],
        '/companies'                        => [CompaniesController::class,  'shippingCompsView'],
        '/companies/deleteContact'          => [CompaniesController::class,  'deleteContact'],
        '/data'                             => [DataLoader::class,          'data'           ],

    ],
    'post' => [
        '/user/login'                       => [AuthController::class,      'login'          ],
        '/user/register'                    => [AuthController::class,      'register'       ],
        '/user/profile'                     => [UserController::class,      'profile'        ],
        '/user/logout'                      => [UserController::class,      'logout'         ],
        '/shipments/create'                 => [ShipmentController::class,  'addShipment'    ],
        '/shipments/add_items'              => [ShipmentController::class,  'addItems'       ],
        '/shipments/add_note'               => [ShipmentController::class,    'addNote'      ],
        '/shipments/addCertificate'         => [ShipmentController::class,    'addCertificate'      ],
        '/shipments/upload_BOF'             => [ShipmentController::class,    'uploadPolicy' ],
        '/shipments/upload_files'           => [ShipmentController::class,    'uploadFiles' ],
        '/shipments/updateReferences'       => [ShipmentController::class,    'updateReferences' ],
        '/shipments/updateStatus'           => [ShipmentController::class,    'updateStatus' ],
        '/shipments/updateShippingInfo'     => [ShipmentController::class,    'updateShippingInfo' ],
        '/shipments/updateAdditionalInfo'   => [ShipmentController::class,    'updateAdditionalInfo' ],
        '/shipments/updatePostponements'    => [ShipmentController::class,    'updatePostponements' ],
        '/shipments/setDocumented'          => [ShipmentController::class,    'setDocumented' ],
        '/companies/create_company'         => [CompaniesController::class,  'createNewCompany'],
        '/companies/add_contact'            => [CompaniesController::class,  'addContact'],
        '/companies/new_shipping_line'      => [ShippingLineController::class,  'addShippingLine'],
        '/companies/updateShippingLine'      => [ShippingLineController::class,  'updateShippingLine'],
        '/companies/updateCompany'          => [CompaniesController::class,  'updateCompany'],
    ]
];