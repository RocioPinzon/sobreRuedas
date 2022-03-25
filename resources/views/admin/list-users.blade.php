@extends('admin.index')

@section("content")

<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://sobreruedas.test/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="http://sobreruedas.test/admin/list-users">Listar usuarios</a></li>
        </ol>
</nav>

    <h1 class="text-center text-success p-5">{{ __("Listado de usuarios") }}</h1>
        <!--<a href="{{ route("projects.create") }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Crear proyecto") }}
        </a>-->
    

<div class="row d-flex justify-content-center">
<table class="table bg-light table-striped col-12 col-md-8">
    <thead class="bg-dark">
    <tr>
        <th scope="col">{{ ("Nombre") }}</th>
        <th scope="col">{{ ("Email") }}</th>
        <th scope="col">{{ ("Rol") }}</th>
        <th scope="col">{{ ("Accion") }}</th>
    </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
        <tr>
        
            <td>{{ $user->name }}</td>
        
            <td>{{ $user->email }}</td>
        
            <td>
                @foreach ($user->roles as $role)
                    {{ $role->name.' ' }}
                @endforeach
            </td>
            
            <td>
                <a href="{{ url('users/'.$user->id.'/edit') }} " class="btn btn-success" >{{ trans('Editar') }}</a>
            </td>
            
        
        </tr>
        @empty
        <tr>
            <td colspan="4">
                <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <p><strong class="font-bold">{{ __("No hay usuarios") }}</strong></p>
                    <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                </div>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">

</div>
@endsection