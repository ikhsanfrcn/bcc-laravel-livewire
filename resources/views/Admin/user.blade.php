@extends('Layout.admin')
@section('page_title', 'User Management')

@section('page_content')
    <section class="px-5 md:px-12 lg:px-20 py-5 flex items-center justify-between">
        <div class="bg-white rounded-lg">
            <div class="text-2xl font-bold tracking-tight">User Management</div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20 grid grid-cols-12 items-center">
        <div class="col-span-3 bg-neutral-50 px-2 py-2 font-bold text-sm">
            User ID
        </div>
        <div class="col-span-3  bg-neutral-50 px-2 py-2 font-bold text-sm">
            Name
        </div>
        <div class="col-span-3  bg-neutral-50 px-2 py-2 font-bold text-sm">
            Email
        </div>
        <div class="col-span-3  bg-neutral-50 px-2 py-2 font-bold text-sm">
            User Role
        </div>
        @foreach ($user as $user)
            <div class="col-span-3 px-2 py-2 text-neutral-600">
                {{ $user->user_id }}
            </div>
            <div class="col-span-3 px-2 py-2 text-sm text-neutral-600">
                {{ $user->name }}
            </div>
            <div class="col-span-3 px-2 py-2 text-sm text-neutral-600">
                {{ $user->email }}
            </div>
            <div class="col-span-3 px-2 py-2 text-sm text-neutral-600">
                {{ $user->role_id }}
            </div>
        @endforeach
    </section>
    <!-- ====== Modal Section Start -->

    <!-- ====== Modal Section End -->

@endsection
