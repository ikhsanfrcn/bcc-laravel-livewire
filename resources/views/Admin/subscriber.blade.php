@extends('Layout.admin')
@section('page_title', 'Subscriber')

@section('page_content')
    <section class="px-5 md:px-12 lg:px-20 py-5 flex items-center justify-between">
        <div class="bg-white rounded-lg">
            <div class="text-2xl font-bold tracking-tight">Subscriber</div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 grid grid-cols-12">
        <div class="col-span-6 bg-neutral-50 px-2 py-2 font-bold text-sm">
            Name
        </div>
        <div class="col-span-6  bg-neutral-50 px-2 py-2 font-bold text-sm">
            Email
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
