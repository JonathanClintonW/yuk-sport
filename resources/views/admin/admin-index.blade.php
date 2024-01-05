@extends('layouts.admin-app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-dashed rounded-lg border-dark-primary-color dark:border-text-light">
            <h2 class="text-2xl font-semibold mb-4 dark:text-text-light">Daftar Pesanan</h2>
            @foreach ($orders as $order)
                <div class="mb-4">
                    <div class="grid grid-cols-2">
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Nama Pemesan:</p>
                            <p class="dark:text-text-gray">{{ $order->user->name }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">No Telp:</p>
                            <p class="dark:text-text-gray">{{ $order->user->phone }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Email:</p>
                            <p class="dark:text-text-gray">{{ $order->user->email }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Nama Lapangan:</p>
                            <p class="dark:text-text-gray">{{ $order->lapangan->nama_lapangan ?? 'Data Tidak Ditemukan' }}
                            </p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Alamat:</p>
                            <p class="dark:text-text-gray">{{ $order->lapangan->alamat ?? 'Data Tidak Ditemukan' }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Tanggal Pesanan:</p>
                            <p class="dark:text-text-gray">{{ $order->tanggal_pesanan }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Total Jam:</p>
                            <p class="dark:text-text-gray">{{ $order->total_jam }}</p>
                        </div>
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Total Harga:</p>
                            <p class="dark:text-text-gray">Rp. {{ number_format($order->total_harga) }}</p>
                        </div>

                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Status Pembayaran:</p>
                            <form action="{{ route('admin.status.pembayaran', ['pembayaran' => $order->pembayaran->id]) }}"
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
                        <div class="flex gap-2 mb-2">
                            <p class="font-semibold dark:text-text-light">Status Pesanan:</p>
                            <form action="{{ route('admin.status.pesanan', ['pesanan' => $order->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status_pesanan" class="rounded pl-2" onchange="this.form.submit()">
                                    <option value="Pending" {{ $order->status_pesanan === 'Pending' ? 'selected' : '' }}>
                                        Pending
                                    </option>
                                    <option value="Gagal" {{ $order->status_pesanan === 'Gagal' ? 'selected' : '' }}>
                                        Gagal
                                    </option>
                                    <option value="Berhasil" {{ $order->status_pesanan === 'Berhasil' ? 'selected' : '' }}>
                                        Berhasil
                                    </option>
                                    <option value="Selesai" {{ $order->status_pesanan === 'Selesai' ? 'selected' : '' }}>
                                        Selesai
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="gap-2 mb-2">
                        <p class="font-semibold mb-2 dark:text-text-light">Bukti Pembayaran:</p>
                        <img src="{{ asset('content-payment/' . $order->pembayaran->bukti_pembayaran) }}"
                            class="h-[400px] dark:text-text-gray" alt="Bukti Pembayaran">
                    </div>
                    <hr class="h-px my-8 bg-gray-900 border-0 dark:bg-gray-700">
                </div>
            @endforeach
            {{ $orders->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('login'))
                Swal.fire({
                    title: '',
                    text: '{{ session('login') }}',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                });
            @elseif (session('register'))
                Swal.fire({
                    title: '',
                    text: '{{ session('register') }}',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif
        });
    </script>
@endsection
