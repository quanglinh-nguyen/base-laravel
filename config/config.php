<?php

return [
    'route' => [
        'home' => [
            'icon' => 'nav-icon fa-solid fa-gauge-high',
            'title' => 'Home',
            'route_name' => 'home'
        ],
        'users' => [
            'icon' => 'nav-icon fa-solid fa-user',
            'title' => 'User Management',
            'route_name' => 'user.index',
        ],
        'customers' => [
            'icon' => 'nav-icon fa-solid fa-users-between-lines',
            'title' => 'Customer',
            'icon_left' => 'right fas fa-angle-left',
            'child' => [
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Customer management',
                    'route_name' => 'customers.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Upload Customer',
                    'route_name' => 'customers-upload.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'History Update Customer',
                    'route_name' => 'history-update-customer.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Customer Error',
                    'route_name' => 'customers-error.index',
                ],
                [
                    'icon' => 'nav-icon far fa-circle nav-icon',
                    'title' => 'Customer Outdate',
                    'route_name' => 'customers.outdate',
                ],
            ]
        ],
        'acronyms' => [
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
    ],

    'customer_config' => [
        'request_only' => [
            'industry',
            'sub_industry',
            'geo_code',
            'hq_or_br',
            'scale',
            'organization_eng',
            'organization_viet',
            'website',
            'prefix',
            'name',
            'title_department_eng',
            'title_department_viet',
            'professional',
            'title_level',
            'directphone_extension',
            'mobile',
            'linkedIn',
            'company_email',
            'business_email',
            'personal_email',
            'address',
            'outdate_business_email',
            'outdate_personal_email',
            'attendance',
            'last_updated_date',
            'note',
        ],
        'field_viewAny' => [
            'id',
            'industry',
            'geo_code',
            'organization_viet',
            'name',
            'title_department_viet',
            'professional',
            'title_level',
            'business_email',
            'attendance',
            'attendance',
            'last_updated_date'
        ]
    ]
];
