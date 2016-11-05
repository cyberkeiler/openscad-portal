@extends('layouts.openJScad-plane')

@section('page_heading', $part->project->title." - ".$part->title)

@section('body')
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url ('') }}">Openscad Portal | by terramultimedia.de</a>
      </div>
      <!-- /.navbar-header -->
      @include('layouts.topbar')
      <!-- /.navbar-top-links -->
      @include('layouts.sidebar')
      <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">@yield('page_heading')</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <a class="btn btn-primary" href="/project/{{ $part->project->id }}" role="button"> &lt; Back to project</a>
      <!-- setup display of the errors as required by OpenJSCAD.js -->
      <div class="jscad-container">

          <div id="header">
            <div id="errordiv">Error</div>
          </div>
          <!-- setup display of the viewer, i.e. canvas -->
          <div oncontextmenu="return false;" id="viewerContext"></div>

          <!-- setup display of the design parameters, as required by OpenJSCAD.js -->
          <!-- set display: block to display this -->
          <div id="parametersdiv" style="display: block;"></div>

          <!-- setup display of the status, as required by OpenJSCAD.js -->
          <!-- set display: block to display this -->
          <div id="tail" style="display: block;">
            <div id="statusdiv"></div>
          </div>

      </div>
    </div>
  </div>

  <!-- define the design and the parameters -->
  <script type="text/javascript">
  var gProcessor = null;        // required by OpenJScad.org

  var gComponents = [ { file: 'part/{{ $part->id }}/code.jscad' } ];

  function loadProcessor() {
    gProcessor = new OpenJsCad.Processor(document.getElementById("viewerContext"));

    loadJSCAD(0);
  }

  function loadJSCAD(choice) {
    var filepath = gComponents[choice].file;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", filepath, true);
    gProcessor.setStatus("Loading "+filepath+" <img id=busy src='imgs/busy.gif'>");

    xhr.onload = function() {
      var source = this.responseText;
      //console.log(source);

      if(filepath.match(/\.jscad$/i)||filepath.match(/\.js$/i)) {
        gProcessor.setStatus("Processing "+filepath+" <img id=busy src='imgs/busy.gif'>");
        gProcessor.setJsCad(source,filepath);
      }
    }
    xhr.send();
  }
  </script>
</div>
</div>
@endsection
