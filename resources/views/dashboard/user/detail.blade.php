@extends('layout.main')
@section('container')
<div class="row">

    <ul class="detail">
        <li>
            <h1>{{ $user->name }}</h1>
            <h1>{{ $user->rayon }}</h1>
            <h1>{{ $user->romble }}</h1>
            <h1>{{ $user->nis }}</h1>
            <img width="" class="" src="https://fisika.uad.ac.id/wp-content/uploads/blank-profile-picture-973460_1280.png" alt="">
        </li>
    </ul>
</div>
    
@endsection