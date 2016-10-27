<?php
namespace Custom;

use Custom;
use Zend\Diactoros\Response\JsonResponse;

class EmployeeCustomController {
    public function __invoke($request, $response, $next) {
      
      if ($request->getMethod() == 'GET') {
          
          $id = $request->getAttribute('id');
          $employee = new CustomEmployee();
          $previouseBody = $response->getBody()->__toString();
          return $next($request, new JsonResponse(array_merge(array('message' => 'Results from custom controller') , $employee->getEmployee($id), array($previouseBody))));
      } elseif($request->getMethod() == 'POST') {
          
          $employee = new CustomEmployee();
          $parameters = $request->getParsedBody();
          $result = $employee->addEmployee($parameters['firstname'], $parameters['lastname'], $parameters['phone'], $parameters['address'], $parameters['date_of_birth']);
          $response->getBody()->write($result);
          return $next($request, $response);
      }
    }
}
