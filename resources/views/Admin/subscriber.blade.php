@extends('Layout.admin')
@section('page_title', 'Subscriber')

@section('page_content')
    <section class="px-5 md:px-12 lg:px-20 py-5 flex items-center justify-between">
        <div class="bg-white rounded-lg flex justify-between w-full items-center">
            <div class="text-2xl font-bold tracking-tight">Subscriber</div>
            <button class="flex items-center space-x-2 bg-green-500 hover:bg-green-400 transition ease-in-out duration-300 rounded-md text-white font-bold px-3 py-2">Export to CSV</button>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 grid grid-cols-12">
        <div class="col-span-4 bg-neutral-50 px-2 py-2 font-bold text-sm">
            Name
        </div>
        <div class="col-span-4  bg-neutral-50 px-2 py-2 font-bold text-sm">
            Email
        </div>
        <div class="col-span-4 bg-neutral-50 px-2 py-2 font-bold text-sm">
            Phone Number
        </div>
        @foreach ($subscriber as $subs)
            <div class="col-span-6 px-2 py-2 text-neutral-600">
                {{ $subs->name }}
            </div>
            <div class="col-span-6 px-2 py-2 text-sm text-neutral-600">
                {{ $subs->email }}
            </div>
        @endforeach
        
    </section>
    <!-- ====== Modal Section Start -->

    <!-- ====== Modal Section End -->

@endsection
