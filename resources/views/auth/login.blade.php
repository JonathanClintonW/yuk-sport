@extends('layouts.register-layout')

@section('content')
    <div class="flex flex-col justify-center items-center w-screen sm:min-w-[480px] max-w-screen-lg">
        <div class="justify-start w-96">
            <h1
                class="mx-1.5 mb-1 font-bold text-xl text-transparent bg-clip-text bg-gradient-to-r from-secondary-color from-5% to-primary-color">
                ASTRO TRAVEL</h1>
            <p class="mx-1.5 mb-4 font-medium text-base">Join Us and See the World!</p>
        </div>
        <div class="w-96 grid-cols-1">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="email" class="font-medium">{{ __('Email Address') }}</label>
                    <input id="email" type="email"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg"
                        name="email" value="{{ old('email') }}" autocomplete="email">
                </div>

                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <label for="password" class="font-medium">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="px-2.5 py-0.5 border-1 border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg"
                        name="password" required autocomplete="current-password">

                </div>

                <hr class="w-full h1 bg-black">
                <div class="mx-1.5 mt-3 mb-20px">
                    <p class="font-medium">Don't have an account? <a href="{{ route('register') }}"
                            class="text-primary-color font-medium">Register</a></p>
                </div>


                <div class="flex justify-between items-center mx-1.5 mb-20px">
                    <div class="flex items-center">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-primary-color font-medium">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <button type="submit"
                        class="hover:scale-110 duration-300 ease-in-out font-medium shadow-xl shadow-indigo-400/40 bg-gradient-to-r from-secondary-color to-primary-color text-text-light px-4 py-1 rounded-md">
                        {{ __('Login') }}
                    </button>
                    
                </div>
            </form>

        </div>

    </div>
    <div class="custom-gradient-bg flex-1">
        
    </div>
@endsection
