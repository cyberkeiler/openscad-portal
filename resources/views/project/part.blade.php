@extends('layouts.dashboard')

@if(isset($part->id))
  @section('page_heading', $part->title." - Settings" )
@else
  @section('page_heading','new Part:')
@endif

@section('section')

{{ Form::open(['url' => 'part']) }}
  {{ Form::token() }}

  @if(isset($part->id))
    {{ Form::hidden('id', $part->id) }}
  @endif
  {{ Form::hidden('project_id', $part->project_id) }}


  @section ('panel_panel_title', Form::label('title', 'Title:')." ".Form::text('title', $part->title))
  @section ('panel_panel_body')

    {{Form::label('description', 'Description:')}}<br/> {{ Form::textarea('description', $part->description) }}<br/>
    {{Form::label('code', 'Code:')}}<br/> {{ Form::textarea('code', $part->code) }}


  @endsection
  @section ('panel_panel_footer', Form::submit('Save part', ['class' => 'btn btn-success']))
  @include('widgets.panel', array('class'=>'success', 'header'=>true, 'footer'=>true, 'as'=>'panel'))
{{ Form::close() }}
@if(isset($part->id))
<div class="col-sm-6 col-sm-offset-3">
  {{ Form::open(['url' => '/part', 'method' => 'DELETE', $part->id]) }}
  @section ('paneld_panel_title', 'Caution! This will delete the whole part!')
  @section ('paneld_panel_body')
    Are you shure you want to delete this part named <b>{{ $part->title }}</b>?<br/>
    There will be no confirmation step and no way to regain your data.<br/><br/>
    {{ Form::hidden('id', $part->id) }}
    {{ Form::submit('Yes, delete forever.', ['class' => 'btn btn-danger btn-block']) }}
  @endsection
  @include('widgets.panel', array('class'=>'danger', 'header'=>true, 'as'=>'paneld'))
  {{ Form::close() }}
</div>
@endif

@endsection
