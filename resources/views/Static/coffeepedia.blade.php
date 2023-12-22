@extends('Layout.main')
@section('page_title', 'Coffeepedia')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Bali Cofffee Club meta keyword about')

@section('content')
    <header class="h-96 md:h-screen grid md:grid-cols-3 items-center bg-center bg-cover"
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp') }});">
        <div class="md:col-start-2">
            <img src="{{ asset('img/we-know-coffee-white-1.webp') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" />
            <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
                @yield('page_title')
            </h1>
        </div>
    </header>

    <main class="w-full py-16 md:py-24 bg-white space-y-24">
        <section class="max-w-full md:max-w-2xl lg:max-w-7xl px-4 md:px-0 mx-auto space-y-8">
            <div class="space-y-2">
                <h1 class="text-neutral-600 text-base md:text-lg">
                    Explore Bali Coffee Club on YouTube
                </h1>
                <h2 class="font-bold text-neutral-800 text-2xl max-w-full md:max-w-2xl">
                    Discover the Rich World of Bali's Coffee Culture through Engaging Videos
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="border">
                    <iframe class="w-full h-52 lg:h-56" src="https://www.youtube.com/embed/FBQ6YiLKIZM?si=PaSjkrC1EOZTJN3L"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="p-4 space-y-2">
                        <div class="">
                            #WeKnowCoffee - Episode 1
                        </div>
                        <div class="text-xl font-medium">
                            Arabica VS Robusta: Basic Knowledge for Coffee Newbie
                        </div>
                    </div>
                </div>
                <div class="border">
                    <iframe class="w-full h-52 lg:h-56" src="https://www.youtube.com/embed/GHmDWrYanBw"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="p-4 space-y-2">
                        <div class="">
                            #WeKnowCoffee - Episode 2
                        </div>
                        <div class="text-xl font-medium">
                            Make a Coffee with Taehyung? Watch this video!
                        </div>
                    </div>
                </div>
                <div class="border">
                    <iframe class="w-full h-52 lg:h-56" src="https://www.youtube.com/embed/QsYeBsDbC-c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="p-4 space-y-2">
                        <div class="">
                            #WeKnowCoffee - Episode 3
                        </div>
                        <div class="text-xl font-medium">
                            From Plantation to Your Cup "The Bali Coffee Club Journey"
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-16 max-w-full md:max-w-2xl lg:max-w-7xl mx-auto">
            <div class="w-full space-y-4">
                <a class="text-white bg-[#ff5700] text-center w-fit mx-auto block p-2.5 border"
                    href="https://www.youtube.com/@bvrgroupasia">Susbcribe to Our Youtube Channel</a>
            </div>
        </section>

    </main>
@endsection

@section('script')
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
@endsection
