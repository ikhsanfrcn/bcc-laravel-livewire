@extends('Layout.main')
@section('page_title', 'Contact')
@section('meta_description', 'Bali Cofffee Club meta contact')
@section('meta_keywords', 'Bali Cofffee Club meta keyword contact')

@section('content')

<header class="h-96 md:h-screen grid md:grid-cols-3 items-center bg-center bg-cover"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp')}});">
    <div class="md:col-start-2">
        <img src="{{ asset('img/we-know-coffee-white-1.webp') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" />
        <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
            Membership
        </h1>
    </div>
</header>

<main class="bg-neutral-100 drop-shadow-xl">
    <section class="h-screen grid grid-cols-12 grid-rows-6 container mx-auto">
        <div class="col-start-2 col-span-10 row-start-2 md:row-start-3">
            <div class="grid gap-y-10">
                <h3 class="text-[5vw] md:text-[2vw] font-semibold">Register as our Memberships</h3>
                <div class="grid md:grid-cols-2 gap-y-5 md:gap-x-10">
                    <!-- <div>
                    <input type="text" class="bg-neutral-200 py-3 px-5 w-full" placeholder="Name">
                    </div>
                    <div>
                    <input type="text" class="bg-neutral-200 py-3 px-5 w-full" placeholder="Phone Number">
                    </div>
                    <div class="md:col-span-2">
                    <input type="text" class="bg-neutral-200 py-3 px-5 w-full" placeholder="Phone Number">
                    </div> -->
                    <input type="text" class="bg-neutral-200 py-3 px-5 w-full" placeholder="Name">
                    <input type="text" class="bg-neutral-200 py-3 px-5 w-full" placeholder="Phone Number">
                    <input type="text" class="bg-neutral-200 py-3 px-5 w-full md:col-span-2" placeholder="Phone Number">
                </div>
                <div class="grid md:grid-cols-12">
                    <button class="md:col-start-12 bg-[#ff5700] py-3 text-white">Register</button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection