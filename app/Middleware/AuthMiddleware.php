<?php

namespace App\Middleware;

class AuthMiddleware
{

  public function handle()
  {
    if (false) {
      header('Location: /login');
      exit();
    }
    return true;
  }

  public function terminate()
  {
    header('Location: /login');
  }
}
