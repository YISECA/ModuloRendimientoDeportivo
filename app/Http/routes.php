<?php
session_start();
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	Route::get('/', function () { return view('welcome'); });

	/************************************/
	Route::any('/', 'MainController@index');
	Route::any('/logout', 'MainController@logout');

	

	Route::get('/personas', '\Idrd\Usuarios\Controllers\PersonaController@index');
	Route::get('/personas/service/obtener/{id}', '\Idrd\Usuarios\Controllers\PersonaController@obtener');
	Route::get('/personas/service/buscar/{key}', '\Idrd\Usuarios\Controllers\PersonaController@buscar');
	Route::get('/personas/service/ciudad/{id_pais}', '\Idrd\Usuarios\Controllers\LocalizacionController@buscarCiudades');
	Route::post('/personas/service/procesar/', '\Idrd\Usuarios\Controllers\PersonaController@procesar');	
	/************************************/




//rutas con filtro de autenticación
Route::group(['middleware' => ['web']], function () {

	/********************SIAB***************************/
	
	Route::get('rud','DeportistaController@index');
	Route::get('welcome', 'MainController@welcome');
	Route::get('/personaDeportista/{id}','PersonaDeportistaController@obtener');
	Route::get('/personaBuscarDeportista/{id}','PersonaDeportistaController@buscar');
	/****RUD****/
	Route::get('getTallas/{id_genero}/{id_tipo}', 'DeportistaController@Tallas');  
	Route::get('deportista/{id}','DeportistaController@datos');
	Route::post('AddDeportista', 'DeportistaController@RegistrarDeportista');
	Route::post('EditDeportista', 'DeportistaController@ModificarDeportista');	
	Route::get('getAgrupacion/{id}', 'DeportistaController@Agrupaciones');
	Route::get('getDeporte/{id}', 'DeportistaController@Deportes');
	Route::get('getModalidad/{id}', 'DeportistaController@Modalidades');
	Route::get('getDeportistaDeporte/{id}', 'DeportistaController@DeportistaDeporte');
	Route::get('getEtapas/{id}', 'DeportistaController@Etapas');
	Route::get('getEtapasD/{id}', 'DeportistaController@getDeportistaEtapas');	

	/***********PDF*************/
	Route::any('Descarga/{id}', 'DeportistaController@Descarga');
	Route::get('rudPDF/{id}','DeportistaController@RudPdf');

	/****Valoracion Psico****/
	Route::get('psico','ValoracionPsicoController@index');
	Route::post('AddValoracion', 'ValoracionPsicoController@RegistrarValoracion');
	Route::post('EditValoracion', 'ValoracionPsicoController@ModificarValoracion');
	Route::get('valoracion/{id_deportista}','ValoracionPsicoController@Valoracion_Datos');
	/*************************************************/


	/****Visitia domiciliaria****/
	Route::get('domicilio','VisitaController@index');
	Route::post('AddVisita', 'VisitaController@RegistrarVisita');
	/*************************************************/

	/****Actividades de intervención****/
	Route::get('actividad','ActividadController@index');	
	Route::post('AddActividad', 'ActividadController@RegistrarActividad');
	Route::post('EditActividad', 'ActividadController@ModificarActividad');	
	Route::get('TraeActividad/{id}','ActividadController@ActividadTraer');		
	/*************************************************/


	/****Suministros, apoyos y servicios****/
	Route::get('suministros','SuministrosController@index');	

	Route::post('AddComplemento', 'SuministrosController@RegistrarComplemento');
	Route::get('complemento/{id}','SuministrosController@Complemento_Datos');	
	Route::get('ValorComplemento/{id}','SuministrosController@ValorComplemento_Datos');			
	Route::get('ListaComplemento/{id}','SuministrosController@Lista_Complemento_Datos');	

	Route::post('AddApoyo', 'SuministrosController@RegistrarApoyo');
	Route::get('ListaApoyos/{id}','SuministrosController@Lista_Apoyos_Datos');	

	Route::post('AddAlimentacion', 'SuministrosController@RegistrarAlimentacion');
	Route::get('alimentacion/{id}','SuministrosController@Alimentacion_Datos');
	Route::get('ValorAlimentacion/{id}','SuministrosController@ValorAlimentacion_Datos');		
	Route::get('ListaAlimentacion/{id}','SuministrosController@Lista_Alimentacion_Datos');	
	/*************************************************/
	

	/********************Tecnico****************************/
	Route::get('configuracion','configuracion@inicio');
	Route::post('configuracion/crear','configuracion@guardar');
	Route::post('configuracion/modificar','configuracion@modificar');
	Route::get('configuracion/IdAgrupacion/{id}','configuracion@agrupacion');
	Route::get('configuracion/eliminarAgrupacion/{id}','configuracion@agrupacionEliminar');


	Route::get('deporte','configuracion@deporte');
	Route::post('configuracion/crear_dpt','configuracion@crear_dpt');
	Route::post('configuracion/modificar_dpt','configuracion@modificar_dpt');
	Route::get('configuracion/ver_deporte/{id}','configuracion@ver_deporte');
	Route::get('configuracion/eliminarDeporte/{id}','configuracion@deporteEliminar');


	Route::get('modalidad','configuracion@modalidad');
	Route::post('configuracion/crear_mdl','configuracion@crear_mdl');
	Route::post('configuracion/modificar_mdl','configuracion@modificar_mdl');
	Route::get('configuracion/ver_modalidad/{id}','configuracion@ver_modalidad');
	Route::get('configuracion/eliminarModalidad/{id}','configuracion@eliminarModalidad');


	Route::get('rama','configuracion@rama');
	Route::post('configuracion/crear_rm','configuracion@crear_rm');
    Route::post('configuracion/modificar_rm','configuracion@modificar_rm');
	Route::get('configuracion/ver_rama/{id}','configuracion@ver_rama');
	Route::get('configuracion/eliminarRama/{id}','configuracion@eliminarRama');


	Route::get('categoria','configuracion@categoria');
	Route::post('configuracion/crear_ct','configuracion@crear_ct');
	Route::post('configuracion/modificar_ct','configuracion@modificar_ct');
	Route::get('configuracion/ver_categoria/{id}','configuracion@ver_categoria');
	Route::get('configuracion/eliminarCategoria/{id}','configuracion@eliminarCategoria');

	
	/*************************************************/
});