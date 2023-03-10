<div id="navbar"
    class="z-30 fixed flex flex-wrap items-center justify-between w-[90%] left-[5%] py-4 px-4 text-lg text-gray-700 bg-transparent ease-in-out duration-500 rounded-md">
    <div class="flex items-center mr-6">
        <a href="/">
            <img src="{{ asset('img/bcc-horizontal-blackfont.webp') }}" class="h-16 md:h-20" alt="">
        </a>
    </div>
</div>
<nav class="hidden md:block">
    <div class="z-40 fixed hidden w-full items-center justify-between pl-[5%] py-4 px-4 ease-in-out duration-1000 bg-white drop-shadow-xl  md:h-screen"
        id="menu">
        <div class="grid grid-cols-5">
            <a href="/">
                <img src="{{ asset('img/bcc-horizontal-blackfont.webp') }}" class="h-20 ml-4" alt="">
            </a>
        </div>
        <div class="mt-5 grid grid-cols-8 py-16 drop-shadow-xl">
            <div class="grid text-black col-start-2 col-span-3 text-[1.5vw] h-[70vh]">
                <a class="block hover:text-red-400 focus-within:text-black" href="/">HOME</a>
                <a class="block hover:text-red-400" href="about-us">ABOUT US</a>
                <a class="block hover:text-red-400 focus-within:text-black" href="/coffee">COFFEE</a>
                <a class="block hover:text-red-400 focus-within:text-black" href="/pastry">PASTRY</a>
                <a class="block hover:text-red-400 focus-within:text-black" href="/eatery">EATERY</a>
                <a class="block hover:text-red-400" href="coffeepedia">COFFEEPEDIA</a>
                <a class="block hover:text-red-400" href="contact">CONTACT</a>
                @auth
                    <a class="block hover:text-red-400" href="/admin/dashboard">DASHBOARD</a>
                @else
                    <a class="block hover:text-red-400" href="/membership">MEMBERSHIP</a>
                @endauth
            </div>
            
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button"
        class="z-50 md:w-[2vw] cursor-pointer fixed right-[12vw] top-12" fill="none" viewBox="0 0 24 24"
        stroke="#ff5700">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>

</nav>

<!-- MOBILE -->

<nav class="block md:hidden">
    <div class="z-40 fixed hidden w-full items-center justify-between pl-[5%] py-4 px-4 ease-in-out duration-1000 bg-white h-screen overflow-y-auto"
        id="menuMobile">
        <div class="grid grid-cols-2">
            <a href="/">
                <img src="{{ asset('img/bcc-horizontal-blackfont.webp') }}" class="h-16 ml-4" alt="">
            </a>
        </div>
        <div class="mt-12 grid grid-cols-12 py-10">
            <div class="col-start-2 col-span-10 grid grid-rows-4 gap-y-8 text-black text-[4.5vw]">
                <a class="block hover:text-red-400 focus-within:text-black" href="/">HOME</a>
                <a class="block hover:text-red-400" href="/about-us">ABOUT US</a>
                <a class="block hover:text-red-400 focus-within:text-black" href="/coffee">COFFEE</a>
                <a class="block hover:text-red-400 focus-within:text-black" href="/pastry">PASTRY</a>
                <a class="block hover:text-red-400 focus-within:text-black" href="/eatery">EATERY</a>
                <a class="block hover:text-red-400" href="/coffeepedia">COFFEEPEDIA</a>
                <a class="block hover:text-red-400" href="/contact">CONTACT</a>
                @auth
                    <a class="block hover:text-red-400" href="/admin/dashboard">DASHBOARD</a>
                @else
                    <a class="block hover:text-red-400" href="/membership">MEMBERSHIP</a>
                @endauth
            </div>
        </div>
    </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menuMobile-button"
        class="z-50 w-[6vw] cursor-pointer fixed right-[12vw] top-12" fill="none" viewBox="0 0 24 24"
        stroke="#ff5700">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</nav>

<!--  -->

<script>
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');

    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // MOBILE
    const buttonMobile = document.querySelector('#menuMobile-button');
    const menuMobile = document.querySelector('#menuMobile');

    buttonMobile.addEventListener('click', () => {
        menuMobile.classList.toggle('hidden');
    });


    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0px";
            // document.getElementById("navbar").style.backgroundColor =  "rgba(55, 65, 81, 0.8)";
        } else {
            document.getElementById("navbar").style.top = "-100px";
            // document.getElementById("navbar").style.backgroundColor =  "rgba(55, 65, 81, 0.8)";
        }

        //   if (window.pageYOffset == 0) {
        //     document.getElementById("navbar").style.top = "0";
        //     document.getElementById("navbar").style.backgroundColor = "transparent";
        //   }
        prevScrollpos = currentScrollPos;
    }
</script>
