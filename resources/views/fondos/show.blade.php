@extends('base')

@section('title')
    Fondo {{ $fondo->id }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('fondos.index') }}">Fondos</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h2>Ver datos del fondo {{ $fondo->id }}<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="nombre" class="control-label col-xs-4">Usuario:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="usuario_id_carga" placeholder="{{ $fondo->usuario_id_carga }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_carga" class="control-label col-xs-4">Fecha de carga:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fecha_carga" placeholder="{{ date("d/m/Y", strtotime($fondo->fecha_carga)) }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="descripcion" class="control-label col-xs-4">Descripción:</label>
                <div class='col-xs-8'>
                    <textarea class="form-control" id="descripcion" rows="4" placeholder="{{ $fondo->descripcion }}" readonly></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('fondos')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('fondos.edit', $fondo->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
