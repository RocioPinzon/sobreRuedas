<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app2">

        <header class="w-full bg-gray-500">
            <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <a href="http://sobreruedas.test/" class="flex items-center">
                        <img src="/images/sobre-ruedas-logo.png" style="width:200px" class="" alt="Sobre Ruedas" />
                    </a>
                    <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Abrir menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                    
                      
                        <ul class="relative flex-row mt-4 md:flex-row m-0 md:text-sm md:font-medium">    
                            <div class="py-4">
                                @auth  
                                    <a href="http://sobreruedas.test/" class="px-4 no-underline hover:underline text-sm font-normal text-teal-800 uppercase" aria-current="page">Inicio</a>

                                    <a href="{{route('projects.index')}}" class="px-4 no-underline hover:underline text-sm font-normal text-teal-800 uppercase">
                                    {{ __("Mis Videos") }}
                                    </a>
                                
                                    <a href="{{route('contacta.index')}}" class="px-4 no-underline hover:underline text-sm font-normal text-teal-800 uppercase">
                                        {{ __("Contacta") }}
                                    </a>
                                    
                                    @if (Auth::check() && Auth::user()->hasRoles('admin'))
                                    <a href="{{route('admin.index')}}" class="rounded-md bg-yellow-400 opacity-50 border-solid border-2 border-yellow-500 hover:bg-white p-4 no-underline text-sm font-bold text-black uppercase">
                                        {{ __("Panel de Control") }}
                                    </a>
                                    
                                    @endif
                                @endauth

                                
                            </div>
                            <div class="text-right py-4">
                            @guest

                                <a class="px-4 no-underline hover:underline text-sm font-normal text-teal-800 uppercase" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="px-4 no-underline hover:underline text-sm font-normal text-teal-800 uppercase" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <span class="">{{ Auth::user()->name }}</span>

                                <a href="{{ route('logout') }}"
                                class="px-4 underline"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            @endguest
                            </div>
                        </ul>   
                        
                    
                    
                </div>
            </nav>
    
        </header>


        
        @if(session()->has('success'))
        <div class="container mx-auto mt-5">
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
                    </div>
                    <div>
                            <p class="font-bold text-red-700">{{ __("Nuevo mensaje") }}</p>
                            <p class="text-sm">{{ session()->get('success') }}</p>  
                        </div>
                    </div>
                </div>
            </div>
        
        
        @endif

       
    </div>
    @yield('content') 
</body>
</html>
