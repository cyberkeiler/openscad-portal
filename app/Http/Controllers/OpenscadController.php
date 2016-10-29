<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenscadController extends Controller
{
  public function version(){
    return shell_exec("openscad -version");
  }

  public function rendertest(){
    return shell_exec("openscad ../storage/scad/mutter.scad -o view.png --render --imgsize=400,200");
  }
}
