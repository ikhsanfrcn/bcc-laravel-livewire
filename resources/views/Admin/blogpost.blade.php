@extends('Layout.admin')
@section('page_title', 'Blogpost')

@section('page_content')
    <section class="px-5 md:px-12 lg:px-20 py-5 flex items-center justify-between">
        <div class="bg-white rounded-lg">
            <div class="text-2xl font-bold tracking-tight">Blogpost</div>
        </div>
        <div x-data="{ modalOpen: false }">
            <button @click="modalOpen = true"
                class="flex items-center space-x-2 bg-green-500 hover:bg-green-400 transition ease-in-out duration-300 rounded-md text-white font-bold px-3 py-2">
                <div>
                    Add New Post
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                </div>
            </button>
            <div x-show="modalOpen" x-transition
                class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5">
                <div @click.outside="modalOpen = false"
                    class="w-3/4 rounded-[20px] bg-white h-full overflow-auto py-12 px-8 text-left md:py-[60px] md:px-[70px]">
                    @if ($errors->any())
                        <div
                            class="flex w-full rounded-lg border-l-[6px] border-transparent bg-white px-7 py-8 shadow-md md:p-9 mb-5">
                            <div
                                class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171] bg-opacity-[15%]">
                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                                        fill="#F87171" stroke="#F87171"></path>
                                </svg>
                            </div>
                            <div class="w-full">
                                <h5 class="mb-3 text-base font-semibold text-[#B45454]">
                                    There are some errors with your submission
                                </h5>
                                <ul class="list-inside list-disc">
                                    @foreach ($errors->all() as $error)
                                        <li class="text-base leading-relaxed text-[#CD5D5D]">
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <h3 class="text-dark pb-2 text-xl font-bold sm:text-2xl">
                        Create a New Blogpost
                    </h3>
                    <form action="{{ route('blogpost.store') }}" method="POST" class="my-5 grid grid-cols-12 gap-5" enctype="multipart/form-data">
                        @csrf
                        <div class="col-span-4">
                            <label for="" class=" text-neutral-800">Blogpost Title</label>
                            <input type="text" name='post_title'
                                class="w-full bg-gray-50 focus:bg-white px-2 py-2 rounded-md">
                        </div>
                        <div class="col-span-4">
                            <label for="" class=" text-neutral-800">Meta Keyword</label>
                            <input type="text" name='post_meta_keyword'
                                class="w-full bg-gray-50 focus:bg-white px-2 py-2 rounded-md">
                        </div>

                        <div class="col-span-8">
                            <label for="" class=" text-neutral-800">Meta Description</label>
                            <textarea type="text" name="post_meta_description" class="w-full bg-gray-50 focus:bg-white px-2 py-2 rounded-md"></textarea>
                        </div>

                        <div class="col-span-8">
                            <label for="" class=" text-neutral-800">Post Content</label>
                            <textarea type="text" name="post_content" class="h-full w-full bg-gray-50 focus:bg-white px-2 py-2 rounded-md"></textarea>
                        </div>
                        <div class="col-span-4">
                            <label for="" class=" text-neutral-800">Blogpost Image</label>
                            <input type="text" name='post_image'
                                class="w-full bg-gray-50 focus:bg-white px-2 py-2 rounded-md mb-4">
                            <label for="file"
                                class="flex min-h-[175px] w-full cursor-pointer items-center justify-center rounded-md border border-dashed border-primary p-6">
                                <div>
                                    <input type="file" name="post_image" id="file" class="sr-only">
                                    <span
                                        class="mx-auto mb-3 flex h-[50px] w-[50px] items-center justify-center rounded-full border border-stroke bg-white">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.5013 11.666C2.96154 11.666 3.33464 12.0391 3.33464 12.4993V15.8327C3.33464 16.0537 3.42243 16.2657 3.57871 16.4219C3.73499 16.5782 3.94695 16.666 4.16797 16.666H15.8346C16.0556 16.666 16.2676 16.5782 16.4239 16.4219C16.5802 16.2657 16.668 16.0537 16.668 15.8327V12.4993C16.668 12.0391 17.0411 11.666 17.5013 11.666C17.9615 11.666 18.3346 12.0391 18.3346 12.4993V15.8327C18.3346 16.4957 18.0712 17.1316 17.6024 17.6004C17.1336 18.0693 16.4977 18.3327 15.8346 18.3327H4.16797C3.50493 18.3327 2.86904 18.0693 2.4002 17.6004C1.93136 17.1316 1.66797 16.4957 1.66797 15.8327V12.4993C1.66797 12.0391 2.04106 11.666 2.5013 11.666Z"
                                                fill="#3056D3"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.41074 1.91009C9.73618 1.58466 10.2638 1.58466 10.5893 1.91009L14.7559 6.07676C15.0814 6.4022 15.0814 6.92984 14.7559 7.25527C14.4305 7.58071 13.9028 7.58071 13.5774 7.25527L10 3.67786L6.42259 7.25527C6.09715 7.58071 5.56951 7.58071 5.24408 7.25527C4.91864 6.92984 4.91864 6.4022 5.24408 6.07676L9.41074 1.91009Z"
                                                fill="#3056D3"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.0013 1.66602C10.4615 1.66602 10.8346 2.03911 10.8346 2.49935V12.4994C10.8346 12.9596 10.4615 13.3327 10.0013 13.3327C9.54106 13.3327 9.16797 12.9596 9.16797 12.4994V2.49935C9.16797 2.03911 9.54106 1.66602 10.0013 1.66602Z"
                                                fill="#3056D3"></path>
                                        </svg>
                                    </span>
                                    <span class="text-base text-body-color">
                                        Drag &amp; drop or
                                        <span class="text-primary underline"> browse </span>
                                    </span>
                                </div>
                            </label>
                        </div>
                        <div class="-mx-3 col-span-12 flex ">
                            <div class="w-full px-3">
                                <button @click="modalOpen = false"
                                    class="text-red-600 block w-full rounded-lg border border-red-600 p-3 text-center text-base font-medium transition hover:border-red-600 hover:bg-red-600 hover:text-white">
                                    Cancel
                                </button>
                            </div>
                            <div class="w-full px-3">
                                <button type="submit"
                                    class="bg-white border-green-400 block w-full rounded-lg border p-3 text-center text-base font-medium text-green-500 transition hover:bg-green-500 hover:text-white">
                                    Upload
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 py-5 grid grid-cols-12 gap-x-5">
        {{-- Blogpost Looping from Database --}}
        @foreach ($blogpost as $bp)
            <div class="col-span-4 rounded-md overflow-hidden">
                <img src="{{ $bp->post_image }}" class="h-44 object-cover w-full" alt="">
                <div class="px-3 py-2">
                    <p class="font-bold text-lg mb-2">
                        {{ $bp->post_title }}
                    </p>
                    <p class="text-xs mb-3">
                        {{ Str::limit($bp->post_content, 150) }}
                    </p>
                    <p class="text-gray-400 font-bold text-xs text-left mb-2">Actions</p>
                    <form action="/admin/blogpost/{{$bp->post_id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        Delete</button>
                    </form>
                </div>
            </div>
        @endforeach


    </section>
    <!-- ====== Modal Section Start -->

    <!-- ====== Modal Section End -->

@endsection
