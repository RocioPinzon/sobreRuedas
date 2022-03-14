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
                Panel principal
            </header>

            <div class="w-full p-6">
                <div class="flex flex-wrap justify-around">
                    <div class="col">
                        
                        <div class="text-center">
                            <img src="https://dummyimage.com/150x150/000/fff.jpg&text=avatar" class="rounded inline" alt="">
                        </div>
                                          
                        <div>
                            <p class="">
                                SUBIR img avatar!
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <label>Datos personales</label>
                        <ul>
                            <li>Nombre: {{ Auth::user()->name }}</li>
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
