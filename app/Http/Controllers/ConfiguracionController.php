<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Models\Agrupacion;
use App\Models\Deporte;
use App\Models\Modalidad;
use App\Models\Rama;
use App\Models\Categoria;
use App\Models\ClasificacionDeportista;
use App\Models\TipoEvaluacion;
use App\Models\Division;

class ConfiguracionController extends Controller
{
    //----------------------AGRUPACIÓN--------------------------------------
    public function inicio()
	{
        $Agrupacion =  Agrupacion::with('ClasificacionDeportista')->get();
        $clasificacion_deportista =  ClasificacionDeportista::all();
    	$datos = [
            'agrupacion_datos' => $Agrupacion,
            'clasificacion_deportista' => $clasificacion_deportista,
		];
	    return view('TECNICO/agrupacion', $datos);
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
		$Deporte =  Deporte::with('agrupacion','agrupacion.ClasificacionDeportista')->get();
        $Agrupacion = new Agrupacion;
        $clasificacion_deportista = new ClasificacionDeportista;

    	$datos = [
    		'deporte'=>$Deporte->all(),
            'agrupacion' => $Agrupacion->all(),
            'clasificacion_deportista' => $clasificacion_deportista->all(),
		];
	    return view('TECNICO/deporte', $datos);
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

		$model_A = Deporte::with('agrupacion','agrupacion.ClasificacionDeportista')->find($id);
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

		$Deporte =  Deporte::with('agrupacion','agrupacion.ClasificacionDeportista')->get();
        $Modalidad = Modalidad::with('deporte','deporte.agrupacion','deporte.agrupacion.ClasificacionDeportista')->get();
        $clasificacion_deportista = new ClasificacionDeportista;

    	$datos = [
    		'deporte'=>$Deporte->all(),
            'modalidad' => $Modalidad->all(),
            'clasificacion_deportista' => $clasificacion_deportista->all(),
		];
	    return view('TECNICO/modalidad', $datos);
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
		$Modalidad = Modalidad::with('deporte', 'deporte.agrupacion','deporte.agrupacion.ClasificacionDeportista')->find($id);
		return $Modalidad;
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


	//----------------------RAMA--------------------------------------

    public function rama()
	{
		$Rama = Rama::all();
		return view('TECNICO/rama')->with(compact('Rama'));
	}

	public function crear_rm(Request $input)
	{
		$model_A = new Rama;
		return $this->crear_rama($model_A, $input);
	}

	public function crear_rama($model_A, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Nom_Rama' => 'required',
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$model_A['Nombre_Rama'] = $input['Nom_Rama'];	
			$model_A->save();
			return $model_A;
		}
	}

	public function ver_rama(Request $input , $id)
	{
		$model_A = Rama::find($id);
		return $model_A;
	}

	public function eliminarRama(Request $input , $id)
	{

		$model_A = Rama::find($id);

		if($model_A->delete()){
			return response()->json(array('status' => 'True'));
		}else{
			return response()->json(array('status' => 'False'));
		}
		
	}


	public function modificar_rm(Request $input)
	{
		$modelo=Rama::find($input["id_Rm"]);

		return $this->modificar_rama($modelo, $input);
	}
	public function modificar_rama($modelo, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'nom_ra' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$modelo['Nombre_Rama'] = $input['nom_ra'];	
			$modelo->save();
			return $modelo;
		}

	}



   //----------------------CATEGORIA--------------------------------------

    public function categoria()
	{

		$Categoria = new Categoria;

    	$datos = [
    		'categoria'=>$Categoria->all(),
		];
	    return view('TECNICO/categoria', $datos);
	}

	public function crear_ct(Request $input)
	{
		$model_A = new Categoria;
		return $this->crear_categoria($model_A, $input);
	}

	public function crear_categoria($model_A, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'Nom_Categoria' => 'required',
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$model_A['Nombre_Categoria'] = $input['Nom_Categoria'];	
			$model_A->save();
			return $model_A;
		}
	}


	public function ver_categoria(Request $input , $id)
	{
		$model_A = Categoria::find($id);
		return $model_A;
	}


	public function eliminarCategoria(Request $input , $id)
	{

		$model_A = Categoria::find($id);

		if($model_A->delete()){
			return response()->json(array('status' => 'True'));
		}else{
			return response()->json(array('status' => 'False'));
		}
		
	}



	public function modificar_ct(Request $input)
	{
		$modelo=Categoria::find($input["id_Ct"]);

		return $this->modificar_categoria($modelo, $input);
	}
	public function modificar_categoria($modelo, $input)
	{

		$validator = Validator::make($input->all(),
		    [
				'nom_ct' => 'required'
        	]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
			$modelo['Nombre_Categoria'] = $input['nom_ct'];	
			$modelo->save();
			return $modelo;
		}

	}


	//----------------------DIVISION--------------------------------------

    public function division()
	{
		$TipoEvaluacion = TipoEvaluacion::all();
		$Division = Division::with('tipoEvaluacion')->get();
		//dd($Division);
		return view('TECNICO/division')
			   ->with(compact('TipoEvaluacion'))
			   ->with(compact('Division'))
			   ;
	}

	public function ver_division(Request $input , $id)
	{
		$Division = Division::with('tipoEvaluacion')->find($id);
		return $Division;
	}

	public function modificar_division(request $request)
	{
		$validator = Validator::make($request->all(),
		    ['nom_division' => 'required', 'Tipo_Evaluacion_E' => 'required',]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
        	$Division = Division::find($request['Id_division']);
			$Division->Nombre_Division = $request['nom_division'];
			$Division->Tipo_Evaluacion_Id = $request['Tipo_Evaluacion_E'];		
			$Division->save();
			return $Division;
		}
	}

	public function eliminarDivision(Request $input , $id){
		$Division = Division::find($id);
		if($Division->delete()){
			return response()->json(array('status' => 'True'));
		}else{
			return response()->json(array('status' => 'False'));
		}		
	}

	public function crear_division(Request $request)
	{
		$validator = Validator::make($request->all(),
		    ['Nom_Division' => 'required', 'Tipo_Evaluacion' => 'required',]
        );

        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{
        	$Division = new Division;
			$Division['Nombre_Division'] = $request['Nom_Division'];	
			$Division['Tipo_Evaluacion_Id'] = $request['Tipo_Evaluacion'];	
			$Division->save();
			return $Division;
		}
	}
}