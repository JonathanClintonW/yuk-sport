@extends('layouts.app')

@section('content')
    <div class="mt-16 h-screen select-none dark:bg-dark-primary-bg">
        <div class="grid lg:grid-cols-2 justify-items-center">
            <section
                class="px-5 py-5 mb-10 w-[350px] bg-text-light rounded-2xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] dark:shadow-stone-800">
                <h1
                    class="text-xl sm:text-2xl md:text-3xl font-bold text-center leading-normal mb-3 transition-all duration-200">
                    PROFILE</h1>
                <div class="">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('user.update-profile') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4 flex flex-col items-center">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                            <input id="name" type="text"
                                class="px-2 py-2 w-full rounded-xl border-1 border-dark-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 bg-transparent"
                                name="name" value="{{ old('name', $user->name) }}">
                        </div>

                        <div class="mb-4 flex flex-col items-center">
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                            <input id="phone" type="text"
                                class="px-2 py-2 w-full rounded-xl border-1 border-dark-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 bg-transparent"
                                name="phone" value="{{ old('phone', $user->phone) }}">
                        </div>

                        <div class="mb-4 flex flex-col items-center">
                            <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">Address</label>
                            <textarea id="address"
                                class="px-2 py-2 w-full rounded-xl border-1 border-dark-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 bg-transparent"
                                name="address">{{ old('address', $user->address) }}</textarea>
                        </div>

                        <div class="mb-4 flex flex-col items-center">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                            <div class="relative w-full">
                                <input id="password" type="password"
                                    class="pl-2 py-2 rounded-xl pr-10 border-1 border-dark-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 bg-transparent"
                                    name="password">
                                <button type="button" class="absolute top-2 right-2 focus:outline-none"
                                    id="password-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 toggle-password">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mb-4 flex flex-col items-center">
                            <label for="password-confirm" class="block text-sm font-semibold text-gray-700 mb-2">Confirm
                                Password</label>
                            <div class="relative w-full">
                                <input id="password-confirm" type="password"
                                    class="pl-2 py-2 rounded-xl pr-10 border-1 border-dark-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 bg-transparent"
                                    name="password_confirmation">
                                <button type="button" class="absolute top-2 right-2 focus:outline-none"
                                    id="password-confirm-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 toggle-password">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit"
                                class="hover:scale-110 duration-300 ease-in-out font-medium custom-gradient-bg shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color text-text-light px-4 py-2 rounded-md">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            <section
                class="px-5 py-5 mb-10 mx-10 max-w-4xl bg-text-light rounded-2xl shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] dark:shadow-stone-800">
                <h1
                    class="text-xl sm:text-2xl md:text-3xl font-bold text-center leading-normal mb-3 transition-all duration-200">
                    DAFTAR PESANAN</h1>
                <hr class="mx-auto my-2 w-10/12">
                @if (!$orders->isEmpty())
                    <div class="mb-4">
                        <ul>
                            @foreach ($orders as $order)
                                <li class="grid items-center">
                                    <div class="flex justify-between mb-3 gap-5 px-2">
                                        <h2 class="font-semibold text-black">Lapangan: </h2>
                                        <h2 class="text-gray-700 text-right">{{ $order->lapangan->nama_lapangan ?? 'Data Tidak Ditemukan' }}</h2>
                                    </div>
                                    <div class="flex justify-between mb-3 gap-5 px-2">
                                        <h2 class="font-semibold text-black">Alamat: </h2>
                                        <h2 class="text-gray-700 text-right">{{ $order->lapangan->alamat ?? 'Data Tidak Ditemukan' }}</h2>
                                    </div>
                                    <div class="flex justify-between mb-3 gap-5 px-2">
                                        <h2 class="font-semibold text-black">Total Jam: </h2>
                                        <h2 class="text-gray-700 text-right">{{ $order->total_jam }}</h2>
                                    </div>
                                    <div class="flex justify-between mb-3 gap-5 px-2">
                                        <h2 class="font-semibold text-black">Total Harga: </h2>
                                        <h2 class="text-gray-700 text-right">Rp. {{ number_format($order->total_harga) }}</h2>
                                    </div>
                                    <div class="flex justify-between mb-3 gap-5 px-2">
                                        <h2 class="font-semibold text-black">Status Pembayaran: </h2>
                                        <h2 class="text-gray-700 text-right">{{ $order->pembayaran->status_pembayaran }}</h2>
                                    </div>
                                    <div class="flex justify-between mb-3 gap-5 px-2">
                                        <h2 class="font-semibold text-black">Status Pesanan: </h2>
                                        <h2 class="text-gray-700 text-right">{{ $order->status_pesanan }}</h2>
                                    </div>
                                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p class="text-gray-700">No orders found for this user.</p>
                @endif

            </section>
        </div>
        <script>
            document.querySelector('#password-toggle').addEventListener('click', function() {
                togglePasswordVisibility('password');
            });

            document.querySelector('#password-confirm-toggle').addEventListener('click', function() {
                togglePasswordVisibility('password-confirm');
            });

            function togglePasswordVisibility(inputId) {
                const passwordInput = document.getElementById(inputId);
                passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
            }
        </script>
    </div>
@endsection
