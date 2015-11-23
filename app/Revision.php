<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable=[
        'usuario_id_revision',
        'pieza',
        'fecha_revision',
        'estado_conversacion',
        'ubicacion',
    ];
    
     public $timestamps = false;
     protected $table = 'revision';
}
