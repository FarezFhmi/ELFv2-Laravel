@extends('pages.auth.main')
@section('title', 'Login')
@section('content')
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="" class="h1"><b>E-Lost&Found</b></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Sign in to start using ELF</p>
    
          <form action="/login" method="post">
            @csrf
            @method('POST')
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-4 mb-2">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <p class="mb-1">
            <a href="">Forgot Password ?</a>
          </p>
          <p class="mb-0">
            <a href="/register" class="text-center">Register a new account</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
</div>
@endsection