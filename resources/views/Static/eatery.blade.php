@extends('Layout.main')
@section('page_title', 'Eatery')
@section('meta_description', 'Bali Coffee Club offers a chic Bali restaurant located in the heart of Canggu.')
@section('meta_keywords', 'bali restaurant, bali best food to eat, bali dining restaurant, restaurant in canggu')

@section('content')
    <header
        class="flex items-center justify-center bg-no-repeat bg-cover bg-center h-[85vh] md:h-[40vh] lg:h-[75vh] px-5 md:px-14 lg:px-20"style="background-image:
linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)),
url('{{ asset('img/eatery/cover.webp') }}');">
        <div class="grid grid-cols-12 w-full">
            <div class="col-span-12">
                <h1 class="text-white font-extrabold text-5xl md:text-6xl tracking-tight w-full md:w-full lg:w-1/2">The
                    Ultimate Eatery in the Island: Bali’s Best Restaurant</h1>
            </div>
        </div>
    </header>
    <main class="py-12 md:py-32 bg-white shadow-md">
        <section class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                    <h3 class="text-sm text-neutral-500">Welcome to Bali Coffee Club</h3>
                    <h2 class="text-2xl font-bold tracking-tight">The Ultimate Eatery in the Island <br />Bali’s Best
                        Restaurant</h2>
                    <p class="leading-relaxed text-neutral-600 mt-2 text-sm">
                        Bali Coffee Club offers a chic Bali restaurant located in the heart of Canggu. As a Bali dining
                        restaurant, we offer a delightful blend of traditional Bali cuisine and international flavors,
                        making it the best place to enjoy the tastiest meal in Bali. We offer an intimate and relaxed
                        atmosphere for a memorable dining experience. Come dine with us and savor why we're considered as
                        one of the best food to eat in Bali, only at Bali Coffee Club Canggu.
                    </p>
                </div>
            </div>
            <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/eatery/update-1.jpg') }}')">
            </div>
        </section>
        <section class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                    <h3 class="text-sm text-neutral-500">Our Products</h3>
                    <h2 class="text-2xl font-bold tracking-tight">Fine Food and Fun <br /> A Chic Eatery in Town</h2>
                    <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                        <span>
                            Introducing the "Global Fusion" eatery, where the menu is a fusion of European and Indonesian
                            cuisine, offering a unique and chic dining experience. From Europe, savor the most recommended
                            dishes from Bali Coffee Club like, pizza, pasta, spaghetti, and Quiche Lorraine. From Indonesia,
                            enjoy various dishes including rendang, nasi goreng, chicken sambal matah and many more.
                        </span>
                        <br />
                        <span class="block mt-2">
                            The ingredients are carefully selected to ensure both authenticity and freshness. Our chefs are
                            have a great creativity in combining flavors from two different continents to create
                            mouth-watering meals. Visit us for a delicious food, or drop by for a quick snack and a cup of
                            coffee. Experience the best of both worlds with every bite of "Global Fusion" only at the best
                            restaurant in Bali.
                        </span>
                    </p>
                </div>
            </div>
            <div class="h-56 md:h-auto order-last md:order-first col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/eatery/2.webp') }}')">
            </div>
        </section>
        <section class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                    <h3 class="text-sm text-neutral-500">Our Services</h3>
                    <h2 class="text-2xl font-bold tracking-tight">From Retail to Wholesale</h2>
                    <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                        <span>
                            Step inside and be enchanted by the modern and super-chill interior design, with a touch of
                            Balinese culture. Savor the ambiance as you settle in for a meal in a chilling and relax
                            setting. The menu features a fusion of international and local cuisine, expertly crafted by our
                            talented chefs.
                        </span>
                        <br />
                        <span class="block mt-2">
                            As one of the best restaurant, Bali Coffee Club is more than just a restaurant, it's a complete
                            experience. From the impeccable service to the carefully curated music playlist, every detail
                            has been thoughtfully considered to make your visit become a memorable one.
                        </span>
                    </p>
                </div>
            </div>
            <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('img/eatery/update-2.jpg') }}')">
            </div>
        </section>
    </main>
@endsection
