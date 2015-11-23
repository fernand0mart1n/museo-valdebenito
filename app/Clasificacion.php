<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    protected $fillable=[
        'descripcion',
        'fondo_id',
        'usuario_id_carga',
        'fecha_carga',
    ];
    
    public $timestamps = false;
    protected $table = 'clasificacion';
}
