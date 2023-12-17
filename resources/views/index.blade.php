@extends('layouts.app')

@section('content')
    <div class="h-[50vh] relative">
        <h1
            class="text-primary-color absolute select-none inset-0 flex items-center justify-center font-bold z-10 text-4xl md:text-5xl lg:text-6xl xl:text-7xl transition-all duration-200">
            YukSport</h1>
        <div class="flex items-center justify-center w-screen h-[50vh] mb-12 bg-fixed bg-center bg-cover -translate-y-[48px]"
            style="background-image: url('{{ asset('images/vienna-reyes.jpg') }}'); background-size: cover;">
        </div>
    </div>

    <div class="flex flex-col w-screen items-center justify-center mb-5">
        <h1 class="font-bold text-xl mb-3 dark:text-text-light">SEWA LAPANGAN SEKARANG</h1>
        <div id="default-carousel" class="relative w-full max-w-[50vw]" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mb-4 shadow-stone-500 dark:shadow-stone-800 shadow-2xl">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/soccer-field.jpg') }}"
                        class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Soccer Field">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/tennis-field.jpg') }}"
                        class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Tennis Court">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/basketball-field.jpg') }}"
                        class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Basketball Court">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/badminton-court.jpg') }}"
                        class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Badminton Court">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/volley-court.jpg') }}"
                        class="object-cover absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Volley Court">
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <a href="{{ route('lapangan') }}" class="bg-primary-color px-3 py-2 rounded text-secondary-color font-semibold shadow-2xl hover:scale-110 duration-300">Sewa Sekarang</a>
    </div>
    <footer class="flex flex-col items-center  w-screen custom-gradient-bg pt-4 pb-4 bottom-0">
        <p class="text-secondary-color text-xs sm:text-base">&copy; YukSport All rights reserved</p>
    </footer>
@endsection
