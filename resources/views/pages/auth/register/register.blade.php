@extends('pages.auth.main')
@section('title', 'Register')
@section('content')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>E-Lost&Found</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start using ELF</p>
  
        <form action="/register" method="post">
          @csrf
          @method('POST')
          <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full name"  value="{{ old('name') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password_confirmation')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="row">
            <div class="col-4 mb-2">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <a href="/login" class="text-center mb-1">Already have account ?</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
</div>
@endsection