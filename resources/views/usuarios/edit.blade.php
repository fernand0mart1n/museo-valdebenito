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
        <h2>Actualizar usuario<small>.</small></h2>
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
        {!! Form::model($usuario,['method' => 'PATCH', 'class' => 'form-horizontal responsive', 'route'=>['usuarios.update',$usuario->id]]) !!}
        <div class="form-group">
            {!! Form::label('persona_id', 'Persona:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('persona_id', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Persona']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('nombre_usuario', 'Nombre de usuario:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::text('nombre_usuario', null, ['class'=>'form-control', 'required' => 'true', 'placeholder' => 'Nombre de usuario']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Contraseña:', array('class' => 'control-label col-xs-4')) !!}
            <div class='col-xs-8'>
                {!! Form::password('password', ['class'=>'form-control',  'placeholder' => 'Contraseña', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-8 col-xs-offset-4">
                <a href="{{ route('usuarios.index') }}" class="btn btn-default">
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
