
@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Panel administrador de {{ Auth::user()->name }}</h1>
    
@stop

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-success"><a href="http://sobreruedas.test/admin">Inicio</a></li>
        </ol>
    </nav>
<!-- Background image -->
<div class="bg-image img-fluid d-flex justify-content-center align-items-center"
  style=" background-image: url('/images/imagen-admin-inicio.jpg');background-size: cover;
background-image: center; background-repeat:no-repeat; height: 450px; width:100%">
  <h1 class="text-white bg-success p-5">SOBRE RUEDAS | PANEL ADMIN</h1>
</div>
<!-- Background image -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop