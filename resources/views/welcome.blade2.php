<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">

    

    <div class="min-h-screen flex items-center justify-center">
        
        <header>
                     

            <!-- The HTML5 video element that will create the background video on the header -->
            <video class="z-index-1"playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="images/roller-video-inicio.mp4" type="video/mp4">
            </video>

            <!-- The header content -->
            <div class="z-index-2 container h-100 bg-dark">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">

                        @if(Route::has('login'))
                        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                            @auth
                                <a href="{{ url('/perfil') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                            @else
                            <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
         
        </header>
        
    </div>
</div>
</body>
</html>
