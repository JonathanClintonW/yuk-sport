@extends('layouts.app')

@section('content')
    <div class="mt-20 sm:mt-24 min-h-screen flex flex-col items-center select-none transition-all duration-300">
        <div>
            <h1
                class="dark:text-text-light font-bold text-4xl md:text-5xl lg:text-6xl xl:text-7xl transition-all duration-200">
                JAPAN</h1>
        </div>
        <div class="mt-8 flex flex-col items-center">
            <h2
                class="mb-4 dark:text-text-light font-semibold text-sm md:text-base lg:text-lg xl:text-xl transition-all duration-200">
                Trips to Japan</h2>
            <ul>
                @if ($japanTrips->isEmpty())
                    <p>No trips available.</p>
                @else
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 text-center align-center justify-items-center">
                        @foreach ($japanTrips as $trip)
                            
                            <div class="mx-3 mb-8">
                                <div>
                                    @if (!empty($trip->images))
                                        @foreach (json_decode($trip->images) as $image)
                                            <img src="{{ asset('images/' . $image) }}" alt="{{ $trip->destination }}"
                                                class="w-64 h-80 object-cover">
                                        @endforeach
                                    @endif
                                </div>
                                <div class="">
                                    <a href="{{ route('trip.show', ['slug' => $trip->slug]) }}"
                                        class="dark:text-text-light font-bold">
                                        {{ $trip->slug }}
                                    </a>
                                </div>
                                <div class=" dark:text-text-light">
                                    {{ $trip->destination }}
                                </div>
                                <div class=" dark:text-text-light">
                                    ({{ \Carbon\Carbon::parse($trip->departure_date)->format('Y-m-d') }} -
                                    {{ \Carbon\Carbon::parse($trip->return_date)->format('Y-m-d') }})
                                </div>
                                <div class="text-center mx-3 mt-3 py-2 custom-gradient-bg rounded-md">
                                    <a href="{{ route('trip.show', ['slug' => $trip->slug]) }}" class="text-text-light">View
                                        Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif


            </ul>
        </div>
    </div>
@endsection
