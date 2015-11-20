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
        <h2>Ver datos de {{ $persona->apellido }}, {{ $persona->nombre }}<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="nombre" class="control-label col-xs-4">Nombre:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="nombre" placeholder="{{ $persona->nombre }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="apellido" class="control-label col-xs-4">Apellido:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="apellido" placeholder="{{ $persona->apellido }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="cuit_cuil" class="control-label col-xs-4">Cuit/Cuil:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="cuit_cuil" readonly='true' placeholder='{{ $persona->cuit_cuil }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="domicilio" class="control-label col-xs-4">Domicilio:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="domicilio" readonly='true' placeholder='{{ $persona->domicilio }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="telefono" class="control-label col-xs-4">Teléfono:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="telefono" readonly='true' placeholder='{{ $persona->telefono }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-xs-4">Email:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="email" readonly='true' placeholder='{{ $persona->email }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_carga" class="control-label col-xs-4">Fecha de carga:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fecha_carga" placeholder="{{ $persona->fecha_carga }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('personas')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
