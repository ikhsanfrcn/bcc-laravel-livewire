@extends('layout.main')
@section('page_title', 'Bali Bakery')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Bali Cofffee Club meta keyword about')

@section('content')
<header class="h-96 md:h-screen grid md:grid-cols-3 items-center bg-center bg-cover"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp')}});">
    <div class="md:col-start-2">
        <img src="{{ asset('img/we-know-coffee-white-1.webp') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" />
        <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
            Eatery
        </h1>
    </div>
</header>
    <main class="py-5 space-y-10 bg-white">
        <section class="grid grid-cols-12 items-center gap-x-5 h-[50vh] md:h-screen">
            <div class="col-span-6 hidden md:block">
                <img src="{{ asset('img/bakery/bakery-intro.webp') }}" class="h-[36rem] w-full object-cover"
                    alt="Bali Coffee Club Bakery">
            </div>
            <div class="col-span-12 md:col-span-6 px-5 md:px-20">
                <span class="text-neutral-500">Bali Coffee Club</span>
                <h1 class="text-4xl tracking-tight font-bold">Eatery</h1>
                <p class="leading-relaxed mt-4 text-neutral-700">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sequi suscipit
                    reprehenderit tempore quis. Hic minima eveniet, sequi magnam maiores provident molestias similique ex,
                    placeat eaque cumque quas ad sapiente nihil!</p>
                <a href="#"
                    class="block mt-4 w-fit px-5 py-3 bg-[#98694F] hover:bg-opacity-90 transition ease-in-out duration-300 rounded-md text-white font-bold">Discover
                    Menu</a>
            </div>
        </section>
        <section class="grid grid-cols-12 px-5 md:px-12 lg:px-20 gap-x-5 gap-y-5 pb-20">
            <div class="col-span-12">
                <div>
                    <h2 class="text-4xl font-bold tracking-tight">Best Bakery in Bali</h2>
                    <p class="leading-relaxed w-full  md:w-3/5 block mt-4 mb-4 text-neutral-700">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Doloribus sequi ex, nisi, dolores saepe illum, enim blanditiis consequatur
                        provident obcaecati modi dignissimos libero soluta asperiores aut fugit adipisci praesentium
                        tempora.</p>
                </div>
            </div>
            <div class="col-span-6 md:col-span-3 relative">
                <img src="{{ asset('img/bakery/pain-au-chocolat.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Pain Au Chocolat">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/almond-croissant.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Almond Croissant">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/butter-croissant.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Butter Croissant">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/raisin-danish.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Raisin Danish">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/raisin-danish.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Raisin Danish">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/butter-croissant.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Butter Croissant">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/pain-au-chocolat.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Pain Au Chocolat">
            </div>
            <div class="col-span-6 md:col-span-3">
                <img src="{{ asset('img/bakery/almond-croissant.webp') }}"
                    class="w-full h-96 object-cover rounded-md overflow-hidden hover:scale-90 transition ease-in-out duration-300"
                    alt="Bali Coffee Club - Almond Croissant">
            </div>
        </section>

        <section class="w-full bg-black py-32 bg-cover bg-center"
            style="background-image:
        linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(0, 0, 0, 0.5)),
        url('{{ asset('img/wholesale.webp') }}');">
            <h3 class="text-center text-white font-bold text-4xl w-full md:w-3/4 mx-auto">We're also Available for Wholesale!</h3>
            <a href="" class="block w-fit mx-auto mt-4 text-white font-bold">Contact Us!</a>
        </section>

    </main>
@endsection
