<?php

namespace App\Http\Controllers;

use Auth;
use App\Part;
use App\Project;
use Illuminate\Http\Request;

class PartController extends Controller
{
  public function delete(Request $request)
  {
    $part = Part::find($request->id);
    $part->delete();
    return ProjectController::showproject($part->project);
  }
  public function edit($id)
  {
    $part = Part::find($id);
    // Load user/createOrUpdate.blade.php view
    return view('project.part', compact('part'));
  }
  public function store(Request $request)
  {
    if(isset($request->id))
    {
      $part = Part::find($request->id);
      if($part->project->owner_id != Auth::user()->id) return "This is not your part!";
    }else
    {
      $part = new Part;
      $part->project_id = $request->project_id;
    }

    $part->title = $request->title;
    $part->description = $request->description;
    $part->code = $request->code;

    $part->save();
    return ProjectController::showproject($part->project);
  }
}
