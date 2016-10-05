<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    protected $table = 'parentesco';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Parentesco'];
}