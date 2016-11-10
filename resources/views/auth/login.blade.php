@extends('layouts.dashboard')
@section('page_heading','Login required')
@section('section')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <br /><br /><br />
      @include('widgets.login')
    </div>
  </div>
@stop
