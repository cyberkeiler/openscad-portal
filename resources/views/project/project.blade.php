@extends('layouts.dashboard')

@if(isset($project->id))
  @section('page_heading', $project->title." - Settings" )
@else
  @section('page_heading','Create your new Project:')
@endif

@section('section')

{{ Form::open(['url' => 'project']) }}
  {{ Form::token() }}

  @if(isset($project->id))
    {{ Form::hidden('id', $project->id) }}
  @endif


  @section ('panel_panel_title', Form::label('title', 'Title:')." ".Form::text('title', $project->title))
  @section ('panel_panel_body')

    {{Form::label('description', 'Description:')}}<br/> {{ Form::textarea('description', $project->description) }}


  @endsection
  @section ('panel_panel_footer', Form::submit('Save Project', ['class' => 'btn btn-success']))
  @include('widgets.panel', array('class'=>'success', 'header'=>true, 'footer'=>true, 'as'=>'panel'))
{{ Form::close() }}
@if(isset($project->id))
<div class="col-sm-6 col-sm-offset-3">
  {{ Form::open(['url' => '/project', 'method' => 'DELETE', $project->id]) }}
  @section ('paneld_panel_title', 'Caution! This will delete the whole project!')
  @section ('paneld_panel_body')
    Are you shure you want to delete this Project named <b>{{ $project->title }}</b>?<br/>
    There will be no confirmation step and no way to regain your data.<br/><br/>
    {{ Form::hidden('id', $project->id) }}
    {{ Form::submit('Yes, delete forever.', ['class' => 'btn btn-danger btn-block']) }}
  @endsection
  @include('widgets.panel', array('class'=>'danger', 'header'=>true, 'as'=>'paneld'))
  {{ Form::close() }}
</div>
@endif

@endsection
