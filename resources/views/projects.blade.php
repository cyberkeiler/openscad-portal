@extends('layouts.dashboard')
@section('page_heading','My Projects')


@section('section')
  @foreach($projects as $project)
  <div class="col-md-4">
    @section ('panel'.$project->id.'_panel_title', '<a href="/project/'.$project->id.'">'.$project->title.'</a>')
    @section ('panel'.$project->id.'_panel_body')
      {{ $project->description}}
    @endsection
    @section ('panel'.$project->id.'_panel_footer', '<a class="btn btn-primary" href="/project/'.$project->id.'" role="button"><i class="fa fa-folder-open"></i> Open</a>')
    @include('widgets.panel', array('class'=>'success', 'header'=>true, 'footer'=>true, 'as'=>'panel'.$project->id))
  </div>
  @endforeach
  <a href="/project/create" class="btn btn-primary btn-lg">Create new Project</a>
@stop
