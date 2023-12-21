<?php

namespace App\Routes;

class Router
{

  protected static $routes = [];

  public static function get($uri, $callback)
  {
    self::$routes['GET'][$uri] = $callback;
  }

  public static function post($uri, $callback)
  {
    self::$routes['POST'][$uri] = $callback;
  }

  public static function put($uri, $callback)
  {
    self::$routes['PUT'][$uri] = $callback;
  }

  public static function delete($uri, $callback)
  {
    self::$routes['DELETE'][$uri] = $callback;
  }

  public function dispatch($method, $uri)
  {
    $method = strtoupper($method);

    if (array_key_exists($method, self::$routes) && array_key_exists($uri, self::$routes[$method])) {
      $callback = self::$routes[$method][$uri];
      call_user_func($callback);
    } else {
      echo "404 Not Found";
    }
  }
}
