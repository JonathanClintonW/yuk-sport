@extends('layouts.app')

@section('content')
    <div class="relative">
        <div class="flex items-center justify-center h-[40rem] bg-fixed bg-center bg-cover -translate-y-[48px]"
            style="background-image: url('{{ asset('images/soccer-main.jpg') }}'); background-size: cover;">
            <h1
                class="absolute select-none inset-0 flex items-center justify-center font-bold text-text-light z-10 text-4xl md:text-5xl lg:text-6xl xl:text-7xl transition-all duration-200">
                Tennis</h1>
        </div>
    </div>

    <div class="flex flex-col items-center min-h-screen select-none">
        <h2
            class="mb-4 dark:text-text-light font-semibold text-lg md:text-xl lg:text-2xl xl:text-3xl transition-all duration-200 -translate-y-[10px]">
            Lapangan Tennis</h2>
        <div>
            @if ($tennislapangan->isEmpty())
                <div>
                    <p class="dark:text-text-light font-medium mb-3">Tidak ada lapangan tersedia.</p>

                    <div
                        class="text-center mx-3 mb-1 py-2 custom-gradient-bg rounded-md transition-all duration-300 hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">
                        <a href="{{ route('lapangan') }}" class="text-text-light">Kembali</a>
                    </div>
                </div>
            @else
                <div
                    class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 text-center align-center justify-items-center gap-5">
                    @foreach ($tennislapangan as $lapangan)
                        <div
                            class="mb-8 p-3 bg-white rounded-2xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] dark:shadow-stone-800">
                            <div>
                                @if (!empty($lapangan->path_gambar))
                                    @foreach (json_decode($lapangan->path_gambar) as $image)
                                        <img src="{{ asset('content-images/' . $image) }}" alt="{{ $lapangan->nama_lapangan }}"
                                            class="w-64 h-80 object-cover rounded-xl mb-2">
                                    @endforeach
                                @endif
                            </div>
                            <div class="mb-2">
                                <a href="{{ route('category.show', ['id' => $lapangan->id]) }}" class="font-bold text-lg">
                                    {{ $lapangan->nama_lapangan }}
                                </a>
                            </div>
                            <hr class="mx-auto my-2 w-10/12">
                            <div class="mb-2 font-medium text-base">
                                {{ $lapangan->alamat }}
                            </div>
                            <div class="mb-2 font-medium text-base">
                                {{ $lapangan->harga }}
                            </div>
                            <div
                                class="text-center mx-3 mb-1 py-2 custom-gradient-bg rounded-md transition-all duration-300 hover:scale-105 shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color">
                                <a href="{{ route('category.show', ['id' => $lapangan->id]) }}" class="text-text-light">View
                                    Details</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
