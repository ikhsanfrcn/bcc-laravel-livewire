@extends('Layout.blogpost')

@section('page-title')
    {{ $post->post_title }}
@endsection
@section('meta-description')
    {{ $post->post_meta_description }}
@endsection
@section('meta-keywords')
    {{ $post->post_meta_keyword }}
@endsection

@section('content')
    <main class="bg-white">

        <header class="bg-white">
            <img src="{{ $post->post_image }}" alt="Bali Coffee Club - {{ $post->post_title }}"
                title="Bali Coffee Club - {{ $post->post_title }}"
                class="w-3/4 mx-auto mt-5 md:mt-20 h-96 object-cover rounded-lg drop-shadow-lg" alt="">
            <span class="text-sm block w-3/4 mx-auto mt-5 object-cover rounded-lg drop-shadow-lg">by Administrator</span>
        </header>
        <article class="w-full md:w-3/4 mx-auto mt-10 bg-white py-10 px-5 md:px-12 lg:px-20">
            <h1 class="font-semibold text-4xl">{{ $post->post_title }}</h1>
            <p class="leading-relaxed mt-5">{{ $post->post_content }}</p>
        </article>
    </main>
@endsection
