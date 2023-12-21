<?php

namespace App\Helpers;

class View
{

  public static function make($path, $data = [])
  {

    extract($data);

    ob_start();

    include "Helper.php";
    include __DIR__ . "/../../resources/views/{$path}.php";

    $content = ob_get_contents();

    ob_end_clean();

    return $content;
  }
}