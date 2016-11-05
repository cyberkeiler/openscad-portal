<?php $openjscad_BASEDIR="/"; ?><!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta http-equiv=Pragma content=no-cache>
    <meta http-equiv=Expires content=-1>
    <meta http-equiv=CACHE-CONTROL content=NO-CACHE>

    <title>OpenJSCAD.org</title>
    <link rel="shortcut icon" href="{{ $openjscad_BASEDIR }}imgs/favicon.png" type="image/x-png">
    <link rel="stylesheet" href="{{ $openjscad_BASEDIR }}jquery/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="{{ $openjscad_BASEDIR }}style.css?0.5.1" type="text/css">
    <link rel="stylesheet" href="{{ $openjscad_BASEDIR }}openjscad.css?0.5.1" type="text/css">
  </head>
  <body onload="fetch_Example('part/1/code'); return false;">
    <script src="{{ $openjscad_BASEDIR }}jquery/jquery-1.9.1.js"></script>
    <script src="{{ $openjscad_BASEDIR }}jquery/jquery-ui.js"></script>
    <script src="{{ $openjscad_BASEDIR }}jquery/jquery.hammer.js"></script>
    <script src="{{ $openjscad_BASEDIR }}lightgl.js"></script>
    <script src="{{ $openjscad_BASEDIR }}csg.js?0.5.1"></script>
    <script src="{{ $openjscad_BASEDIR }}formats.js?0.5.1"></script>
    <script src="{{ $openjscad_BASEDIR }}openjscad.js?0.5.1"></script>
    <script src="{{ $openjscad_BASEDIR }}js/jscad-worker.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}js/jscad-function.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}openscad.js?0.5.1"></script>
    <script src="{{ $openjscad_BASEDIR }}underscore.js"></script>
    <script src="{{ $openjscad_BASEDIR }}openscad-openjscad-translator.js"></script>
    <script src="{{ $openjscad_BASEDIR }}ace/ace.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}js/ui-drag-drop.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}js/ui-editor.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}js/ui-cookies.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}js/ui-worker.js?0.5.1" charset="utf-8"></script>
    <script src="{{ $openjscad_BASEDIR }}js/index.js?0.5.1" charset="utf-8"></script>

<!-- top left header (logo and error message) -->
    <div id="header">
      <img src="{{ $openjscad_BASEDIR }}imgs/title.png">
      <div id="errordiv"></div>
    </div>

<!-- sliding tab (help, links, examples, options, etc) -->
    <div id="menu">
      <img id="menuHandle" src="{{ $openjscad_BASEDIR }}imgs/menuHandleVL.png">
      <nav>
        <div id="menuVersion">Version <script>document.write(OpenJsCad.version);</script></div>
        <p/>
        <table class="info">
          <tr><td class="infoView" colspan=2>Editor</td></tr>
          <tr><td align="right" class="infoOperation">Render Code</td><td class="infoKey">F5 or SHIFT + Return</td></tr>
          <tr><td align="right" class="infoOperation">Save To Cache</td><td class="infoKey">CTRL + S</td></tr>
          <tr><td align="right" class="infoOperation">Load From Cache</td><td class="infoKey">CTRL + L</td></tr>
          <tr><td align="right" class="infoOperation">Download Code</td><td class="infoKey">CTRL + SHIFT + S</td></tr>
          <tr><td align="right" class="infoOperation">Reset View</td><td class="infoKey">CRTL + Return</td></tr>
          <tr><td class="infoView" colspan=2>3D View</td></tr>
          <tr><td align="right" class="infoOperation">Rotate XZ</td><td class="infoKey">Left Mouse</td></tr>
          <tr><td align="right" class="infoOperation">Pan</td><td class="infoKey">Middle Mouse or SHIFT + Left Mouse</td></tr>
          <tr><td align="right" class="infoOperation">Rotate XY</td><td class="infoKey">Right Mouse or ALT + Left Mouse</td></tr>
          <tr><td align="right" class="infoOperation">Zoom In/Out</td><td class="infoKey">Wheel Mouse or CTRL + Left Mouse</td></tr>
        </table>
        <p>
          <a class="navlink" href="https://en.wikibooks.org/wiki/OpenJSCAD_User_Guide" target="_blank">User Guide / Documentation <img src="{{ $openjscad_BASEDIR }}imgs/externalLink.png" style="externalLink"></a>
          <br/><span class="menuSubInfo">How to program with OpenJSCAD: online, offline & CLI</span>
        </p>
        <p>
          <a class="navlink" href="https://plus.google.com/115007999023701819645" rel="publisher" target="_blank">Recent Updates <img src="{{ $openjscad_BASEDIR }}imgs/externalLink.png" style="externalLink"></a>
          <br/><span class="menuSubInfo">Announcements of recent developments</span>
        </p>
        <p>
          <a class="navlink" href="https://plus.google.com/communities/114958480887231067224" target="_blank">Google+ Community <img src="{{ $openjscad_BASEDIR }}imgs/externalLink.png" style="externalLink"></a>
          <br/><span class="menuSubInfo">Discuss with other users &amp; developers</span>
        </p>
        <div id="examplesTitle" class="navlink"><a href='#' onclick='return false'>Examples</a></div>
        <div id="examples"></div>
        <span class="menuSubInfo">Dozens of examples to learn from</span>
        <p/>
