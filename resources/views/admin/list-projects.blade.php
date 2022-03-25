@extends('admin.index')

@section("content")
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://sobreruedas.test/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="http://sobreruedas.test/admin/list-projects">Listar videos</a></li>
        </ol>
</nav>

    <h1 class="text-center text-success p-5">{{ __("Listado de todos los vídeos") }}</h1>
        <!--<a href="{{ route("projects.create") }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Publicar vídeo") }}
        </a>-->
    
<div class="row d-flex justify-content-center">
    <table class="table table-striped col-12 col-md-8">
        <thead class="bg-dark">
        <tr>
            <th scope="col">{{ ("Nombre") }}</th>
            <th scope="col">{{ ("Vídeo") }}</th>
            <th scope="col">{{ ("user_id") }}</th>
            <th scope="col">{{ ("Eliminar") }}</th>


        </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
            <tr>
            
                <td>{{ $project->name }}</td>
                <td>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $project->description }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
                </td>
                <td>{{ $project->user_id }}</td>   
                
                <td>
                    <button class="bg-red hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded"  onclick="event.preventDefault(); document.getElementById('delete-project-{{ $project->id }}-form').submit();">{{ __("Eliminar") }}</button>
                            <form id="delete-project-{{ $project->id }}-form" action="{{ route('projects.destroy', ['project' => $project]) }}" method="POST" class="hidden">
                                @method("DELETE")
                                @csrf
                            </form>
                </td>    
            </tr>
            @empty
            <tr class="bg-success bg-opacity-50">
                <td colspan="4">
                    <div class=" bg-gradient text-center border border-success px-4 py-3 rounded relative" role="alert">
                        <p><strong class="font-bold">{{ __("Todavía no hay vídeos") }}</strong></p>
                        <span class="block sm:inline">{{ __("Nada que mostrar aquí") }}</span>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>


<div class="mt-3">

</div>
@endsection