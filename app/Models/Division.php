<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
	protected $table = 'division';
    protected $primaryKey = 'Id';
    protected $fillable = ['Tipo_Evaluacion_Id','Nombre_Division'];

     public function tipoEvaluacion(){
        return $this->belongsTo('App\Models\TipoEvaluacion', 'Tipo_Evaluacion_Id');
    }
}
