@extends('layout.main')
@section('container')
<main style="margin: 0;">
    <div class="timetable active" id="timetable">
        {{-- <div>
            <span id="prevDay">&lt;</span>
            <h2>Today's Timetable</h2>
            <span id="nextDay">&gt;</span>
        </div> --}}
        <h1 style="margin: 10px;margin-bottom:30px">List Nama Tamu Undangan</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Rayon</th>
                    <th>Romble</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            @php
                
                $i = 1;
            @endphp
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{  session('success') }}
              </div>
            @endif
            
            @foreach ($user as $item)
            <tbody>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->user->nis }}</td>
                <td>{{ $item->user->rayon }}</td>
                <td>{{ $item->user->romble }}</td>
                <td>
                
                    <a class="badge bg-info" href="/dashboard/user/{{ $item->id }}">
                        <i class="bi bi-ticket-detailed-fill Smaller heading"></i>
                    </a>
                    <form class="d-inline" action="/dashboard/user/{{ $item->id }}/edit" method="POST">
                        @method('delete')
                        @csrf
                        
                        <button onclick="return confirm('Are You Sure?')" class=" badge bg-danger border-0"> <i class="bi bi-trash2"></i></i></button>
                    </form>
                    <a class="badge bg-warning" href="/dashboard/user/{{ $item->id }}/edit">
                        <i class="bi bi-ticket-detailed-fill Smaller heading"></i>
                    </a>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
    <div class="d-flex justify-content-center">
		{{-- {{ $user->links() }} --}}
	   </div>
</main>
<form action="/dashboard/absen" method="POST" enctype="multipart/form-data" id="form">
    
    <video style="
        display:none" id="preview"></video>
    @csrf
    <input type="hidden" name="id" id="id">
    <input type="hidden" name="nis" id="nis">
</form>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {
      console.log(content);
    });
    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });

    scanner.addListener('scan', function(c){
      document.getElementById('id').value = c;
      document.getElementById('nis').value = c;
      document.getElementById('form').submit()
    })

</script>
@endsection