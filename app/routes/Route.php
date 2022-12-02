<?php

namespace routes;

class Route
{
  public function get(string $route, callable $action)
  {
    return self::route('GET', $route, $action);
  }

  public function post(string $route, callable $action)
  {
    return self::route('POST', $route, $action);
  }

  public function put()
  {
  }

  public function delete()
  {
  }

  private static function route(string $method, string $route, callable $action)
  {
    $route = trim($route, '/');
    $url = trim($_GET['url'] ?? '/', '/');

    if ($route == $url && $_SERVER['REQUEST_METHOD'] == $method) {
      $action();
      return true;
    }
  }
}