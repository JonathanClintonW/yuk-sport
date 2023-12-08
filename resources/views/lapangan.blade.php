@extends('layouts.app')

@section('content')
<div class="h-screen">
    <div class="mt-20 flex flex-col items-center select-none pb-4">
        <section class="flex flex-col items-center">
            <h1
                class="mb-7 sm:w-full text-center text-xl font-bold sm:text-2xl transition-all duration-200 text-black-color dark:text-text-light antialiased">
                Sewa Lapangan</h1>
            <p class="mb-7 w-64 sm:w-[30rem] md:w-[40rem] text-sm text-center sm:text-base transition-all duration-200 dark:text-text-gray">Sewa berbagai tipe lapangan untuk kebutuhan olahraga</p>
        </section>
        <div class="grid mb-12 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            <a href="{{ route('category.futsal') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-800 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/soccer-category.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Futsal</h3>
                </div>
            </a>
            <a href="{{ route('category.badminton') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-800 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/badminton-category.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Badminton</h3>
                </div>
            </a>
            <a href="{{ route('category.tennis') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-800 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/tennis-category.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Tennis</h3>
                </div>
            </a>
            <a href="{{ route('category.basket') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-800 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/basketball-category.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Basket</h3>
                </div>
            </a>
            <a href="{{ route('category.volley') }}"
                class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-800 shadow-2xl duration-200 hover:scale-110"
                style="background-image: url('{{ asset('images/volley-category.jpg') }} ');">
                <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                    <h3 class="text-2xl font-semibold">Volley</h3>
                </div>
            </a>
            <a href="{{ route('category.golf') }}"
            class="block w-64 h-64 bg-cover bg-center rounded-lg overflow-hidden relative shadow-stone-500 dark:shadow-stone-800 shadow-2xl duration-200 hover:scale-110"
            style="background-image: url('{{ asset('images/golf-category.jpg') }} ');">
            <div class="absolute bottom-0 left-0 w-full text-text-light p-4">
                <h3 class="text-2xl font-semibold">Golf</h3>
            </div>
        </a>
        </div>
    </div>
</div>
@endsection