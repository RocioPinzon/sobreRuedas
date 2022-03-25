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
                    
                    <!-- Profile Card -->
                    <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased" style="background-image: url('/images//skatepark-roller.jpg'); background-repeat: no-repat; background-size: cover; background-blend-mode: multiply;">
                    <div class="md:w-1/3 w-full"><img class="rounded-lg shadow-lg antialiased" src="https://picsum.photos/450/450" /></div>
                    <div class="md:w-2/3 w-full px-3 flex flex-row flex-wrap">
                    <div class="w-full text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                    <div class="text-sm text-gray-300 hover:text-gray-400 cursor-pointer md:absolute pt-3 md:pt-0 bottom-0 right-0">Last Seen: <strong>2 days ago</strong></div>
                    </div>
                    </div>
                    </div>
                    <!-- End Profile Card -->
                    <p>&nbsp;</p>



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
