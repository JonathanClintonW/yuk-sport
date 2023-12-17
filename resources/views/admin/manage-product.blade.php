@extends('layouts.admin-app')

@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color">

            <div
                class="px-2 pt-1 mb-4 h-12 flex place-items-center items-center justify-center bg-dark-primary-color dark:bg-text-light rounded-xl">
                <h1 class=" text-lg font-bold text-text-light dark:text-black">MANAGE LAPANGAN</h1>
            </div>

            <table class="w-full table-auto divide-y divide-gray-500">
                <thead>
                    <tr class="grid grid-cols-6 text-center divide-x divide-gray-200 mb-4 dark:text-text-light">
                        <th>Nama Lapangan</th>
                        <th>Alamat</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-500">
                    @foreach ($lapangans as $lapangan)
                        <tr class="grid grid-cols-6 text-center divide-x divide-gray-200 mb-3 py-3 dark:text-text-light">
                            <td>{{ $lapangan->nama_lapangan }}</td>
                            <td>{{ $lapangan->alamat }}</td>
                            <td>{{ $lapangan->kategori }}</td>
                            <td>{{ $lapangan->harga }}</td>

                            <td class="flex justify-center">
                                <a href="javascript:void(0)" onclick="toggleEditForm({{ $lapangan->id }})"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                            <td class="flex justify-center">
                                <a href="{{ route('admin.delete', $lapangan->id) }}" class="text-red-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr id="edit-form-{{ $lapangan->id }}" style="display: none">
                            <td colspan="6">
                                <form action="{{ route('admin.update', $lapangan->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')

                                    <div class="mb-4 grid">
                                        <label for="nama_lapangan" class="dark:text-text-light">Nama Lapangan:</label>
                                        <input type="text" id="nama_lapangan" name="nama_lapangan"
                                            class="px-1 py-2 rounded " value="{{ $lapangan->nama_lapangan }}" required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="alamat" class="dark:text-text-light">Alamat:</label>
                                        <input type="text" id="alamat" name="alamat" class="px-1 py-2 rounded"
                                            value="{{ $lapangan->alamat }}" required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="kategori" class="dark:text-text-light">Kategori:</label>
                                        <select name="kategori" id="kategori" class="px-1 py-2 rounded" required
                                            value="{{ $lapangan->kategori }}">
                                            <option value="{{ $lapangan->kategori }}">Pilih Kategori</option>
                                            <option value="Futsal">Futsal</option>
                                            <option value="Badminton">Badminton</option>
                                            <option value="Tennis">Tennis</option>
                                            <option value="Basket">Basket</option>
                                            <option value="Volley">Volley</option>
                                            <option value="Golf">Golf</option>
                                        </select>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="harga" class="dark:text-text-light">Harga per Jam:</label>
                                        <input type="text" id="harga" name="harga" class="px-1 py-2 rounded"
                                            value="{{ $lapangan->harga }}" required>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="deskripsi" class="dark:text-text-light">Deskripsi:</label>
                                        <textarea id="deskripsi" name="deskripsi" class="px-1 py-2 h-20 rounded" required>{{ $lapangan->deskripsi }}</textarea>
                                    </div>

                                    <div class="mb-4 grid">
                                        <label for="path_gambar" class="font-semibold dark:text-text-gray">Gambar:</label>
                                        <input type="file"
                                            class="mb-3 rounded focus:ring-0 border border-black dark:bg-text-light"
                                            name="path_gambar[]" id="path_gambar" multiple
                                            value="{{ $lapangan->path_gambar }}">
                                    </div>
                                    <button type="submit"
                                        class="mb-3 custom-gradient-bg w-40 h-10 text-base  text-text-light text-center flex items-center justify-center rounded duration-300 transition ease-out hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">Update</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleEditForm(lapanganId) {
            const editForm = document.getElementById(`edit-form-${lapanganId}`);
            if (editForm.style.display === '' || editForm.style.display === 'table-row') {
                editForm.style.display = 'none';
            } else {
                document.querySelectorAll('[id^="edit-form-"]').forEach(form => {
                    form.style.display = 'none';
                });
                
                editForm.style.display = 'table-row';
            }
        }
    </script>
    
@endsection
