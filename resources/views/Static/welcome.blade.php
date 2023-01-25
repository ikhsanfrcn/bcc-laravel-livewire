@section('meta_description', 'Bali Cofffee Club meta description home')
@section('meta_keywords', 'Bali Cofffee Club meta keyword home')
@extends('layout.main')
@section('page_title', 'Home')

@section('content')

<header class="relative flex items-center justify-center h-screen overflow-hidden bg-black">
    <div class="relative z-30 grid md:grid-cols-6 text-white text-center">
        <div class="pt-20 md:pt-40 px-2 md:px-0 col-start-2 col-span-4">
            <img src="{{ asset('img/we-know-coffee-white-1.png') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" />
            <h1 class="pt-5 md:pt-10 text-2xl md:text-5xl lg:text-7xl font-extrabold">Start your day off right with Bali
                Coffee Club</h1>
            <p class="pt-5 md:pt-10 text-sm md:px-32">World class coffee, grown and roasted in Bali, it is the perfect
                way to start
                any day.
                Bring the energy of Bali into your morning with every cup of Bali Coffee Clubs.</p>
            <img src="{{ asset('img/home/output-onlinepngtools.png') }}" class="pt-10 h-24 md:h-32 mx-auto"
                alt="We Know Coffee" />
        </div>
    </div>
    <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source
            src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
            type="video/mp4" />
        Your browser does not support the video tag.
    </video>
</header>

