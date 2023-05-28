@extends('layouts.main')
<style>
  .user-registration input {
    border-radius: 0%;
    margin-bottom: -1;
  }
</style>
@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-4 user-registration">
        <form action="/register" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-2 text-center">
            <img src="/img/logo.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">User Registration</h1>
          </div>
      
          <div class="form-floating">
            <input type="text" class="form-control rounded-top @error('email') is-invalid @enderror" value="{{ old('name') }}" id="floatingName" placeholder="Name" name="name">
            <label for="floatingName">Name</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="floatingUsername" placeholder="Username" name="username">
            <label for="floatingUsername">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="floatingEmail" placeholder="name@example.com" name="email">
            <label for="floatingEmail">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div class="form-floating">
            <img class="pic-preview img-fluid" src="" alt="">
            <input type="file" class="form-control rounded-bottom @error('picture') is-invalid @enderror" id="floatingFile" placeholder="Picture" name="picture" onchange="previewPic()">
            <label for="floatingFile">Picture</label>
            @error('picture')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
      
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
          <p class="mt-2 text-center">Already registered? <a href="/login">Login now.</a></p>
        </form>
    </div>
</div>
<script>
  function previewPic() {
    const pic = document.querySelector('#floatingFile');
    const picPreview = document.querySelector('.pic-preview');

    picPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(pic.files[0]);

    oFReader.onload = function(oFREvent) {
      picPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection