@extends('admin.index')

@section("content")
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="http://sobreruedas.test/admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="http://sobreruedas.test/admin/list-permisos">Listar permisos</a></li>
        </ol>
    </nav>

    <h1 class="text-center text-success p-5">{{ __("Listado de permisos") }}</h1>
        <!--<a href="{{ route("projects.create") }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            {{ __("Crear proyecto") }}
        </a>-->
    


<div class="row d-flex justify-content-center">
<table class="table bg-light table-striped col-12 col-md-8">
    <thead class="bg-dark">
    <tr>
        <th scope="col">{{ ("Id") }}</th>
        <th scope="col">{{ ("Nombre") }}</th>
        <th scope="col">{{ ("Guard") }}</th>
        <th scope="col">{{ ("Created_at") }}</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($permisos as $key => $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->guard_name }}</td>
                <td>{{ $permission->created_at }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection