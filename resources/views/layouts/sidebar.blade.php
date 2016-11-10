<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="{{ trans('sidebar.Search') }}...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
        <!-- /input-group -->
      </li>
      <li {{ (Request::is('/') ? 'class="active"' : '') }}>
        <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> {{ trans('sidebar.dashboard') }}</a>
      </li>
      <li {{ (Request::is('/projects') ? 'class="active"' : '') }}>
        <a href="{{ url ('/projects') }}"><i class="fa fa-cubes fa-fw"></i> Projects</a>
      </li>
      <li {{ (Request::is('/editor') ? 'class="active"' : '') }}>
        <a href="{{ url ('/editor') }}"><i class="fa fa-indent fa-fw"></i> OpenJSCAD Editor</a>
      </li>
      <li class="divider">
        &nbsp;
      </li>
      <li {{ (Request::is('/editor') ? 'class="active"' : '') }}>
        <a href="{{ url ('#') }}"><i class="fa fa-wrench fa-fw"></i> Fertigungs Aufträge</a>
      </li>
      <li {{ (Request::is('/editor') ? 'class="active"' : '') }}>
        <a href="{{ url ('#') }}"><i class="fa fa-archive fa-fw"></i> Material &amp; Lager</a>
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>
