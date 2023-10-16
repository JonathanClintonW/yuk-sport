@extends('layouts.admin-app')

@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color">

            <div
                class="px-2 pt-1 mb-4 h-12 flex place-items-center items-center justify-center bg-dark-primary-color dark:bg-text-light rounded-xl">
                <h1 class=" text-lg font-bold text-text-light dark:text-dark-primary-color">MANAGE TRIPS</h1>
            </div>

            <table class="w-full table-auto divide-y divide-gray-500">
                <thead>
                    <tr class="grid grid-cols-7 text-center divide-x divide-gray-200 mb-4 dark:text-text-light">
                        <th>Airlines</th>
                        <th>Transit</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-500">
                    @foreach ($trips as $trip)
                        <tr class="grid grid-cols-7 text-center divide-x divide-gray-200 mb-3 py-3 dark:text-text-light">
                            <td>{{ $trip->airlines }}</td>
                            <td>{{ $trip->transit }}</td>
                            <td>{{ $trip->departure_date }}</td>
                            <td>{{ $trip->return_date }}</td>
                            <td>{{ $trip->price }}</td>

                            <td class="flex justify-center">
                                <a href="javascript:void(0)" onclick="toggleEditForm({{ $trip->id }})"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
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

                                    <div class="mb-4 grid">
                                        <label for="airlines" class="dark:text-text-light">Airlines:</label>
                                        <input type="text" id="airlines" name="airlines" class="px-1 py-2 rounded " value="{{ $trip->airlines }}"
                                            required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="transit" class="dark:text-text-light">Transit:</label>
                                        <input type="text" id="transit" name="transit" class="px-1 py-2 rounded" value="{{ $trip->transit }}"
                                            required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="departure_date" class="dark:text-text-light">Departure Date:</label>
                                        <input type="datetime-local" id="departure_date" name="departure_date" class="px-1 py-2 rounded"
                                            value="{{ date('Y-m-d\TH:i', strtotime($trip->departure_date)) }}" required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="return_date" class="dark:text-text-light">Return Date:</label>
                                        <input type="datetime-local" id="return_date" name="return_date" class="px-1 py-2 rounded"
                                            value="{{ date('Y-m-d\TH:i', strtotime($trip->return_date)) }}" required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="price" class="dark:text-text-light">Price:</label>
                                        <input type="text" id="price" name="price" class="px-1 py-2 rounded" value="{{ $trip->price }}"
                                            required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="include" class="dark:text-text-light">Include:</label>
                                        <textarea id="include" name="include" class="px-1 py-2 rounded" required>{{ $trip->include }}</textarea>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="exclude" class="dark:text-text-light">Exclude:</label>
                                        <textarea id="exclude" name="exclude" class="px-1 py-2 rounded" required>{{ $trip->exclude }}</textarea>
                                    </div>
                                    
                                    <div class="mb-4 grid">
                                        <label for="description" class="dark:text-text-light">Description:</label>
                                        <textarea id="description" name="description" class="px-1 py-2 h-20 rounded" required>{{ $trip->description }}</textarea>
                                    </div>

                                    <button type="submit"
                                        class="mb-3 custom-gradient-bg w-40 h-10 text-base  text-text-light text-center flex items-center justify-center rounded duration-300 transition ease-out hover:scale-105 shadow-violet-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">Update</button>
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
