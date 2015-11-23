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
		        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Inicio<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;Clasificaciones&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/clasificaciones')}}">Ver lista de clasificaciones</a></li>
		            <li><a href="{{url('/clasificaciones/create')}}">Crear una clasificación</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>&nbsp;&nbsp;Donaciones&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/donaciones')}}">Ver todas las donaciones</a></li>
		            <li><a href="{{url('/donaciones/create')}}">Cargar una donación</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;Donantes&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/donantes')}}">Ver listado de donantes</a></li>
		            <li><a href="{{url('/donantes/create')}}">Agregar un donante</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;Fondos&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/fondos')}}">Ver todas las donaciones</a></li>
		            <li><a href="{{url('/fondos/create')}}">Cargar una donación</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;Fotos&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/fotos')}}">Ver todas las fotos</a></li>
		            <li><a href="{{url('/fotos/create')}}">Subir una foto</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;&nbsp;Personas&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/personas')}}">Ver listado de personas</a></li>
		            <li><a href="{{url('/personas/create')}}">Cargar una persona</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>&nbsp;&nbsp;Piezas&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/piezas')}}">Ver todas las piezas</a></li>
		            <li><a href="{{url('/piezas/create')}}">Cargar una pieza</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;&nbsp;Revisiones&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/revisiones')}}">Ver todas las revisiones</a></li>
		            <li><a href="{{url('/revisiones/create')}}">Cargar una revisión</a></li>
		          </ul>
		        </li>
                        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Usuarios&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/usuarios')}}">Ver listado de usuarios</a></li>
		            <li><a href="{{url('/usuarios/create')}}">Crear un usuario</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Búsqueda">
		        </div>
		        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;&nbsp;Autoridades</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Contacto</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi sesión&nbsp;<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Mi perfil</a></li>
		            <li><a href="#">Configuración</a></li>
		            <li><a href="#">Actualizar datos</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Salir</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
                @yield('content')
    </body>
</html>
