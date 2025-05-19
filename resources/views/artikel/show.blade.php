<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim</title>

  <!-- Favicon -->
  <link href="{{ asset('admin/img/brand/favico.png') }}" rel="icon" type="image/png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Icons -->
  <link href="{{ asset('admin/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{ asset('admin/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body class="">
  <!-- Sidebar -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="{{ asset('admin/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
      </a>

      <!-- Mobile User Menu -->
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
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-single-02"></i> My profile</a>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-settings-gear-65"></i> Settings</a>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-calendar-grid-58"></i> Activity</a>
            <a href="./examples/profile.html" class="dropdown-item"><i class="ni ni-support-16"></i> Support</a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item"><i class="ni ni-user-run"></i> Logout</a>
          </div>
        </li>
      </ul>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse Header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html"><img src="./img/brand/blue.png"></a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <!-- Search Form (Mobile) -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search">
            <div class="input-group-prepend">
              <div class="input-group-text"><span class="fa fa-search"></span></div>
            </div>
          </div>
        </form>

        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" href="./index.html">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Top Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-search"></i></span></div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>

        <!-- User Profile (Desktop) -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-4-800x800.jpg') }}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm font-weight-bold">Dio rajwan</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="{{ asset('admin/examples/profile.html') }}" class="dropdown-item"><i class="ni ni-single-02"></i> My profile</a>
              <a href="{{ asset('admin/examples/profile.html') }}" class="dropdown-item"><i class="ni ni-settings-gear-65"></i> Settings</a>
              <a href="{{ asset('admin/examples/profile.html') }}" class="dropdown-item"><i class="ni ni-calendar-grid-58"></i> Activity</a>
              <a href="{{ asset('admin/examples/profile.html') }}" class="dropdown-item"><i class="ni ni-support-16"></i> Support</a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item"><i class="ni ni-user-run"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row">
            <div class="col-xl-3 col-lg-6"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Show Data</div>
            <div class="card-body">
              <form action="{{ route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}" disabled>
                </div>

                <div class="form-group">
                  <label>Isi</label>
                  <input type="text" class="form-control" name="isi" value="{{ $artikel->isi }}" disabled>
                </div>

                <div class="form-group">
                  <label>Foto</label><br>
                  <img src="{{ asset('storage/artikel/' . $artikel->foto) }}" alt="" style="width:300px; height:300px;">
                </div>
              </form>
              <a href="{{ route('artikel.index') }}" class="btn btn-primary">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS -->
  <script src="{{ asset('admin/js/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Optional JS -->
  <script src="{{ asset('admin/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>

  <!-- Argon JS -->
  <script src="{{ asset('admin/js/argon-dashboard.min.js') }}"></script>

  <!-- TrackJS -->
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS && TrackJS.install({
      token: "ee6fab19c5a04ac1a32a645abde4613a",
      application: "argon-dashboard-free"
    });
  </script>
</body>

</html>
