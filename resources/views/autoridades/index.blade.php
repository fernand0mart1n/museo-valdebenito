@extends('base')

@section('title')
    Bienvenido al Museo Regional Salesiano
@stop

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="page-header text-center">
                <h1>Autoridades<small>.</small></h1>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Directivos</div>
                <div class="panel-body">
                    <b>Responsable Museo </b>Néstor Antonio Quilodrán<br>
                    <b>Tel.: </b>0280 - 4484425  Cel. 0280 -154513239<br>
                    <b>E-mail: </b>nestorquilodran@yahoo.com.ar
                </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">Jefes de proyecto</div>
              <div class="panel-body">
                  <b>Docente Universidad del Chubut </b>Lic. Martín Palacio Pentucci<br>
                  <b>Tel.: </b>0280- 154660282<br>
                  <b>E-mail: </b>mrpalaciopentucci@udc.edu.ar

                  <br><br>

                  <b>Coordinador carrera Tec. Software UDC </b>APU Aldo “Enzo” Rafael Ana<br>
                  <b>Tel.: </b>0280- 444441<br>
                  <b>E-mail: </b>arana@udc.edu.ar
              </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Desarrollo</div>
                <div class="panel-body">
                    <b>Estudiante carrera Tec. Software UDC </b>Fernando Martín Valdebenito<br>
                    <b>Tel.: </b>0280 - 4482395  Cel. 0280 -154418316<br>
                    <b>E-mail: </b>fervaldex1992@gmail.com - fernando_valde@hotmail.com
                </div>
            </div>
            <a href="{{ route('bienvenido.index') }}" class="btn btn-primary pull-right">
                <i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Volver al inicio
            </a>
        </div>
    </div>
    <div class="col-xs-12">
      <footer>
        <hr>
        <p align="center">2015 - Todos los derechos reservados.</p>
        <br>
      </footer>
    </div>
@stop
