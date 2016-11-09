<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;
use App\Project;
use Auth;

class ProjectController extends Controller
{
  public function create(){
    return view('project.project');
  }
  public function edit($id)
{
    $project = Project::find($id);
    // Load user/createOrUpdate.blade.php view
    return view('project.project', compact('project'));
}
  public function editpart(Part $part){
    if(isset($_GET['part'])) $part = Part::find($_GET['part']);

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

  public function store(Request $request)
  {
    $project = new Project;
    $project->title = $request->title;
    $project->description = "".$request->description;
    $project->owner_id = Auth::user()->id;
    $project->save();
    return showproject($project);
  }

  public function update(){

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
