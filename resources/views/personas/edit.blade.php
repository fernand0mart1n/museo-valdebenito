@extends('base')

@section('title')
    Editando a {{ $persona->apellido, $persona->nombre }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('personas.index') }}">Personas</a></li>
        <li class="active">Editar</li>
    </ol>
    <div class="page-header text-center">
        <h2>Editar datos de {{ $persona->apellido }}, {{ $persona->nombre }}<small>.</small></h2>
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
    <div class="col-xs-8 col-xs-offset-2">
        <?php $fecha =  getdate(); ?>
        <?php $fecha = date("Y-m-d", strtotime($fecha["year"]. "/". $fecha["mon"]. "/". $fecha["mday"])); ?>
        {!! Form::model($persona,['method' => 'PATCH', 'class' => 'form-horizontal responsive', 'route'=>['personas.update',$persona->id]]) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('nombre', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Nombre', 'maxlength' => '45']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('apellido', 'Apellido:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('apellido', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Apellido', 'maxlength' => '45']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('cuit_cuil', 'Cuit/Cuil:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('cuit_cuil', null, ['class'=>'form-control',  'placeholder' => 'Cuit/Cuil', 'title' => 'Cuit/Cuil sin guiones ni espacios', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('domicilio', 'Domicilio:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('domicilio', null, ['class'=>'form-control',  'placeholder' => 'Domicilio', 'required' => 'true', 'maxlength' => '45']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Teléfono:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('telefono', null, ['class'=>'form-control',  'placeholder' => 'Teléfono', 'required' => 'true', 'maxlength' => '45']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::email('email', null, ['class'=>'form-control',  'placeholder' => 'Email', 'required' => 'true', 'maxlength' => '45']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('fecha_carga', 'Fecha de carga:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::input('date', 'fecha_carga', $fecha,['class'=>'form-control', 'placeholder' => 'dd/mm/aaaa', 'pattern' => '([0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])|^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$)', 'value' => $fecha, 'disabled' => 'true', 'title' => 'dd/mm/aaaa', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-8 col-xs-offset-4">
                <a href="{{ route('personas.index') }}" class="btn btn-default">
                    <i class="glyphicon glyphicon-chevron-left"></i>Volver
                </a>
                <button type="submit" class="btn btn-primary pull-right">
                    <i class="glyphicon glyphicon-floppy-save"></i> Guardar
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
