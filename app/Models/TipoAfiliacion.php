<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAfiliacion extends Model
{
    protected $table = 'tipo_afiliacion';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Tipo_Afiliacion'];
}