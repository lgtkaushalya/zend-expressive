<?php
return [
    'routes' => [
        'employee' => [
            'name' => 'employee',
            'path' => '/Employee',
            'middleware' => 'Custom\EmployeeCustomController',
            'allowed_methods' => [ 'GET' => 'GET', 'POST' => 'POST' ],
        ]
    ],
];
