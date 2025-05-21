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
       @include('layouts.componen.sidebar')


  <div class="main-content">
   @include('layouts.componen.navbar')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row">
            <div class="col-xl-3 col-lg-6"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="bg-white shadow rounded p-4">
            <div class="mb-4">
              <a href="{{ route('prestasi.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            @if (session('success'))
              <div id="alert-success" onclick="hideAlert()" class="alert alert-success cursor-pointer">
                {{ session('success') }}
              </div>
            @endif
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Prestasi</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach ($prestasi as $data)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $data->nama_prestasi }}</td>
                      <td>{{ $data->jenis }}</td>
                      <td>{{ Str::limit($data->deskripsi, 20)}}</td>
                      <td>
                        <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="prestasi Foto" style="width: 50px; height: 50px;">
                      </td>
                      <td>
                        <a href="{{ route('prestasi.show', $data->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('prestasi.edit', $data->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('prestasi.destroy', $data->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Core -->
  <script src="{{ asset('admin/js/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('admin/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('admin/js/argon-dashboard.min.js') }}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS && TrackJS.install({
      token: "ee6fab19c5a04ac1a32a645abde4613a",
      application: "argon-dashboard-free"
    });
  </script>
</body>

</html>
