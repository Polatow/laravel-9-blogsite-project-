<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-circle ml-2"></i> Polat <i class="fa fa-angle-down mr-2"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user-cog mr-2  "></i>
             Profil
          </a>
          <div class="dropdown-divider"></div>

          <div class="dropdown-divider"></div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <li><button class="dropdown-item" > <i class="fa fa-sign-out mr-2"></i> Logout</button></li>
        </form>


        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route("admin.index")}}" class="brand-link">
        <h5 class="brand-text font-weight-white ml-3">
            BlogSite | Admin Panel
        </h5>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link  {{ request()->RouteIs('admin.index') ? 'active' :''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>




          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link  {{ request()->RouteIs('category.*') ? 'active' :''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Categories
              </p>
            </a>
          </li>




          <li class="nav-item">
            <a href="{{route('allpost.list')}}" class="nav-link {{ request()->RouteIs('allpost.list') ? 'active' :''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                All Posts
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="{{route('contact.index')}}" class="nav-link  {{ request()->RouteIs('contact.*') ? 'active' :''}}">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Contact
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('about.index')}}" class="nav-link  {{ request()->RouteIs('about.*') ? 'active' :''}}">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                About
              </p>
            </a>
          </li>


          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
