<?php

namespace App\Http\Requests;

class Request
{

  public function input($key)
  {
    if ($_POST['_token']) {
      return $_POST[$key];
    } else {
      echo '404';
    }
  }
}
