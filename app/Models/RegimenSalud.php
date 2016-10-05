<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegimenSalud extends Model
{
    protected $table = 'regimen_salud';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Regimen_Salud'];
}