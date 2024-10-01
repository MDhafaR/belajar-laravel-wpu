@extends('layouts.main')

@section('container')
    <h1 class="text-2xl font-semibold m-3">Halaman Blog</h1>
    @foreach ($posts as $post)
        <article class="prose ml-4 bg-slate-200 mb-2 p-3 rounded-md">
            <a href="/post/{{ $post['slug'] }}"><h3>Title : <span>{{ $post['title'] }}</span></h3></a>
            <h3>Author : <span>{{ $post['author'] }}</span></h3>
            <p>{{ $post['blog'] }}</p>
        </article>
    @endforeach
@endsection
