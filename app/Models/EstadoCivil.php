<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
   protected $table = 'estado_civil';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Estado_Civil'];
}