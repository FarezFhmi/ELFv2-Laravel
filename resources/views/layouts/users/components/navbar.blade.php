@php
    $menus = [
        (object)[
            'title' => 'Home',
            'path' => '/',
        ],
        (object)[
            'title' => 'Category',
            'path' => 'categories',
        ],
        (object)[
            'title' => 'Products',
            'path' => 'products',
        ]
    ];
@endphp

<a href="/" class="logo d-flex align-items-center me-auto">
<img src="{{ asset('templates/mainpage/assets/img/logo.png') }}" alt="">
<h1 class="sitename">ELF</h1>
</a>

<nav id="navmenu" class="navmenu">
<ul>
    @foreach ($menus as $menu)
    <li><a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}" class="{{ request()->is($menu->path) ? 'active' : '' }}">{{ $menu->title }}</a></li>
    @endforeach
</ul>
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

<!-- Bootstrap 5 version -->
{{-- <button type="button" class="btn-getstarted" data-bs-toggle="modal" data-bs-target="#modal-logout">Logout</button> --}}

<form id="logout-form" action="/logout" method="POST">
    @csrf
    @method('POST')
    <button type="submit" class="btn btn-danger">Logout</button>
</form>

@include('pages.auth.logout-confirmation')