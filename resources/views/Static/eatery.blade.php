@extends('layout.main')
@section('page_title', 'Bali Restaurant')
@section('meta_description', 'Bali Coffee Club offers a chic Bali restaurant located in the heart of Canggu.')
@section('meta_keywords', 'Bali Cofffee Club meta keyword about')

@section('content')
    <header
        class="flex items-center justify-center bg-no-repeat bg-cover bg-center h-[75vh] px-5 md:px-14 lg:px-20"style="background-image:
    linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)),
    url('{{ asset('img/bakery/bakery-intro.webp') }}');">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 class="text-white font-extrabold text-6xl tracking-tight w-full md:w-1/2">Tastiest Treasure: The Best
                    Eatery in Bali</h1>
            </div>
        </div>
    </header>
    <main class="py-5 space-y-10 bg-white">
        <section class="grid grid-cols-12 items-center gap-x-5 h-[50vh] md:h-screen">
            <div class="col-span-5 hidden md:block">
                <img src="{{ asset('img/bakery/bakery-intro.webp') }}" class="h-[36rem] w-full object-cover"
                    alt="Bali Coffee Club Bakery">
            </div>
            <div class="col-span-12 md:col-span-7 px-5 md:px-20">
                <span class="text-neutral-500">Bali Coffee Club</span>
                <h2 class="text-4xl tracking-tight font-bold">@yield('page_title')</h2>
                <p class="leading-relaxed mt-4 text-neutral-700">
                    Bali Coffee Club offers a chic Bali restaurant located in the heart of Canggu. As a Bali dining
                    restaurant, we offer a delightful blend of traditional Bali cuisine and international flavors, making it
                    the best place to enjoy the tastiest meal in Bali. We offer an intimate and relaxed atmosphere for a
                    memorable dining experience. Come dine with us and savor why we're considered as one of the best food to
                    eat in Bali, only at Bali Coffee Club Canggu.
                </p>
                <a href="#"
                    class="block mt-4 w-fit px-5 py-3 bg-[#98694F] hover:bg-opacity-90 transition ease-in-out duration-300 rounded-md text-white font-bold">Discover
                    Menu</a>
            </div>
        </section>
    </main>
@endsection
