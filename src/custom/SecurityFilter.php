<?php
namespace Custom;

class SecurityFilter
{
  public function __invoke($request, $response, $next)
  {
    $response->write('Secutiry Is checked');
    return $next($request, $response);
  }
}
