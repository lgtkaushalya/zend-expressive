<?php
return [
    'services' => [
        'config' => include __DIR__ . '/../../../../config/config.php',
    ],
    'invokables' => [
        'Application\HelloWorld' => 'Application\HelloWorld',
        'Application\Ping' => 'Application\Ping',
    ],
    'factories' => [
        'Zend\Expressive\Application' => 'Zend\Expressive\Container\ApplicationFactory',
        'Custom\CustomEvent' => 'Custom\CustomEvent'
    ],
];
