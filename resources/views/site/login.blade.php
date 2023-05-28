@extends('layouts.main')
<style>
  .user-login input {
    border-radius: 0%;
    margin-bottom: -1;
  }
</style>
@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-4 user-login">
      
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

        <form action="/login" method="post">
          @csrf
          <div class="mb-2 text-center">
            <img src="/img/logo.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
          </div>
      
          <div class="form-floating">
            <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
          <p class="mt-2 text-center">Not registered? <a href="/register">Register now.</a></p>
          <p class="mt-5 mb-3 text-body-secondary text-center">© 2017–2023</p>
        </form>
    </div>
</div>
@endsection