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
        
    </main>
@endsection
