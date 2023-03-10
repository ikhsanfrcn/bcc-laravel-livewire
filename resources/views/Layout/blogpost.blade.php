<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bali Coffee Club - @yield('page-title')</title>
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
</head>

<body>
    {{-- <nav class="grid grid-cols-12 px-5 md:px-12 lg:px-20 py-3 bg-white drop-shadow-lg items-center">
        <div class="col-span-6">
            <a href="/">
                <img src="{{asset('img/bcc-horizontal-blackfont.webp')}}" class="w-52" alt="Bali Coffee Club" title="Bali Coffee Club">
            </a>
        </div>
        <div class="col-span-6 space-x-4 w-fit ml-auto">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Coffee</a>
            <a href="">Pastry</a>
            <a href="">Eatery</a>
            <a href="">Coffeepedia</a>
            <a href="">Contact</a>
        </div>
    </nav> --}}
    @yield('content')
</body>

</html>
