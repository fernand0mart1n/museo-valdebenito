@extends('base')

@section('title')
    Editando a {{ $usuario->apellido, $usuario->nombre }}
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
        <li class="active">Editar</li>
    </ol>
    <div class="page-header text-center">
        <h1>Actualizar usuario<small>.</small></h1>
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
        {!! Form::model($usuario,['method' => 'PATCH','route'=>['usuarios.update',$usuario->id]]) !!}
        <div class="form-group">
            {!! Form::label('usuario', 'Usuario:') !!}
            {!! Form::text('usuario', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Usuario', 'disabled' => 'true']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nombre_usuario', 'Nombre de usuario:') !!}
            {!! Form::text('nombre_usuario', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Nombre de usuario']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña:') !!}
            {!! Form::password('password', ['class'=>'form-control',  'placeholder' => 'Contraseña', 'required' => 'true']) !!}
        </div>
        <div class="pull-right col-xs-offset-4">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
