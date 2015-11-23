<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Museo Regional Salesiano de Chubut</title>
        <title>@yield('title')</title>
        <link href="<?php echo url('/');?>/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo url('/');?>/assets/css/estilo.css" rel="stylesheet" />
        <script src="<?php echo url('/');?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo url('/');?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo url('/');?>/assets/js/respond.min.js"></script>
        <script src="<?php echo url('/');?>/assets/js/hoverintent.min.js"></script>
        <script src="<?php echo url('/');?>/assets/js/dropdowns.js"></script>
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
         <style>
             #ingresar:hover, #inicio:hover, #aut:hover
             {
                 background:#1552a5;
             }
        </style>
        @yield('head')
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{url('/')}}">Museo Regional Salesiano</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="{{url('/')}}" id="inicio"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Inicio<span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
		          <a href="{{url('/clasificaciones')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Clasificaciones</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/clasificaciones')}}">Ver lista de clasificaciones</a></li>
		            <li><a href="{{url('/clasificaciones/create')}}">Crear una clasificación</a></li>
		          </ul>
		        </li>
                <li class="dropdown">
		          <a href="{{url('/donaciones')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>&nbsp;Donaciones</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/donaciones')}}">Ver todas las donaciones</a></li>
		            <li><a href="{{url('/donaciones/create')}}">Cargar una donación</a></li>
		          </ul>
		        </li>
                <li class="dropdown">
		          <a href="{{url('/fondos')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;Fondos</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/fondos')}}">Ver todos los fondos</a></li>
		            <li><a href="{{url('/fondos/create')}}">Cargar un fondo</a></li>
		          </ul>
		        </li>
                <li class="dropdown">
		          <a href="{{url('/fotos')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;Fotos</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/fotos')}}">Ver todas las fotos</a></li>
		            <li><a href="{{url('/fotos/create')}}">Subir una foto</a></li>
		          </ul>
		        </li>
                <li class="dropdown">
		          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Personas</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/usuarios')}}">Ver listado de usuarios</a></li>
		            <li><a href="{{url('/usuarios/create')}}">Crear un usuario</a></li>
		            <li class="divider"></li>
		            <li><a href="{{url('/donantes')}}">Ver listado de donantes</a></li>
		            <li><a href="{{url('/donantes/create')}}">Agregar un donante</a></li>
		            <li class="divider"></li>
		            <li><a href="{{url('/personas')}}">Ver listado de personas</a></li>
		            <li><a href="{{url('/personas/create')}}">Cargar una persona</a></li>
		          </ul>
		        </li>
                <li class="dropdown">
		          <a href="{{url('/piezas')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp;&nbsp;Piezas</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/piezas')}}">Ver todas las piezas</a></li>
		            <li><a href="{{url('/piezas/create')}}">Cargar una pieza</a></li>
		          </ul>
		        </li>
                <li class="dropdown">
		          <a href="{{url('/revisiones')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Revisiones</a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/revisiones')}}">Ver todas las revisiones</a></li>
		            <li><a href="{{url('/revisiones/create')}}">Cargar una revisión</a></li>
		          </ul>
		        </li>
                        <li>
                            <a href="{{url('/autoridades')}}" id="aut"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;Autoridades y contacto</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li class="dropdown"> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi sesión&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Mi cuenta</a></li>
                                    <li><a href="#">Actualizar datos</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Salir</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{route('auth/login')}}" style="margin-right: 1cm;" id="ingresar"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Ingresar</a></li>
                        @endif
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
        @yield('content')
    </body>
</html>
