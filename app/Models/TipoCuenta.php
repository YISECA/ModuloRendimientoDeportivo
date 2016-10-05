<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCuenta extends Model
{
    protected $table = 'tipo_cuenta';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Tipo_Cuenta'];
}