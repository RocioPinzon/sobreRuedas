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
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>


<body class="bg-gray-100 h-min-screen row d-flex">

    <!-- HEADER -->

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
                
                  
                    <ul class="relative flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <div class="top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                            @auth
                                <a href="{{ url('/perfil') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Perfil') }}</a>
                            @else
                            <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                            @endif
                            @endauth
                        </div>
                    </ul>   
                    
                
                
            </div>
        </nav>

    </header>
    
    <!-- MAIN -->

    <main class="grid justify-items-center">

    @php( $projects = \App\Models\Project::paginate(6)) 
    
    <div class="grid justify-center w-2/3 p-4">
        <video class="aspect-video rounded-xl" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="images/roller-video-inicio.mp4" type="video/mp4">
        </video>
    </div>
   
    <div class="containerPortada">
        <h1>Sobre Ruedas</h1>
        <h2 class=pb-4>Los mejores vídeos de patinaje</h2>
        <p>Publica lo que más te apasiona. Comparte y encuentra vídeos increíbles en esta comunidad roller.</p>
        <p>Forma parte del mundo de los patines, hay un tipo para ti. Desde cuatro ruedas, patines de velocidad, agressive y mucho más. </p>
  
    </div>


    <div class="containerPortada">
        <div class="py-4 ">
        <h2 class="text-center">Últimos vídeos publicados</h2>
        
        </div> 
    
        <div class="grid grid-cols-3 p-5 mx-5 justify-items-stretch gap-4">
                
            @forelse($projects as $project)
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <a href="#">
                    <iframe class="h-80 rounded-t-lg" width="100%" height="515" src="https://www.youtube.com/embed/{{ $project->description }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </a>
                <div class="p-5 grid grid-rows gap-6">
                    
                    <div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $project->name }}</h5>

                        </a>
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-indigo-400 border border-indigo-400 ">Agresivos</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-indigo-400 border border-indigo-400 ">Inline</span>
                        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-indigo-400 border border-indigo-400 ">Sktepark</span>
                    </div>
                    
                    <div class="grid grid-cols-2">
                        <p>Subido por 
                            <span class="italic">
                            
                                {{ $project->user->name }}, {{ $project->user->created_at->isoFormat('dddd H:mm')}}
                            </span>
                        </p>
                        
                    </div>
                </div>
            </div>
            @empty
                    <div class="col-span-3 text-center border border-green-600 text-green-500 px-4 py-3 rounded relative" role="info">
                          <span class="font-bold "><h3 class="normal-case text-green-500">{{ __("Ops... Aún no hay vídeos publicados") }}</h3></span>
                          <span class="block sm:inline">{{ __("Se el primero en publicar un vídeo.") }}</span>
                          <p><a href="{{ route('login') }}" class="text-yellow-600">Entra</a> o <a href="{{ route('register') }}" class="text-yellow-600">regístrate</a>, y empieza a publicar vídeos</p>
                          <span class="block sm:inline">{{ __("") }}</span>
                    </div>
            @endforelse
            
      </div>
    </div>

    </main>

    <!-- FOOTER -->
    <footer class="text-center bg-yellow-500	text-white mt-4">
        <div class="px-6 pt-6 ">
          <div class="flex justify-center mb-6">
            <a href="https://www.facebook.com/" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-orange-700 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
              <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="w-2 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
              </path>
              </svg>
            </a>
      
            <a href="https://www.instagram.com/" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-orange-700 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
              <svg aria-hidden="true" focusable="false" data-prefix="fab"
              data-icon="instagram" class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
            </a>
      
            <a href="https://github.com/RocioPinzon/sobreRuedas" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-orange-700 hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
              <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">           
                </path>
              </svg>
            </a>
          </div>
        </div>
      
        <div class="text-center p-4 bg-yellow-600" >
            © 2022 - Sobre Ruedas - Tu portal de patinaje
          
        </div>
      </footer>
</body>
</html>
