@extends('layouts.dashboard')

@section('page_heading', $project->title )

@section('section')
<div class="row">
	<div class="col-sm-6">
		@section ('panel1_panel_title', 'Project Description')
		@section ('panel1_panel_body')
		{{ $project->description }}
		@endsection
		@include('widgets.panel', array('class'=>'success','header'=>true, 'as'=>'panel1'))
  </div>
</div>
	@foreach($project->parts as $part)
	<div class="col-sm-4">
		@section ('part'.$part->id.'_panel_title', '<a href="/project/'.$part->id.'">'.$part->title.'</a>')
		@section ('part'.$part->id.'_panel_body')
			{{ $part->description}}
		@endsection
		@section ('part'.$part->id.'_panel_footer', '<a href="/part/'.$part->id.'/view">view</a> <a href="/project/'.$part->id.'">edit</a>')
		@include('widgets.panel', array('class'=>'default', 'header'=>true, 'footer'=>true, 'as'=>'part'.$part->id))
	</div>
	@endforeach

@endsection
