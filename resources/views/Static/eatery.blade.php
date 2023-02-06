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
    <main class="space-y-20 bg-white py-5 md:pt-20 md:pb-32">
        <section class="grid grid-cols-12 gap-y-5 ">
            <div class="col-span-12 w-3/5 mx-auto">
                <h2 class="font-bold text-4xl tracking-tight">The Best Restaurant in <br/>Canggu</h2>
                <p class="text-neutral-600 mt-4 leading-relaxed">Bali Coffee Club offers a chic Bali restaurant located in the heart of Canggu. As a Bali dining restaurant, we offer a delightful blend of traditional Bali cuisine and international flavors, making it the best place to enjoy the tastiest meal in Bali. We offer an intimate and relaxed atmosphere for a memorable dining experience. Come dine with us and savor why we're considered as one of the best food to eat in Bali, only at Bali Coffee Club Canggu.</p>
            </div>
            <div class="col-span-12">
                <img src="{{asset('img/bakery/bakery-intro.webp')}}" class="drop-shadow-md w-4/5 mx-auto h-56 object-cover rounded-lg" alt="Bali Coffee Club">
            </div>
        </section>
        <section class="grid grid-cols-12 gap-x-5 w-4/5 mx-auto items-center">
            <div class="col-span-8">
                <div class="text-neutral-400 font-semibold">
                    Fine Food Fun
                </div>
                <h2 class="font-bold text-4xl tracking-tight">
                    A Chic Eatery in Town
                </h2>
                <p class="text-neutral-600 mt-4 leading-relaxed">
                    Introducing the "Global Fusion" eatery, where the menu is a fusion of European and Indonesian cuisine, offering a unique and chic dining experience. From Europe, savor the most recommended dishes from Bali Coffee Club like, pizza, pasta, spaghetti, and Quiche Lorraine. From Indonesia, enjoy various dishes including rendang, nasi goreng, chicken sambal matah and many more.
                </p>
                <p class="text-neutral-600 mt-4 leading-relaxed pl-20">
                    The ingredients are carefully selected to ensure both authenticity and freshness. Our chefs are have a great creativity in combining flavors from two different continents to create mouth-watering meals. Visit us for a delicious food, or drop by for a quick snack and a cup of coffee. Experience the best of both worlds with every bite of "Global Fusion" only at the best restaurant in Bali.
                </p>
            </div>
            <div class="col-span-4">
                <img src="{{asset('img/bakery/almond-croissant.webp')}}" class="h-96 rounded-lg drop-shadow-md object-cover w-full" alt="">                
            </div>
        </section>
        <section class="grid grid-cols-12 gap-x-5 w-4/5 mx-auto items-center">
            <div class="col-span-12">
                <div class="text-neutral-400 font-semibold text-center">
                    Dine in Style
                </div>
                <h2 class="font-bold text-4xl tracking-tight text-center">
                    A Chic & Modern Eatery Concept
                </h2>
                <p class="text-center text-neutral-600 mt-4 leading-relaxed pl-20">
                    Step inside and be enchanted by the modern and super-chill interior design, with a touch of Balinese culture. Savor the ambiance as you settle in for a meal in a chilling and relax setting. The menu features a fusion of international and local cuisine, expertly crafted by our talented chefs. As one of the best restaurant, Bali Coffee Club is more than just a restaurant, it's a complete experience. From the impeccable service to the carefully curated music playlist, every detail has been thoughtfully considered to make your visit become a memorable one.
                </p>
            </div>
        </section>
    </main>
@endsection
