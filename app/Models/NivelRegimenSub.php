<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelRegimenSub extends Model
{
    protected $table = 'nivel_regimen_sub';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Regimen_Sub'];
}