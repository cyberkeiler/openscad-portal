@extends ('layouts.plane')
@section ('body')

<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url ('') }}">Openscad Portal | Netz39 kabelsalat</a>
    </div>
    <!-- /.navbar-header -->
    @include('layouts.topbar')
    @include('layouts.sidebar')
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <br /><br /><br />
        @include('widgets.login')
      </div>
    </div>
  </div>
</div>
@stop
