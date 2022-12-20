<?php

return [
    'route' => [
        [
            'icon' => '<i class="nav-icon fas fa-tachometer-alt"></i>',
            'title' => 'Home',
            'route_name' => 'home.index',
            'icon_left' => '<i class="right fas fa-angle-left"></i>',
            'child' => [
                [
                    'icon' => '<i class="far fa-circle nav-icon"></i>',
                    'title' => 'Home 2',
                    'route_name' => 'home2',
                ],
            ]
        ],
       
        [
            'icon' => '<i class="fas fa-circle nav-icon"></i>',
            'title' => 'User',
            'route_name' => 'user.index',
        ],
        [
            'icon' => '<i class="fas fa-circle nav-icon"></i>',
            'title' => 'Partner',
            'route_name' => 'partner',
        ],
        [
            'icon' => '<i class="fas fa-circle nav-icon"></i>',
            'title' => 'Bank',
            'route_name' => 'bank',
        ],
    ]
];