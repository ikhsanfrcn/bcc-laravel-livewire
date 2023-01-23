@extends('layout.auth')
@section('page_title', 'Login')

@section('page_content')

    <section class="grid grid-cols-12 gap-x-5 w-full md:w-3/4 bg-white rounded-lg drop-shadow-md overflow-hidden">
        <div class="col-span-12 md:col-span-6 px-10 py-20">
            <div class="font-semibold text-neutral-300">Hi, Clubbers!</div>
            <div class="font-black text-neutral-600 tracking-tight text-3xl w-3/4">
                Welcome to <br/>Bali Coffee Club
            </div>
            <form action="" class="mt-4 space-y-4">
                <input type="text" name="login_username" placeholder="Username" id="" class="w-full px-2 py-2 bg-neutral-50">
                <input type="password" name="login_password" placeholder="Password" id="" class="w-full px-2 py-2 bg-neutral-50">
                <button type="submit" class="bg-blue-400 w-full px-2 py-2 rounded-md text-white font-bold hover:bg-white hover:text-blue-400 transition ease-in-out duration-300">Login</button>
                <a href="" class="block w-full text-center p-2 text-sm text-neutral-400 hover:text-neutral-800 transition ease-in-out duration-300">Forgot Password?</a>
                <div class="block w-full text-center text-sm text-neutral-400">
                    Don't have an account? <a href="/register" class="hover:text-neutral-800 transition ease-in-out duration-300">Register here</a>
                </div>
            </form>
        </div>
        <div class="hidden md:col-span-6">
            <img src="{{asset('img/bcc-1.jpg')}}" class="h-full object-cover" alt="Bali Coffee Club Canggu">
        </div>
    </section>

@endsection
