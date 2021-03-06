<?php
namespace Application;

use Application\Employee;
use Zend\Diactoros\Response\JsonResponse;

class EmployeeController {
    public function __invoke($request, $response, $next) {
      
      if ($request->getMethod() == 'GET') {
          
          $id = $request->getAttribute('id');
          $employee = new Employee();
          return new JsonResponse(array_merge(array('message' => 'Results from base controller'), $employee->getEmployee($id)));
      } elseif($request->getMethod() == 'POST') {
          
          $employee = new Employee();
          $parameters = $request->getParsedBody();
          $result = $employee->addEmployee($parameters['firstname'], $parameters['lastname'], $parameters['phone'], $parameters['address']);
          $response->getBody()->write($result);
          return $response;
      }
    }
}
