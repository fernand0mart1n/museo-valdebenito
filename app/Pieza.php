<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    protected $fillable=[
        'clasificacion_id',
        'descripcion',
        'procedencia',
        'autor',
        'fecha_ejecucion',
        'tema',
        'observacion',
    ];
    
    public $timestamps = false;
    protected $table = 'pieza';
}