<!--
        <div id="optionsTitle" class="navlink"><a href='#' onclick='return false'>Options</a></div>
        <div id="options"></div>
        <span class="menuSubInfo">Your personal settings</span></p>
 -->
        <p/>
        <b>Supported Formats</b>
        <table class="info">
          <tr><td align="right"><b>jscad</b></td><td><a target="_blank" href="https://github.com/Spiritdude/OpenJSCAD.org/wiki/User-Guide">OpenJSCAD</a> (native, import/export)</td></tr>
          <tr><td align="right"><b>scad</b></td><td><a target="_blank" href="http://openscad.org">OpenSCAD</a> (<a target=_blank href="https://github.com/Spiritdude/OpenJSCAD.org/wiki/User-Guide#direct-openscad-scad-import">experimental</a>, import)</td></tr>
          <tr><td align="right"><b>stl</b></td><td><a target="_blank" href="http://en.wikipedia.org/wiki/STL_(file_format)">STL format</a> (experimental, import/export)</td></tr>
          <tr><td align="right"><b>amf</b></td><td><a target="_blank" href="http://en.wikipedia.org/wiki/Additive_Manufacturing_File_Format">AMF format</a> (experimental, import/export)</td></tr>
          <tr><td align="right"><b>dxf</b></td><td><a target="_blank" href="https://en.wikipedia.org/wiki/AutoCAD_DXF">DXF format</a> (experimental, import/export)</td></tr>
          <tr><td align="right"><b>svg</b></td><td><a target="_blank" href="https://en.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG format</a> (experimental, import/export)</td></tr>
        </table>
        <p><a class="navlink" href="#" onclick="$('#about').show(); return false;">About</a></p>
      </nav>
    </div> <!-- /menu -->

<!-- about dialog -->
    <div id="about">
      <img src="{{ $openjscad_BASEDIR }}imgs/title.png">
      <br/>Version <script>document.write(OpenJsCad.version);</script>
      <p>
        <br/><a class="okButton" href='#' onclick="$('#about').hide(); return false;"> OK </a>
      </p>
    </div> <!-- about -->

<!-- editor -->
    <div id="editFrame">
      <div>
        <img id="editHandle" src="{{ $openjscad_BASEDIR }}imgs/editHandleIn.png"></img>
      </div>
      <div id="editor">
// -- OpenJSCAD.org logo

test
      </div>
    </div> <!-- editor -->

<!-- design viewer -->
    <div oncontextmenu="return false;" id="viewerContext"></div> <!-- avoiding popup when right mouse is clicked -->

<!-- design parameters -->
    <div id="parametersdiv"></div>

<!-- design information (status message, download buttons, drag and drop area, etc) -->
    <div id="tail">
      <div id="statusdiv"></div>
      <div id="filedropzone">
        <div id="filedropzone_empty">
<script>document.write("Drop one or more supported files"+
     (browser=='chrome'&&me=='web-online'?", or folder with jscad files ":"")+
     " here (see <a style='font-weight: normal' href='https://github.com/Spiritdude/OpenJSCAD.org/wiki/User-Guide#support-of-include' target=_blank>details</a>) "+
     "<br>or directly edit OpenJSCAD or OpenSCAD code using the editor.");
</script>
        </div>
        <div id="filedropzone_input">
          <p>
            <label class="input-control">Add Supported Files: <input type="file" id="files-input" accept="*/*" multiple="1"></input></label>
          </p>
        </div>
        <div id="filedropzone_filled">
          <span id="currentfile">...</span>
          <div id="filebuttons">
            <button id="getstlbutton" style="display:none" onclick="getStl();">Get STL</button>
            <button onclick="reloadAllFiles();">Reload</button>
           <!--button onclick="parseFile(gCurrentFile,true,false);">Debug (see below)</button-->
            <label for="autoreload">Auto Reload</label><input type="checkbox" name="autoreload" value="" id="autoreload" onclick="toggleAutoReload();">
          </div>
        </div>
      </div>
    </div> <!-- tail -->

<!-- footer (version, copyright) -->
    <div id="footer">
      OpenJSCAD.org <script>document.write(OpenJsCad.version);</script>, on openscad-portal
    </div>
  </body>
</html>
