@extends('layouts.app')

@section('content')
    <div class="h-screen relative">
        <h1
            class="absolute select-none inset-0 flex items-center justify-center font-bold text-text-light z-10 text-4xl md:text-5xl lg:text-6xl xl:text-7xl transition-all duration-200">
            ASTRO TRAVEL</h1>
        <div class="flex items-center justify-center h-screen mb-12 bg-fixed bg-center bg-cover -translate-y-[48px]"
            style="background-image: url('{{ asset('images/mountain-main.jpg') }}'); background-size: cover;">
        </div>
    </div>

    <div class="flex flex-col items-center select-none pb-4 h-screen">
        <div class="flex flex-col items-center">
            <h1
                class="mt-2 mb-4 py-0 px-0 w-4/5 sm:w-full text-center text-2xl font-bold sm:text-4xl transition-all duration-200 text-black-color antialiased">
                Start Planning Your Next Trip
            </h1>
        </div>

        <div class="grid mb-12 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            <a href="{{ route('destination') }}"
                class="block w=64 md:row-span-3 xl:row-span-2 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-00 shadow-2xl duration-200 hover:scale-105"
                style="background-image: url('{{ asset('images/palm-img.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <p>Up To</p>
                    <h3 class="text-2xl font-semibold">50% Off</h3>
                    <p>Holiday Trips</p>
                </div>
            </a>
            
            <a href="{{ route('destination.japan', ['slug' => 'japan']) }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/japan-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Japan</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/switzerland-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Switzerland</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/france-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">France</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/iceland-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Iceland</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/bali-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Indonesia</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
            <a href=""
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/greece-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Greece</h3>
                    <p class="text-xs text-zinc-300">Book Now</p>
                </div>
            </a>
        </div>

        <a href="{{ route('destination') }}"
            class="custom-gradient-bg w-40 h-10 text-base text-text-light text-center flex items-center justify-center rounded duration-300 transition ease-out hover:scale-110 shadow-stone-500 shadow-2xl">
            Explore More
        </a>
        
    </div>

    {{-- <div class="h-screen flex flex-col items-center mt-3">
        <div>
            <h1 class="py-0 px-0 text-xl font-bold mb-3 sm:text-2xl transition-all duration-200 text-black-color">Japan Favorite Spots</h1>
        </div>
        <div id="default-carousel" class="relative w-3/4 max-w-4xl" data-carousel="slide"> 
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/mount-fuji-japan.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/sakura-japan.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/shibuya-japan.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/bridge-japan.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover" alt="...">
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div> --}}
@endsection
