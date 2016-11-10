@extends('layouts.dashboard')

@section('page_heading', $project->title )

@section('section')
<div class="row">
	<div class="col-sm-10">
		@section ('panel1_panel_title', 'Project Description')
		@section ('panel1_panel_body')
		{{ $project->description }}
		@endsection
		@include('widgets.panel', array('class'=>'success','header'=>true, 'as'=>'panel1'))
  </div>
	<div class="col-sm-2">
		<a class="btn btn-primary" href="/project/{{$project->id}}/edit" role="button"><i class="fa fa-gear"></i> Project Settings</a>
	</div>
</div>
<div class="row">
	@foreach($project->parts as $part)
	<div class="col-sm-4">
		@section ('part'.$part->id.'_panel_title', '<a href="/project/'.$part->id.'">'.$part->title.'</a>')
		@section ('part'.$part->id.'_panel_body')
			{{ $part->description}}
		@endsection
		@section ('part'.$part->id.'_panel_footer', '  <a class="btn btn-primary" href="/view?part='.$part->id.'" role="button"><i class="fa fa-eye"></i> '.trans('project.View').'</a> <a class="btn btn-primary" href="/editor?part='.$part->id.'" role="button"><i class="fa fa-pencil"></i> '.trans('project.Edit').'</a> <a class="btn btn-danger" href="/project/'.$part->id.'" role="button"><i class="fa fa-trash"></i> '.trans('project.Delete').'</a>')
		@include('widgets.panel', array('class'=>'default', 'header'=>true, 'footer'=>true, 'as'=>'part'.$part->id))
	</div>
	@endforeach
	<div class="col-sm-4">
		<a class="btn btn-success btn-lg" href="/project/'.$part->id./addpart'" role="button"><i class="fa fa-plus"></i> {{ trans('project.CreatePart') }} &nbsp; </a>
	</div>
</div>
@endsection
