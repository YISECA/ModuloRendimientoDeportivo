<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arl extends Model
{
    protected $table = 'arl';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Arl'];
}
