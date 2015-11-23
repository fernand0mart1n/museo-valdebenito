@extends('base')

@section('title')
    Donación {{ $donacion->id }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('donaciones.index') }}">Donaciones</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h2>Ver datos de donación {{ $donacion->id }}<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="donante_id" class="control-label col-xs-4">Donante:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="donante_id" placeholder="{{ $donacion->donante_id }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="pieza" class="control-label col-xs-4">Pieza:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="pieza" placeholder="{{ $donacion->pieza }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_donacion" class="control-label col-xs-4">Fecha de donación:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fecha_donacion" placeholder="{{ date("d/m/Y", strtotime($donacion->fecha_donacion)) }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('donaciones')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('donaciones.edit', $donacion->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
