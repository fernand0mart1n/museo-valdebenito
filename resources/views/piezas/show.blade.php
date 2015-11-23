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
        <h2>Ver datos de pieza<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            
        'clasificacion',
        'descripcion',
        'procedencia',
        'autor',
        'fecha_ejecutacion',
        'tema',
        'observacion'
            
            <div class="form-group">
                <label for="clasificacion" class="control-label col-xs-4">Clasificación:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="clasificacion" placeholder="{{ $pieza->clasificacion }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="procedencia" class="control-label col-xs-4">Procedencia:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="procedencia" readonly='true' placeholder='{{ $pieza->procedencia }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="autor" class="control-label col-xs-4">Autor:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="autor" readonly='true' placeholder='{{ $pieza->autor }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_ejecutacion" class="control-label col-xs-4">Fecha de ejecutación:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="fecha_ejecutacion" readonly='true' placeholder='{{ $pieza->fecha_ejecutacion }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="tema" class="control-label col-xs-4">Tema:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="tema" readonly='true' placeholder='{{ $pieza->tema }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="observacion" class="control-label col-xs-4">Observación:</label>
                <div class='col-xs-8'>
                    <textarea rows="4" class="form-control" id="observacion" placeholder="{{ $pieza->observacion }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="control-label col-xs-4">Descripción:</label>
                <div class='col-xs-8'>
                    <textarea rows="4" class="form-control" id="descripcion" placeholder="{{ $pieza->descripcion }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('piezas')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('piezas.edit', $pieza->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
