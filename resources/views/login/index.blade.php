@extends('login.layouts.main')

@section('bodyauth')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- <main class="form-signin">
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">SKIRIPSI Project 1</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" @error('email') is-invalid @enderror autofocus required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback d-block">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
      <label for="password">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main> -->

<div class="login-wrapper">
  <div class="login-container">
    <div class="login-logo">
      <img id="logoimage" src="/assets/img/logo.png" class="img-fluid" alt="">
    </div>
    <form class="login-form" action="/login" method="post" id="login">
      @csrf
      <div class="login-form-username form-group">
        <label for="username" class="sr-only">
        <i class="fa-solid fa-user"></i><span>\</span>Username (email students)
        </label>
        <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="Username (email students)" autocomplete="email">
      </div>
      <div class="login-form-password form-group">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" autocomplete="current-password">
      </div>
      <div class="login-form-submit form-group">
        <button class="btn btn-primary btn-lg" type="submit" id="loginbtn">LOGIN</button>
      </div>
    </form>
  </div>
</div>
@endsection