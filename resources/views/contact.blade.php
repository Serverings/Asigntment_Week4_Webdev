<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Contact</title>
    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('blog') }}">Blog</a>

    <h1>INI HALAMAN CONTACT</h1>
    <ul>
        <li>Nama : <a href=""></a></li>
        <li>Email :<a href="mailto:email@example.com">email@example.com</a></li>
        <li>Pesan : "Pesan"</li>
        <li>Alamat : "Alamat"</li>
        <li>Nomor Telepon : "Nomor Telepon"</li>
        <li>Instagram : <a href="https://www.instagram.com/jevlinchandra/" target="_blank">https://www.instagram.com/jevlinchandra/</a></li>
    </ul>

    <script src="{{ asset('build/js/script.js') }}"></script>
</body>
</html>

