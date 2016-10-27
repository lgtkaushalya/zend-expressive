<?php
return [
    'routes' => [
        'employee' => [
            'name' => 'employee',
            'path' => '/Employee',
            'middleware' => 
              [
                'Custom\SecurityFilter',
                'Custom\EmployeeCustomController',
                'Custom\PostExecutionFilter'
              ],
            'allowed_methods' => [ 'GET' => 'GET', 'POST' => 'POST' ],
        ]
    ],
];
