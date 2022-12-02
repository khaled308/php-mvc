<?php

use controllers\HomeController;
use routes\Route;

class App
{
  static function start()
  {
    $route = new Route;
    $routes = [
      $route->get('/', HomeController::index()),
    ];

    self::notFound($routes);
  }

  private static function notFound(array $routes)
  {
    $match = false;

    foreach ($routes as $route) {
      if ($route)
        $match = true;
    }

    if (!$match)
      view('404');
  }
}