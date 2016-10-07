<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use Validator;
use App\Http\Requests\RegistroValoracion;

use App\Models\Genero;
use App\Models\GrupoSanguineo;
use App\Models\Eps;
use App\Models\Etnia;
use App\Models\Ciudad;
use App\Models\Estrato;
use App\Models\Club;
use App\Models\Deporte;
use App\Models\Modalidad;


use Illuminate\Http\Request;

class ValoracionPsicoController extends Controller
{
    public function __construct(PersonaInterface $repositorio_personas)
	{
		if (isset($_SESSION['Usuario']))
			$this->Usuario = $_SESSION['Usuario'];

		$this->repositorio_personas = $repositorio_personas;
	}

    public function index()
	{
		$Genero = Genero::all();
		$GrupoSanguineo = GrupoSanguineo::all();
		$Eps = Eps::all();
		$Ciudad = Ciudad::all();
		$Etnia = Etnia::all();
		$Estrato = Estrato::all();
		$Club = Club::All();
		$Deporte = Deporte::all();
		$Modalidad = Modalidad::all();

		$deportista = array();
		return view('SIAB/valoracionPsico',['deportista' => $deportista])
				->with(compact('Genero'))
				->with(compact('GrupoSanguineo'))
				->with(compact('Eps'))
				->with(compact('Ciudad'))
				->with(compact('Etnia'))
				->with(compact('Estrato'))
				->with(compact('Club'))
				->with(compact('Deporte'))
				->with(compact('Modalidad'))
				;
	}

	public function RegistrarValoracion(Request $request){
		dd($request->all());

	}
}
