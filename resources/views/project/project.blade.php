@extends('layouts.dashboard')

@if(isset($project))
  @section('page_heading', $project->title )
@else
  @section('page_heading','Create your new Project:')
@endif

@section('section')
{!! Form::open(['url' => 'project']) !!}
  {{ Form::token() }}
  @section ('panel'.$project->id.'_panel_title', '<a href="/project/'.$project->id.'">'.$project->title.'</a>')
  @section ('panel'.$project->id.'_panel_body')
    {{ Form::text('title') }}
    {{ Form::text('description') }}
  @endsection
  @section ('panel'.$project->id.'_panel_footer', '<a href="/project/'.$project->id.'">open</a>')
  @include('widgets.panel', array('class'=>'success', 'header'=>true, 'footer'=>true, 'as'=>'panel'.$project->id))





   {{ Form::submit('Click Me!') }}
{!! Form::close() !!}
@endsection
