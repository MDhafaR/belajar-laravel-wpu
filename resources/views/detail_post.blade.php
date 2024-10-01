<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Post</title>
</head>
<body>
    <article class="prose ml-4 bg-slate-200 mb-2 p-3 rounded-md">
        <h3>Title : <span>{{ $post['title'] }}</span></h3>
        <h3>Author : <span>{{ $post['author'] }}</span></h3>
        <p>{{ $post['blog'] }}</p>
    </article>
</body>
</html>