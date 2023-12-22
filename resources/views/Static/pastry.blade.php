@extends('Layout.main')

@section('page_title', 'Find Your Bakery in Bali')

@section('meta_description', 'Elevate your mornings with the sweetness of our fresh pastry and bakery like butter croissant or tiramisu cake at the best bakery in Bali, Bali Coffee Club.')

@section('meta_keywords', 'croissant in bali, bakery in bali, pastry bali')



@section('content')

<header

class="flex items-center justify-center bg-no-repeat bg-cover bg-center h-[85vh] md:h-[40vh] lg:h-[75vh] px-5 md:px-14 lg:px-20"style="background-image:

linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0)),

url('{{ asset('img/bakery/new-image-2.jpg') }}');">

<div class="grid grid-cols-12 w-full">

    <div class="col-span-12">

        <h1 class="text-white font-extrabold text-5xl tracking-tight w-full md:w-full lg:w-full">Let’s rolling in the Dough!</h1>

    </div>

</div>

</header>

<main class="py-12 md:py-32 bg-white shadow-md">

    <section class="grid grid-cols-12">

        <div class="col-span-12 md:col-span-8 lg:col-span-6">

            <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">

                <h3 class="text-sm text-neutral-500">Welcome to Bali Coffee Club</h3>

                <h2 class="text-2xl font-bold tracking-tight">A Bakery Experience - Healthy and Tasty</h2>

                <p class="leading-relaxed text-neutral-600 text-sm mt-2">

                    <span>

                        Indulge yourself to our fresh bakery and pastry, baked with love at Bali Coffee Club. Our bakery and pastry isn't just known for its mouthwatering treats, but also healthy.

                    </span>

                    <br/>

                    <span class="block mt-2">

                        We believe that enjoying sweet treats shouldn't compromise your well-being. That's why we offer a delectable range of bakery items that are both delicious and nutritious.
                    </span>

                </p>

            </div>

        </div>

        <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bakery/new-image-1.jpg') }}')">

        </div>

    </section>

    <section class="grid grid-cols-12">

        <div class="col-span-12 md:col-span-8 lg:col-span-6">

            <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">

                <h3 class="text-sm text-neutral-500">Our Products</h3>

                <h2 class="text-2xl font-bold tracking-tight">Fresh Bakery and Pastry</h2>

                <p class="leading-relaxed text-neutral-600 text-sm mt-2">

                    <span>

                      Exclusively at Bali Coffee Club (BCC) - elevate your mornings with the sweetness of our fresh pastry and bakery like butter croissant or tiramisu cake.

                    </span>

                    <br/>

                    <span class="block mt-2">

                     Our various products are made with the finest ingredients. Expertly prepared by our professional bakers at the best bakery in Bali, ensuring every bite delivers delightful flavors and textures that tantalize your taste buds.
                    </span>

                </p>

            </div>

        </div>

        <div class="h-56 md:h-auto order-last md:order-first col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bakery/new-image-3.jpg') }}')">

        </div>

    </section>

    <section class="grid grid-cols-12">

        <div class="col-span-12 md:col-span-8 lg:col-span-6">

            <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">

                <h3 class="text-sm text-neutral-500">Our Services</h3>

                <h2 class="text-2xl font-bold tracking-tight">Our Bakery, Quality's Trophy</h2>

                <p class="leading-relaxed text-neutral-600 text-sm mt-2">

                    <span>

                       We believe that great service is important to create a great experience.
                    </span>

                    <br/>

                    <span class="block mt-2">

                      We create a welcoming environment, designed to make you feel right at home. Bali Coffee Club's trained baristas are expert of their craft - ready to prepare you the finest, sweet, and soft pastry.
                    </span>

                    <span class="block mt-2">

                     Bali Coffee Club (BCC) creates a perfect spot for catching up with friends, working, or simply enjoying the sweet bakery and pastry in Bali.

                    </span>

                </p>

            </div>

        </div>

        <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/bakery/new-image-4.jpg') }}')">

        </div>

    </section>

</main>

@endsection

