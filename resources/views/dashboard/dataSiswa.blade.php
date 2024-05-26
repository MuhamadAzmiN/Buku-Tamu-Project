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
                    <th>Cibedug 1</th>
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
            
            @foreach ($data as $item)
            <tbody>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->rayon }}</td>
                <td>{{ $item->romble }}</td>
                <td>
                
                    <a class="badge bg-info" href="/dashboard/user/{{ $item->id }}">
                        <i class="bi bi-ticket-detailed-fill Smaller heading"></i>
                    </a>
                    <form class="d-inline" action="/dashboard/user/{{ $item->id }}" method="POST">
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
		{{ $data->links() }}
	   </div>
</main>
@endsection