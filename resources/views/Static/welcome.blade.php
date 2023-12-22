@section('meta_description', 'Do you wanna experience a delightful taste of arabica coffee beans in Bali? Find our Bali Coffee Club cafe in Seminyak and Canggu')
@section('meta_keywords', 'bali coffee, cafe in seminyak, cafe in canggu, cafe sunset road, bali coffee beans, arabica coffee bali, arabica roasted coffee, arabica coffee beans, cafe in bali, cafe with wifi')
@extends('Layout.main')
@section('page_title', 'Enjoy Your Arabica Coffee in Bali')

@section('content')
    <header class="relative flex items-center justify-center h-screen overflow-hidden bg-black" itemscope itemtype="https://balicoffeeclub.com">
        <div class="relative z-30 grid md:grid-cols-6 text-white text-center">
            <div class="pt-20 md:pt-40 px-2 md:px-0 col-start-2 col-span-4">
                <img src="{{ asset('img/we-know-coffee-white-1.webp') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" itemprop="image"/>
                <h1 class="pt-5 md:pt-10 text-2xl md:text-5xl lg:text-6xl font-extrabold" itemprop="title">
                    Bali Coffee Club - Experience Arabica Coffee Beans
                </h1>
                <p class="pt-5 md:pt-10 text-sm md:px-32" itemprop="description">
                    Carefully grown and expertly roasted, savor Arabica coffee from Bali. Start your day the right way with the delightful taste of Bali in every cup from Bali Coffee Club (BCC). You can visit our cafes in Seminyak and Canggu.
                </p>
                <img src="{{ asset('img/home/output-onlinepngtools.webp') }}" class="pt-10 h-24 md:h-32 mx-auto" itemprop="aksara bali"
                    alt="We Know Coffee" />
            </div>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none hidden md:block" itemprop="vidio bcc">
            <source src="{{ asset('video/Bali-Coffee-Club_web2.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </header>

    <main class="bg-neutral-100 drop-shadow-2xl">
        <section class="py-20 px-5"
            style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url({{ asset('img/home/Uluwatu-scaled.webp') }});">
            <div class="grid md:grid-cols-2 container mx-auto place-items-center" itemscope itemtype="https://balicoffeeclub.com">
                <div class="text-white">
                    <h2 class="font-semibold text-[4vw] md:text-[1.2vw]" itemprop="title">ABOUT BCC COFFEE</h2>
                    <h2 class="pt-10 font-bold text-[6vw] md:text-[2vw]" itemprop="title sub">The Story Behind Bali, the Coffee, and the Club
                    </h2>
                    <p class="mt-5 text-justify md:text-left" itemprop="description">
                        At Bali Coffee Club (BCC), we're passionate to celebrate culture surrounding Arabica coffee beans in Bali. From the beautiful landscape of Bali to your cup, wherever it may be, we share a part of our culture direct to you.
                    </p>
                    <a href="/about-us" target="_blank" title="Experience Our Values!">
                        <button class="mt-5 md:mt-10 text-white p-3 rounded-md bg-[#ff5700]">Experience Our Values!</button>
                    </a>
                </div>
                <div class="md:grid grid-cols-4">
                    <img src="{{ asset('img/home/image-23-1.webp') }}" itemprop="images murals"
                        class="pt-10 md:pt-0  object-cover mx-auto md:rounded-[32px] col-start-2 col-span-3"
                        alt="Murals" />
                </div>
            </div>
            <div class="grid grid-cols-12 text-white" itemscope itemtype="https://balicoffeeclub.com">
                <div class="col-start-2 col-span-10">
                    <h2 class="py-12 font-bold text-[6vw] md:text-[2vw]" itemprop="title">
                        Behind Our Arabica Coffee
                    </h2>
                    <div class="grid lg:grid-cols-3 gap-y-10 lg:gap-y-0">
                        <div class="grid grid-cols-2 place-items-center">
                            <img src="{{ asset('img/home/authen-icon-1.webp') }}" class="object-cover h-20 md:h-24 lg:h-28" itemprop="images"
                                alt="Authen" />
                            <p class="text-[3.5vw] md:text-[1.5vw] lg:text-[1vw]" itemprop="title">Arabica coffee beans from local Indonesian farmers who practice responsible growing methods.</p>
                        </div>
                        <div class="grid grid-cols-2 place-items-center">
                            <img src="{{ asset('img/home/authen-icon-2.webp') }}" class="object-cover h-20 md:h-24 lg:h-28" itemprop="images"
                                alt="Authen" />
                            <p class="text-[3.5vw] md:text-[1.5vw] lg:text-[1vw]"  itemprop="title">We roast our coffee in our world-class roastery nestled in the heart of Bali.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 place-items-center">
                            <img src="{{ asset('img/home/authen-icon-3.webp') }}" class="object-cover h-20 md:h-24 lg:h-28" itemprop="images"
                                alt="Authen" />
                            <p class="text-[3.5vw] md:text-[1.5vw] lg:text-[1vw]"  itemprop="title">We package and distribute our Bali Arabica coffee beans to our club members - locally and worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="lg:h-screen py-20 px-5 bg-fixed bg-center"
                 style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url({{ asset('img/home/temple-gates-lempuyang-luhur-temple-bali-indonesia-1.webp') }});">
            <h1 class="text-4xl text-center font-bold text-white">Our Popular Coffee</h1>
            <div class="mt-20 grid grid-cols-3">
                <img src="{{ asset('img/home/packaging-depan.png') }}" class="h-[30vw] mx-auto" alt="">
                <img src="{{ asset('img/home/Tumbler-Mug-2-1.webp') }}" class="h-[30vw] mx-auto" alt="">
                <img src="{{ asset('img/home/packaging-belakang.png') }}" class="h-[30vw] mx-auto" alt="">
            </div>
        </section>

        <section class="grid md:grid-cols-3">
            <a href="https://www.instagram.com/p/Co6mQSEhktJ/?igshid=MzRlODBiNWFlZA%3D%3D"><img src="{{ asset('img/home/ig-feeds-6.jpg') }}"
                                                                                                class="w-screen mx-auto" alt=""></a>
            <a href="https://www.instagram.com/p/CxQVkxmB-Ss/?igshid=MzRlODBiNWFlZA%3D%3D"><img src="{{ asset('img/home/ig-feeds-5.png') }}"
                                                                                                class="w-screen mx-auto" alt=""></a>
            <a href="https://www.instagram.com/p/CoW2bJpvgUq/?igshid=MzRlODBiNWFlZA%3D%3D"><img src="{{ asset('img/home/ig-feeds-1.jpg') }}"
                                                                                                class="w-screen mx-auto" alt=""></a>
        </section>
{{--        <section class="p-5 pt-20 md:pt-32">--}}
{{--            <div class="grid md:grid-cols-2 place-items-center container mx-auto">--}}
{{--                <div class="">--}}
{{--                    <h2 class="text-3xl md:text-4xl font-bold">Superior taste from “the island of the gods”</h2>--}}
{{--                    <p class="mt-10 text-justify">Indonesia has long been considered a prime location for growing--}}
{{--                        coffee. The mountainous regions of the tropics are ideal for raising superb quality beans. Here in Bali, we have two great mountains,--}}
{{--                        both active volcanoes, that rumble with energy from deep within the earth and are surrounded by--}}
{{--                        fertile black volanic soil which is perfect for growing wonderful coffee with a superior taste.</p>--}}
{{--                    <a href="">--}}
{{--                        <button class="mt-5 md:mt-10 text-white p-3 rounded-md bg-[#ff5700]">Know--}}
{{--                            More</button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="mt-10 md:grid grid-cols-4">--}}
{{--                    <img src="{{ asset('img/home/Rectangle-18.webp') }}" class="md:h-[20vw] mx-auto col-start-2 col-span-3"--}}
{{--                         alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </main>
@endsection

@section('script')
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
@endsection
