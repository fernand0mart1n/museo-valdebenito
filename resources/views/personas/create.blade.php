@extends('base')

@section('title')
    Crear persona
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('personas.index') }}">Personas</a></li>
        <li class="active">Crear</li>
    </ol>
    <div class="page-header text-center">
        <h1>Crear reclamo<small>.</small></h1>
    </div>
    <div class="col-xs-6 col-xs-offset-3">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <div class="col-xs-4 col-xs-offset-4">
        <?php $fecha =  getdate(); ?>
        <?php $fecha = date("Y-m-d", strtotime($fecha["year"]. "/". $fecha["mon"]. "/". $fecha["mday"])); ?>
        {!! Form::open(['url' => 'personas']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Nombre']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('apellido', 'Apellido:') !!}
            {!! Form::text('apellido', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Apellido']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cuit_cuil', 'Cuit/Cuil:') !!}
            {!! Form::text('cuit_cuil', null, ['class'=>'form-control',  'placeholder' => 'Cuit/Cuil', 'title' => 'Cuit/Cuil sin guiones ni espacios', 'required' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('domicilio', 'Domicilio:') !!}
            {!! Form::text('domicilio', null, ['class'=>'form-control',  'placeholder' => 'Domicilio', 'required' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Teléfono:') !!}
            {!! Form::text('telefono', null, ['class'=>'form-control',  'placeholder' => 'Teléfono', 'required' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control',  'placeholder' => 'Email', 'required' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('fecha_carga', 'Fecha de carga:') !!}
            {!! Form::input('date', 'fecha_carga', $fecha,['class'=>'form-control', 'placeholder' => 'dd/mm/aaaa', 'pattern' => '([0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])|^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$)', 'value' => $fecha, 'disabled' => 'true', 'title' => 'dd/mm/aaaa', 'required' => 'true']) !!}
        </div>
        <div class="pull-right col-xs-offset-4">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
