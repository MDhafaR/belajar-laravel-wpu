<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar About</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-600">
    <marquee><h1>About</h1></marquee>
    <h3>{{ $nama }}</h3>
    <br>
    <p>{{ $email }}</p>
</body>

</html>
