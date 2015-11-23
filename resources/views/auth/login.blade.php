@extends('base')

@section('title')
    Te damos la bienvenida al sistema
@stop

@section('content')
    <br>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        Entrar
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'auth/login', 'class' => 'form']) !!}
                            <div class="form-group">
                                <label>Usuario</label>
                                {!! Form::text('nombre_usuario', '', ['class'=> 'form-control', 'placeholder' => 'Usuario']) !!}
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => 'Contraseña']) !!}
                            </div>
                            <div class="checkbox">
                                <label><input name="remember" type="checkbox"> Recordarme</label>
                            </div>
                            <div>
                                {!! Form::submit('Ingresar',['class' => 'btn btn-primary pull-right']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@stop
