@extends('layouts.dashboard')
@section('page_heading','Openscad Portal')
@section('section')
  @section ('inside_panel_title', 'Welcome')
  @section ('inside_panel_body')
  <p>Welcome to the Openscad Portal. This is a private platform for makers, collaborating for creating and optimizing custom objects</p>
  <p>This site is under heavy developement, so do not expect anything to work the way it should!</p>
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'inside'))

  @if(auth::user() == null)
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <br />
      @include('widgets.login')
    </div>
  </div>
  @endif
@stop
