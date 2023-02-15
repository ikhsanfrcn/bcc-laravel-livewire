<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bali Coffee Club - Useful Links</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: "montserrat", sans-serif !important;
        }
    </style>
</head>

<body
    class="min-h-screen flex items-center justify-center bg-[#131312]"style="
background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)),url({{ asset('img/bcc-1.webp') }});
background-position:right;
background-size:cover;
">
    <div class="grid grid-cols-12 w-full px-5 md:px-80 space-y-4">
        <div class="col-span-12">
            <a href="/">
                <img src="{{ asset('/img/bcc-horizontal-whitefont-1.webp') }}" class="w-52" alt="">
            </a>
        </div>
        <div class="col-span-12">
            <div class="text-neutral-200 font-bold">Hi, Good Looking!</div>
            <h1 class="text-white font-bold text-4xl">Bali Coffee Club</h1>
        </div>
        <a href="/promotion/bcc-canggu-sunset" class="text-neutral-200 col-span-12 rounded-md w-full">
            <div class="rounded-md w-full text-center py-5 border-2 border-neutral-600 hover:border-white transition ease-in-out duration-300">
                Bali Coffee Club
                <br />
                <span class="font-bold text-neutral-100">
                    Canggu & Sunset Outlet
                </span>
            </div>
        </a>
        <a href="/promotion/bcc-jakarta" class="text-neutral-200 col-span-12 rounded-md w-full">
            <div class=" text-center py-5 border-2 border-neutral-600 hover:border-white transition ease-in-out duration-300">
                Bali Coffee Club
                <br />
                <span class="font-bold text-neutral-100">
                    Jakarta Outlet
                </span>
            </div>
        </a>
        <a href="#" class="text-neutral-200 col-span-12 ">
            <div class="rounded-md w-full font-bold text-center py-5 border-2 border-neutral-600 hover:border-white transition ease-in-out duration-300">
                <span class="text-sm font-normal text-neutral-400">Follow us on <br /></span> Instagram
            </div>
        </a>
    </div>
</body>

</html>
