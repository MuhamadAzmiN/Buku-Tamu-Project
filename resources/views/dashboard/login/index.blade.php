@extends('layout.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-md-5 m-7" style="margin-top:200px">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
      <main class="form-signin w-100 m-auto">
          <form action="/login" method="post">
            @csrf            
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        
            <div class="form-floating">
              <input type="text" name="name" class="form-control @error("name") is-invalid @enderror" id="name" placeholder="Your Name" autofocus required>
              <label for="name">Name</label>
              @error("name")
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" value="" id="remember">
              <label class="form-check-label" for="remember">
                Remember me
              </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            <div class="mt-3">
              <a href="/forgot-password">Forgot Password?</a>
            </div>
          </form>
          <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now</a></small>
        </main>
  </div>
</div>

@endsection
