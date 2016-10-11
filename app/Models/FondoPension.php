<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FondoPension extends Model
{
    protected $table = 'fondo_pension';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Fondo_Pension'];
}
