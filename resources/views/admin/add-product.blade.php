@extends('layouts.admin-app')

@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color">
            <h1 class="text-xl font-bold mb-3 dark:text-text-light">Tambah Lapangan</h1>
            <hr class="h-1 bg-dark-primary-color dark:bg-text-light mx-auto mb-3">
            <form action="{{ route('admin.lapangan.store') }}" class="mt-3 grid" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nama_lapangan" class="font-semibold dark:text-text-gray">Nama Lapangan:</label>
                <input type="text" name="nama_lapangan" id="nama_lapangan" class="mb-3 px-1 py-2 border-black rounded focus:ring-0" placeholder="Nama Lapangan"
                    required>

                <label for="alamat" class="font-semibold dark:text-text-gray">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="mb-3 px-1 py-2 border-black rounded focus:ring-0" placeholder="Alamat"
                    required>

                <label for="kategori" class="font-semibold dark:text-text-gray">Kategori:</label>
                <select name="kategori" id="kategori" class="mb-3 px-1 py-2 border-black rounded focus:ring-0" required>
                    <option value="Futsal">Futsal</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Tennis">Tennis</option>
                    <option value="Basket">Basket</option>
                    <option value="Volley">Volley</option>
                    <option value="Golf">Golf</option>
                </select>

                <label for="harga" class="font-semibold dark:text-text-gray">Harga:</label>
                <input type="number" name="harga" id="harga" step="0.01"
                    class="mb-3 px-1 py-2 border-black rounded focus:ring-0" placeholder="Harga" required>

                <label for="deskripsi" class="font-semibold dark:text-text-gray">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi" class="mb-3 px-1 py-2 border-black rounded focus:ring-0" placeholder="Deskripsi" required></textarea>

                <label for="path_gambar" class="font-semibold dark:text-text-gray">Gambar:</label>
                <input type="file" class="mb-3 rounded focus:ring-0 border border-black dark:bg-text-light"
                    name="path_gambar[]" id="path_gambar" multiple required>

                <div class="flex justify-center">
                    <button type="submit" class="custom-gradient-bg py-2 px-4 rounded font-medium text-text-light">Tambah
                        Lapangan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
