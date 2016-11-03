<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
  public function showlist(){
    $projects = Project::get();
    return view('projects', compact('projects'));
  }
}
