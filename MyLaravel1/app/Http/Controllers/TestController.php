<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  Route::get('home', 'TestController@home');
  // Route::get('home2', 'TestController@home2');
}
