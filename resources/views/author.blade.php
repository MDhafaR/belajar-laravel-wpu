@extends('layouts.main')
    @section('container')
    <h1 class="text-2xl font-semibold m-3">Halaman Author</h1>
    @foreach ($authors as $author)
        <article class="prose ml-4 bg-slate-200 mb-2 p-3 rounded-md">
            <h3>Author : <a href="{{ $author->id }}">{{ $author->name }}</a></h3>
        </article>
    @endforeach
    @endsection
