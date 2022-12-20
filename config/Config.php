<?php

return [
    'route' => [
        [
            'icon' => '<i class="nav-icon fas fa-tachometer-alt"></i>',
            'title' => 'Home',
            'route_name' => 'home.index',
            'icon_left' => '<i class="right fas fa-angle-left"></i>',
//            'child' => [
//                [
//                    'icon' => '<i class="far fa-circle nav-icon"></i>',
//                    'title' => 'Home 2',
//                    'route_name' => 'home2',
//                ],
//            ]
        ],
        [
            'icon' => '<i class="fas fa-circle nav-icon"></i>',
            'title' => 'User Management',
            'route_name' => 'user.index',
        ],
        [
            'icon' => '<i class="fas fa-circle nav-icon"></i>',
            'title' => 'Customer',
            'route_name' => 'customer.index',
            'icon_left' => '<i class="right fas fa-angle-left"></i>',
            'child' => [
                [
                    'icon' => '<i class="far fa-circle nav-icon"></i>',
                    'title' => 'Customer management',
                    'route_name' => 'customer.index',
                ],
                [
                    'icon' => '<i class="far fa-circle nav-icon"></i>',
                    'title' => 'Customer Outdate',
                    'route_name' => 'customer.outdate',
                ]
            ]
        ],
        [
            'icon' => '<i class="fas fa-circle nav-icon"></i>',
            'title' => 'Acronyms Banking',
            'route_name' => 'acronyms-banking.index',
        ],
    ]
];
