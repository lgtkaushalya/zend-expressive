<?php
// Change to the project root, to simplify resolving paths
chdir(dirname(__DIR__));

// Setup autoloading
require 'vendor/autoload.php';

$container = include 'config/services.php';
$app       = $container->get('Zend\Expressive\Application');
$app->run();
