<?php
use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;
use Zend\Config\Factory as ConfigFactory;

$config = ConfigFactory::fromFiles(
    glob('src/*/config/autoload/console.{global,local}.php', GLOB_BRACE)
);

return new ServiceManager($config);
