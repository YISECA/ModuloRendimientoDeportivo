<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Models\Agrupacion;
use App\Models\Deporte;
use App\Models\Modalidad;
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

	public function agrupacionDeporte(Request $input , $id)
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

	public function crear_dpt(Request $input)
	{
		$model_A = new Deporte;
		return $this->crear_deporte($model_A, $input);
	}

	public function crear_deporte($model_A, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Id_Agrupacion' => 'required',
				'Nom_Deporte' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$model_A['Agrupacion_Id'] = $input['Id_Agrupacion'];
			$model_A['Nombre_Deporte'] = $input['Nom_Deporte'];	
			$model_A->save();
			return $model_A;
		}
	}

	public function id_deporte(Request $input , $id)
	{

		$model_A = Deporte::find($id);
		return $model_A;
	}


	public function deporteEliminar(Request $input , $id)
	{

		$model_A = Deporte::find($id);

		if($model_A->delete()){
			return response()->json(array('status' => 'True'));
		}else{
			return response()->json(array('status' => 'False'));
		}
		
	}


	public function ver_deporte(Request $input , $id)
	{

		$model_A = Deporte::find($id);
		return $model_A;
	}



	public function modificar_dpt(Request $input)
	{
		$modelo=Deporte::find($input["id_Dpt"]);

		return $this->modificar_deporte($modelo, $input);
	}
	public function modificar_deporte($modelo, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Id_Agrupa' => 'required',
				'nom_depot' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$modelo['Agrupacion_Id'] = $input['Id_Agrupa'];
			$modelo['Nombre_Deporte'] = $input['nom_depot'];	
			$modelo->save();
			return $modelo;
		}

	}











	//----------------------MODALIDAD--------------------------------------

    public function modalidad()
	{

		$Deporte = new Deporte;
        $Modalidad = new Modalidad;

    	$datos = [
    		'deporte'=>$Deporte->all(),
            'modalidad' => $Modalidad->all(),
		];
	    return view('modalidad', $datos);
	}

	public function crear_mdl(Request $input)
	{
		$model_A = new Modalidad;
		return $this->crear_modalidad($model_A, $input);
	}

	public function crear_modalidad($model_A, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Id_Deporte' => 'required',
				'Nom_Modalidad' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$model_A['Deporte_Id'] = $input['Id_Deporte'];
			$model_A['Nombre_Modalidad'] = $input['Nom_Modalidad'];	
			$model_A->save();
			return $model_A;
		}
	}

	public function ver_modalidad(Request $input , $id)
	{
		$model_A = Modalidad::find($id);
		return $model_A;
	}



	public function eliminarModalidad(Request $input , $id)
	{

		$model_A = Modalidad::find($id);

		if($model_A->delete()){
			return response()->json(array('status' => 'True'));
		}else{
			return response()->json(array('status' => 'False'));
		}
		
	}


	public function modificar_mdl(Request $input)
	{
		$modelo=Modalidad::find($input["id_Mdl"]);

		return $this->modificar_modalidad($modelo, $input);
	}
	public function modificar_modalidad($modelo, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Id_Dept' => 'required',
				'nom_modl' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$modelo['Deporte_Id'] = $input['Id_Dept'];
			$modelo['Nombre_Modalidad'] = $input['nom_modl'];	
			$modelo->save();
			return $modelo;
		}

	}




}
