<?php

namespace Application\Command;

use Interop\Container\ContainerInterface;
use Monolog\Logger;

class GreetCommandFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new GreetCommand(
            new Logger('ohrm_logger')
        );
    }
}
