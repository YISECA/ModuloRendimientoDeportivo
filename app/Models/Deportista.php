<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    protected $table = 'deportista';
    protected $primaryKey = 'Id';
    protected $fillable = [
    	'Persona_Id',
    	'Clasificacion_Deportista_Id',
        'Lugar_Expedicion_Id',
    	'Parentesco_Id',
    	'Departamento_Id_Localiza',
    	'Ciudad_Id_Localiza',
    	'Localidad_Id_Localiza',
    	'Estado_Civil_Id',
    	'Estrato_Id',
    	'Regimen_Salud_Id',
    	'Tipo_Afiliacion_Id',
    	'Nivel_Regimen_Sub_Id',
    	'Sudadera_Talla_Id',
    	'Camiseta_Talla_Id',
    	'Pantaloneta_Talla_Id',
    	'Tenis_Talla_Id',
    	'Grupo_Sanguineo_Id',
    	'Rh_Id',
    	'Tipo_Cuenta_Id',
    	'Banco_Id',
        'Arl_Id',
        'Fondo_Pension_Id',
    	
    	'Fecha_Expedicion',
    	'Numero_Pasaporte',
    	'Fecha_Pasaporte',
    	'Numero_Libreta_Mil',
    	'Distrito_Libreta_mil',
    	'Nombre_Contacto',
    	'Fijo_Contacto',
    	'Celular_Contacto',
    	'Barrio_Localiza',
    	'Direccion_Localiza',
    	'Fijo_Localiza',
    	'Celular_Localiza',
    	'Correo_Electronico',
    	'Numero_Hijos',
    	'Numero_Cuenta',
    	'Fecha_Afiliacion',
    	'Medicina_Prepago',
        'Nombre_MedicinaPrepago',
    	'Riesgo_Laboral',    	
    	'Nombre_Fondo_Pension',
    	'Uso_Medicamento',
    	'Medicamento',
    	'Otro_Medico_Preg',
    	'Otro_Medico',
    	'Resolucion_Vigente',
    	'Deber_Obligacion',
    	'Imagen_Url',
    	'Archivo1_Url',
        'Libreta_Preg',
    ];

    public function Persona()
    {
        return $this->belongsTo('App\Models\Persona', 'Persona_Id');
    }

    public function deportistaDeporte(){
        return $this->hasMany('App\Models\DeportistaDeporte', 'Deportista_Id');
    }
}