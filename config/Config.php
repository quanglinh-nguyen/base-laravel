<?php

return [
    'route' => [
        [
            'icon' => 'nav-icon fa-solid fa-gauge-high',
            'title' => 'Home',
            'route_name' => 'home.index',
            // 'icon_left' => 'right fas fa-angle-left',
//            'child' => [
//                [
//                    'icon' => 'far fa-circle nav-icon',
//                    'title' => 'Home 2',
//                    'route_name' => 'home2',
//                ],
//            ]
        ],
        [
            'icon' => 'nav-icon fa-solid fa-user',
            'title' => 'User Management',
            'route_name' => 'user.index',
        ],
        [
            'icon' => 'nav-icon fa-solid fa-users-between-lines',
            'title' => 'Customer',
            'icon_left' => 'right fas fa-angle-left',
            'child' => [
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Customer management',
                    'route_name' => 'customer.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Customer Outdate',
                    'route_name' => 'customer.outdate',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Upload Customer',
                    'route_name' => 'customer-upload.index',
                ],
            ]
        ],
        [
            'icon' => 'nav-icon fa-solid fa-building-columns',
            'title' => 'Acronyms Banking',
            'route_name' => 'acronyms-banking.index',
        ],
    ]
];
