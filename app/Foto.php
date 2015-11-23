<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable=[
        'pieza_id',
        'foto',
    ];
    
    public $timestamps = false;
    protected $table = 'foto';
}
