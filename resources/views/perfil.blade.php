@extends('layouts.app2')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                <h2> Panel principal de {{ Auth::user()->name }}</h2>
            </header>

            <div class="w-full p-6">
                <div class="flex flex-wrap justify-around">
                    <div class="col">
                       
                        <div class="flex justify-center items-center">
                            <div class="avatar flex-col items-center justify-center rounded-full w-24 mx-2 overflow-hidden rounded-lg">
                                <div class="w-100 h-100 rounded-full">
                                  <img src="https://api.lorem.space/image/face?hash=92310" />
                                </div>
                                <div>
                                    <p class="p-4">
                                        Sube tu avatar!
                                    </p>
                                </div>
                            </div>
                        </div>         
                        
                        <div class="flex justify-center mt-8">
                            <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                                
                                <div class="m-4">
                                    <label class="inline-block mb-2 text-gray-500">Upload
                                        Image(jpg,png,svg,jpeg)</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col w-full border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                            <div class="flex flex-col items-center justify-center pt-7">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                    Select a photo</p>
                                            </div>
                                            
                                            <input type="file" class="opacity-0" />
                                        </label>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="image">
                                <img src="{{ Auth::user()->picture }}" class="img-circle elevation-2 admin_picture" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block admin_name">{{ Auth::user()->name }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label>Datos personales</label>
                        <ul>
                            <li>Nombre: </li>
                            <li>Apellidos: </li>
                            <li>Email: </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full p-6 bg-gray-200">
                <p class="text-gray-700">
                    Estás logueado!
                </p>
            </div>
        </section>
    </div>
</main>
@endsection
