@extends('layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit {{ auth()->user()->name }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <!-- Tombol atau elemen lainnya di sini -->
</div>
</div>
<div class="col-lg-8 mx-auto">
    <form action="/dashboard/user/{{ auth()->user()->id }}" method="POST"  enctype="multipart/form-data">

        
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" value="{{ auth()->user()->name }}">
            @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          
          </div>
          <div class="mb-3">
            <label for="nis" class="form-label">nis</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror"  id="nis" name="nis" value="{{ auth()->user()->nis }}">
            @error('nis')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          
          </div>
          <div class="mb-3">
            <label for="rayon" class="form-label">rayon</label>
            <input type="text" class="form-control @error('rayon') is-invalid @enderror"  id="rayon" name="rayon" value="{{ auth()->user()->rayon }}">
            @error('rayon')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          
          </div>
          <div class="mb-3">
            <label for="romble" class="form-label">romble</label>
            <input type="text" class="form-control @error('romble') is-invalid @enderror"  id="romble" name="romble" value="{{ auth()->user()->romble }}">
            @error('romble')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          
          </div>
          <button type="submit" class="btn btn-primary mt-3">Update Post</button>
        </form>
        
    </div>
    
    {{-- <div class="mb-3">
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        <label for="formFile" class="form-label">Post Image</label>
            
        <img src="" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="">

      
        <input class="form-control" @error('image') is-invalid @enderror type="file" name="image" id="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
        {{ $message }}
        </div>

      @enderror
      </div> --}}
@endsection