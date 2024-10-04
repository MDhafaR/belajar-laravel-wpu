@vite('resources/css/app.css')

<div class="prose">
    <h3 class="ml-4 border-b-2 border-black">Detail Author {{ $author }}</h3>
    @foreach ($posts as $post)
    <article class="prose ml-4 bg-slate-200 mb-2 p-1 rounded-md">
        <h3>Title : <a href="/post/{{ $post->slug }}"><span>{{ $post->title }}</span></a></h3>
        <h3>Author : <span>{{ $post->user->name }}</span></h3>
        <p>{{ $post->mini_body }}</p>
    </article>
    @endforeach
</div>
