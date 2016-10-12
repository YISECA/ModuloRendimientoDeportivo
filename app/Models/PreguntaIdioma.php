<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaIdioma extends Model
{
    protected $table = 'pregunta_idioma';
    protected $primaryKey = 'Id';
    protected $fillable = ['ValoracionI_Id', 'Idioma', 'Habla', 'Lee', 'Escribe'];

    public function valoracionPsicoI(){
        return $this->belongsTo('App\Models\ValoracionPsico', 'ValoracionI_Id');
    }
}
