<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$container = include 'config/services.php';
$application = new Application('Application console');

//var_dump($container->get(Application\Command\GreetCommand::class));die;
$commands = $container->get('config')['console']['commands'];

foreach ($commands as $command) {
  $application->add($container->get($command));
}

$application->run();
