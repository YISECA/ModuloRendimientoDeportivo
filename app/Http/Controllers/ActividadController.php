<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use App\Http\Requests\RegistroActividad;

use App\Models\TipoActividad;
use App\Models\ActividadIntervencion;

class ActividadController extends Controller
{
     public function __construct(PersonaInterface $repositorio_personas)
	{
		if (isset($_SESSION['Usuario']))
			$this->Usuario = $_SESSION['Usuario'];

		$this->repositorio_personas = $repositorio_personas;
	}

    public function index()
	{		
		$TipoActividad = TipoActividad::all();
		$ActividadIntervencion = ActividadIntervencion::with('tipoActividad')->get();
		//dd($ActividadIntervencion);
		return view('SIAB/actividad')
				->with(compact('TipoActividad'))
				->with(compact('ActividadIntervencion'))
				;
	}

	public function RegistrarActividad(RegistroActividad $request){
		if ($request->ajax()){
			$ActividadIntervencion = new ActividadIntervencion;
			$ActividadIntervencion->Descripcion = $request->Descripcion;
			$ActividadIntervencion->Tipo_Actividad_Id = $request->Actividad;
			$ActividadIntervencion->Otro_Actividad = $request->Otro_Actividad;			
			$ActividadIntervencion->DeportistaP = $request->DeportistaP;
			$ActividadIntervencion->DeportistaA = $request->DeportistaA;
			$ActividadIntervencion->MultidisciplinarioP = $request->MultiP;
			$ActividadIntervencion->MultidisciplinarioA = $request->MultiA;
			$ActividadIntervencion->EntrenadorP = $request->EntrenadorP;
			$ActividadIntervencion->EntrenadorA = $request->EntrenadorA;
			$ActividadIntervencion->ComisionadoP = $request->ComisionadoP;
			$ActividadIntervencion->ComisionadoA = $request->ComisionadoA;
			$ActividadIntervencion->Otros = $request->Otros;
			$ActividadIntervencion->OtrosP = $request->OtrosP;
			$ActividadIntervencion->OtrosA = $request->OtrosA;
			$ActividadIntervencion->Fecha_Programada = $request->Fecha_Programada;
			$ActividadIntervencion->Fecha_Realizacion = $request->Fecha_Realizacion;
			$ActividadIntervencion->Reprogramacion = $request->Reprogramacion;
			$ActividadIntervencion->Total_Asistentes = $request->Total_sistentes;
			$ActividadIntervencion->Observaciones = $request->Observaciones;
			$ActividadIntervencion->Total_Evaluadores = $request->Total_Evaluadores;
			$ActividadIntervencion->Nombre_Gestor = $request->Nombre_Gestor;
			$ActividadIntervencion->Nombre_Coordinador = $request->Nombre_Coordinador;
			$ActividadIntervencion->save();

			return response()->json(["Mensaje" => "Actividad registrada con éxito!"]);			
		}else{
			return response()->json(["Sin acceso"]);
		}
	}

	public function ModificarActividad(RegistroActividad $request){
		if ($request->ajax()){

			//dd($request->all());
			$ActividadIntervencion = ActividadIntervencion::find($request['ActividadId']);
			$ActividadIntervencion->Descripcion = $request->Descripcion;
			$ActividadIntervencion->Tipo_Actividad_Id = $request->Actividad;
			$ActividadIntervencion->Otro_Actividad = $request->Otro_Actividad;			
			$ActividadIntervencion->DeportistaP = $request->DeportistaP;
			$ActividadIntervencion->DeportistaA = $request->DeportistaA;
			$ActividadIntervencion->MultidisciplinarioP = $request->MultiP;
			$ActividadIntervencion->MultidisciplinarioA = $request->MultiA;
			$ActividadIntervencion->EntrenadorP = $request->EntrenadorP;
			$ActividadIntervencion->EntrenadorA = $request->EntrenadorA;
			$ActividadIntervencion->ComisionadoP = $request->ComisionadoP;
			$ActividadIntervencion->ComisionadoA = $request->ComisionadoA;
			$ActividadIntervencion->Otros = $request->Otros;
			$ActividadIntervencion->OtrosP = $request->OtrosP;
			$ActividadIntervencion->OtrosA = $request->OtrosA;
			$ActividadIntervencion->Fecha_Programada = $request->Fecha_Programada;
			$ActividadIntervencion->Fecha_Realizacion = $request->Fecha_Realizada;
			$ActividadIntervencion->Reprogramacion = $request->Reprogramacion;
			$ActividadIntervencion->Total_Asistentes = $request->Total_Asistentes;
			$ActividadIntervencion->Observaciones = $request->Observaciones;
			$ActividadIntervencion->Total_Evaluadores = $request->Total_Evaluadores;
			$ActividadIntervencion->Nombre_Gestor = $request->Nombre_Gestor;
			$ActividadIntervencion->Nombre_Coordinador = $request->Nombre_Coordinador;
			$ActividadIntervencion->save();

			return response()->json(["Mensaje" => "Actividad modificada con éxito!"]);			
		}else{
			return response()->json(["Sin acceso"]);
		}
	}

	public function ActividadTraer(Request $request, $id){
		$ActividadIntervencion = ActividadIntervencion::find($id);
		return $ActividadIntervencion;
	}
}