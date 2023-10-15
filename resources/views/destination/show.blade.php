@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 xl:grid-cols-3 items center justify-items-center mt-20 mx-10 select-none">
        <article class="max-w-3xl mb-4 lg:col-span-2 xl:col-span-1">
            <h1
                class="font-bold mb-4 text-5xl md:text-6xl lg:text-7xl xl:text-9xl transition-all duration-200 custom-gradient-text uppercase">
                {{ $trip->destination }}</h1>
            <p class="text-justify break-words text-xs sm:text-base dark:text-text-light">
                {{ $trip->description }}</p>
        </article>

        <div class="mb-5">
            @if (!empty($trip->images))
                @foreach (json_decode($trip->images) as $image)
                    <div
                        class="p-2 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <img src="{{ asset('content-images/' . $image) }}" alt="{{ $trip->destination }}"
                            class=" w-80 h-[500px] object-cover rounded-2xl">
                    </div>
                @endforeach
            @endif
        </div>
        <div class="flex flex-col items-center lg:col-span-2 xl:col-span-1">
            <div class="max-w-2xl">
                <div
                    class="mb-4 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                    <div class="flex justify-around px-4 pt-3">
                        <p class="font-semibold text-lg ">Jakarta</p>
                        <div class="inline-block w-0.5 self-stretch bg-black opacity-100  dark:opacity-50"></div>
                        <p class="font-semibold text-lg ">{{ $trip->transit }}</p>
                        <div class="inline-block w-0.5 self-stretch bg-black opacity-100 dark:opacity-50"></div>
                        <p class="font-semibold text-lg ">{{ $trip->destination }}</p>
                    </div>
                    <div class="px-3 flex flex-row items-center justify-items-center py-2 gap-3">
                        <p class="text-center mx-auto font-semibold">{{ $trip->departure_date }}</p>
                        <p class="text-center mx-auto font-semibold">To</p>
                        <p class="text-center mx-auto font-semibold">{{ $trip->return_date }}</p>
                    </div>
                </div>

                <div
                    class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                    <h3 class="font-semibold text-lg md:text-xl dark:text-text-light">INCLUDE</h3>
                    <p class="dark:text-text-gray font-semibold">{{ $trip->include }}</p>
                </div>

                <div
                    class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                    <h3 class="font-semibold text-lg md:text-xl dark:text-text-light">EXCLUDE</h3>
                    <p class="dark:text-text-gray font-semibold">{{ $trip->exclude }}</p>
                </div>

                <div
                    class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                    <h3 class="font-semibold text-lg md:text-xl dark:text-text-light">AIRLINES</h3>
                    <p class="dark:text-text-gray font-semibold">{{ $trip->airlines }}</p>
                </div>

                <div
                    class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                    <h3 class="font-semibold text-lg md:text-xl dark:text-text-light">PRICE</h3>
                    <p class="dark:text-text-gray font-semibold">$ {{ $trip->price }}</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection
