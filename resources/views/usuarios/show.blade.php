@extends('base')

@section('title')
    {{ $usuario->apellido, $usuario->nombre }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h1>Ver datos de usuario<small>.</small></h1>
    </div>
    <div class="col-xs-4 col-xs-offset-4">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="id" class="control-label">ID:</label>
                <input type="text" class="form-control" id="id" placeholder="{{ $usuario->id }}" readonly>
            </div>
            <div class="form-group">
                <label for="persona" class="control-label">Persona:</label>
                <input type="text" class="form-control" id="persona" placeholder="{{ $usuario->persona }}" readonly>
            </div>
            <div class="form-group">
                <label for="nombre_usuario" class="control-label">Nombre de usuario:</label>
                <input class="form-control" id="nombre_usuario" readonly='true' placeholder='{{ $usuario->nombre_usuario }}'>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Contraseña:</label>
                <input class="form-control" id="password" readonly='true' placeholder='******'>
            </div>
            <div class="form-group">
                <a href="{{ url('usuarios')}}" class="btn btn-default">
                    <i class="glyphicon glyphicon-chevron-left"></i> Volver
                </a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning pull-right" title="Editar">
                    <i class="glyphicon glyphicon-edit"></i> Editar
                </a>
            </div>
        </form>
    </div>
</div>
@stop
