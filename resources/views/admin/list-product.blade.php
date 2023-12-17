@extends('layouts.admin-app')

@section('content')
    <div class="container mt-10">
        <div class="p-4 sm:ml-64 border-2 rounded-lg border-dark-primary-color ">
            <div class="px-2 pt-1 mb-4 h-12 flex place-items-center items-center justify-center bg-dark-primary-color dark:bg-text-light rounded-xl">
                <h1 class=" text-lg font-bold text-text-light dark:text-black">DAFTAR LAPANGAN</h1>
            </div>

            <ul>
                @foreach ($lapangans as $lapangan)
                    <li class="mb-3">
                        <h2 class="font-bold text-lg dark:text-text-light uppercase">Lapangan - {{ $lapangan->nama_lapangan }}</h2>
                        <hr class="h-1 bg-dark-primary-color dark:bg-text-light mx-auto my-3">
                        <div class="grid md:grid-cols-3 lg:grid-cols-4">
                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Alamat</dt>
                                <dd class=" dark:text-text-gray">{{ $lapangan->alamat }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Kategori</dt>
                                <dd class="dark:text-text-gray">{{ $lapangan->kategori }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Harga</dt>
                                <dd class="dark:text-text-gray">{{ $lapangan->harga }}</dd>
                            </dl>

                            <dl class="mb-3 mr-4">
                                <dt class="font-bold dark:text-text-light">Deskripsi</dt>
                                <dd class="dark:text-text-gray">{{ $lapangan->deskripsi }}</dd>
                            </dl>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
