<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenscadController extends Controller
{
  public function version(){
    return shell_exec("openscad -version");
  }
}
