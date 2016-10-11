<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoTalla extends Model
{
     protected $table = 'tipo_talla';
    protected $primaryKey = 'Id';
    protected $fillable = ['Nombre_Tipo_Talla'];

    public function tipo_talla(){
        return $this->hasMany('App\Models\Talla', 'Tipo_Talla_Id');
    }
}
