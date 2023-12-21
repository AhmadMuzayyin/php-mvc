<?php

require_once __DIR__ . '/../vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__ . '/..')->load();
// var_dump(Dotenv\Dotenv::createImmutable(__DIR__ . '/..')->load());
// die();

use Illuminate\Database\Capsule\Manager as Capsule;

// Inisialisasi Capsule
$capsule = new Capsule;

// Menambahkan koneksi dari config
$capsule->addConnection(require_once __DIR__ . '/../config/database.php');

// Make this Capsule instance available globally via static methods
$capsule->setAsGlobal();

// Setup the Eloquent ORM
$capsule->bootEloquent();

use App\Routes\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$uri = $request->server->get('REQUEST_URI');
$method = $request->server->get('REQUEST_METHOD');

$router = new Router;

require_once __DIR__ . '/../routes/web.php';

$router->dispatch($method, $uri);
