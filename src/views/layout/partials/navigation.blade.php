<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/meli/admin') }}" >{{ session('profile')->nickname }}</a>
  </div>
  <!-- /.navbar-header -->
  <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-alerts">
        <li>
          <a href="#">
            <div>
              <i class="fa fa-comment fa-fw"></i> New Comment
              <span class="pull-right text-muted small">4 minutes ago</span>
            </div>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="#">
            <div>
              <i class="fa fa-twitter fa-fw"></i> 3 New Followers
              <span class="pull-right text-muted small">12 minutes ago</span>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.dropdown-alerts -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <li><a href="{{ url('/meli/admin/profile') }}"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
        <li><a href="{{ url('/meli/admin/setting') }}"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/meli/admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
      </ul>
      <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
  </ul>
  <!-- /.navbar-top-links -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </li>
        <li><a href="{{ url('/meli/admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
        <li><a href="{{ url('/meli/admin/products') }}"><i class="fa fa-list-alt"></i> Products</a></li>
        <li><a href="{{ url('/meli/admin/orders') }}"><i class="fa fa-shopping-cart"></i> Sales</a></li>
        <li><a href="{{ url('/meli/admin/questions') }}"><i class="fa fa-comments"></i> Questions</a></li>
        <li><a href="{{ url('/meli/admin/stores') }}"><i class="fa fa-university"></i> Stores</a></li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>