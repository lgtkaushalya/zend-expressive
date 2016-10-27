<?php
namespace Custom;

use Zend\Diactoros\Response\JsonResponse;

class PostExecutionFilter
{
  public function __invoke($request, $response, $next)
  {
    return $response;
  }
}
