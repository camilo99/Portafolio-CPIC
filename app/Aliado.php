<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
	protected $fillable = [
		'imagen','descripcion','link',
	];
}
