@extends('Layout.admin')
@section('page_title', 'Dashboard')

@section('page_content')
    <section class="px-5 md:px-12 lg:px-20 py-5">
        <div class="bg-white rounded-lg">
            <div class="text-2xl font-bold tracking-tight">Welcome to Administrator Panel</div>
        </div>
    </section>
    <section class="px-5 md:px-12 lg:px-20">
        <div
            class="border-stroke w-3/4 flex items-center rounded-md border border-l-[8px] border-l-[#007BC3] bg-white p-5 pl-8">
            <div class="mr-5 flex h-[36px] w-full max-w-[36px] items-center justify-center rounded-full bg-[#007BC3]">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10 2.58333C5.90389 2.58333 2.58333 5.90389 2.58333 10C2.58333 14.0961 5.90389 17.4167 10 17.4167C14.0961 17.4167 17.4167 14.0961 17.4167 10C17.4167 5.90389 14.0961 2.58333 10 2.58333ZM0.75 10C0.75 4.89137 4.89137 0.75 10 0.75C15.1086 0.75 19.25 4.89137 19.25 10C19.25 15.1086 15.1086 19.25 10 19.25C4.89137 19.25 0.75 15.1086 0.75 10Z"
                        fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10.2011 6.76824C9.83259 6.70503 9.45358 6.77428 9.13121 6.96374C8.80884 7.1532 8.56393 7.45063 8.43984 7.80337C8.27184 8.28094 7.7485 8.5319 7.27093 8.3639C6.79336 8.1959 6.5424 7.67256 6.7104 7.19499C6.97815 6.43383 7.50665 5.792 8.20229 5.38316C8.89793 4.97433 9.7158 4.82489 10.5111 4.9613C11.3063 5.0977 12.0277 5.51117 12.5473 6.12845C13.0668 6.74562 13.3512 7.52671 13.3501 8.33343C13.3497 9.65287 12.3721 10.5168 11.6919 10.9702C11.3238 11.2156 10.9623 11.3957 10.6964 11.5139C10.5621 11.5736 10.4489 11.6189 10.3672 11.6501C10.3263 11.6657 10.293 11.6778 10.2686 11.6864L10.2389 11.6969L10.2293 11.7001L10.2258 11.7013L10.2245 11.7018C10.2242 11.7018 10.2233 11.7021 9.93345 10.8325L10.2233 11.7021C9.74305 11.8622 9.22392 11.6027 9.06383 11.1224C8.90392 10.6427 9.16271 10.1242 9.64194 9.96343C9.6421 9.96337 9.6414 9.96361 9.64194 9.96343L9.65444 9.95905C9.66671 9.95468 9.68713 9.94728 9.71455 9.93683C9.76952 9.91589 9.85167 9.88309 9.95178 9.8386C10.1546 9.74845 10.4181 9.61608 10.675 9.4448C11.2446 9.06504 11.5168 8.67922 11.5168 8.33251L11.5168 8.33114C11.5173 7.95722 11.3855 7.59517 11.1447 7.30912C10.9039 7.02306 10.5697 6.83145 10.2011 6.76824ZM9.64194 9.96343C9.6421 9.96337 9.6414 9.96361 9.64194 9.96343V9.96343ZM13.3501 8.33343C13.3501 8.33358 13.3501 8.33328 13.3501 8.33343L12.4335 8.33251H13.3501C13.3501 8.33282 13.3501 8.33312 13.3501 8.33343Z"
                        fill="white"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.08301 14.1667C9.08301 13.6604 9.49341 13.25 9.99967 13.25H10.008C10.5143 13.25 10.9247 13.6604 10.9247 14.1667C10.9247 14.6729 10.5143 15.0833 10.008 15.0833H9.99967C9.49341 15.0833 9.08301 14.6729 9.08301 14.1667Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="flex w-full items-center justify-between">
                <div>
                    <h3 class="mb-1 text-lg font-semibold text-black">
                        What is this?
                    </h3>
                    <p class="text-body-color text-sm leading-relaxed">
                        This is a Content Management System that was created by The Website Team from BVR Digital for Bali
                        Coffee Club. The idea of this content management system or CMS for short is to making things easy
                        for the BCC Team to update their own content on the website. If you have any trouble, please contact
                        the developer.
                    </p>
                    <p class="text-body-color text-sm leading-relaxed text-right mt-4">
                        Best Regards, <br />
                        <span class="font-bold italic">Website Team</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
