<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    protected $fillable=[
        'persona_id',
        'fecha_carga',
    ];
    
    public $timestamps = false;
    protected $table = 'donante';
}
