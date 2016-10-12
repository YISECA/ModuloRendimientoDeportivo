<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rh extends Model
{
	protected $table = 'rh';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Rh'];
}