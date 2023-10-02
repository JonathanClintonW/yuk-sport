<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Astro Travel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')

</head>

<body class="font-poppins overflow-y-scroll no-scrollbar scroll-smooth">
    <div id="app">
        <nav
            class="bg-white relative translate-y-[14px] px-3.5 mx-6 rounded-2xl flex h-12 items-center justify-between z-10">

            <a class="font-bold" href="{{ url('/') }}">
                ASTRO TRAVEL
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-black-color p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <ul class="hidden absolut font-bold  lg:flex lg:items-center lg:w-auto lg:space-x-6 gap-4">
                <li
                    class="{{ Route::currentRouteName() === 'destination' ? 'pl-4 custom-gradient-bg px-2 py-0.5 text-text-light rounded-lg shadow-gray-500 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)]' : '' }}">
                    <a href="{{ route('destination') }}"><span class="link-underline">{{ __('DESTINATION') }}</span></a>
                </li>

                <li
                    class="{{ Route::currentRouteName() === 'about' ? 'pl-4 custom-gradient-bg px-2 py-0.5 text-text-light rounded-lg shadow-gray-500 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)]' : '' }}">
                    <a href="{{ route('about') }}"><span class="link-underline">{{ __('ABOUT') }}</span></a>
                </li>

                @auth('web')
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                class="link-underline">
                                {{ __('LOGOUT') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @elseauth('admin')
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                class="link-underline">
                                {{ __('LOGOUT') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}"><span class="link-underline">{{ __('LOGIN') }}</span></a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"><span class="link-underline">{{ __('REGISTER') }}</span></a>
                    </li>
                @endauth
            </ul>
        </nav>
        <div class="navbar-menu relative z-50 hidden">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav
                class="fixed slide-in top-0 left-0 bottom-0 flex flex-col w-10/12 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center justify-end mb-8">
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-primary-color rounded"
                                href="{{ url('/') }}">HOME</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-primary-color rounded"
                                href="{{ route('destination') }}">DESTINATION</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-500 hover:bg-blue-50 hover:text-primary-color rounded"
                                href="{{ route('about') }}">ABOUT</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">
                    @auth('web')
                        <div class="pt-6">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                    class="block px-4 py-3 mb-2 text-sm text-center font-semibold hover:scale-105 duration-300 ease-in-out shadow-xl shadow-indigo-400/40 bg-gradient-to-r from-secondary-color to-primary-color text-text-light rounded-md">
                                    {{ __('LOGOUT') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @elseauth('admin')
                        <div class="pt-6">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                    class="block px-4 py-3 mb-2 text-sm text-center font-semibold hover:scale-105 duration-300 ease-in-out shadow-xl shadow-indigo-400/40 bg-gradient-to-r from-secondary-color to-primary-color text-text-light rounded-md">
                                    {{ __('LOGOUT') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @else
                            <div class="pt-6">
                                <a class="block px-4 py-3 mb-3 text-sm text-center font-semibold  bg-gray-50 hover:bg-gray-100 rounded-xl"
                                    href="{{ route('login') }}">LOGIN</a>
                                <a class="block px-4 py-3 mb-2 text-sm text-center font-semibold hover:scale-105 duration-300 ease-in-out shadow-xl shadow-indigo-400/40 bg-gradient-to-r from-secondary-color to-primary-color text-text-light rounded-md"
                                    href="{{ route('register') }}">REGISTER</a>
                            </div>
                        @endauth
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>Copyright © 2023</span>
                        </p>
                    </div>
            </nav>
        </div>
        <main class="py-0">
            @yield('content')
        </main>
        
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
