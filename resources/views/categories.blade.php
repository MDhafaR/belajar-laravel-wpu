@extends('layouts.main')
    @section('container')
    <h1 class="text-2xl font-semibold m-3">Halaman Semua Category</h1>
    @foreach ($categories as $category)
        <article class="prose ml-4 bg-slate-200 mb-2 p-3 rounded-md">
            <h3>Category : <a href="/category/{{ $category->slug }}"><span>{{ $category->name }}</span></a></h3>
            <p>kategori ini adalah kategori tentang {{ $category->name }}</p>
        </article>
    @endforeach
    @endsection
