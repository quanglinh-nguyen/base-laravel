<?php

return [
    'route' => [
        [
            'icon' => 'nav-icon fa-solid fa-gauge-high',
            'title' => 'Home',
            'route_name' => 'home',
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
                    'title' => 'Upload Customer',
                    'route_name' => 'customer-upload.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'History Update Customer',
                    'route_name' => 'history-update-customer.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Customer Outdate',
                    'route_name' => 'customer.outdate',
                ],
            ]
        ],
        [
            'icon' => 'nav-icon fa-solid fa-building-columns',
            'title' => 'Acronyms',
            'route_name' => 'acronyms-fields.index',
        ],
    ],
    'acronym_column_list' => [
        1 => 'Organization (Viet)',
        2 => 'Organization (Eng)',
        3 => 'Address',
        4 => 'Banking',
    ]
];
