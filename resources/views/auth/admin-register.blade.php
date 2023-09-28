@extends('layouts.register-layout')

@section('content')
    <div class="flex flex-col justify-center items-center w-screen sm:min-w-[480px] max-w-screen-lg">
        <div class="justify-start w-96">
            <h1
                class="mx-1.5 mb-1 font-bold text-xl text-transparent bg-clip-text bg-gradient-to-r from-secondary-color from-5% to-primary-color">
                ASTRO TRAVEL</h1>
            <p class="mx-1.5 mb-4 font-medium text-base">Join Us as Admin and See the World!</p>
        </div>

        <div class="w-96 grid-cols-1">
            <form method="POST" action="{{ route('admin.register') }}">
                @csrf
                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="name" class="font-medium">{{ __('Name') }}</label>


                    <input id="name" type="text"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:outline-0 rounded-lg @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="address" class="font-medium">{{ __('Address') }}</label>


                    <input id="address" type="text"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:outline-0 rounded-lg @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="phone" class="font-medium">{{ __('Phone') }}</label>


                    <input id="phone" type="text"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:outline-0 rounded-lg @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="email" class="font-medium">{{ __('Email Address') }}</label>


                    <input id="email" type="email"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:outline-0 rounded-lg @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="password" class="font-medium">{{ __('Password') }}</label>


                    <input id="password" type="password"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:outline-0 rounded-lg @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="password-confirm" class="font-medium">{{ __('Confirm Password') }}</label>


                    <input id="password-confirm" type="password"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:outline-0 rounded-lg"
                        name="password_confirmation" required autocomplete="new-password">

                </div>
                <hr class="w-full h1 bg-black">
                <div class="mx-1.5 mt-3 mb-20px">
                    <p class="font-medium">Already have an account? <a href="{{ route('login') }}"
                            class="text-primary-color font-medium">Login</a></p>
                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <a href="{{ route('register') }}" class="text-primary-color font-medium">
                        {{ __('Register as Customer') }}
                    </a>
                    <button type="submit"
                        class="hover:scale-110 duration-300 ease-in-out font-medium shadow-xl shadow-indigo-400/40 bg-gradient-to-r from-secondary-color to-primary-color text-text-light px-4 py-1 rounded-md  ">
                        {{ __('Register') }}
                    </button>

                </div>
            </form>

        </div>
    </div>
    <div class="custom-gradient-bg flex-1">

    </div>
@endsection
