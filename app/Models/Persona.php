<?php

namespace App\Models;

use Idrd\Usuarios\Repo\Persona as MPersona;

class Persona extends MPersona
{
     public function deportista()
    {
        return $this->hasOne('App\Models\Deportista', 'Persona_Id');
    }
}
