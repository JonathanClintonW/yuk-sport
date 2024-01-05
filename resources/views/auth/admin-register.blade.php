@extends('layouts.register-layout')

@section('content')
    <div class="flex flex-col justify-center items-center w-screen sm:min-w-[480px] max-w-screen-lg dark:bg-dark-primary-bg">
        <div class="justify-start w-96">
            <a href="{{ route('index') }}">
                <h1 class="mx-1.5 mb-1 font-bold text-xl bg-clip-text bg-gradient-to-r text-text-dark-green dark:text-primary-color">
                    YUK SPORT ADMIN
                </h1>
            </a>
            
            <p class="mx-1.5 mb-4 font-medium text-base dark:text-text-light">Daftar sebagai Admin untuk mendaftarkan lapangan</p>
        </div>

        <div class="w-96 grid-cols-1">
            <form method="POST" action="{{ route('admin.register') }}">
                @csrf
                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="name" class="font-medium dark:text-text-light">{{ __('Nama') }}</label>


                    <input id="name" type="text"
                        class="dark:text-text-light bg-transparent px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name">

                    @error('name')
                        <span class="invalid-feedback col-span-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="address" class="font-medium dark:text-text-light">{{ __('Alamat') }}</label>


                    <input id="address" type="text"
                        class="dark:text-text-light bg-transparent px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback col-span-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="phone" class="font-medium dark:text-text-light">{{ __('Telepon') }}</label>


                    <input id="phone" type="string" pattern="[0-9]*"
                        class="dark:text-text-light bg-transparent px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                    @error('phone')
                        <span class="invalid-feedback col-span-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="email" class="font-medium dark:text-text-light">{{ __('Alamat Email') }}</label>


                    <input id="email" type="email"
                        class="dark:text-text-light bg-transparent px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback col-span-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="password" class="font-medium dark:text-text-light">{{ __('Password') }}</label>


                    <input id="password" type="password"
                        class="dark:text-text-light bg-transparent px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback col-span-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="password-confirm" class="font-medium dark:text-text-light">{{ __('Konfirmasi Password') }}</label>


                    <input id="password-confirm" type="password"
                        class="dark:text-text-light bg-transparent px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg"
                        name="password_confirmation" required autocomplete="new-password">

                </div>
                <hr class="w-full h1 bg-black">
                <div class="mx-1.5 mt-3 mb-[20px]">
                    <p class="font-medium dark:text-text-light">Sudah memiliki akun? <a href="{{ route('login') }}"
                            class="text-text-dark-green dark:text-primary-color font-medium">Login</a></p>
                </div>

                <div class="flex justify-between items-center mx-1.5 mb-[20px]">
                    <a href="{{ route('register') }}" class="text-text-dark-green dark:text-primary-color font-medium">
                        {{ __('Daftar sebagai Pengguna') }}
                    </a>
                    <button type="submit"
                        class="hover:scale-110 duration-300 ease-in-out font-medium custom-gradient-bg shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color text-secondary-color px-4 py-1 rounded-md  ">
                        {{ __('Register') }}
                    </button>

                </div>
            </form>

        </div>
    </div>
    <div class="custom-gradient-bg flex-1">

    </div>
@endsection
