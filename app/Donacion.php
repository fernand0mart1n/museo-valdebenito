<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    protected $fillable=[
        'donante_id',
        'fecha_donacion',
        'pieza',
    ];
    
    public $timestamps = false;
    protected $table = 'donacion';
}
