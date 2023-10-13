@extends('layouts.app')

@section('content')
    <div class="h-screen relative">
        <h1
            class="absolute select-none inset-0 flex items-center justify-center font-bold text-text-light z-10 text-4xl md:text-5xl lg:text-6xl xl:text-7xl transition-all duration-200">
            ASTRO TRAVEL</h1>
        <div class="flex items-center justify-center h-screen mb-12 bg-fixed bg-center bg-cover -translate-y-[48px]"
            style="background-image: url('{{ asset('images/index-main.jpg') }}'); background-size: cover;">
        </div>
    </div>

    <div class="max-w-screen">
        <div
            class="flex flex-col max-w-screen-xl mx-auto md:flex-row justify-evenly items-center md:items-start select-none mt-2 mb-5 ">
            <div class="mb-4">
                <h3 class="dark:text-text-light text-base sm:text-xl font-semibold transition-all duration-200">Why choose
                    us?</h2>
            </div>
            <article class="flex flex-col justify-items-center w-9/12 sm:w-2/5">
                <h1
                    class="mb-3 max-w-screen-sm text-left text-2xl font-bold sm:text-4xl transition-all duration-200 text-black-color dark:text-text-light antialiased">
                    Finding your dream destination is our priority
                </h1>
                <p class="font-medium text-sm text-left text-text-dark-gray dark:text-text-gray">With a collection of
                    destinations that include
                    stunning natural landscapes, vibrant cosmopolitan cities and enchanting tropical islands, we take you to
                    the world's most stunning places.</p>
            </article>
        </div>
    </div>

    <div
        class="sm:mb-5 w-screen grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center items-center select-none">
        <div
            class="w-52 h-44 mb-5 px-3 py-2 dark:bg-dark-secondary-bg rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9D4CCC"
                class="w-8 h-8 mb-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159-1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
            </svg>
            <h4 class="text-lg font-semibold text-black-color dark:text-text-light mb-2">Lots of Choices</h4>
            <p class="mb-1 text-sm font-semibold text-text-dark-gray/[.75] dark:text-text-gray">Thousands of the best
                destinations are ready to spoil your eyes.</p>
        </div>
        <div
            class="w-52 h-44 mb-5 px-3 py-2 dark:bg-dark-secondary-bg rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9D4CCC"
                class="w-8 h-8 mb-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
            </svg>
            <h4 class="text-lg font-semibold text-black-color dark:text-text-light mb-2">Easy Booking</h4>
            <p class="mb-1 text-sm font-semibold text-text-dark-gray/[.75] dark:text-text-gray">No need to be complicated in
                ordering tickets, order now with a few taps.</p>
        </div>
        <div
            class="w-52 h-44 mb-5 px-3 py-2 dark:bg-dark-secondary-bg rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9D4CCC"
                class="w-8 h-8 mb-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
            </svg>
            <h4 class="text-lg font-semibold text-black-color dark:text-text-light mb-2">Accomodation</h4>
            <p class="mb-1 text-sm font-semibold text-text-dark-gray/[.75] dark:text-text-gray">There are many choices of
                interesting destinations to make stories on your trip.</p>
        </div>
        <div
            class="w-52 h-44 mb-5 px-3 py-2 dark:bg-dark-secondary-bg rounded-xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9D4CCC"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
            </svg>

            <h4 class="text-lg font-semibold text-black-color dark:text-text-light mb-2">Best Tour Guide</h4>
            <p class="mb-1 text-sm font-semibold text-text-dark-gray/[.75] dark:text-text-gray">Don't worry about traveling
                anywhere, our tour guide is ready to guide you anytime.</p>
        </div>
    </div>

    

    <div class="mb-4 mx-3 lg:mx-4 w-screen grid lg:grid-cols-2 justify-items-center items-center select-none">
        <div class="w-[450px] mb-5">
            <section>
                <h5 class="text-primary-color font-medium mb-2">HOW WE WORK</h5>

                <h3 class="mb-3 w-96 dark:text-text-light text-4xl font-semibold">Book tickets easily with just a few steps
                </h3>
                <p class="mb-4 text-text-dark-gray dark:text-text-gray text-sm font-medium">The solution for those of you
                    who don't want the hassle of ordering travel tickets, with just 3 steps you
                    can
                    travel anywhere you want.</p>
            </section>
            <hr class="mb-4 border-dashed dark:border-white ">


            <a href="{{ route('destination') }}"
                class="custom-gradient-bg w-40 h-10 text-base  text-text-light text-center flex items-center justify-center rounded duration-300 transition ease-out hover:scale-110 shadow-violet-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">
                Book now
            </a>
        </div>

        <div class="w-[450px]">
            <section class="flex">
                <div>
                    <h3
                        class="flex items-center justify-center rounded-full w-10 h-10 bg-black-color dark:bg-text-light font-semibold text-xl text-text-light dark:text-black-color">
                        1</h3>
                </div>
                <article class="ml-3 mb-3">
                    <h4 class="dark:text-text-light text-xl font-semibold">Find your destination</h4>
                    <p class="w-4/5 sm:w-full text-text-dark-gray dark:text-text-gray text-sm font-medium break-words">Find
                        your dream
                        destination, because we have covered all regions in the world.</p>
                </article>
            </section>

            <section class="flex">
                <div>
                    <h3
                        class="flex items-center justify-center rounded-full w-10 h-10 bg-black-color dark:bg-text-light font-semibold text-xl text-text-light dark:text-black-color">
                        2</h3>
                </div>
                <article class="ml-3 mb-3">
                    <h4 class="dark:text-text-light text-xl font-semibold">Book a ticket</h4>
                    <p class="w-4/5 sm:w-full text-text-dark-gray dark:text-text-gray text-sm font-medium break-words">
                        After you find the
                        trip you want to go to, you can directly order ticket.</p>
                </article>
            </section>

            <section class="flex">
                <div>
                    <h3
                        class="flex items-center justify-center rounded-full w-10 h-10 bg-black-color dark:bg-text-light font-semibold text-xl text-text-light dark:text-black-color">
                        3</h3>
                </div>
                <article class="ml-3 mb-3">
                    <h4 class="dark:text-text-light text-xl font-semibold">Pay and go to destination</h4>
                    <p class="w-4/5 sm:w-full text-text-dark-gray dark:text-text-gray text-sm font-medium break-words">
                        After you pay, you
                        can enjoy the trip to the destination</p>
                </article>
            </section>
        </div>
    </div>

    <div class="flex flex-col items-center select-none pb-4 mb-5 ">
        <div class="flex flex-col items-center">
            <h1
                class="mt-2 mb-4 py-0 px-0 w-4/5 sm:w-full text-center text-2xl font-bold sm:text-4xl transition-all duration-200 text-black-color dark:text-text-light antialiased">
                Start Planning Your Next Trip
            </h1>
        </div>
        <div class="grid md:mb-12 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            <a href="{{ route('destination') }}"
                class="block w=64 md:row-span-3 xl:row-span-2 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-2xl duration-200 hover:scale-105"
                style="background-image: url('{{ asset('images/palm-img.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <p>Up To</p>
                    <h3 class="text-2xl font-semibold">50% Off</h3>
                    <p>Holiday Trips</p>
                </div>
            </a>

            <a href="{{ route('destination.japan', ['slug' => 'japan']) }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/japan-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Japan</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/switzerland-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Switzerland</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/france-box.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">France</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/iceland-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Iceland</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/bali-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Indonesia</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-900 shadow-xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/greece-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Greece</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center justify-items-center mx-5 mb-5 select-none">
        <h3 class="text-primary-color font-semibold mb-3">SPECIAL TRAVEL PACKAGES</h3>
        <article class="flex flex-col items-center justify-items-center">
            <h1
                class="mb-4 text-center max-w-[700px] text-2xl font-bold sm:text-4xl transition-all duration-200 text-black-color dark:text-text-light antialiased">
                Enjoy exclusive personalized service and an unforgettable experience</h1>
            <p class="mx-3 sm:max-w-2xl text-sm text-center font-medium text-text-dark-gray dark:text-text-gray">We
                understand that every journey has unique needs. Therefore, we offer customized travel packages
                designed according to your preferences and budget.</p>
        </article>
    </div>

    <div class="mb-4 mx-auto w-screen grid lg:grid-cols-2 justify-items-center select-none">
        <div class="mb-4 grid select-none ml-5">
            <div class="max-w-xl mb-5">
                <article class="mb-4">
                    <h4 class="font-semibold text-xl mb-2 dark:text-text-light">Romantic Travel Packages in Bali</h4>
                    <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray break-words">Experience an
                        unforgettable romance on the exotic island of Bali.</p>
                </article>
                <div class="flex gap-3">
                    <div class="flex justify-items-center items-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#9D4CCC" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray">7 Days 6 Nights</p>
                    </div>
                    <div class="flex justify-items-center items-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF9529" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#FF9529" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray">4.7 &#40;reviews&#41;
                        </p>
                    </div>
                </div>
            </div>
            <div class="max-w-xl mb-5">
                <article class="mb-4">
                    <h4 class="font-semibold text-xl mb-2 dark:text-text-light">Nature Adventure Packages in Patagonia</h4>
                    <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray break-words">Enjoy thrilling
                        outdoor adventures in the natural beauty of Patagonia</p>
                </article>
                <div class="flex gap-3">
                    <div class="flex justify-items-center items-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#9D4CCC" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray">7 Days 6 Nights</p>
                    </div>
                    <div class="flex justify-items-center items-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF9529" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#FF9529" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray">4.7 &#40;reviews&#41;
                        </p>
                    </div>
                </div>
            </div>
            <div class="max-w-xl mb-5">
                <article class="mb-4">
                    <h4 class="font-semibold text-xl mb-2 dark:text-text-light">Family Vacation Packages in Greece</h4>
                    <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray break-words">Give your
                        family an unforgettable vacation in the beautiful country of Greece.</p>
                </article>
                <div class="flex gap-3">
                    <div class="flex justify-items-center items-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#9D4CCC" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray">7 Days 6 Nights</p>
                    </div>
                    <div class="flex justify-items-center items-end gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF9529" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#FF9529" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        <p class="text-sm font-medium text-text-dark-gray/[.8] dark:text-text-gray">4.7 &#40;reviews&#41;
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=>
            <img src="{{ asset('images/patagonia-main.jpg') }}" alt="Patagonia Lake"
                    class="h-96 rounded-2xl lg:mt-0 transition-all duration-200 hover:scale-105">
        </div>
    </div>

    <div>
        <div class="flex flex-col justify-center  items-center w-screen select-none">
            <div class="flex flex-col items-center">
                <h1
                    class="mt-2 mb-4 py-0 px-0 w-4/5 text-center sm:w-full text-2xl sm:text-3xl font-semibold transition-all duration-200 text-black-color dark:text-text-light antialiased">
                    Latest Travel Blog
                </h1>
            </div>

            <div
                class="flex flex-col lg:flex-row w-64 lg:w-3/5 max-w-3xl align-center justify-center items-center dark:bg-dark-secondary-bg lg:items-start px-2.5 py-2.5 mb-5 transition-all duration-400 shadow-[0_5px_55px_0_rgba(0,0,0,0.3)] shadow-stone-400 dark:shadow-stone-900 rounded-2xl hover:scale-105">
                <img src="{{ asset('images/moraine-lake-canada.jpg') }}" alt="Moraine Lake Canada"
                    class="w-56 rounded-2xl mt-1.5 lg:mt-0">
                <div class="subpixel-antialiased mx-3 my-2">
                    <h1 class="text-lg font-semibold text-black-color dark:text-text-light">Moraine Lake Canada</h1>
                    <article class="text-xs lg:text-base text-justify mt-2 text-black-color dark:text-text-gray">Moraine
                        Lake, nestled in the Canadian Rockies,
                        is a nature lover's paradise. Its
                        mesmerizing
                        turquoise waters, framed by ten majestic peaks, offer a surreal and serene experience. Whether
                        you're
                        hiking to the Rockpile, paddling on the lake, or simply taking in the breathtaking beauty, Moraine
                        Lake
                        is a must-see destination for those seeking nature's tranquility and wonder.</article>
                </div>
            </div>

            <div
                class="flex flex-col lg:flex-row w-64 lg:w-3/5 max-w-3xl align-center justify-center items-center dark:bg-dark-secondary-bg lg:items-start px-2.5 py-2.5 mb-5 transition-all duration-400 shadow-[0_5px_55px_0_rgba(0,0,0,0.3)] shadow-stone-400 dark:shadow-stone-900 rounded-2xl hover:scale-105">
                <img src="{{ asset('images/san-martino-italia.jpg') }}" alt="San Martino Italia"
                    class="w-56 rounded-2xl mt-1.5 lg:mt-0">
                <div class="subpixel-antialiased mx-3 my-2">
                    <h1 class="text-lg font-semibold text-black-color dark:text-text-light">San Martino Italia</h1>
                    <article class="text-xs lg:text-base text-justify mt-2 text-black-color dark:text-text-gray">San
                        Martino, located in the Italian Dolomites,
                        offers stunning natural beauty and rich cultural heritage. The majestic Pale di San Martino mountain
                        range provides a breathtaking backdrop for outdoor enthusiasts. Whether you're hiking, exploring
                        ancient villages, or enjoying authentic Italian cuisine, San Martino blends nature and culture
                        seamlessly. Discover the enchanting charm of this Italian treasure amidst the timeless allure of the
                        Dolomites.</article>
                </div>
            </div>
        </div>
    </div>

    <footer class="flex flex-col items-center  w-screen custom-gradient-bg pt-4 pb-4">
        <p class="text-text-gray text-xs sm:text-base">&copy; Astro Travel All rights reserved</p>
    </footer>
@endsection
