<?php

return [
  'driver' => env('DB_CONNECTION', 'mysql'),
  'host' => env('DB_HOST', '127.0.0.1'),
  'port' => env('DB_PORT', '3306'),
  'database' => env('DB_DATABASE', 'mydatabase'),
  'username' => env('DB_USERNAME', 'mydatabaseuser'),
  'password' => env('DB_PASSWORD', 'mypassword'),
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => '',
];
