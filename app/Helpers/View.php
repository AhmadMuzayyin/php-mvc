<?php

namespace App\Helpers;

class View
{

  public static function make($path, $data = [])
  {

    extract($data);

    ob_start();

    require_once __DIR__ . '/Csrf.php';
    require_once __DIR__ . '/Url.php';
    require_once __DIR__ . "/../../resources/views/{$path}.php";

    $content = ob_get_contents();

    ob_end_clean();

    return $content;
  }
}
