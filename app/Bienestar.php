<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bienestar extends Model
{
       protected $fillable = [
        'icono', 'titulo','descripcion',
    ];
}
