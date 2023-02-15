@extends('layout.main')
@section('page_title', 'Pastry')
@section('meta_description', 'Savor the flavors of the best croissants in Bali at the Bali Coffee Club.')
@section('meta_keywords', 'Bali Pastry, Pastry Shop, Best Croissant in Bali')

@section('content')
<header
class="flex items-center justify-center bg-no-repeat bg-cover bg-center h-[85vh] md:h-[40vh] lg:h-[75vh] px-5 md:px-14 lg:px-20"style="background-image:
linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)),
url('{{ asset('img/bakery/bakery-intro.webp') }}');">
<div class="grid grid-cols-12 w-full">
    <div class="col-span-12">
        <h1 class="text-white font-extrabold text-5xl md:text-6xl tracking-tight w-full md:w-full lg:w-1/2">Baked with Love: The Best Croissant in Bali</h1>
    </div>
</div>
</header>
<main class="bg-white">
    <section class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 lg:col-span-6">
            <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                <h3 class="text-sm text-neutral-500">Welcome to Bali Coffee Club</h3>
                <h2 class="text-2xl font-bold tracking-tight">A Healthy Bakery Experience</h2>
                <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                    <span>
                        Savor the flavors of the best croissants in Bali only at the Bali Coffee Club. Treat yourself to the freshest ingredients baked with love with the sense of Balinese culture. Our bakery is not just known for its delicious treats, but also as a healthy bakery shop. 
                    </span>
                    <br/>
                    <span class="block mt-2">
                        We believe that indulging in your favorite sweets doesn’t have to come at the cost of your well-being. Therefore, we offer a range of various bakery that are just as delicious as they are nutritious. Experience the best bakery in Bali, where the taste and  is a match. Visit us today and treat yourself at the best bakery in Bali only at Bali Coffee Club.
                    </span>
                </p>
            </div>
        </div>
        <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bakery/almond-croissant.webp') }}')">
        </div>
    </section>
    <section class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 lg:col-span-6">
            <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                <h3 class="text-sm text-neutral-500">Our Products</h3>
                <h2 class="text-2xl font-bold tracking-tight">Bakery and Pastry</h2>
                <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                    <span>
                        Indulge your day with the salty and tasty bakery products for breakfast, and the sweetness of freshly baked pastry only at Bali Coffee Club. From croissants to moist cakes, our products are made with love, therefore we only choose the finest ingredients to be processed.
                    </span>
                    <br/>
                    <span class="block mt-2">
                        Crafted to perfection by our skilled bakers at the best bakery in Bali. Savor every bite and experience the delightful flavors and textures that can indulge your tongue. Treat yourself or share with others, either way, our pastries and bakery items are sure to please.
                    </span>
                </p>
            </div>
        </div>
        <div class="h-56 md:h-auto order-last md:order-first col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bakery/pain-au-chocolat.webp') }}')">
        </div>
    </section>
    <section class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 lg:col-span-6">
            <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                <h3 class="text-sm text-neutral-500">Our Services</h3>
                <h2 class="text-2xl font-bold tracking-tight">From Retail to Wholesale</h2>
                <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                    <span>
                        We offer a wide range of premium bakery products, from retail to wholesale, to cater to all your needs. Whether you're a coffee connoisseur or a pastry lover, our carefully curated menu of freshly baked items and aromatic coffee won’t disappoint you. 
                    </span>
                    <br/>
                    <span class="block mt-2">
                        With our commitment to using only the finest ingredients, our products are ready to satisfy even the most discerning palates. Join the club and savor the flavor only at the best bakery in Bali!
                    </span>
                </p>
            </div>
        </div>
        <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bakery/raisin-danish.webp') }}')">
        </div>
    </section>
</main>
@endsection
