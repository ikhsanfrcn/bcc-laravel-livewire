<div id="navbar"
    class="z-30 fixed flex flex-wrap items-center justify-between w-[90%] left-[5%] py-4 px-4 text-lg text-gray-700 bg-transparent ease-in-out duration-500 rounded-md">
    <div class="flex items-center mr-6">
        <a href="/">
            <img src="{{asset ('img/bcc-horizontal-blackfont.webp')}}" class="h-20" alt="">
        </a>
    </div>
</div>
<nav class="hidden md:block">
    <div class="z-40 fixed hidden w-full items-center justify-between pl-[5%] py-4 px-4 ease-in-out duration-1000 bg-white drop-shadow-xl"
        id="menu">
        <div class="grid grid-cols-5">
            <a href="/">
                <img src="{{asset ('img/bcc-horizontal-blackfont.webp')}}" class="h-20 ml-4" alt="">
            </a>
        </div>
        <div class="mt-12 grid grid-cols-8 py-16 drop-shadow-xl">
            <div class="grid gap-y-5 text-black col-start-2 col-span-3 text-[2.5vw]">
                <a class="block hover:text-red-400 focus-within:text-black" href="/">HOME</a>
                <div class="grid grid-cols-7 text-[1.5vw] text-center place-items-center">
                    <a class="block hover:text-red-400 col-start-3" href="coffee">COFFEE</a>
                    <p>/</p>
                    <a class="block hover:text-red-400" href="bakery">BAKERY</a>
                    <p>/</p>
                    <a class="block hover:text-red-400" href="eatery">EATERY</a>
                </div>
                <a class="block hover:text-red-400" href="about-us">ABOUT US</a>
                <a class="block hover:text-red-400" href="coffeepedia">COFFEEPEDIA</a>
                <a class="block hover:text-red-400" href="contact">CONTACT</a>
                <a class="block hover:text-red-400" href="membership">MEMBERSHIP</a>
                @auth
                <a class="block hover:text-red-400" href="/admin/dashboard">DASHBOARD</a>
                @else
                <a class="block hover:text-red-400" href="/register">REGISTER</a>
                <a class="block hover:text-red-400" href="/login">LOGIN</a>
                @endauth
            </div>
            <div class="col-start-6 col-span-2 grid grid-rows-3 gap-y-5">
                <div class="row-span-2 grid">
                    <h6 class="text-gray-300">Address</h6>
                    <h4 class="text-[2vw]">Seminyak</h4>
                    <p class="text-[1vw]">
                        Gg. Meduri Lingkungan Taman Mertanadi No.5, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung,
                        Bali
                        80361
                    </p>
                    <h4 class="text-[2vw]">Canggu</h4>
                    <p class="text-[1vw]">
                        Jl. Kubu Manyar No.22, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali 80361
                    </p>
                </div>
                <div class="">
                    <h6 class="text-gray-300">Phone</h6>
                    <p class="text-[1vw]">
                        (0361) 9348918
                    </p>
                    <h6 class="text-gray-300">Enquiries</h6>
                    <p class="text-[1vw]">
                        admin@balicoffeeclub.com
                    </p>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="z-50 w-6 cursor-pointer fixed right-[12vw] top-12"
        fill="none" viewBox="0 0 24 24" stroke="#ff5700">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>

</nav>

<!-- MOBILE -->

<nav class="block md:hidden">
    <!-- <div id="navbar"
        class="z-30 fixed flex flex-wrap items-center justify-between w-[90%] left-[5%] py-4 px-4 text-lg text-gray-700 bg-transparent ease-in-out duration-500 rounded-md">
        <div class="flex items-center mr-6">
            <a href="/">
                <img src="{{asset ('img/bcc-horizontal-whitefont-1.webp')}}" class="h-16" alt="">
            </a>
        </div>
    </div> -->

    <div class="z-40 fixed hidden w-full items-center justify-between pl-[5%] py-4 px-4 ease-in-out duration-1000 bg-white"
        id="menuMobile">
        <a href="/">
            <img src="{{asset ('img/bcc-horizontal-blackfont.webp')}}" class="h-20 ml-4" alt="">
        </a>
        <div class="mt-12 grid grid-cols-8 py-10">
            <div class="grid grid-rows-4 text-black col-span-3 text-[7vw]">
                <a class="p-4 py-2 block hover:text-red-400 focus-within:text-black" href="/">HOME</a>
                <div class="pl-10 grid grid-cols-5 text-[4vw] ptext-center place-items-center">
                    <a class="block hover:text-red-400" href="coffee">COFFEE</a>
                    <p>/</p>
                    <a class="block hover:text-red-400" href="bakery">BAKERY</a>
                    <p>/</p>
                    <a class="block hover:text-red-400" href="eatery">EATERY</a>
                </div>
                <a class="p-4 py-2 block hover:text-red-400" href="about-us">ABOUT US</a>
                <a class="p-4 py-2 block hover:text-red-400" href="coffeepedia">COFFEEPEDIA</a>
                <a class="p-4 py-2 block hover:text-red-400" href="contact">CONTACT</a>
                <a class="p-4 py-2 block hover:text-red-400" href="membership">MEMBERSHIP</a>
            </div>
        </div>
        <!-- <div class="grid grid-cols-12">
            <div class="col-start-3 col-span-4 grid grid-rows-3 gap-y-5">
                <div class="">
                    <h6 class="text-gray-300">Address</h6>
                    <p class="text-sm">
                        Gg. Meduri Lingkungan Taman Mertanadi No.5, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung,
                        Bali
                        80361
                    </p>
                </div>
                <div class="">
                    <h6 class="text-gray-300">Phone</h6>
                    <p class="text-sm">
                        +62 XXXX
                    </p>
                    <h6 class="pt-5 text-gray-300">Enquiries</h6>
                    <p class="text-sm">
                        admin@balicoffeeclub.com
                </div>
            </div> -->
    </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menuMobile-button"
        class="z-50 w-6 cursor-pointer fixed right-[12vw] top-12" fill="none" viewBox="0 0 24 24" stroke="#ff5700">
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