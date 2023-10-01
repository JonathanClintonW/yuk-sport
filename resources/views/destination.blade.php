@extends('layouts.app')

@section('content')
    <div class="mt-20 flex flex-col items-center select-none pb-4">
        <section class="flex flex-col items-center">
            <h1
                class="mb-7 sm:w-full text-center text-xl font-bold sm:text-2xl transition-all duration-200 text-black-color antialiased">
                Popular Destination For You</h1>
            <p class="mb-7 w-64 sm:w-[30rem] md:w-[40rem] text-sm text-justify sm:text-base transition-all duration-200">Explore the allure of Bali's sun-kissed beaches, the timeless beauty of Japan's cultural treasures, and the
                Mediterranean charm of Greece with us. Our popular destinations promise unforgettable experiences. Immerse
                yourself in culture, adventure, and relaxation. Explore, savor, and create lasting memories. Start your
                journey today.</p>
        </section>
        <div class="grid mb-12 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <a href="{{ route('destination.indonesia') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/bali-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Indonesia</h3>
                </div>
            </a>
            <a href="{{ route('destination.japan') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/japan-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Japan</h3>
                </div>
            </a>
            <a href="{{ route('destination.greece') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/greece-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Greece</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="sm:mt-5 flex flex-col items-center select-none pb-4">
        <h1
            class="mb-7 sm:w-full text-center text-xl font-bold sm:text-2xl transition-all duration-200 text-black-color antialiased">
            Find Your Dream Destination</h1>
        <div class="grid mb-12 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            <a href="{{ route('destination.japan') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/japan-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Japan</h3>
                </div>
            </a>
            <a href="{{ route('destination.switzerland') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/switzerland-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Switzerland</h3>
                </div>
            </a>
            <a href="{{ route('destination.france') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/france-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">France</h3>
                </div>
            </a>
            <a href="{{ route('destination.iceland') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/iceland-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Iceland</h3>
                </div>
            </a>
            <a href="{{ route('destination.indonesia') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/bali-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Indonesia</h3>
                </div>
            </a>
            <a href="{{ route('destination.greece') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/greece-main.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Greece</h3>
                </div>
            </a>
        </div>
    </div>
@endsection
