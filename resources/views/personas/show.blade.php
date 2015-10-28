@extends('base')

@section('title')
    {{ $persona->apellido, $persona->nombre }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('personas.index') }}">Personas</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h1>Ver datos de persona<small>.</small></h1>
    </div>
    <div class="col-xs-4 col-xs-offset-4">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="nombre" class="control-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="{{ $persona->nombre }}" readonly>
            </div>
            <div class="form-group">
                <label for="apellido" class="control-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="{{ $persona->apellido }}" readonly>
            </div>
            <div class="form-group">
                <label for="cuit_cuil" class="control-label">Cuit/Cuil:</label>
                <input rows="8" class="form-control" id="cuit_cuil" readonly='true' placeholder='{{ $persona->cuit_cuil }}'>
            </div>
            <div class="form-group">
                <label for="domicilio" class="control-label">Domicilio:</label>
                <input rows="8" class="form-control" id="domicilio" readonly='true' placeholder='{{ $persona->domicilio }}'>
            </div>
            <div class="form-group">
                <label for="telefono" class="control-label">Teléfono:</label>
                <input rows="8" class="form-control" id="telefono" readonly='true' placeholder='{{ $persona->telefono }}'>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email:</label>
                <input rows="8" class="form-control" id="email" readonly='true' placeholder='{{ $persona->email }}'>
            </div>
            <div class="form-group">
                <label for="fecha_carga" class="control-label">Fecha de carga:</label>
                <input type="text" class="form-control" id="fecha_carga" placeholder="{{ $persona->fecha_carga }}" readonly>
            </div>
            <div class="form-group">
                <a href="{{ url('personas')}}" class="btn btn-default">
                    <i class="glyphicon glyphicon-chevron-left"></i> Volver
                </a>
                <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning pull-right" title="Editar">
                    <i class="glyphicon glyphicon-edit"></i> Editar
                </a>
            </div>
        </form>
    </div>
</div>
@stop
