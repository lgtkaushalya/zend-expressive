<?php
use Zend\Config\Factory as ConfigFactory;

return ConfigFactory::fromFiles(
    glob('src/*/config/autoload/{global,local}.php', GLOB_BRACE)
);
