@extends('Layout.admin')
@section('page_title', 'Blogpost')

@section('page_content')
    <section class="px-5 md:px-12 lg:px-20 py-5 flex items-center justify-between">
        <div class="bg-white rounded-lg">
            <div class="text-2xl font-bold tracking-tight">Blogpost</div>
        </div>
        <div>
            <a href="#"
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
            </a>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 py-5 grid grid-cols-12 gap-x-5">
        {{-- Blogpost Looping from Database --}}
        <div class="col-span-4 rounded-md overflow-hidden">
            <div class="bg-gray-400 h-32">

            </div>
            <div class="px-3 py-2">
                <p class="font-bold text-lg mb-2">
                    Blogpost Title
                </p>
                <p class="text-xs mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sequi iusto neque magni nemo. Quae hic
                    voluptas sint. Ullam dolorum ut animi quibusdam reiciendis corporis fugiat eveniet tenetur.
                </p>
                <p class="text-gray-400 font-bold text-xs text-left mb-2">Actions</p>
                <a href=""
                    class="text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    Delete
                </a>
                <a href=""
                    class="ml-10 text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    Edit
                </a>
            </div>
        </div>
        <div class="col-span-4 rounded-md overflow-hidden">
            <div class="bg-gray-400 h-32">

            </div>
            <div class="px-3 py-2">
                <p class="font-bold text-lg mb-2">
                    Blogpost Title
                </p>
                <p class="text-xs mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sequi iusto neque magni nemo. Quae hic
                    voluptas sint. Ullam dolorum ut animi quibusdam reiciendis corporis fugiat eveniet tenetur.
                </p>
                <p class="text-gray-400 font-bold text-xs text-left mb-2">Actions</p>
                <a href=""
                    class="text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    Delete
                </a>
                <a href=""
                    class="ml-10 text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    Edit
                </a>
            </div>
        </div>
        <div class="col-span-4 rounded-md overflow-hidden">
            <div class="bg-gray-400 h-32">

            </div>
            <div class="px-3 py-2">
                <p class="font-bold text-lg mb-2">
                    Blogpost Title
                </p>
                <p class="text-xs mb-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut sequi iusto neque magni nemo. Quae hic
                    voluptas sint. Ullam dolorum ut animi quibusdam reiciendis corporis fugiat eveniet tenetur.
                </p>
                <p class="text-gray-400 font-bold text-xs text-left mb-2">Actions</p>
                <a href=""
                    class="text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    Delete
                </a>
                <a href=""
                    class="ml-10 text-black hover:bg-white inline-flex items-center justify-center rounded-md text-center text-xs transition hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    Edit
                </a>
            </div>
        </div>
    </section>
@endsection