<main class="z-40 bg-white drop-shadow-xl">

    <!--  -->
    <section class="py-20 px-5"
        style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://balicoffeeclub.com/wp-content/uploads/2022/05/Uluwatu-scaled.jpg');">
        <div class="grid md:grid-cols-2 container mx-auto place-items-center">
            <div class="text-white">
                <h5 class="text-[4vw] md:text-[1vw] ">ABOUT BCC COFFEE</h5>
                <h2 class="pt-10 font-bold text-[6vw] md:text-[2vw]">The Story Behind Bali, the Coffee, and the Club
                </h2>
                <p class="mt-5 text-justify md:text-left">Bali is home to a rich culture and holds a myriad of ways to
                    celebrate it. At Bali
                    Coffee Club, we
                    celebrate the culture surrounding coffee, which permeates through the many islands of Indonesia.
                    From
                    the beautiful land of Bali to your kitchen, wherever it may be, we share a part of our culture
                    direct to
                    you.</p>
                <a href="#">
                    <button class="mt-5 md:mt-10 bg-white p-3 rounded-md text-[#ff5700]">Know More</button>
                </a>
            </div>
            <div class="md:grid grid-cols-4">
                <img src="{{ asset('img/home/image-23-1.png') }}"
                    class="pt-10 md:pt-0  object-cover mx-auto md:rounded-[32px] col-start-2 col-span-3" alt="Murals" />
            </div>
        </div>
        <div class="grid grid-cols-12 text-white">
            <div class="col-start-2 col-span-10">
                <h2 class="py-12 font-bold text-[6vw] md:text-[2vw]">Authentical Product</h2>
                <div class="grid lg:grid-cols-3 gap-y-10 lg:gap-y-0">
                    <div class="grid grid-cols-2 place-items-center">
                        <img src="{{ asset('img/home/authen-icon-1.png') }}" class="object-cover h-24 md:h-28"
                            alt="Authen" />
                        <p class="">We source coffee from local Indonesian farmers who practice responsible
                            growing
                            techniques.</p>
                    </div>
                    <div class="grid grid-cols-2 place-items-center">
                        <img src="{{ asset('img/home/authen-icon-2.png') }}" class="object-cover h-24 md:h-28"
                            alt="Authen" />
                        <p class="">We roast our coffee in our world-class roastery nestled in the heart of Bali.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 place-items-center">
                        <img src="{{ asset('img/home/authen-icon-3.png') }}" class="object-cover h-24 md:h-28"
                            alt="Authen" />
                        <p class="">Our finished product is packaged and shared out to our club members, locally
                            and
                            around
                            the globe.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="py-20 px-5 bg-fixed bg-center"
        style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('https://balicoffeeclub.com/wp-content/uploads/2022/04/temple-gates-lempuyang-luhur-temple-bali-indonesia-1.jpg');">
        <h1 class="text-4xl text-center font-bold text-white">Our Popular Coffee</h1>
        <div class="mt-20 grid grid-cols-3">
            <img src="{{ asset('img/home/orange-black-1.jpg') }}" class="h-[30vw] mx-auto" alt="">
            <img src="{{ asset('img/home/Tumbler-Mug-2-1.png') }}" class="h-[30vw] mx-auto" alt="">
            <img src="{{ asset('img/home/orange-black-2.jpg') }}" class="h-[30vw] mx-auto" alt="">
        </div>
    </section>

    <!--  -->
    <section class="p-5 pt-20 md:pt-32 bg-white">
        <div class="grid md:grid-cols-2 place-items-center container mx-auto">
            <div class="">
                <h2 class="text-3xl md:text-4xl font-bold">Superior taste from “the island of the gods”</h2>
                <p class="mt-10 text-justify">Indonesia has long been considered a prime location for growing coffee. The
                    mountainous
                    regions of
                    the
                    tropics are ideal for raising superb quality beans. Here in Bali, we have two great mountains, both
                    active volcanoes, that rumble with energy from deep within the earth and are surrounded by fertile
                    black
                    volanic soil which is perfect for growing wonderful coffee with a superior taste.</p>
                <a href="#">
                    <button class="mt-5 md:mt-10 bg-white p-3 rounded-md text-[#ff5700] border-2 border-[#ff5700]">Know
                        More</button>
                </a>
            </div>
            <div class="mt-10 md:grid grid-cols-4">
                <img src="{{ asset('img/home/Rectangle-18.jpg') }}" class="md:h-[20vw] mx-auto col-start-2 col-span-3"
                    alt="">
            </div>
        </div>
    </section>

    <!-- OUR NEWS -->
    <section class="p-5 md:pt-32 bg-white">
        <div class="text-center">
        <h3 class="text-[4vw] lg:text-[2vw]">OUR NEWS</h3>
        <h2 class="font-bold text-[6vw] lg:text-[3vw]">Coffeepedia</h2>
        </div>
        <div class="pt-10 grid md:grid-cols-3 container mx-auto gap-y-5 md:gap-y-0 gap-x-20">

            @include('static.coffeepedia.news1')

            @include('static.coffeepedia.news2')

            @include('static.coffeepedia.news3')

        </div>
    </section>

    <!-- <section> -->
        @include('components.ctayt')
    <!-- </section> -->

    <!-- INSTAGRAM -->
    <section class="pt-5 grid md:grid-cols-3">
    <a href=""><img src="{{ asset('img/instagram/Chillhouse-Breakfast-2.png') }}" class="w-screen mx-auto" alt=""></a>
    <a href=""><img src="{{ asset('img/instagram/Chillhouse-Breakfast-1.png') }}" class="w-screen mx-auto" alt=""></a>
    <a href=""><img src="{{ asset('img/instagram/Chillhouse-Breakfast.png') }}" class="w-screen mx-auto" alt=""></a>
    </section>

    <!-- OUR RECOMMENDATIONS -->
    <!-- <section class="py-20 px-5"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('https://balicoffeeclub.com/wp-content/uploads/2022/05/balinesse-dancer.jpg');">
            <h1 class="text-4xl text-center font-bold text-white">Our Recommendations</h1>
            <div class="grid grid-cols-4">

            </div>
        </section> -->

    <!-- <section class="pt-32 grid md:grid-cols-12">
            <div class="bg-gray-100 md:col-span-5 md:hidden">
                <img src="" class="h-full" alt="test">
                </img>
            </div>
            <div class="text-center grid col-span-7 grid-cols-7">
                <div class="col-start-3 col-span-3 py-52">
                    <h3 class="text-[3vw] font-semibold">" Helix - Spiral "</h3>
                    <p class="pt-12 text-md text-left">Our missions are to continuously update production of creative, like
                        the
                        spiral
                        structure which keeps going up infinitely without passing the same position twice, and to create
                        businesses which can advance brands and society further.</p>
                </div>
            </div>
            <div class="bg-gray-100 md:col-span-5 hidden md:block">
                <img src="" class="h-full" alt="test">
                </img>
            </div>
        </section> -->

</main>
<!-- <div class="grid grid-cols-12" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0)">
        <div class="py-36 col-start-12"
            style="background-image:  linear-gradient(to bottom, rgba(243, 244, 246, 1), rgba(0, 0, 0, 0));"></div>
    </div> -->
@endsection