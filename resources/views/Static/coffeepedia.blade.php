@extends('Layout.main')
@section('page_title', 'Coffeepedia')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Bali Cofffee Club meta keyword about')

@section('content')
<header class="flex items-center justify-center h-[75vh] bg-black px-5 md:px-14 lg:px-20">
    <div class="grid grid-cols-12">
        <div class="col-span-12">
            <h1 class="text-white font-extrabold text-6xl tracking-tight">@yield('page_title')</h1>
        </div>
    </div>
</header>
<main class="py-5 md:py-12 lg:py-20 px-5 md:px-12 lg:px-20 bg-neutral-100">
    <section class="p-5 md:pt-32">
        <div class="text-center">
            <h3 class="text-[4vw] lg:text-[2vw]">OUR NEWS</h3>
            <h2 class="font-bold text-[6vw] lg:text-[3vw]">Coffeepedia</h2>
        </div>
        <form class="grid grid-cols-12">
            <div class="col-start-10 col-span-2">
                <label for="" class="form-label">Search</label>
                <input name="post_title" type="text" class="form-control"
                    value="{{isset($_GET['post_title']) ? $_GET['post_title'] : ''}}">
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary mt-4">Search</button>
            </div>
        </form>
        <div class="pt-10 grid md:grid-cols-3 container mx-auto gap-y-5 md:gap-y-0 gap-x-20">
            @foreach ($pedia as $post)
            <a href="#">
                <div class="w-full bg-black pt-64 pb-10 px-5 bg-cover bg-center" style="background-image:
            linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.5)),
            url('{{ $post->post_image }}');">
                    <h3 class="text-white font-bold text-left text-2xl">{{ $post->post_title }}</h3>
                </div>
            </a>
            @endforeach

        </div>
    </section>
</main>
@endsection

@section('script')
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
@endsection