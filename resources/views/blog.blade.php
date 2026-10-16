<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Blog</title>
    <link rel="stylesheet" href="{{ asset('build/css/style.css') }}">
</head>
<body>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('blog') }}">Blog</a>

    <h1>INI HALAMAN BLOG</h1>
    <article>
        <h3>Judul Artikel</h3>
        <p>Ini adalah isi dari artikel yang ada di halaman blog. Anda dapat menambahkan konten lebih lanjut di sini sesuai kebutuhan.</p>
    </article>

    <article>
        <h3>Judul Artikel Kedua</h3>
            <p>lorem ipsum dolor sit amet sit amet sit amet lorem ipsum dolor sit amet sit amet sit amet
                Lorem ipsum dolor sit amet sit amet sit amet lorem ipsum dolor sit amet sit amet sit amet
            </p>
    </article>
    <script src="{{ asset('build/js/script.js') }}"></script>
</body>
</html>

