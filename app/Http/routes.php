<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('bienvenido.index');
});

Route::resource('personas','PersonaController');
Route::resource('piezas','PiezaController');
Route::resource('usuarios','UsuarioController');
Route::resource('bienvenido', 'BienvenidoController',
                ['only' => ['index']]);
Route::resource('donantes','DonanteController');
Route::resource('donaciones','DonacionController');
Route::resource('revisiones','RevisionController');
Route::resource('fondos','FondoController');
Route::resource('clasificaciones','ClasificacionController');
Route::resource('fotos','FotoController');