@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Panel</h1>

    <form action="{{ route('admin.trips.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="destination">Destination:</label>
        <input type="text" name="destination" id="destination" required>

        <label for="airlines">Airlines:</label>
        <input type="text" name="airlines" id="airlines" required>

        <label for="transit">Transit:</label>
        <input type="text" name="transit" id="transit" required>

        <label for="departure_date">Departure Date:</label>
        <input type="datetime-local" name="departure_date" id="departure_date" required>

        <label for="return_date">Return Date:</label>
        <input type="datetime-local" name="return_date" id="return_date" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" required>

        <label for="include">Include:</label>
        <textarea name="include" id="include"></textarea>

        <label for="exclude">Exclude:</label>
        <textarea name="exclude" id="exclude"></textarea>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image" required>

        <button type="submit">Create Trip</button>
    </form>
</div>
@endsection
