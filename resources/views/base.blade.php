<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Museo Regional de Rawson</title>
        <title>@yield('title')</title>
        <link href="<?php echo url('/');?>/assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="<?php echo url('/');?>/assets/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo url('/');?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo url('/');?>/assets/js/respond.min.js"></script>
        <style type="text/css">
			.navbar-default {
			  background-color: #3f6aee;
			  border-color: #1552a5;
			}
			.navbar-default .navbar-brand {
			  color: #ffffff;
			}
			.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
			  color: #ffffff;
			}
			.navbar-default .navbar-text {
			  color: #ffffff;
			}
			.navbar-default .navbar-nav > li > a {
			  color: #ffffff;
			}
			.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
			  color: #ffffff;
			}
			.navbar-default .navbar-nav > li > .dropdown-menu {
			  background-color: #3f6aee;
			}
			.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
			  color: #ffffff;
			}
			.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
			.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
			  color: #ffffff;
			  background-color: #1552a5;
			}
			.navbar-default .navbar-nav > li > .dropdown-menu > li > .divider {
			  background-color: #3f6aee;
			}
			.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
			  color: #ffffff;
			  background-color: #1552a5;
			}
			.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
			  color: #ffffff;
			  background-color: #1552a5;
			}
			.navbar-default .navbar-toggle {
			  border-color: #1552a5;
			}
			.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
			  background-color: #1552a5;
			}
			.navbar-default .navbar-toggle .icon-bar {
			  background-color: #ffffff;
			}
			.navbar-default .navbar-collapse,
			.navbar-default .navbar-form {
			  border-color: #ffffff;
			}
			.navbar-default .navbar-link {
			  color: #ffffff;
			}
			.navbar-default .navbar-link:hover {
			  color: #ffffff;
			}

			@media (max-width: 767px) {
			  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
			    color: #ffffff;
			  }
			  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
			    color: #ffffff;
			  }
			  .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
			    color: #ffffff;
			    background-color: #1552a5;
			  }
			}

			body{
				min-height: 250px;
				padding-top: 60px;
				padding-left: 23px;
			}
        </style>
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
		        <li><a href="{{url('/')}}">Inicio<span class="sr-only">(current)</span></a></li>
		        <li><a href="{{url('/personas')}}">Personas</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/piezas')}}">Piezas</a></li>
		            <li><a href="{{url('/usuarios')}}">Usuarios</a></li>
		            <li><a href="#">Algo más todavía</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Otra cosa por aquí</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Otra cosa por allá</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Búsqueda">
		        </div>
		        <button type="submit" class="btn btn-default">Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Contacto</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi sesión<span class="caret"></span></a>
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
