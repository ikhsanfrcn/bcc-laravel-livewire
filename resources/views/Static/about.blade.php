@extends('Layout.main')
@section('page_title', 'About Us')
@section('meta_description', 'Bali Cofffee Club meta description about')
@section('meta_keywords', 'Coffee Club in Canggu, Eatery in Bali, Best Pastry in Bali')

@section('content')
<header class="h-96 md:h-screen grid md:grid-cols-3 items-center bg-center bg-cover"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/aboutbg.webp')}});">
    <div class="md:col-start-2">
        <img src="{{ asset('img/we-know-coffee-white-1.webp') }}" class="h-5 md:h-10 mx-auto" alt="We Know Coffee" />
        <h1 class="pt-5 font-bold text-[12vw] md:text-[5vw] text-white text-center">
            About Us
        </h1>
    </div>
</header>

<main class="bg-neutral-100 drop-shadow-xl text-justify md:text-left">
    <!-- DESKTOP -->
    <section class="p-5 md:p-0 pt-20 md:pt-32 container mx-auto">
        <div class="grid md:grid-cols-12 gap-x-5 md:gap-x-10 gap-y-5 md:gap-y-0 items-center">
            <div class="col-span-12 md:col-span-6">
                <h2>About Us</h2>
                <div class="text-2xl font-bold">Dedicated to Quality</div>
                <img src="{{ asset('img/about/image-23-1-5.webp') }}" class="h-80 mx-auto py-5 block md:hidden" alt="" />
                <p class="text-neutral-500 mt-2 md:w-3/4">We prize quality above all else. The coffee plant
                    is
                    an incredible asset to our world, and the conditions for growing coffee are unique and special. We
                    are
                    dedicated to being good stewards of these gifts by seeing to it that quality is delivered in every
                    cup
                    of BCC coffee.</p>
            </div>
            <div class="col-span-12 md:col-span-6 hidden md:block">
                <div class="h-80 rounded-lg drop-shadow-md">
                    <img src="{{ asset('img/about/image-23-1-5.webp') }}" class="h-80 mx-auto" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="pt-20 md:pt-32">
        <div class="h-screen grid md:grid-cols-12 items-center bg-center bg-cover text-white"
            style="background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url({{ asset('img/about/dancer-2.webp')}});">
            <div class="pt-60 col-start-2 col-span-4 p-5 md:p-0">
                <h5 class="text-[4vw] md:text-[1.5vw]">
                    OUR MISSION
                </h5>
                <h3 class="text-[5vw] md:text-[2vw] font-bold">We source coffee only from Bali, from farmers we know and trust</h3>
                <p class="pt-5 text-[4vw] md:text-[1.2vw]">The global coffee industry has grown to a level that depreciates the farmer and in turn
                    the coffee
                    experience. That is why we are commited to working with farmers whom we know and trust, to ensure
                    that
                    our quality standard starts with the soil, continues through the harvest, and ends with a great cup
                    of
                    coffee.</p>
            </div>
        </div>
    </section>

    <section class="grid md:grid-cols-2">
        <div class="self-end">
            <img src="{{ asset('img/about/image-23-2.webp') }}" class="w-screen mx-auto" alt="" />
        </div>
        <div class="h-screen grid grid-cols-12 items-center bg-center bg-cover"
            style="background-image:  url({{ asset('img/about/Frame-38.webp')}});">
            <div class="pt-60 col-start-2 col-span-8">
            <h5 class="text-[4vw] md:text-[1.5vw]">
                    OUR STORY
                </h5>
                <h3 class="text-[5vw] md:text-[2vw] font-bold">Everything we do is a matter of heart, body and soul</h3>
                <p class="pt-5 md:p-0 text-[4vw] md:text-[1.2vw]">At BCC, we love coffee. We see it as a part of our daily lives, a way to start our
                    days, a constant in a world of change. Coffee is a comfort that humanity shares around the world; it
                    is at the heart of our business to support this global connection.</p>
            </div>
        </div>

    </section>

    <section class="md:pt-32">
        <div class="md:h-screen bg-center bg-cover bg-fixed text-white"
            style="background-image: url({{ asset('img/about/bali-climate-mount-agung-1.webp')}});">
            <div class="text-center py-12">
                <h5 class="text-[3vw] md:text-[1vw]">
                    Socially Reponsible
                </h5>
                <h3 class="text-[6vw] md:text-[4vw] font-bold">Our Local People</h3>
            </div>
            <div class="grid md:grid-cols-2 gap-x-20 container mx-auto place-items-center">
                <img src="{{ asset('img/about/image-23-2.webp') }}" class="w-screen mx-auto" alt="" />
                <p class="p-5 md:p-0 w-full md:w-11/12">At BCC our commitment to equal opportunity means cultivating an environment
                    where
                    differences in various attributes experienced both within Indonesia and globally, are embraced which
                    will build a culture that fosters a sense of responsibility to each other and the resources that are
                    all needed to produce our products.
                    <br>
                    <br>
                    We put our local farmers or employees and team members first, empowering them by providing
                    meaningful opportunities to not only pursue their aspirations but to educate them in the
                    responsibilities we have in looking after what God and Earth have supplied to us.
                    <br>
                    <br>
                    As we expand across the globe, we will serve to strengthen each community we are part of by being
                    the neighbor every neighborhood wants and by introducing the Bali Culture that has and is so
                    respected globally.
                </p>
            </div>
        </div>
    </section>

    <section class="md:h-screen container mx-auto grid md:grid-cols-2 gap-x-10 place-items-center">
        <img src="{{ asset('img/about/1502846833365-auto-x2-1.webp') }}" class="mx-auto" alt="" />
        <div class="w-full p-5 md:p-0 md:w-3/4">
            <h4 class="font-bold text-[6vw] md:text-[2vw]">Planet</h4>
            <p class="pt-5">Our mandate is to shift away from single-use packaging products to reusable packaging
                products.
                We will always continue to work on better ways to manage our waste by
                Investing in regenerative agriculture, reforestation, forest conservation, river restoration and water
                replenishment in our supply chain</p>
            <h4 class="pt-12 font-bold text-[6vw] md:text-[2vw]">Environmental and Social Impact Structure</h4>
            <p class="pt-5">As our brand continues to grow our mandate is to take the respect we have learned and
                developed in Bali
                and introduce this culture globally. This will allow us to have a greater impact into various
                establishments and developments that are unaware of the Cultural and environmental respect the Balinese
                have protected for centuries in their simple but environmental way of preserving their farming, culture,
                people and beliefs.</p>
        </div>
    </section>


</main>
@endsection