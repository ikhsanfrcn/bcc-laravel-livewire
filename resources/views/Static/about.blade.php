@extends('Layout.main')
@section('page_title', 'About Us')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Bali Cofffee Club meta keyword about')

@section('content')
    <header class="flex items-center justify-center h-[75vh] bg-black px-5 md:px-14 lg:px-20">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h1 class="text-white font-extrabold text-6xl tracking-tight">About Us</h1>
            </div>
        </div>
    </header>
    <main class="py-5 md:py-12 lg:py-20 px-5 md:px-12 lg:px-20 bg-white">
        <div class="grid grid-cols-12 gap-x-5 md:gap-x-10 gap-y-5 md:gap-y-0 items-center">
            <div class="col-span-12 md:col-span-6">
                <h2>About Us</h2>
                <div class="text-2xl font-bold">Dedicated to Quality</div>
                <p class="text-neutral-500 leading-relaxed mt-2 w-3/4">We prize quality above all else. The coffee plant is
                    an incredible asset to our world, and the conditions for growing coffee are unique and special. We are
                    dedicated to being good stewards of these gifts by seeing to it that quality is delivered in every cup
                    of BCC coffee.</p>
            </div>
            <div class="col-span-12 md:col-span-6">
                <div class="bg-gray-300 h-80 rounded-lg drop-shadow-md"></div>
            </div>
        </div>
    </main>
@endsection
