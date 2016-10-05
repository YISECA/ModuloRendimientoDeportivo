<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = 'modalidad';
    protected $primaryKey = 'Id';
    protected $fillable = ['Deporte_Id', 'Nombre_Banco'];

    public function deporte(){
        return $this->belongsTo('App\Models\Deporte', 'Deporte_Id');
    }
}
