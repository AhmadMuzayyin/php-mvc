<?php

namespace App\Http\Controllers;

use App\Helpers\View;
use App\Http\Requests\Request;
use App\Models\User;

class HomeController
{
  public static function index()
  {
    $data = User::all();
    echo View::make('welcome', ['data' => $data]);
  }
  public static function store()
  {
    $request = new Request();
    var_dump($request->input('name'));
    die();
  }
}
