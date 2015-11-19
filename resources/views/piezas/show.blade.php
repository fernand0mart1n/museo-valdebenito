@extends('base')

@section('title')
    {{ $pieza->apellido, $pieza->nombre }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('piezas.index') }}">Piezas</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h1>Ver datos de pieza<small>.</small></h1>
    </div>
    <div class="col-xs-4 col-xs-offset-4">
        <form class="form-horizontal"> 
            
            'clasificacion',
        'descripcion',
        'procedencia',
        'autor',
        'fecha_ejecutacion',
        'tema',
        'observacion'
            
            <div class="form-group">
                <label for="clasificacion" class="control-label">Clasificación:</label>
                <input type="text" class="form-control" id="clasificacion" placeholder="{{ $pieza->clasificacion }}" readonly>
            </div>
            <div class="form-group">
                <label for="descripcion" class="control-label">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" placeholder="{{ $pieza->descripcion }}" readonly>
            </div>
            <div class="form-group">
                <label for="procedencia" class="control-label">Procedencia:</label>
                <input class="form-control" id="procedencia" readonly='true' placeholder='{{ $pieza->procedencia }}'>
            </div>
            <div class="form-group">
                <label for="autor" class="control-label">Autor:</label>
                <input class="form-control" id="autor" readonly='true' placeholder='{{ $pieza->autor }}'>
            </div>
            <div class="form-group">
                <label for="fecha_ejecutacion" class="control-label">Fecha de ejecutación:</label>
                <input class="form-control" id="fecha_ejecutacion" readonly='true' placeholder='{{ $pieza->fecha_ejecutacion }}'>
            </div>
            <div class="form-group">
                <label for="tema" class="control-label">Tema:</label>
                <input class="form-control" id="tema" readonly='true' placeholder='{{ $pieza->tema }}'>
            </div>
            <div class="form-group">
                <label for="observacion" class="control-label">Observación:</label>
                <input type="text" class="form-control" id="observacion" placeholder="{{ $pieza->observacion }}" readonly>
            </div>
            <div class="form-group">
                <a href="{{ url('piezas')}}" class="btn btn-default">
                    <i class="glyphicon glyphicon-chevron-left"></i> Volver
                </a>
                <a href="{{ route('piezas.edit', $pieza->id) }}" class="btn btn-warning pull-right" title="Editar">
                    <i class="glyphicon glyphicon-edit"></i> Editar
                </a>
            </div>
        </form>
    </div>
</div>
@stop
