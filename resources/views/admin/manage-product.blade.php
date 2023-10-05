@extends('layouts.admin-app')
@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color">
            <h1 class="text-xl font-bold mb-3">Add Destination</h1>
            <hr class="w-80% h-1 bg-dark-primary-color mx-auto mb-3">
            <form action="{{ route('admin.trips.store') }}" class="mt-3 grid"method="POST" enctype="multipart/form-data">
                @csrf

                <label for="destination" class="font-semibold">Destination:</label>
                <input type="text" name="destination" id="destination"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="slug" class="font-semibold">Custom Slug:</label>
                <input type="text" name="slug" id="slug"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="airlines" class="font-semibold">Airlines:</label>
                <input type="text" name="airlines" id="airlines"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="transit" class="font-semibold">Transit:</label>
                <input type="text" name="transit" id="transit"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="departure_date" class="font-semibold">Departure Date:</label>
                <input type="datetime-local" name="departure_date" id="departure_date"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="return_date" class="font-semibold">Return Date:</label>
                <input type="datetime-local" name="return_date" id="return_date"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="price" class="font-semibold">Price:</label>
                <input type="number" name="price" id="price" step="0.01"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required>

                <label for="include" class="font-semibold">Include:</label>
                <textarea name="include" id="include" class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0"></textarea>

                <label for="exclude" class="font-semibold">Exclude:</label>
                <textarea name="exclude" id="exclude" class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0"></textarea>

                <label for="description" class="font-semibold">Description:</label>
                <textarea name="description" id="description" class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0"
                    required></textarea>

                <label for="total_pax" class="font-semibold">Total Pax:</label>
                <input type="number" name="total_pax" id="total_pax"
                    class="mb-3 focus:border-dark-secondary-color rounded focus:ring-0" required min="1">

                <label for="images">Images:</label>
                <input type="file" class="form-control" name="images[]" id="images" multiple required>

                <label for="pdf" class="font-semibold">PDF:</label>
                <input type="file" name="pdf" id="pdf" accept=".pdf" class="mb-3 rounded focus:ring-0 "
                    required>

                <div class="flex justify-center">
                    <button type="submit" class="custom-dark-gradient-bg py-2 px-4 rounded text-text-light">Create
                        Trip</button>
                </div>
            </form>
        </div>
    </div>
@endsection
