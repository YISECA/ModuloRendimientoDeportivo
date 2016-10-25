<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    protected $table = 'talla';
    protected $primaryKey = 'Id';
    protected $fillable = ['Tipo_Talla_Id', 'Genero_Id', 'Eu', 'Uk', 'Usa'];

    public function genero(){
        return $this->belongsTo('App\Models\Genero', 'Genero_Id');
    }
    public function tipo_talla(){
        return $this->belongsTo('App\Models\TipoTalla', 'Tipo_Talla_Id');
    }
}