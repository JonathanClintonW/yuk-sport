@extends('layouts.register-layout')

@section('content')
    <div class="flex flex-col justify-center items-center w-screen sm:min-w-[480px] max-w-screen-lg dark:bg-dark-primary-bg">
        <div class="justify-start w-96">
            <a href="{{ route('index') }}">
                <h1 class="mx-1.5 mb-1 font-bold text-xl bg-clip-text bg-gradient-to-r text-text-dark-green dark:text-primary-color">
                    ASTRO TRAVEL
                </h1>
            </a>
            <p class="mx-1.5 mb-4 font-medium text-base dark:text-text-light">Gabung bersama kami!</p>
        </div>
        <div class="w-96 grid-cols-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="email" class="font-medium dark:text-text-light">{{ __('Email Address') }}</label>
                    <input id="email" type="email"
                        class="px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg dark:text-text-light bg-transparent"
                        name="email" value="{{ old('email') }}" autocomplete="email">
                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="password" class="font-medium dark:text-text-light">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg dark:text-text-light bg-transparent"
                        name="password" required autocomplete="current-password">

                </div>
                
                <hr class="w-full h1 bg-black">
                <div class="mx-1.5 mt-3 mb-20px">
                    <p class="font-medium dark:text-text-light">Belum memiliki akun? <a href="{{ route('register') }}"
                            class="text-text-dark-green dark:text-primary-color font-medium">Register</a></p>
                </div>


                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <div class="flex items-center">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-text-dark-green dark:text-primary-color font-medium">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <button type="submit"
                        class="hover:scale-110 duration-300 ease-in-out font-medium custom-gradient-bg shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color text-secondary-color px-4 py-1 rounded-md">
                        {{ __('Login') }}
                    </button>       
                </div>
            </form>
        </div>
        
    </div>
    <div class="custom-gradient-bg flex-1">
        
    </div>
@endsection
