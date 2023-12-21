<?php

use App\Http\Controllers\HomeController;
use App\Routes\Router;

Router::get('/', [HomeController::class, 'index']);
Router::post('/store', [HomeController::class, 'store']);
