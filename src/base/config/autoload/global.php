<?php
return [
    'routes' => [
        'homepage' => [
            'homepage',
            'path' => '/',
            'middleware' => 'Application\HelloWorld',
            'allowed_methods' => [ 'GET' => 'GET' ],
        ],
        'employee' => [
            'employee',
            'path' => '/Employee[/{id}]',
            'middleware' => 'Application\EmployeeController',
            'allowed_methods' => [ 'GET' => 'GET', 'POST' => 'POST' ],
        ]
    ],
];
