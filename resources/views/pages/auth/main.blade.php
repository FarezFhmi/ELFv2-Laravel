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
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('templates/page/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/page/dist/css/adminlte.min.css') }}">
  <!-- Alert style -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition login-page">
  @if (session('error-authorized'))
  {{-- <div class="alert alert-danger">
    {{ session('error-authorized') }}
  </div> --}}
  <script>
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "{{ session('error-authorized') }}",
    });
  </script>
  @endif
  @yield('content')

<!-- jQuery -->
<script src="{{ asset('templates/page/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('templates/page/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/page/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
