<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use Validator;

use App\Models\Genero;
use App\Models\GrupoSanguineo;
use App\Models\Eps;
use App\Models\Etnia;
use App\Models\Ciudad;


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


		$deportista = array();
		return view('SIAB/valoracionPsico',['deportista' => $deportista])
				->with(compact('Genero'))
				->with(compact('GrupoSanguineo'))
				->with(compact('Eps'))
				;
	}
}
