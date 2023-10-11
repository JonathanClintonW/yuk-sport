@extends('layouts.admin-app')
@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color">
            <h1 class="text-xl font-bold mb-3 dark:text-text-light">Add Destination</h1>
            <hr class="w-80% h-1 bg-dark-primary-color dark:bg-text-light mx-auto mb-3">
            <form action="{{ route('admin.trips.store') }}" class="mt-3 grid" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="destination" class="font-semibold dark:text-text-gray">Destination:</label>
                <input type="text" name="destination" id="destination"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="slug" class="font-semibold dark:text-text-gray">Custom Slug:</label>
                <input type="text" name="slug" id="slug"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="airlines" class="font-semibold dark:text-text-gray">Airlines:</label>
                <input type="text" name="airlines" id="airlines"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="transit" class="font-semibold dark:text-text-gray">Transit:</label>
                <input type="text" name="transit" id="transit"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="departure_date" class="font-semibold dark:text-text-gray">Departure Date:</label>
                <input type="datetime-local" name="departure_date" id="departure_date"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="return_date" class="font-semibold dark:text-text-gray">Return Date:</label>
                <input type="datetime-local" name="return_date" id="return_date"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="price" class="font-semibold dark:text-text-gray">Price:</label>
                <input type="number" name="price" id="price" step="0.01"
                    class="mb-3 border-black rounded focus:ring-0" required>

                <label for="include" class="font-semibold dark:text-text-gray">Include:</label>
                <textarea name="include" id="include" class="mb-3 border-black rounded focus:ring-0"></textarea>

                <label for="exclude" class="font-semibold dark:text-text-gray">Exclude:</label>
                <textarea name="exclude" id="exclude" class="mb-3 border-black rounded focus:ring-0"></textarea>

                <label for="description" class="font-semibold dark:text-text-gray">Description:</label>
                <textarea name="description" id="description" class="mb-3 border-black rounded focus:ring-0"
                    required></textarea>

                <label for="total_pax" class="font-semibold dark:text-text-gray">Total Pax:</label>
                <input type="number" name="total_pax" id="total_pax"
                    class="mb-3 border-black rounded focus:ring-0" required min="1">

                <label for="images" class="font-semibold dark:text-text-gray">Images:</label>
                <input type="file" class="mb-3 rounded focus:ring-0 border border-black dark:bg-text-light" name="images[]" id="images" multiple required>

                <label for="pdf" class="font-semibold dark:text-text-gray">PDF:</label>
                <input type="file" class="mb-4 rounded focus:ring-0 border border-black dark:bg-text-light" name="pdf" id="pdf" accept=".pdf" 
                    required>

                <div class="flex justify-center">
                    <button type="submit" class="custom-gradient-bg py-2 px-4 rounded font-medium text-text-light">Create
                        Trip</button>
                </div>
            </form>
        </div>
    </div>
@endsection
