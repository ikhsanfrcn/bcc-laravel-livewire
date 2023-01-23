@extends('layout.layout')
@section('content')

<header class="relative flex items-center justify-center h-screen overflow-hidden">
    <div class="relative z-30 grid grid-cols-6 text-white text-center">
        <div class="col-start-2 col-span-4">
            <img src="{{ asset('img/we-know-coffee-white-1.png')}}" class="h-12 mx-auto" alt="We Know Coffee" />
            <h1 class="text-7xl font-extrabold">Start your day off right with Bali Coffee Club</h1>
            <p class="text-sm px-10">World class coffee, grown and roasted in Bali, it is the perfect way to start any day.
                Bring the energy of Bali into your morning with every cup of Bali Coffee Clubs.</p>
        </div>
    </div>
    <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source
            src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
            type="video/mp4" />
        Your browser does not support the video tag.
    </video>
</header>

<main class="z-40 bg-white">
    <section class="py-52 grid grid-cols-5">
        <div class="col-start-2 col-span-3">
            <h5 class="text-[2vw]">Our Solution</h5>
            <h1 class="text-[11vw]">Go Forward</h1>
        </div>
    </section>

    <section class="grid md:grid-cols-12">
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
    </section>

</main>
<div class="grid grid-cols-12" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0)">
    <div class="py-36 col-start-12 col-span-2"
        style="background-image:  linear-gradient(to bottom, rgba(243, 244, 246, 1), rgba(0, 0, 0, 0));"></div>
</div>
@endsection