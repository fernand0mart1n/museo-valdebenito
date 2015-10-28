<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    protected $fillable=[
        'clasificacion',
        'descripcion',
        'procedencia',
        'autor',
        'fecha_ejecutacion',
        'tema',
        'observacion',
    ];
    
     public $timestamps = false;
     
     protected $table = 'pieza';
}
