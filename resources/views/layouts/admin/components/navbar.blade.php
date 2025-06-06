<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/dashboard" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/foundItem" class="nav-link">Found</a>
        </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      {{-- <form action="/logout" method="post">
        @csrf
        @method('POST')
          <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
        </form> --}}
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-logout">Logout</button>
  </ul>
</nav>

@include('pages.auth.logout-confirmation')