  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="{{ asset('admin/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
      </a>

      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-1-800x800.jpg') }}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-single-02"></i><span>My profile</span></a>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-settings-gear-65"></i><span>Settings</span></a>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-calendar-grid-58"></i><span>Activity</span></a>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-support-16"></i><span>Support</span></a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item"><i class="ni ni-user-run"></i><span>Logout</span></a>
          </div>
        </li>
      </ul>

      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html"><img src="./img/brand/blue.png"></a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main">
                <span></span><span></span>
              </button>
            </div>
          </div>
        </div>

        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>

        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" href="{{ route('home') }}"><i class="ni ni-tv-2 text-primary"></i> Dashboard</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="{{ route('artikel.index') }}"><i class="ni ni-planet text-blue"></i> Artikel</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('fasilitas.index') }}"><i class="ni ni-pin-3 text-orange"></i> Fasilitas</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('dosen.index') }}"><i class="ni ni-single-02 text-yellow"></i> Dosen</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('ukm.index') }}"><i class="ni ni-bullet-list-67 text-red"></i> Ukm</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('fakultas.index') }}"><i class="ni ni-key-25 text-info"></i> Fakultas</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('prestasi.index') }}"><i class="ni ni-key-25 text-info"></i> Prestasi</a></li>
        </ul>
      </div>
    </div>
  </nav>
