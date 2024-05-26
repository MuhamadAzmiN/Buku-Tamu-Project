@extends('layout.main')

<div class="row">
    <div class="col-md-5">

    </div>
</div>

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5" style="margin-top:70px;">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/register">
              @csrf
            
              <h1 class="h3 mb-3 fw-normal">Please Register</h1>
          
              <div class="form-floating">
                <input type="text" value="{{ old("name") }}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name@example.com">
                <label for="name">Name</label>
                @error('name')
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                
              </div>
            
              <div class="form-floating">
                <input type="text" value="{{ old("rayon") }}" name="rayon" class="form-control @error('rayon') is-invalid @enderror" id="rayon" placeholder="rayon">
                <label for="rayon">rayon</label>
                @error('rayon')
                <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="number" value="{{ old("nis") }}" name="nis" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="nis">
                <label for="nis">Nis</label>
                @error('Nis')
                <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" value="{{ old("romble") }}" name="romble" class="form-control @error('romble') is-invalid @enderror" id="romble" placeholder="romble">
                <label for="romble">romble</label>
                @error('romble')
                <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" value="{{ old("password") }}" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                <div id="validationServer03Feedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
          
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
              
            </form>
            <small class="d-block text-center mt-3">Not Login? <a href="login/">Login Now</a></small>
          </main>
          
    </div>
</div>

@endsection