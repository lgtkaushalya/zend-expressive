<?php
namespace Application;

use Zend\EventManager\SharedEventManager;

class CustomSharedEventManager {

  private static $customSharedEventManager;
  private $sharedEventManager;

  public static function getCustomSharedEventManager() {
    if (!self::$customSharedEventManager) {
      self::$customSharedEventManager = new CustomSharedEventManager();
      self::$customSharedEventManager->sharedEventManager = new SharedEventManager();
    }
    return self::$customSharedEventManager;
  }

  public function attachEventListner($target, $event, $callback) {
    self::getCustomSharedEventManager()->sharedEventManager->attach($target, $event, $callback); 
  }

  public function getSharedEventManager() {
    return self::getCustomSharedEventManager()->sharedEventManager;
  }
} 
