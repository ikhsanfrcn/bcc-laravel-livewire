@extends('Layout.main')
@section('page_title', 'Coffee')
@section('meta_description', 'Bali Cofffee Club meta description coffee')
@section('meta_keywords', 'Bali Cofffee Club meta keyword coffee')

@section('content')

<header class="flex items-center justify-center h-[75vh] bg-black px-5 md:px-14 lg:px-20">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <h1 class="text-white font-extrabold text-6xl tracking-tight">@yield('page_title')</h1>
        </div>
    </div>
</header>

<main class="bg-neutral-100 drop-shadow-xl">

    <section>
        <div class="container mx-auto text-center">
            <div class="grid grid-rows-3">
                <h1 class="font-semibold text-[2vw]">COFFEE</h1>
                <hr class=" w-[5vw] h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
                </div>
                <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id lectus sapien. Fusce interdum
                    felis eu risus semper varius. Maecenas sapien magna, lacinia gravida leo placerat, posuere facilisis
                    quam. Fusce ut quam dignissim quam suscipit laoreet. Nam cursus felis ornare sapien ultrices
                    consequat.
                    Aliquam volutpat congue odio, ut hendrerit risus interdum eget. Sed cursus ligula nec magna aliquet
                    suscipit. Donec nec nisi placerat, rhoncus augue malesuada, laoreet eros. Fusce vel volutpat urna.
                    Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit.

                    Sed ullamcorper aliquet congue. Cras at tortor eu turpis cursus semper. Suspendisse finibus lacinia
                    justo ut egestas. Morbi odio massa, molestie vel lacus id, maximus tempor risus. Integer elementum,
                    nibh
                    nec vehicula ultricies, libero risus rutrum sem, a dignissim eros sapien a nibh. Proin libero leo,
                    viverra sed suscipit in, sodales ac arcu. Praesent ac orci turpis. Nullam elementum convallis
                    aliquam.
                    Vestibulum bibendum orci quis elit gravida euismod sed nec ipsum. Nam velit elit, auctor suscipit
                    posuere id, condimentum ac dui. Proin eros nulla, vulputate et condimentum et, gravida at ex.</p>
            </div>
        </div>

    <section class="grid grid-cols-3 bg-neutral-100">
        <img src="{{ asset('img/coffee/20230118---BCC-Menu-18.jpg') }}">
        <img src="{{ asset('img/coffee/20230118---BCC-Menu-19.jpg') }}">
        <img src="{{ asset('img/coffee/20230118---BCC-Menu-20.jpg') }}">
    </section>
</main>
@endsection