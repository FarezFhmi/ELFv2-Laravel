<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ELF | @yield('title', 'ELF')</title>

  <!-- Favicons -->
  <link href="{{ asset('templates/mainpage/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('templates/mainpage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates/mainpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/mainpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/mainpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/mainpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/mainpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('templates/mainpage/assets/css/main.css') }}" rel="stylesheet">

  <!-- sweertalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    {{-- @dd(auth()->check()) --}}
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      @include('layouts.users.components.navbar')
    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer position-relative light-background">
    @include('layouts.users.components.footer')
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templates/mainpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('templates/mainpage/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('templates/mainpage/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('templates/mainpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('templates/mainpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('templates/mainpage/assets/js/main.js') }}"></script>

</body>

</html>