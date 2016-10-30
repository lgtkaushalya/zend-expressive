<?php
namespace Custom;

use Zend\Config\Factory as ConfigFactory;
use Application\CustomSharedEventManager as CustomSharedEventManager;

class SecurityFilter
{
  public function __invoke($request, $response, $next) {
      $customSharedEventManager = CustomSharedEventManager::getCustomSharedEventManager();
      $customSharedEventManager->attachEventListner('Employee', 'addEmployee', function ($e) {
        $eventName  = $e->getName();
        $target = get_class($e->getTarget());
        $params = json_encode($e->getParams());

        $file = fopen("log/custom.log","w");
        fwrite($file,"Employee added with parameters :-". $params);
        fclose($file);
      });

    $response->write('Secutiry Is checked');
    return $next($request, $response);
  }
}
