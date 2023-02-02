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

<main class="bg-neutral-100 drop-shadow-xl grid gap-y-12">

    <section class="">
        <div class="container mx-auto text-center">
            <div class="grid grid-rows-6 row-start-2">
                <h1 class="row-start-2 font-semibold text-[2vw]">COFFEE</h1>
                <hr class="row-start-3 w-[5vw] h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700">
                <!-- </div> -->
                <!-- <div class="py-12"> -->
                <p class="row-start-4 row-span-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id
                    lectus sapien. Fusce interdum
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
    </section>

    <section class="">
        <div class="grid grid-cols-12 container mx-auto">
            <!--  -->
            <div class="col-span-3">
                <p> We found <strong class="text-brand">123</strong> items for you! </p>
            </div>
            <!--  -->
            <div class="col-start-11 col-span-2">
                <form>
                    <div class="w-full">
                        <label class="">Type</label>
                        <div class="relative bg-white">
                            <select id="type" name="coffee_type_id" class="appearance-none w-full bg-white"
                                onchange='if(this.value != "") { this.form.submit(); }'>
                                <option>Default</option>
                                <option value="1">Bean</option>
                                <option value="2">Hot</option>
                                <option value="3">Ice</option>
                            </select>
                            <div
                                class="pointer-events-none absolute right-0 top-0 bottom-0 flex items-center px-2 text-gray-700 border-l">
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="px-5">
                        <button type="submit" class="">Submit</button>
                    </div> -->
                </form>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="pt-10 grid md:grid-cols-3 container mx-auto gap-y-5 md:gap-y-10 gap-x-20">
            @foreach ($coffees as $coffee)
            <a href="#">
                <div class="h-full w-full bg-black pt-64 pb-10 px-5 bg-cover bg-center" style="background-image:
            linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)),
            url('{{ $coffee->coffee_image }}');">
                    <h3 class="text-white font-bold text-left text-2xl">{{ $coffee->coffee_name }}</h3>
                </div>
            </a>
            @endforeach

        </div>
    </section>

    <section class="grid grid-cols-3 bg-neutral-100">
        <img src="{{ asset('img/coffee/20230118---BCC-Menu-18.jpg') }}">
        <img src="{{ asset('img/coffee/20230118---BCC-Menu-19.jpg') }}">
        <img src="{{ asset('img/coffee/20230118---BCC-Menu-20.jpg') }}">
    </section>
</main>
@endsection

@section('script')
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
@endsection