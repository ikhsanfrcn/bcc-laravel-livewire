@extends('layout.main')
@section('page_title', 'Coffee')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Bali Coffee Club, Coffee Roasted in Bali, Best Arabica Coffee in Bali')

@section('content')
    <header
        class="flex items-center justify-center bg-no-repeat bg-cover bg-center h-[85vh] md:h-[40vh] lg:h-[75vh] px-5 md:px-14 lg:px-20"style="background-image:
linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)),
url('{{ asset('img/coffee/cover.webp') }}');">
        <div class="grid grid-cols-12 w-full">
            <div class="col-span-12">
                <h1 class="text-white font-extrabold text-5xl md:text-6xl tracking-tight w-full md:w-full lg:w-1/2">Discover the Best Coffee in Bali</h1>
            </div>
        </div>
    </header>
    <main class="bg-white">
        <section class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                    <h3 class="text-sm text-neutral-500">From Farm to Cup</h3>
                    <h2 class="text-2xl font-bold tracking-tight">Savor The Exceptional Coffee in Bali.</h2>
                    <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                        <span>
                            Hey, Good Looking! Do you crave the taste of truly exceptional coffee? Bali Coffee Club's baristas are experts in their craft, brewing up the best coffee you've ever had. Blending Balinese culture with modern brewing techniques, Bali Coffee Club is the perfect place to experience the taste of Balinese coffee from the authentic village of Kintamani.
                        </span>
                        <br/>
                        <span class="block mt-2">
                            Enjoy a range of expertly crafted with the best Arabica beans in Bali, paired with delicious light bites in a relaxed and super-chic atmosphere of Balinese culture. Our relaxed place and friendly baristas make it the perfect spot to catch up with friends, work, or simply savor a truly exceptional cup of Bali Coffee Club.
                        </span>
                    </p>
                </div>
            </div>
            <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y29mZmVlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60')">
            </div>
        </section>
        <section class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                    <h3 class="text-sm text-neutral-500">Our Products</h3>
                    <h2 class="text-2xl font-bold tracking-tight">A Cup of Happiness: <br/>The Best Arabica Coffee in Bali.</h2>
                    <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                        <span>
                            With a passion for quality and a commitment to produce the best Arabica Coffee Bean from the finest coffee bean plantation in Kintamani Bali, Bali Coffee Club offers a cup of happiness.
                        </span>
                        <br/>
                        <span class="block mt-2">
                            Each bean is carefully selected and roasted in Bali to bring out its unique flavor profile, resulting in a cup that is rich, smooth, and satisfying. Whether you're looking for a bold espresso, a creamy latte, or a refreshing iced coffee, Bali Coffee Club has the perfect drink to suit your taste.
                        </span>
                    </p>
                </div>
            </div>
            <div class="h-56 md:h-auto order-last md:order-first col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1507133750040-4a8f57021571?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGNvZmZlZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')">
            </div>
        </section>
        <section class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                <div class="px-5 py-5 md:px-12 md:py-12 lg:py-32">
                    <h3 class="text-sm text-neutral-500">Our Services</h3>
                    <h2 class="text-2xl font-bold tracking-tight">Step Up Your Coffee Game at Bali Coffee Club.</h2>
                    <p class="leading-relaxed text-neutral-600 text-sm mt-2">
                        <span>
                            At Bali Coffee Club, we believe that great coffee should be accompanied by an even better experience. That's why we've created a warm and welcoming environment that feels like a second home. Our friendly baristas are passionate about coffee and will go the extra mile to ensure that you have a fantastic time with us.
                        </span>
                        <br/>
                        <span class="block mt-2">
                            You can savor the aroma and taste of the best Arabica coffee in Bali while enjoying the company of friends or simply taking a moment to unwind. So come and join us for a cup of your favorite brew, sit back, and enjoy the Balinese ambiance of Bali Coffee Club.
                        </span>
                    </p>
                </div>
            </div>
            <div class="h-56 md:h-auto col-span-12 md:col-span-4 lg:col-span-6 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1559496417-e7f25cb247f3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvZmZlZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60')">
            </div>
        </section>
    </main>
@endsection
