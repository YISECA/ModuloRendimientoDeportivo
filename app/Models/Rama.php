<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rama extends Model
{
    protected $table = 'rama';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Rama'];
}
