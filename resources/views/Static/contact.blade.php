@extends('Layout.main')
@section('page_title', 'Contact')
@section('meta_description', 'Bali Cofffee Club meta contact')
@section('meta_keywords', 'Bali Cofffee Club meta keyword contact')

@section('content')
<header class="h-96 md:h-screen grid md:grid-cols-3 items-center bg-center bg-cover"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp')}});">
    <div class="md:col-start-2">
        <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
            @yield('page_title')
        </h1>
    </div>
</header>


<main class="h-screen bg-neutral-100 drop-shadow-2xl py-20">

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
                    <p class="pt-1 text-[2vw] md:text-[1vw] text-justify md:text-left">Gg. Meduri Lingkungan Taman Mertanadi No.5, Kerobokan Kelod, Kec.
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
                    <p class="pt-1 text-[2vw] md:text-[1vw] text-justify md:text-left">Jl. Kubu Manyar No.22, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80361</p>
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
            <p class="text-[4vw] md:text-[2vw]">admin@balicoffeeclub.com</p>
        </div>
    </section>

    <!--  -->
    <!--  -->

    <!-- GMAPS -->
    <!-- <section class="pt-32">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.103371222662!2d115.1629847147842!3d-8.681719293762246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2478ae3378f59%3A0xea13d19be98b21a6!2sBali%20Coffee%20Club!5e0!3m2!1sen!2sid!4v1674610359982!5m2!1sen!2sid"
            class="w-full h-screen" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section> -->
</main>
@endsection