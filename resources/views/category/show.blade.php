@extends('layouts.app')

@section('content')
    <div class="min-h-screen ">
        <section class="grid grid-cols-1 xl:grid-cols-3 items center justify-items-center mt-20 mx-10 select-none">
            <article class="max-w-3xl mb-4 lg:col-span-2 xl:col-span-1 ">
                <h1
                    class="font-bold mb-4 text-5xl md:text-6xl lg:text-7xl transition-all duration-200 custom-gradient-text uppercase">
                    {{ $lapangan->nama_lapangan }}</h1>
                <p class="text-justify break-words text-xs sm:text-base dark:text-text-light">
                    {{ $lapangan->deskripsi }}</p>
            </article>

            <div class="mb-5 ">
                @if (!empty($lapangan->path_gambar))
                    @foreach (json_decode($lapangan->path_gambar) as $image)
                        <div
                            class="p-2 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                            <img src="{{ asset('content-images/' . $image) }}" alt="{{ $lapangan->nama_lapangan }}"
                                class=" w-80 h-[500px] object-cover rounded-2xl">
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="flex flex-col items-center lg:col-span-2 xl:col-span-1 ">
                <div class="max-w-2xl">
                    <div
                        class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-lg md:text-xl mr-4">KATEGORI</h3>
                        <p class="font-semibold">{{ $lapangan->kategori }}</p>
                    </div>

                    <div
                        class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-lg md:text-xl mr-4">ALAMAT</h3>
                        <p class="font-semibold">{{ $lapangan->alamat }}</p>
                    </div>

                    <div
                        class="mb-4 flex items-center justify-between px-4 py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] transition-all duration-300 hover:scale-105">
                        <h3 class="font-semibold text-lg md:text-xl mr-4">HARGA</h3>
                        <p class="font-semibold">Rp. {{ $lapangan->harga }}/jam</p>
                    </div>

                    <div
                        class="mb-4 flex flex-col items-center py-3 rounded-2xl bg-white shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">

                        <a href="{{ route('order', ['lapanganId' => $lapangan->id]) }}"
                            class="text-center text-text-light px-3 py-2 custom-gradient-bg rounded-md transition-all duration-300 hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
