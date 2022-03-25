@extends("layouts.app2")
@section("content")
    <div class="flex justify-center flex-wrap p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5 py-5">{{ __("Listado de videos") }}</h1>
            <a href="{{ route('projects.create') }}" class="hover:bg-yellow-900 text-black font-semibold hover:text-white py-2 px-4 border border-yellow-600 hover:border-transparent rounded">
                {{ __("Publicar video") }}
            </a>
        </div>
    </div>
    <div class="flex flex-col p-5 mx-5">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-center">
                <thead class="border-b bg-yellow-500">
                  <tr>
                    @if (Auth::check() && Auth::user()->hasRoles('admin'))
                    <th  scope="col" class="text-sm font-medium text-white px-6 py-4">{{ __("ID Proyecto") }}</th>
                    @endif
                    
                    <th  scope="col" class="text-sm font-medium text-white px-6 py-4">{{ __("Titulo") }}</th>
                    
                    @if (Auth::check() && Auth::user()->hasRoles('admin'))
                    <th  scope="col" class="text-sm font-medium text-white px-6 py-4">{{ __("Usuario") }}</th>
                    @endif

                    <th  scope="col" class="text-sm font-medium text-white px-6 py-4">{{ __("Video/ID YouTube") }}</th>
                    <th  scope="col" class="text-sm font-medium text-white px-6 py-4">{{ __("Fecha Alta") }}</th>
                    <th  scope="col" class="text-sm font-medium text-white px-6 py-4">{{ __("Acciones") }}</th>
                  </tr>
                </thead class="border-b">
                <tbody>
                    @forelse($projects as $project)
                    <tr>
                        @if (Auth::check() && Auth::user()->hasRoles('admin'))
                        <td class="border px-4 py-2">{{ $project->id }}</td>
                        @endif
                        <td class="border px-4 py-2">{{ $project->name }}</td>

                        @if (Auth::check() && Auth::user()->hasRoles('admin'))
                        <td class="border px-4 py-2">{{ $project->user->name }}</td>
                        @endif

                        <td class="border px-4 py-2">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $project->description }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
    
                            </td>
                        <td class="border px-4 py-2">{{ date_format($project->created_at, "d/m/Y") }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('projects.edit', ['project' => $project]) }}"><span class="p-5 bg-orange-500">{{ __("Editar") }}</span></a> |

                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded"  onclick="event.preventDefault(); document.getElementById('delete-project-{{ $project->id }}-form').submit();">{{ __("Eliminar") }}</button>
                            <form id="delete-project-{{ $project->id }}-form" action="{{ route('projects.destroy', ['project' => $project]) }}" method="POST" class="hidden">
                                @method("DELETE")
                                @csrf
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <div class="text-center border border-green-600 text-green-500 px-4 py-3 rounded relative text-center rounded relative" role="alert">
                                <p><strong class="font-bold">{{ __("No hay proyectos") }}</strong></p>
                                <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
       
  @if($projects->count())
        <div class="mt-3">
            {{ $projects->links() }}
           
        </div>
    @endif

@endsection
