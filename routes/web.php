<?php

use App\Http\Controllers\HomeController;

/**
 * untuk menggunakan middleware authentikasi dapa menggunakan kode ini.
 * 
 * use App\Middleware\AuthMiddleware;
 * 
 * $router->middleware([AuthMiddleware::class])->group(function ($router) {\
 * 
 * semua router di letakan disini, kecuali untuk router login.
 * 
 * });
 *
 */


$router->get('/login', function () {
  echo 'login';
});
$router->get('/', [HomeController::class, 'index']);
$router->post('/store', [HomeController::class, 'store']);
