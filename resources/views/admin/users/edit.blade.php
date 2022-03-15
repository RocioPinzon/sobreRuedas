@extends('admin.index')

@section('content')
    @if (session("success"))
    <div class="alert alert-success">
        <strong>{{ session("success") }}</strong>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <label class="form-label">Nombre</label>
            <p class="form-control">{{ $user->name }}</p>
   
            <label class="form-label">Email</label>
            <p class="form-control">{{ $user->email }}</p>
   
            <h2 class="h5 text-primary font-weight-bold">Listado de Roles</h2>
            {!! Form::model($user, ['route'=>['users.edit', $user], 'method' => 'put']) !!}

            @foreach ($roles as $role)
            <div>
                <label>
                    {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                    {{ $role->name }}
                </label>
            </div>
        @endforeach

                {!! Form::submit('Asignar rol', ['class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}

            </div>
    </div>
    @endsection
