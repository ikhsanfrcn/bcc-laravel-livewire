<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <title>Bali Coffee Club - @yield('page_title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
    * {
        font-family: "montserrat", sans-serif !important;
    }
    </style>

</head>

<body class="font-montserrat">

    @livewireScripts
    @livewire('navbar')
    @yield('content')
    @livewire('footer')
    <!-- FOOTER SPACER -->
    <div class="my-[110vw] md:my-[75vw] lg:my-[50vw]">
    </div>
    <!-- <div class="grid grid-cols-12" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0)">
        <div class="py-36 col-start-12"
            style="background-image:  linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(0, 0, 0, 0));"></div>
    </div> -->
    @yield('script')
</body>

</html>