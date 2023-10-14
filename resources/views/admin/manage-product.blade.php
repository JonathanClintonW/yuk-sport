@extends('layouts.admin-app')

@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color">

            <div
                class="px-2 pt-1 mb-4 h-12 flex place-items-center items-center justify-center bg-dark-primary-color dark:bg-text-light rounded-xl">
                <h1 class=" text-lg font-bold text-text-light dark:text-dark-primary-color">MANAGE TRIPS</h1>
            </div>
            <table class="grid">
                <thead>
                    <tr class="grid grid-cols-11 text-center">
                        <th>Airlines</th>
                        <th>Transit</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Price</th>
                        <th>Include</th>
                        <th>Exclude</th>
                        <th class="col-span-2">Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trips as $trip)
                        <tr class="grid grid-cols-11 text-center gap-3">
                            <td>{{ $trip->airlines }}</td>
                            <td>{{ $trip->transit }}</td>
                            <td>{{ $trip->departure_date }}</td>
                            <td>{{ $trip->return_date }}</td>
                            <td>{{ $trip->price }}</td>
                            <td>{{ $trip->include }}</td>
                            <td>{{ $trip->exclude }}</td>
                            <td class="col-span-2 max-h-60 overflow-y-auto text-justify">{{ $trip->description }}</td>
                            <td class="flex justify-center">
                                <a href="javascript:void(0)" onclick="toggleEditForm({{ $trip->id }})"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                  </svg>
                                </a>
                            </td>
                            <td class="flex justify-center">
                                <a href="{{ route('admin.delete', $trip->id) }}" class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                            </td>
                            
                        </tr>
                        
                        <tr id="edit-form-{{ $trip->id }}" style="display: none">
                            <td colspan="6">
                                <form action="{{ route('admin.update', $trip->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')

                                    <div class="mb-4">
                                        <label for="airlines">Airlines:</label>
                                        <input type="text" id="airlines" name="airlines" value="{{ $trip->airlines }}"
                                            required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="transit">Transit:</label>
                                        <input type="text" id="transit" name="transit" value="{{ $trip->transit }}"
                                            required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="departure_date">Departure Date:</label>
                                        <input type="datetime-local" id="departure_date" name="departure_date"
                                            value="{{ date('Y-m-d\TH:i', strtotime($trip->departure_date)) }}" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="return_date">Return Date:</label>
                                        <input type="datetime-local" id="return_date" name="return_date"
                                            value="{{ date('Y-m-d\TH:i', strtotime($trip->return_date)) }}" required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="price">Price:</label>
                                        <input type="text" id="price" name="price" value="{{ $trip->price }}"
                                            required>
                                    </div>

                                    <div class="mb-4">
                                        <label for="include">Include:</label>
                                        <textarea id="include" name="include" required>{{ $trip->include }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="exclude">Exclude:</label>
                                        <textarea id="exclude" name="exclude" required>{{ $trip->exclude }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label for="description">Description:</label>
                                        <textarea id="description" name="description" required>{{ $trip->description }}</textarea>
                                    </div>

                                    <button type="submit"
                                        class="bg-blue-500 text-white font-semibold py-2 px-4 rounded">Update</button>
                                </form>
                            </td>
                            
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleEditForm(tripId) {
            const editForm = document.getElementById(`edit-form-${tripId}`);
            if (editForm.style.display === 'none') {
                // Show the edit form
                editForm.style.display = 'table-row';
            } else {
                // Hide the edit form
                editForm.style.display = 'none';
            }
        }
    </script>
@endsection
