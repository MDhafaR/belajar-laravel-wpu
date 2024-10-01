@extends('layouts.main')

@section('container')
    <div class=" m-3">
        <h1 class="text-2xl font-semibold">Halaman About</h1>
        <h3>{{ $nama }}</h3>
        <br>
        <p>{{ $email }}</p>
    </div>
@endsection
