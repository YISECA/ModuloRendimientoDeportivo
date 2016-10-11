<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Models\Agrupacion;
use App\Models\Deporte;
use App\Models\ClasificacionDeportista;

class configuracion extends Controller
{
    //----------------------AGRUPACIÓN--------------------------------------
    public function inicio()
	{

        $Agrupacion = new Agrupacion;
        $clasificacion_deportista = new ClasificacionDeportista;

    	$datos = [
            'agrupacion' => $Agrupacion->all(),
            'clasificacion_deportista' => $clasificacion_deportista->all(),
		];
	    return view('agrupacion', $datos);
	}

	public function guardar(Request $input)
	{
		$model_A = new Agrupacion;
		return $this->crear_agrupacion($model_A, $input);
	}

	public function crear_agrupacion($model_A, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Id_Clase' => 'required',
				'Nom_Agrupacion' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$model_A['ClasificacionDeportista_Id'] = $input['Id_Clase'];
			$model_A['Nombre_Agrupacion'] = $input['Nom_Agrupacion'];	
			$model_A->save();
			return $model_A;
		}
	}


	public function agrupacion(Request $input , $id)
	{

		$model_A = Agrupacion::find($id);
		return $model_A;
	}

	public function agrupacionEliminar(Request $input , $id)
	{

		$model_A = Agrupacion::find($id);

		if($model_A->delete()){
			return response()->json(array('status' => 'True'));
		}else{
			return response()->json(array('status' => 'False'));
		}
		
	}



	public function modificar(Request $input)
	{
		$modelo=Agrupacion::find($input["id_agrup"]);

		return $this->modificar_agrupacion($modelo, $input);
	}
	public function modificar_agrupacion($modelo, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Id_cla' => 'required',
				'nom_agrup' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$modelo['ClasificacionDeportista_Id'] = $input['Id_cla'];
			$modelo['Nombre_Agrupacion'] = $input['nom_agrup'];	
			$modelo->save();
			return $modelo;
		}

	}


	//----------------------DEPORTE--------------------------------------

	public function deporte()
	{

		$Deporte = new Deporte;
        $Agrupacion = new Agrupacion;
        $clasificacion_deportista = new ClasificacionDeportista;

    	$datos = [
    		'deporte'=>$Deporte->all(),
            'agrupacion' => $Agrupacion->all(),
            'clasificacion_deportista' => $clasificacion_deportista->all(),
		];
	    return view('deporte', $datos);
	}



	//----------------------MODALIDAD--------------------------------------


}
