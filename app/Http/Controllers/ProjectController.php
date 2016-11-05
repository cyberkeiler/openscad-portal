<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;
use App\Project;

class ProjectController extends Controller
{
  public function editpart(Part $part){
    $part = Part::find($_GET['part']);
    if($part == null) return "No part found!";
    return view('openJSCAD.index_html', compact('part'));
  }

  public function showlist(){
    $projects = Project::get();
    return view('projects', compact('projects'));
  }

  public function showproject(Project $project){
    return view('project.index', compact('project'));
  }

  public function viewpart(Part $part){
    $part = Part::find($_GET['part']);
    if($part == null) return "No part found!";
    return view('openJSCAD.min', compact('part'));
  }

  public function viewcode(Part $part){
    return $part->code;
  }
}
