@extends('layout.main')
@section('page_title', 'Best Croissant in Bali')
@section('meta_description', 'Savor the flavors of the best croissants in Bali at the Bali Coffee Club.')
@section('meta_keywords', 'Bali Bakery')

@section('content')
    <header
        class="flex items-center justify-center bg-no-repeat bg-cover bg-center h-[75vh] px-5 md:px-14 lg:px-20"style="background-image:
    linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)),
    url('{{ asset('img/bakery/bakery-intro.webp') }}');">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 class="text-white font-extrabold text-6xl tracking-tight w-full md:w-1/2">Baked with Love: The Best
                    Croissant in Bali</h1>
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
                <h2 class="text-4xl tracking-tight font-bold">Bali Bakery</h2>
                <p class="leading-relaxed mt-4 text-neutral-700">
                    Savor the flavors of the best croissants in Bali at the Bali Coffee Club. Treat yourself to the freshest
                    and healthiest ingredients baked with love in the Balinese way. Our bakery is not just known for its
                    delicious treats, but also as a healthy bakery shop. We believe that indulging in your favorite sweets
                    doesn’t have to come at the cost of your well-being. Therefore, we offer a range of various bakery that
                    are just as delicious as they are nutritious. Experience the best bakery in Bali, where your taste and
                    wellness is a match. Visit us today and treat yourself at the best bakery in Bali only at Bali Coffee
                    Club.
                </p>
                <a href="#"
                    class="block mt-4 w-fit px-5 py-3 bg-[#98694F] hover:bg-opacity-90 transition ease-in-out duration-300 rounded-md text-white font-bold">Discover
                    Menu</a>
            </div>
        </section>

    </main>
@endsection
