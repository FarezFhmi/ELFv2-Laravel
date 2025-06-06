<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ELF | @yield('title', 'ELF')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('templates/page/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/page/dist/css/adminlte.min.css') }}">
    <!-- Alert style -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.admin.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.admin.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @yield('header')
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 2.0.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="https://github.com/FarezFhmi">FarezFhmi</a>.</strong> All rights reserved. - Study Purpose -
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
  document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("photo_item").files[0].name;
    var nextSibling = e.target.nextElementSibling
    nextSibling.innerText = fileName;
  })
</script>
<!-- jQuery -->
<script src="{{ asset('templates/page/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/page/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/page/dist/js/adminlte.min.js') }}"></script>
<!-- Charts JS -->
<script src="{{ asset('templates/page/dist/js/charts.js') }}"></script>
</body>
</html>
