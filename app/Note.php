<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['note'];// Cargada mediante un array con el metodo create
            
}
