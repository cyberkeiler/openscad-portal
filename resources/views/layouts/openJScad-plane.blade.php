<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>{{ $part->project->title }} - {{ $part->title }}</title>
  <script src="jquery/jquery-1.9.1.js?0.5.1"></script>
  <script src="jquery/jquery.hammer.js?0.5.1"></script>
  <script src="lightgl.js"></script>
  <script src="csg.js?0.5.1"></script>
  <script src="formats.js?0.5.1"></script>
  <script src="openjscad.js?0.5.1"></script>
  <script src="openscad.js?0.5.1"></script>
  <script src="js/jscad-worker.js?0.5.1" charset="utf-8"></script>
  <script src="js/jscad-function.js?0.5.1" charset="utf-8"></script>
  <link rel="stylesheet" href="min.css?0.5.1" type="text/css">
  <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body onload="loadProcessor()">
	@yield('prebody')
	@yield('body')
	<!--script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script-->
</body>
</html>
