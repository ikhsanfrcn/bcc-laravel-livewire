<nav id="navbar"
    class="z-30 fixed flex flex-wrap items-center justify-between w-[90%] left-[5%] py-4 px-4 text-lg text-gray-700 bg-transparent ease-in-out duration-500 rounded-md">
    <div class="flex items-center flex-shrink-0 text-red-500 mr-6">
        <a href="/">
            <img src="{{asset ('img/bcc-horizontal-whitefont-1.png')}}" class="h-20" alt="">
        </a>
    </div>
</nav>

<div class="z-40 fixed hidden w-full items-center ease-in-out pl-[6%] py-32 duration-1000 bg-white" id="menu">
    <div class="flex items-center flex-shrink-0 text-red-500 mr-6">
    <a href="/">
            <img src="{{asset ('img/bcc-horizontal-whitefont-1.png')}}" class="h-20" alt="">
        </a>
        <ul class=" pt-4 text-base text-black flex justify-between">
            <li>
                <a class="p-4 py-2 block hover:text-red-400 focus-within:text-black" href="#asdasd">LINK 1</a>
            </li>
            <li>
                <a class="p-4 py-2 block hover:text-red-400" href="#">LINK 2</a>
            </li>
            <li>
                <a class="p-4 py-2 block hover:text-red-400" href="#">LINK 3</a>
            </li>
            <li>
                <a class="p-4 py-2 block hover:text-red-400" href="#">LINK 4</a>
            </li>
            <li>
                <a class="p-4 py-2 block hover:text-red-400 text-red-500" href="#">LINK</a>
            </li>
        </ul>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="z-50 w-6 cursor-pointer fixed right-[12vw] top-12"
    fill="none" viewBox="0 0 24 24" stroke="black">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
</svg>

<script>
const button = document.querySelector('#menu-button');
const menu = document.querySelector('#menu');


button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "30px";
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