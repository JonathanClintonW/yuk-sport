@extends('layouts.app')

@section('content')
    <div class="mt-10 h-screen">
        <h1>{{ $trip->destination }}</h1>

        <div>
            <h2>Trip Details</h2>
            <ul>
                <li>
                    @if (!empty($trip->images))
                        @foreach (json_decode($trip->images) as $image)
                            <img src="{{ asset('images/' . $image) }}" alt="{{ $trip->destination }}" class="trip-image">
                        @endforeach
                    @endif
                </li>
                <li>Transit: {{ $trip->transit }}</li>
                <li>Airlines: {{ $trip->airlines }}</li>
                <li>Transit: {{ $trip->transit }}</li>
                <li>Departure Date: {{ $trip->departure_date }}</li>
                <li>Return Date: {{ $trip->return_date }}</li>
                <li>Price: {{ $trip->price }}</li>
                <li>Include: {{ $trip->include }}</li>
                <li>Exclude: {{ $trip->exclude }}</li>
            </ul>
        </div>
    </div>
@endsection
