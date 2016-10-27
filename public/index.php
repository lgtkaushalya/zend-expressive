<?php
use Zend\Expressive\AppFactory;
use Application\Employee;
use Zend\Diactoros\Response\JsonResponse;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function ($request, $response, $next) {
    $response->getBody()->write('Hello, world!');
    return $response;
});

$app->get('/Employee[/{id}]', function ($request, $response, $next) {
    $id = $request->getAttribute('id');
    $employee = new Employee();
    return new JsonResponse($employee->getEmployee($id));
});

$app->post('/Employee', function ($request, $response, $next) {
    $employee = new Employee();
    $parameters = $request->getParsedBody();
    $result = $employee->addEmployee($parameters['firstname'], $parameters['lastname'], $parameters['phone'], $parameters['address']);
    $response->getBody()->write($result);
    return $response;
});

$app->patch('/Employee', function ($request, $response, $next) {
    $response->getBody()->write('Modified Employee Data');
    return $response;
});

$app->delete('/Employee', function ($request, $response, $next) {
    $response->getBody()->write('Deleted Employee');
    return $response;
});

$app->get('/Job', function ($request, $response, $next) {
    $response->getBody()->write('Hello, world!');
    return $response;
});

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();
$app->run();

