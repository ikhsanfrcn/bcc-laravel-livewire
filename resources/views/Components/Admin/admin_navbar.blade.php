<nav
    class="bg-white items-center grid grid-cols-12 px-5 md:px-12 lg:px-20 py-5 md:py-5 lg:py-5 border-b-2 border-b-gray-500/10">
    <div class="col-span-2">
        <img src="{{ asset('img/bcc-horizontal-blackfont.png') }}" class="w-36" alt="Bali Coffee Club">
    </div>
    <div class="col-span-8 space-x-8 text-sm">
        <a href="/admin/dashboard" class="{{ (request()->is('admin/dashboard')) ? 'text-black' : 'text-neutral-500' }} hover:text-black transition ease-in-out duration-300">Dashboard</a>
        <a href="{{route('blogpost.index')}}" class="{{ (request()->is('blogpost.index')) ? 'text-black' : 'text-neutral-500' }} hover:text-black transition ease-in-out duration-300">Blogpost</a>
        <a href="/admin/user" class="{{ (request()->is('admin/user')) ? 'text-black' : 'text-neutral-500' }} hover:text-black transition ease-in-out duration-300">User Management</a>
        <a href="/admin/subscribers" class="{{ (request()->is('admin/subscribers')) ? 'text-black' : 'text-neutral-500' }} hover:text-black transition ease-in-out duration-300">Subscribers</a>
    </div>
    <div class="col-span-2 text-sm">
        <span class="block -mb-2 font-bold">
            Matheus Ronan Abel
        </span>
        <span class="text-xs text-neutral-500">
            Administrator
        </span>
    </div>
</nav>
<section class="grid grid-cols-12 px-5 md:px-12 lg:px-20 py-3 bg-white border-b-2 border-b-gray-500/10">
    <div class="col-span-12 text-sm space-x-2">
        <a href="/admin/dashboard" class="">
            Home
        </a>
        <span>
            /
        </span>
        <span class="font-bold">
            @yield('page_title')
        </span>
    </div>
</section>