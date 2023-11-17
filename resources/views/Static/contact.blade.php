@extends('Layout.main')
@section('page_title', 'Contact')
@section('meta_description', 'Bali Cofffee Club meta contact')
@section('meta_keywords', 'Bali Cofffee Club meta keyword contact')

@section('additional-header')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
@endsection

@section('content')
    <header class="h-96 md:h-screen grid grid-cols-3 items-center bg-center bg-cover"
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp') }});">
        <div class="col-start-2">
            <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
                @yield('page_title')
            </h1>
        </div>
    </header>
    <main class="bg-white">
        <section class="px-5 md:px-12 lg:px-20 grid grid-cols-12 w-full py-5 md:py-20 bg-white">
            <div class="col-span-12 md:col-span-6">
                <div class="text-2xl font-bold">
                    Get in Touch with Us
                </div>
                <div class="text-neutral-500 text-sm leading-relaxed">
                    Thank you for taking the time to reach out to us. We are always here to help and answer any questions
                    you may have. Whether it's regarding a product or service, or if you just have a general inquiry, we are
                    eager to hear from you.
                    Please fill out the form below with your information, including a brief description of what you would
                    like to discuss. Our team will get back to you as soon as possible.
                </div>
                @if ($errors->any())
                    <div
                        class="flex w-full mx-auto rounded-lg border-l-[6px] border-[#F87171] bg-[#F87171] bg-opacity-[15%] px-7 py-8 shadow-md md:p-9">
                        <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                                    fill="#ffffff" stroke="#ffffff"></path>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h5 class="mb-3 text-base font-semibold text-[#B45454]">
                                There were some errors with your submission
                            </h5>
                            <ul class="list-inside list-disc">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                @endif
                <form class="grid grid-cols-2 mt-5 gap-x-5 gap-y-5">
                    <div class="col-span-1">
                        <input type="text" name="name" placeholder="Your Name"
                            class="px-2 py-2 w-full bg-white drop-shadow-sm" required>
                    </div>
                    <div class="col-span-1">
                        <input type="email" name="email" placeholder="Your Email"
                            class="px-2 py-2 w-full bg-white drop-shadow-sm" required>
                    </div>
                    <div class="col-span-1">
                        <input type="number" name="phone_number" placeholder="Your Phone Number"
                            class="px-2 py-2 w-full bg-white drop-shadow-sm" required>
                    </div>
                    <div class="col-span-1">
                        <input type="text" name="subject" placeholder="Email Subject"
                            class="px-2 py-2 w-full bg-white drop-shadow-sm" required>
                    </div>
                    <div class="col-span-2">
                        <textarea name="message" placeholder="Your Message" id="" class="px-2 py-2 w-full bg-white drop-shadow-sm h-44"
                            required></textarea>
                    </div>
                    <div class="col-span-2">
                        <button type="submit"
                            class="w-full text-green-500 hover:text-white font-bold bg-white hover:bg-green-500 border border-opacity-50 border-green-500 hover:border-white rounded-md py-3 drop-shadow-sm transition ease-in-out duration-300">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-span-6">

            </div>
        </section>
        <section class="grid grid-cols-12 px-5 md:px-12 lg:px-20 gap-x-0 gap-y-5 md:gap-x-10">
            <div
                class="col-span-12 md:col-span-6 lg:col-span-4 border-2 rounded-md drop-shadow-md bg-white border-t-[#ff5700]">
                <img src="{{ asset('img/bcc-1.webp') }}" alt="" class="h-44 w-full object-cover">
                <div class="px-5 py-3">
                    <div class="text-base font-bold text-black">
                        BCC Canggu
                    </div>
                    <div class="text-sm font-semibold text-neutral-600 mt-2">
                        Address
                        <span class="block text-sm text-neutral-400">Jl. Kubu Manyar No.22, Canggu, Kec. Kuta Utara,
                            Kabupaten Badung, Bali 80361.</span>
                    </div>
                    <div class="text-sm font-semibold text-neutral-600 mt-2">
                        Phone Number
                        <span class="block text-sm text-neutral-400">+0361 9348918</span>
                    </div>
                    <div class="text-sm font-semibold text-neutral-600 mt-2">
                        Google Maps
                        <a href="https://goo.gl/maps/dtQ9aLYjCpHu3Qh6A" target="_blank"
                            class="block text-sm text-neutral-400">Click Here</a>
                    </div>
                </div>
            </div>
            <div
                class="col-span-12 md:col-span-6 lg:col-span-4 border-2 rounded-md drop-shadow-md bg-white border-t-[#ff5700]">
                <img src="{{ asset('img/bcc-sunset.webp') }}" alt="" class="h-44 w-full object-cover">
                <div class="px-5 py-3">
                    <div class="text-base font-bold text-black">
                        BCC Seminyak
                    </div>
                    <div class="text-sm font-semibold text-neutral-600 mt-2">
                        Address
                        <span class="block text-sm text-neutral-400">Gg. Meduri Lingkungan Taman Mertanadi No.5, Kerobokan
                            Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali 80361.</span>
                    </div>
                    <div class="text-sm font-semibold text-neutral-600 mt-2">
                        Phone Number
                        <span class="block text-sm text-neutral-400">+0361 9348918</span>
                    </div>
                    <div class="text-sm font-semibold text-neutral-600 mt-2">
                        Google Maps
                        <a href="https://goo.gl/maps/5WMJ5f8df5Q5KE1B8" target="_blank"
                            class="block text-sm text-neutral-400">Click Here</a>
                    </div>
                </div>
            </div>
        </section>
        <div id="map" class="mt-10 h-96 w-full drop-shadow-md"></div>
    </main>

    {{-- <main class="h-screen bg-neutral-100 drop-shadow-2xl py-20">
        <section>
            <div class="grid grid-cols-12 gap-x-5 md:gap-x-20 container mx-auto">
                <div class="col-start-2 md:col-start-3 col-span-2">
                    <h4 class="text-[4vw] md:text-[2vw]">Location</h4>
                </div>
                <div class="col-start-5 md:col-start-6 col-span-4 md:col-span-3 items-center">
                    <div class="text-neutral-500">
                        <hr class=" w-full h-0.5 mx-auto bg-neutral-500 border-0 rounded">
                        <h6 class="text-[2vw] md:text-[1vw]">Address</h6>
                    </div>

                </div>
                <div class="col-span-3 md:col-span-2 items-center">
                    <div class="text-neutral-500">
                        <hr class=" w-full h-0.5 mx-auto bg-neutral-500 border-0 rounded">
                        <h6 class="text-[2vw] md:text-[1vw]">Phone</h6>
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-y-12">
                <div class="grid grid-cols-12 gap-x-5 md:gap-x-20 container mx-auto">
                    <div class="col-start-5 md:col-start-6 col-span-4 md:col-span-3">
                        <h3 class="text-[3vw] md:text-[2vw] font-semibold">Seminyak</h3>
                        <p class="pt-1 text-[2vw] md:text-[1vw] text-justify md:text-left">Gg. Meduri Lingkungan Taman
                            Mertanadi No.5, Kerobokan Kelod, Kec.
                            Kuta Utara, Kabupaten Badung,
                            Bali 80361</p>
                    </div>
                    <div class="col-start-9 col-span-3 md:col-span-2">
                        <p class="text-[2.5vw] md:text-[1vw]">(0361) 9348918</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-x-5 md:gap-x-20 container mx-auto">
                    <div class="col-start-5 md:col-start-6 col-span-4 md:col-span-3">
                        <h3 class="text-[3vw] md:text-[2vw] font-semibold">Canggu</h3>
                        <p class="pt-1 text-[2vw] md:text-[1vw] text-justify md:text-left">Jl. Kubu Manyar No.22, Canggu,
                            Kec. Kuta Utara, Kabupaten Badung, Bali 80361</p>
                    </div>
                    <div class="col-start-9 col-span-3 md:col-span-2">
                        <p class="text-[2.5vw] md:text-[1vw]">(0361) 9348918</p>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="pt-20 grid grid-cols-12 gap-x-5 md:gap-x-20 container mx-auto">
            <div class="col-start-2 md:col-start-3 col-span-2">
                <h4 class="text-[4vw] md:text-[2vw]">Enquiries</h4>
            </div>
            <div class="col-start-5 md:col-start-6 col-span-7 md:col-span-5 grid grid-rows-2 items-center">
                <div class="text-neutral-500">
                    <hr class=" w-full h-0.5 mx-auto bg-neutral-500 border-0 rounded">
                    <h6 class="text-[2vw] md:text-[1vw]">E-mail</h6>
                </div>
                <p class="text-[4vw] md:text-[2vw]">info@balicoffeeclub.com</p>
            </div>
        </section>
    </main> --}}

@endsection

@section('script')
    <script>
        var map = L.map('map').setView([-8.6817676, 115.163008], 10);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var markerBccSunset = L.marker([-8.681714, 115.1629847]).addTo(map);
        var markerBccCanggu = L.marker([-8.6398162, 115.140326]).addTo(map);
    </script>
@endsection
