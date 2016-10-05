<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estrato extends Model
{
   protected $table = 'estrato';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Estrato'];
}