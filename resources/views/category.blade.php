@extends('layouts.main')
    @section('container')
    <h1 class="text-2xl font-semibold m-3">Halaman Category {{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="prose ml-4 bg-slate-200 mb-2 p-3 rounded-md">
            <h3>Title : <a href="/post/{{ $post->slug }}"><span>{{ $post->title }}</span></a></h3>
            <h3>Author : <span>{{ $post->author }}</span></h3>
            <p>{{ $post->mini_body }}</p>
        </article>
    @endforeach
    @endsection
