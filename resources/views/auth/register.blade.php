@extends('base')

@section('title')
    Registrarse
@stop
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registrarse</div>
 
                <div class="panel-body">
                    {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!}
 
                        <div class="form-group">
                            <label>Id</label>
                            {!! Form::input('text', 'id', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            {!! Form::password('contraseña', ['class'=> 'form-control']) !!}
                        </div>
 
                        <div class="form-group">
                            <label>Confirmar contraseña</label>
                            {!! Form::password('confirmar_contraseña', ['class'=> 'form-control']) !!}
                        </div>
 
                        <div>
                            {!! Form::submit('Confirmar',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
