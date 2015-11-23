@extends('base')

@section('title')
    Donante {{ $donante->id }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('donantes.index') }}">Donantes</a></li>
        <li class="active">Ver</li>
    </ol>
    <div class="page-header text-center col-xs-4 col-xs-offset-4">
        <h2>Ver datos de donante {{ $donante->id }}<small>.</small></h2>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal"> 
            <div class="form-group">
                <label for="persona_id" class="control-label col-xs-4">Persona:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="persona_id" placeholder="{{ $donante->persona_id }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="fecha_carga" class="control-label col-xs-4">Fecha de carga:</label>
                <div class='col-xs-8'>
                    <input type="text" class="form-control" id="fecha_carga" placeholder="{{ date("d/m/Y", strtotime($donante->fecha_carga)) }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-8 col-xs-offset-4">
                    <a href="{{ url('donantes')}}" class="btn btn-default">
                        <i class="glyphicon glyphicon-chevron-left"></i> Volver
                    </a>
                    <a href="{{ route('donantes.edit', $donante->id) }}" class="btn btn-warning pull-right" title="Editar">
                        <i class="glyphicon glyphicon-edit"></i> Editar
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop
