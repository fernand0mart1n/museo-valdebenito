@extends('base')

@section('title')
    Datos de clasificación
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('clasificaciones.index') }}">Clasificaciones</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-6 col-xs-offset-3">
        <h2>Ver datos de clasificación<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="fondo_id" class="control-label col-xs-4">Fondo:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fondo_id" placeholder="{{ $clasificacion->fondo_id }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="usuario_id_carga" class="control-label col-xs-4">Usuario:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="usuario_id_carga" placeholder="{{ $clasificacion->usuario_id_carga->nombre_usuario }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_carga" class="control-label col-xs-4">Fecha de carga:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fecha_carga" placeholder="{{ date("d/m/Y", strtotime($clasificacion->fecha_carga)) }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="control-label col-xs-4">Descripción:</label>
                <div class='col-xs-8'>
                    <textarea class="form-control" id="descripcion" readonly='true' rows="5">{{ $clasificacion->descripcion }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('clasificaciones')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('clasificaciones.edit', $clasificacion->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
