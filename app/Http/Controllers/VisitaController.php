<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;

class VisitaController extends Controller
{
    public function __construct(PersonaInterface $repositorio_personas)
	{
		if (isset($_SESSION['Usuario']))
			$this->Usuario = $_SESSION['Usuario'];

		$this->repositorio_personas = $repositorio_personas;
	}

    public function index()
	{
		/*$Genero = Genero::all();
		$GrupoSanguineo = GrupoSanguineo::all();
		$Eps = Eps::all();
		$Ciudad = Ciudad::all();
		$Etnia = Etnia::all();
		$Estrato = Estrato::all();
		$Club = Club::All();
		$Deporte = Deporte::all();
		$Modalidad = Modalidad::all();
*/
		$deportista = array();
		return view('SIAB/visita',['deportista' => $deportista])
				/*->with(compact('Genero'))
				->with(compact('GrupoSanguineo'))
				->with(compact('Eps'))
				->with(compact('Ciudad'))
				->with(compact('Etnia'))
				->with(compact('Estrato'))
				->with(compact('Club'))
				->with(compact('Deporte'))
				->with(compact('Modalidad'))*/
				;
	}
}