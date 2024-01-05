@extends('layouts.register-layout')

@section('content')
    <div class="flex flex-col justify-center items-center w-screen sm:min-w-[480px] max-w-screen-lg dark:bg-dark-primary-bg">

        <div class="justify-start w-96">
            <a href="{{ route('index') }}">
                <h1
                    class="mx-1.5 mb-1 font-bold text-xl bg-clip-text bg-gradient-to-r text-text-dark-green dark:text-primary-color">
                    YUK SPORT
                </h1>
            </a>
            <p class="mx-1.5 mb-4 font-medium text-base dark:text-text-light">Reset Password</p>
        </div>

        <div class="w-96 grid-cols-1">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="email" class="font-medium dark:text-text-light">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg dark:text-text-light bg-transparent @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback col-span-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[20px]">
                    <label for="password" class="font-medium dark:text-text-light">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg dark:text-text-light bg-transparent @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback col-span-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 justify-between items-center mx-1.5 mb-[40px]">
                    <label for="password-confirm"
                        class="font-medium dark:text-text-light">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="px-2.5 py-0.5 border-1 border-text-dark-green dark:border-primary-color hover:shadow-sm focus:shadow-sm focus:border-secondary-color focus:ring-0 rounded-lg dark:text-text-light bg-transparent " name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="hover:scale-110 duration-300 ease-in-out font-medium custom-gradient-bg shadow-green-900 shadow-[0_0_20px_0_rgba(0,0,0,0.3)] hover:shadow-secondary-color text-secondary-color px-4 py-1 rounded-md">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="custom-gradient-bg flex-1">

    </div>
@endsection
