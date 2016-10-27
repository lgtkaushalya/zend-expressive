<?php
use Zend\ServiceManager\Config;
use Zend\ServiceManager\ServiceManager;

return new ServiceManager(include 'config/dependencies.php');
