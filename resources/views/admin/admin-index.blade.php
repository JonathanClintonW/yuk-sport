@extends('layouts.admin-app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-dashed rounded-lg border-dark-primary-color dark:border-text-light">
            <h2 class="text-2xl font-semibold mb-4">Daftar Pesanan</h2>
            @foreach ($orders as $order)
                <div class="mb-4">
                    <div class="grid grid-cols-2">
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Nama Pemesan:</p>
                            <p>{{ $order->user->name }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">No Telp:</p>
                            <p>{{ $order->user->phone }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Email:</p>
                            <p>{{ $order->user->email }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Nama Lapangan:</p>
                            <p>{{ $order->lapangan->nama_lapangan }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Alamat:</p>
                            <p>{{ $order->lapangan->alamat }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Tanggal Pesanan:</p>
                            <p>{{ $order->tanggal_pesanan }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Total Jam:</p>
                            <p>{{ $order->total_jam }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Total Harga:</p>
                            <p>Rp. {{ number_format($order->total_harga) }}</p>
                        </div>

                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold">Status Pembayaran:</p>
                            <form action="{{ route('admin.changeStatus', ['pembayaran' => $order->pembayaran->id]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status_pembayaran" class="rounded pl-2" onchange="this.form.submit()">
                                    <option value="Pending"
                                        {{ $order->pembayaran->status_pembayaran === 'Pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>
                                    <option value="Gagal"
                                        {{ $order->pembayaran->status_pembayaran === 'Gagal' ? 'selected' : '' }}>
                                        Gagal
                                    </option>
                                    <option value="Berhasil"
                                        {{ $order->pembayaran->status_pembayaran === 'Berhasil' ? 'selected' : '' }}>
                                        Berhasil
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="gap-2 mb-2">
                        <p class="font-semibold mb-2">Bukti Pembayaran:</p>
                        <img
                                src="{{ asset('content-payment/' . $order->pembayaran->bukti_pembayaran) }}"
                                class="h-[400px]" alt="Bukti Pembayaran">
                    </div>
                    <hr class="h-px my-8 bg-gray-900 border-0 dark:bg-gray-700">
                </div>
            @endforeach
            {{ $orders->links() }}
        </div>
    </div>
@endsection
