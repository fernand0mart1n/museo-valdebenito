@extends('base')

@section('title')
    Bienvenido al Museo Regional Salesiano
@stop

@section('head')
 <style>
 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     display: block;
     height: 800px !important;
 }
 </style>
@stop
    

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <br>
        <div class="jumbotron">
            <div class="container">
                <h1 style="padding-left: 1cm;">Bienvenido!</h1>
                <p style="padding-left: 1cm;">Museo Regional Salesiano - Rawson, Chubut</p>
            </div>
        </div>   
        <br>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo url('/');?>/museo.jpg" alt="Error al cargar imagen">
              <div class="carousel-caption">
                Foto 1
              </div>
            </div>
            <div class="item">
              <img src="<?php echo url('/');?>/museo2.jpg" alt="Error al cargar imagen">
              <div class="carousel-caption">
                Foto 2
              </div>
            </div>
            <div class="item">
              <img src="<?php echo url('/');?>/museo3.jpg" alt="Error al cargar imagen">
              <div class="carousel-caption">
                Foto 3
              </div>
            </div>
            <div class="item">
              <img src="<?php echo url('/');?>/museo4.jpg" alt="Error al cargar imagen">
              <div class="carousel-caption">
                Foto 4
              </div>
            </div>
            <div class="item">
              <img src="<?php echo url('/');?>/museo5.jpg" alt="Error al cargar imagen">
              <div class="carousel-caption">
                Foto 5
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <hr>
    </div>
@stop
