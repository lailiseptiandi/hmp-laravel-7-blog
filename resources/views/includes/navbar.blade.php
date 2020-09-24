<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
  <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
    <!-- ============================================================== -->
    <!-- Logo -->
    <!-- ============================================================== -->
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <!-- Logo icon -->
        <b>
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img src="{{ asset('admin/assets/images/hmp2.png') }}" class="mr-1" width="40px" height="40px" alt="homepage" class="dark-logo" />
          
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span>
          <!-- dark Logo text -->
          <img src=" {{ asset('assets/img/logo.png') }}" alt="homepage" class="dark-logo" />
        </span>
      </a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div class="navbar-collapse">
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav mr-auto mt-md-0 ">
        <!-- This is  -->
        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
            href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        <li class="nav-item hidden-sm-down">
          <form class="app-search p-l-20">
            <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i
                class="ti-search"></i></a>
          </form>
        </li>
      </ul>
      <!-- ============================================================== -->
      <!-- User profile and search -->
      <!-- ============================================================== -->
      <ul class="navbar-nav my-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin/assets/images/person.png') }}"
              alt="user" class="profile-pic m-r-5" />Admin</a>

          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>

        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->