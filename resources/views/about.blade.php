<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman About</title>
    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('blog') }}">Blog</a>
    <h1>INI HALAMAN ABOUT</h1>

    <h3>Nama : {{$nama}}</h3>



    <div style="margin-top: 20px;">
        <img src="{{ asset('build/img/Ayamm.png') }}" alt="Ini Gambar" width="600">
    </div>

    <script src="{{ asset('build/js/script.js') }}"></script>
</body>
</html>