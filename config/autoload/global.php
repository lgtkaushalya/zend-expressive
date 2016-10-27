<?php
return [
    'routes' => [
        [
            'path' => '/',
            'middleware' => 'Application\HelloWorld',
            'allowed_methods' => [ 'GET' ],
        ],
        [
            'path' => '/Employee[/{id}]',
            'middleware' => 'Application\EmployeeController',
            'allowed_methods' => [ 'GET', 'POST' ],
        ]
    ],
];
