<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaA extends Model
{
    protected $table = 'pregunta_a';
    protected $primaryKey = 'Id';
    protected $fillable = ['ValoracionA_Id', 'PreguntaA_Id', 'Respuesta_Id', 'Respuesta'];

    public function valoracionPsicoA(){
        return $this->belongsTo('App\Models\ValoracionPsico', 'ValoracionA_Id');
    }
}
