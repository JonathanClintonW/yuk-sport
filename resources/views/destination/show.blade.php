@extends('layouts.app')

@section('content')
    <div class="h-screen select-none">
        <div class="flex flex-col  items-center mt-20 dark:bg-dark-primary-bg">
            <article class="flex flex-col items-center mb-5">
                <h1 class="font-bold mb-4 text-4xl md:text-5xl lg:text-6xl xl:text-7xl transition-all duration-200 custom-gradient-text">
                    {{ $trip->destination }}</h1>
                <p class="w-1/2 max-w-screen-lg text-justify break-words text-xs sm:text-base dark:text-text-light">{{ $trip->description }}</p>
            </article>
        </div>

        <div class="flex flex-col items-center">
            @if (!empty($trip->images))
                @foreach (json_decode($trip->images) as $image)
                    <img src="{{ asset('images/' . $image) }}" alt="{{ $trip->destination }}"
                        class="mb-10 w-80 h-[500px] object-cover rounded-2xl  transition-all duration-300 hover:scale-105">
                @endforeach
            @endif
            <div>
                <div class="grid grid-cols-3 gap-5 mb-5">
                    <div
                        class="flex flex-col items-center px-3 py-2 break-words rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-xl dark:text-text-light">INCLUDE</h3>
                        <hr class="mx-auto my-2 w-10/12 dark:border-white">
                        <p class="dark:text-text-gray font-medium">{{ $trip->include }}</p>
                    </div>
                    <div
                        class="flex flex-col items-center px-3 py-2 break-words rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-xl dark:text-text-light">DETAILS</h3>
                        <hr class="mx-auto my-2 w-10/12 dark:border-white">
                        <p class="dark:text-text-gray font-medium">{{ $trip->slug }}</p>
                        <p class="dark:text-text-gray font-medium">{{ $trip->airlines }}</p>
                        <p class="dark:text-text-gray font-medium">{{ $trip->transit }} Transit</p>
                        <p class="dark:text-text-gray font-medium">&#36; {{ $trip->price }}</p>
                    </div>
                    <div
                        class="flex flex-col items-center px-3 py-2 break-words rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-xl dark:text-text-light">EXCLUDE</h3>
                        <hr class="mx-auto my-2 w-10/12 dark:border-white">
                        <p class="dark:text-text-gray">{{ $trip->exclude }}</p>
                    </div>
                </div>
                <div
                    class="flex py-2 gap-3 rounded-2xl dark:bg-dark-secondary-bg shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                    <p class="mx-auto font-semibold dark:text-text-light">{{ $trip->departure_date }}</p>
                    <p class="mx-auto font-semibold dark:text-text-light">To</p>
                    <p class="mx-auto font-semibold dark:text-text-light">{{ $trip->return_date }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
