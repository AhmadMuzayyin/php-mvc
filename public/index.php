<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Routes\Router;

Dotenv\Dotenv::createImmutable(__DIR__ . '/..')->load();

// Inisialisasi Capsule
$capsule = new Capsule;
$capsule->addConnection(require_once __DIR__ . '/../config/database.php');
$capsule->setAsGlobal();
$capsule->bootEloquent();

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$uri = $request->getPathInfo();
$method = $request->getMethod();

$router = new Router;

require_once __DIR__ . '/../routes/web.php';

$router->dispatch($method, $uri);
