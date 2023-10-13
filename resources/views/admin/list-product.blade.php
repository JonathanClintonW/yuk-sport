@extends('layouts.admin-app')

@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color ">
            <div class="px-2 pt-1 mb-4 h-12 flex place-items-center items-center justify-center bg-dark-primary-color dark:bg-text-light rounded-xl">
                <h1 class=" text-lg font-bold text-text-light dark:text-dark-primary-color">DESTINATION LIST</h1>
            </div>

            <ul>
                @foreach ($trips as $trip)
                    <li class="mb-3">
                        <h2 class="font-bold text-lg dark:text-text-light">Destination - {{ $trip->destination }}</h2>
                        <hr class="h-1 bg-dark-primary-color dark:bg-text-light mx-auto my-3">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4">
                            <dl class="mb-3">
                                <dt class="font-bold dark:text-text-light">Slug</dt>
                                <dd class=" dark:text-text-gray">{{ $trip->slug }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Airlines</dt>
                                <dd class="dark:text-text-gray">{{ $trip->airlines }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Transit</dt>
                                <dd class="dark:text-text-gray">{{ $trip->transit }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Departure Date</dt>
                                <dd class="dark:text-text-gray">{{ $trip->departure_date }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Return Date</dt>
                                <dd class="dark:text-text-gray">{{ $trip->return_date }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Price</dt>
                                <dd class="dark:text-text-gray">${{ $trip->price }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4 md:col-span-3 lg:col-span-1">
                                <dt class="font-bold dark:text-text-light">Description</dt>
                                <dd class="dark:text-text-gray text-justify">{{ $trip->description }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Total Pax</dt>
                                <dd class="dark:text-text-gray">{{ $trip->total_pax }} Pax</dd>
                            </dl>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
