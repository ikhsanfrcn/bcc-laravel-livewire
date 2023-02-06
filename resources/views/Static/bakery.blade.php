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
    <main class="space-y-20 bg-white py-5 md:pt-20 md:pb-32">
        <section class="grid grid-cols-12 gap-y-5 ">
            <div class="col-span-12 w-3/5 mx-auto">
                <h2 class="font-bold text-4xl tracking-tight">Fresh from The Oven,<br />A gateway to savor the taste of Heaven </h2>
                <p class="text-neutral-600 mt-4 leading-relaxed">
                    Savor the flavors of the best croissants in Bali only at the Bali Coffee Club. Treat yourself to the freshest ingredients baked with love with the sense of Balinese culture. Our bakery is not just known for its delicious treats, but also as a healthy bakery shop. We believe that indulging in your favorite sweets doesn’t have to come at the cost of your well-being. Therefore, we offer a range of various bakery that are just as delicious as they are nutritious. Experience the best bakery in Bali, where the taste and  is a match. Visit us today and treat yourself at the best bakery in Bali only at Bali Coffee Club.
                </p>
            </div>
            <div class="col-span-12">
                <img src="{{ asset('img/bakery/bakery-intro.webp') }}"
                    class="drop-shadow-md w-4/5 mx-auto h-56 object-cover rounded-lg" alt="Bali Coffee Club">
            </div>
        </section>
        <section class="grid grid-cols-12 gap-x-5 w-4/5 mx-auto items-center">
            <div class="col-span-8">
                <div class="text-neutral-400 font-semibold">
                    Our Products
                </div>
                <h2 class="font-bold text-4xl tracking-tight">
                    Bakery and Pastry
                </h2>
                <p class="text-neutral-600 mt-4 leading-relaxed">
                    Indulge your day with the salty and tasty bakery products for breakfast, and the sweetness of freshly baked pastry only at Bali Coffee Club. From croissants to moist cakes, our products are made with love, therefore we only choose the finest ingredients to be processed. Crafted to perfection by our skilled bakers at the best bakery in Bali. Savor every bite and experience the delightful flavors and textures that can indulge your tongue. Treat yourself or share with others, either way, our pastries and bakery items are sure to please.
                </p>
            </div>
            <div class="col-span-4">
                <img src="{{ asset('img/bakery/almond-croissant.webp') }}"
                    class="h-96 rounded-lg drop-shadow-md object-cover w-full" alt="">
            </div>
        </section>
        <section class="grid grid-cols-12 gap-x-5 w-4/5 mx-auto items-center">
            <div class="col-span-12">
                <div class="text-neutral-400 font-semibold text-center">
                    Our Service
                </div>
                <h2 class="font-bold text-4xl tracking-tight text-center">
                    From Retail to Wholesale
                </h2>
                <p class="text-center text-neutral-600 mt-4 leading-relaxed pl-20">
                    We offer a wide range of premium bakery products, from retail to wholesale, to cater to all your needs. Whether you're a coffee connoisseur or a pastry lover, our carefully curated menu of freshly baked items and aromatic coffee won’t disappoint you. With our commitment to using only the finest ingredients, our products are ready to satisfy even the most discerning palates. Join the club and savor the flavor only at the best bakery in Bali!
                </p>
            </div>
        </section>
    </main>
@endsection
