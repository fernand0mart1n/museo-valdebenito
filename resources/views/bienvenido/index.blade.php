@extends('base')

@section('title')
    Bienvenido al Museo Regional Salesiano
@stop

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <br>
        <div class="jumbotron">
            <h1 style="padding-left: 1cm;">Bienvenido!</h1>
            <p style="padding-left: 1cm;">Museo Regional Salesiano - Rawson, Chubut</p>
        </div>   
        <br>
        <img src="<?php echo url('/');?>/museo.jpg" class="center" style="margin-left:100px;" width="40%" height="40%">
        <img src="<?php echo url('/');?>/museo2.jpg" class="center" width="41%" height="41%">
        <hr>
    </div>
@stop
