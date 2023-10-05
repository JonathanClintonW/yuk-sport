@extends('layouts.app')

@section('content')
<div class="">
    <h1>Japan</h1>

    <div>
        <h2>Trips to Japan</h2>
        <ul>
            @foreach ($japanTrips as $trip)
            <li>
                <a href="{{ route('trip.show', ['slug' => $trip->slug]) }}">
                    {{ $trip->destination }} ({{ \Carbon\Carbon::parse($trip->departure_date)->format('Y-m-d') }} - {{ \Carbon\Carbon::parse($trip->return_date)->format('Y-m-d') }}) - {{ $trip->slug }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
