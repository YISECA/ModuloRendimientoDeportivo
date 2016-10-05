<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'club';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Club'];
}
