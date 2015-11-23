<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fondo extends Model
{
    protected $fillable=[
        'descripcion',
        'usuario_id_carga',
        'fecha_carga',
    ];
    
    public $timestamps = false;
    protected $table = 'fondo';
}
