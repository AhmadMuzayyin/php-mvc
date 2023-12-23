<?php

namespace App\Routes;

class Router
{

  protected $routes = [];
  protected $middlewares = [];

  public function get($uri, $callback)
  {
    $this->routes['GET'][$uri] = $callback;
  }

  public function post($uri, $callback)
  {
    $this->routes['POST'][$uri] = $callback;
  }

  public function put($uri, $callback)
  {
    $this->routes['PUT'][$uri] = $callback;
  }

  public function delete($uri, $callback)
  {
    $this->routes['DELETE'][$uri] = $callback;
  }

  public function middleware(array $middlewares)
  {
    $this->middlewares = $middlewares;
    return $this;
  }
  public function group(\Closure $callback)
  {
    $callback($this);
  }
  protected function applyMiddlewares()
  {
    foreach ($this->middlewares as $middleware) {
      $middlewareInstance = new $middleware;
      $middlewareInstance->handle();
    }
  }
  public function dispatch($method, $uri)
  {
    $method = strtoupper($method);
    if (array_key_exists($method, $this->routes) && array_key_exists($uri, $this->routes[$method])) {
      $this->applyMiddlewares();
      $callback = $this->routes[$method][$uri];
      if (is_array($callback)) {
        $controller = $callback[0];
        $method = $callback[1];
        $controllerInstance = new $controller;
        call_user_func_array([$controllerInstance, $method], []);
      }
      call_user_func($callback);
    } else {
      echo "<h1>route not found</h1>";
    }
  }
}
