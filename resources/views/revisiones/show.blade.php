@extends('base')

@section('title')
    Datos de revisión {{ $revision->id }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('revisiones.index') }}">Revisiones</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h2>Ver datos de revisión {{ $revision->id }}<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="usuario_id_revision" class="control-label col-xs-4">Usuario:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="usuario_id_revision" placeholder="{{ $revision->usuario_id_revision }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="pieza" class="control-label col-xs-4">Pieza:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="pieza" placeholder="{{ $revision->pieza }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_revision" class="control-label col-xs-4">Fecha de revisión:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fecha_revision" placeholder="{{ date("d/m/Y", strtotime($revision->fecha_revision)) }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="estado_conversacion" class="control-label col-xs-4">Estado de conversación:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="estado_conversacion" readonly='true' placeholder='{{ $revision->estado_conversacion }}'>
                </div>
            </div>
            <div class="form-group">
                <label for="ubicacion" class="control-label col-xs-4">Ubicación:</label>
                <div class='col-xs-8'>
                    <input class="form-control" id="ubicacion" readonly='true' placeholder='{{ $revision->ubicacion }}'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('revisiones')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('revisiones.edit', $revision->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
