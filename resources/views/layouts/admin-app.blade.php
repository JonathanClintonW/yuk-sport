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
        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-900">
               <ul class="space-y-2 font-medium">
                  <li class="mb-3">
                     <a href="/admin-index" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
                          </svg>
                          
                          
                        <span class="ml-3 text-lg">DASHBOARD</span>
                     </a>
                  </li>

                  <hr class="w-80% h-1 bg-white mx-auto mb-3">
                  <li class="mb-3">
                     <a href="{{ route('admin.manage')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd" />
                          </svg>
                          
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">DESTINATION</span>
                     </a>
                  </li>
                  
                  <li class="mb-3">
                     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                          </svg>
                          
                        <span class="flex-1 ml-3 whitespace-nowrap text-sm">{{ __('LOGOUT') }}</span>
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </li>
               </ul>
            </div>
         </aside>
         
         
        {{-- <aside class="bg-black h-screen">
        <nav
            class="bg-white relative px-3.5 mx-6 rounded-2xl absolut  z-10">

            <a class="font-bold" href="{{ url('/admin-index') }}">
                DASHBOARD
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
            <ul class="hidden absolut font-bold lg:flex lg:items-center lg:w-auto lg:space-x-6 gap-4">
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
        </aside>






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
                                href="{{ url('/admin-index') }}">HOME</a>
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
        </div> --}}
        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
