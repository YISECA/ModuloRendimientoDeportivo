<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaQuien extends Model
{
 	protected $table = 'pregunta_quien';
    protected $primaryKey = 'Id';
    protected $fillable = ['ValoracionI_Id', 'Quien', 'Razon'];

    public function valoracionPsicoQ(){
        return $this->belongsTo('App\Models\ValoracionPsico', 'ValoracionQ_Id');
    }
}
