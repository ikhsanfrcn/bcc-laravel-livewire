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

    <main class="py-5 md:py-12 lg:py-20 px-5 md:px-12 lg:px-20 bg-white">
        <section class="p-5 md:pt-20">
            <form action="" class="grid grid-cols-12 mb-4">
                @csrf
                <div class="col-span-12">
                    <div class="ml-auto w-fit flex">
                        <input type="text" name="post_title" placeholder="Search" id=""
                            class="px-2 py-2 border-2 border-neutral-100 rounded-lg"
                            value="{{ isset($_GET['post_title']) ? $_GET['post_title'] : '' }}">
                        <button type="submit" class="ml-4 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-4 h-4 text-neutral-400">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
            <div class="grid grid-cols-12 gap-10">
                @foreach ($pedia as $post)
                    <div
                        class="col-span-6 flex items-center bg-white border-2 rounded-lg overflow-hidden border-neutral-100">
                        <div class="w-2/5 h-full">
                            <img src="{{ $post->post_image }}" alt="{{ $post->post_title }}"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="w-3/5 px-2 py-4">
                            <h3>
                                <a href="javascript:void(0)"
                                    class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                    {{ $post->post_title }}
                                </a>
                            </h3>
                            <p class="text-body-color mb-7 text-sm leading-relaxed">
                                {{ substr($post->post_content, 0, 200) }}
                            </p>
                            <a href="javascript:void(0)"
                                class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-blue-400">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </main>
@endsection

@section('script')
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
@endsection
