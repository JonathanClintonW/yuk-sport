<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'YukSport') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'public/js/app.js'])
    @vite('public/css/app.css')

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-poppins overflow-y-scroll no-scrollbar scroll-smooth text-black-color dark:bg-dark-primary-bg">
    <div id="app" class="dark:bg-dark-primary-bg">
        <nav
            class="bg-white relative translate-y-[14px] px-3.5 mx-6 rounded-2xl flex h-12 items-center justify-between z-10">

            <a class="font-bold" href="{{ url('/') }}">
                YukSport
            </a>

            <div class="lg:hidden flex">

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
                    class="{{ Route::currentRouteName() === 'lapangan' ? 'pl-4 custom-gradient-bg px-2 py-0.5 rounded-lg shadow-gray-500 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)]' : '' }}">
                    <a href="{{ route('lapangan') }}"><span class="link-underline">{{ __('LAPANGAN') }}</span></a>
                </li>

                @auth('web')
                    <li
                        class="{{ Route::currentRouteName() === 'user.profile' ? 'pl-4 custom-gradient-bg px-2 py-0.5 rounded-lg shadow-gray-500 shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1)]' : '' }}">
                        <a href="{{ route('user.profile') }}">
                            <span class="link-underline">{{ __('PROFILE') }}</span>
                        </a>
                    </li>
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

                <button id="theme-toggle" type="button"
                    class="text-gray-500 dark:text-gray-400  focus:outline-none focus:ring-0  rounded-lg text-sm p-2.5 m-0">

                    <svg id="theme-toggle-dark-icon" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#010300"
                        class="hidden w-6 h-6 transition-all duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>

                    <svg id="theme-toggle-light-icon" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#010300"
                        class="hidden w-6 h-6 transition-all duration-200">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </button>
            </ul>
        </nav>


        <div class="navbar-menu relative z-50 hidden ">

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
                                href="{{ route('lapangan') }}">LAPANGAN</a>
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
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
