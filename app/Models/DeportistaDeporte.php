<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeportistaDeporte extends Model
{
    protected $table = 'deportista_deporte';
    protected $primaryKey = 'Id';
    protected $fillable = ['Deportista_Id','Agrupacion_Id', 'Deporte_Id', 'Modalidad_Id'];

    public function deportista(){
        return $this->belongsTo('App\Models\Deportista', 'Deportista_Id');
    }
}
