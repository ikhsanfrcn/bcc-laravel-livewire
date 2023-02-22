@extends('Layout.main')
@section('page_title', 'About Us')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Coffee Club in Canggu, Eatery in Bali, Best Pastry in Bali')

@section('content')
<header class="h-96 md:h-screen grid md:grid-cols-3 items-center bg-center bg-cover"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp')}});">
    <div class="md:col-start-2">
        <img src="{{ asset('img/we-know-coffee-white-1.webp') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" />
        <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
            About Us
        </h1>
    </div>
</header>
<main class="bg-white">
    <section class="px-5 md:px-12 lg:px-20 py-5 md:py-20 grid grid-cols-12 gap-x-0 md:gap-x-5 gap-y-5 items-center">
        <div class="col-span-12 md:col-span-7 lg:col-span-6">
            <div class="text-neutral-500">
                About Us
            </div>
            <div class="font-bold text-2xl">
                Dedicated to Quality
            </div>
            <div class="text-neutral-600 leading-relaxed mt-2">
                We prize quality above all else. The coffee plant is an incredible asset to our world, and the conditions for growing coffee are unique and special. We are dedicated to being good stewards of these gifts by seeing to it that quality is delivered in every cup of BCC coffee.
            </div>
        </div>
        <div class="col-span-12 md:col-span-5 lg:col-span-6">
            <img src="{{asset('img/about/image-23-1-5.webp')}}">
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 pt-52 lg:pt-72 pb-12 grid grid-cols-12 bg-cover bg-center" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/dancer-2.webp')}});">
        <div class="col-span-12 md:col-span-8 lg:col-span-6">
            <div class="text-neutral-100">
                Our Mission
            </div>
            <div class="text-white font-bold text-2xl">
                We Source Coffee Only from Bali, from Farmers We Know and Trust
            </div>
            <div class="text-neutral-200 leading-relaxed mt-2">
                The global coffee industry has grown to a level that depreciates the farmer and in turn the coffee experience. That is why we are commited to working with farmers whom we know and trust, to ensure that our quality standard starts with the soil, continues through the harvest, and ends with a great cup of coffee.
            </div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 items-center py-12 md:py-20 grid grid-cols-12 bg-cover bg-center gap-x-0 md:gap-x-10" >
        <div class="col-span-12 md:col-span-5 lg:col-span-6">
            <img src="{{asset('img/about/image-23-2.webp')}}" alt="">
        </div>
        <div class="col-span-12 md:col-span-7 lg:col-span-6 py-10 w-full md:w-full lg:w-3/4 mx-auto bg-contain bg-no-repeat bg-center md:bg-right" style="background-image: url({{asset('img/about/frame-38.webp')}});">
            <div>
                Our Story
            </div>
            <div class="text-2xl font-bold">
                Everything we do is a matter of heart, body and soul
            </div>
            <div class="leading-relaxed mt-2">
                At BCC, we love coffee. We see it as a part of our daily lives, a way to start our days, a constant in a world of change. Coffee is a comfort that humanity shares around the world; it is at the heart of our business to support this global connection.
            </div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 py-10 md:py-20 grid grid-cols-12 gap-y-5 gap-x-0 md:gap-x-10 bg-cover bg-center" style="background-image: url({{asset('img/about/bali-climate-mount-agung-1.webp')}});">
        <div class="col-span-12 lg:col-span-6 block md:hidden lg:block">
            <img src="{{asset('img/about/child-with-beach.png')}}" alt="">
        </div>
        <div class="col-span-12 md:col-span-12 lg:col-span-6">
            <div class="text-left text-white">
                Socially Responsible
            </div>
            <div class="text-white text-left font-bold text-2xl">
                Our Local People
            </div>
            <div class="text-neutral-200 mt-2 leading-relaxed">
                At BCC our commitment to equal opportunity means cultivating an environment where differences in various attributes experienced both within Indonesia and globally, are embraced which will build a culture that fosters a sense of responsibility to each other and the resources that are all needed to produce our products.
            </div>
            <div class="text-neutral-200 mt-2 leading-relaxed">
                We put our local farmers or employees and team members first, empowering them by providing meaningful opportunities to not only pursue their aspirations but to educate them in the responsibilities we have in looking after what God and Earth have supplied to us. .
            </div>
            <div class="text-neutral-200 mt-2 leading-relaxed">
                As we expand across the globe, we will serve to strengthen each community we are part of by being the neighbor every neighborhood wants and by introducing the Bali Culture that has and is so respected globally.
            </div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 py-10 md:py-20 grid grid-cols-12 gap-y-5 bg-cover bg-center bg-white items-center gap-x-0 md:gap-x-10">
        <div class="col-span-12 md:col-span-4 lg:col-span-6">
            <img src="{{asset('img/about/1502846833365-auto-x2-1.webp')}}" alt="">
        </div>
        <div class="col-span-12 md:col-span-8 lg:col-span-6">
            <div class="text-black text-left font-bold text-2xl">
               Planet
            </div>
            <div class="text-black mt-2 leading-relaxed">
                Our mandate is to shift away from single-use packaging products to reusable packaging products.
We will always continue to work on better ways to manage our waste by
Investing in regenerative agriculture, reforestation, forest conservation, river restoration and water replenishment in our supply chain
            </div>
            <div class="text-black text-left mt-4 font-bold text-2xl">
                Environmental and Social Impact Structure
             </div>
             <div class="text-black mt-2 leading-relaxed">
                As our brand continues to grow our mandate is to take the respect we have learned and developed in Bali and introduce this culture globally. This will allow us to have a greater impact into various establishments and developments that are unaware of the Cultural and environmental respect the Balinese have protected for centuries in their simple but environmental way of preserving their farming, culture, people and beliefs.
            </div>
        </div>
    </section>
</main>
@endsection