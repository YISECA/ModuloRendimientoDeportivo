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

	Route::get('getTallas/{id_genero}/{id_tipo}', 'DeportistaController@Tallas');  
	Route::get('deportista/{id}','DeportistaController@datos');
	Route::post('AddDeportista', 'DeportistaController@RegistrarDeportista');
	Route::post('EditDeportista', 'DeportistaController@ModificarDeportista');

	Route::get('getAgrupacion/{id}', 'DeportistaController@Agrupaciones');
	Route::get('getDeporte/{id}', 'DeportistaController@Deportes');
	Route::get('getModalidad/{id}', 'DeportistaController@Modalidades');

	Route::get('getDeportistaDeporte/{id}', 'DeportistaController@DeportistaDeporte');
	Route::get('psico','ValoracionPsicoController@index');

	/*************************************************/

	/********************Tecnico****************************/
	Route::get('configuracion','configuracion@inicio');
	Route::post('/configuracion/crear','configuracion@guardar');
	Route::post('/configuracion/modificar','configuracion@modificar');
	Route::get('/configuracion/IdAgrupacion/{id}','configuracion@agrupacion');
	Route::get('/configuracion/eliminarAgrupacion/{id}','configuracion@agrupacionEliminar');


	Route::get('deporte','configuracion@deporte');
	Route::post('/configuracion/crear_dpt','configuracion@crear_dpt');
	Route::post('/configuracion/modificar_dpt','configuracion@modificar_dpt');
	Route::get('/configuracion/ver_deporte/{id}','configuracion@ver_deporte');
	Route::get('/configuracion/eliminarDeporte/{id}','configuracion@deporteEliminar');


	Route::get('modalidad','configuracion@modalidad');
	Route::post('/configuracion/crear_mdl','configuracion@crear_mdl');
	Route::post('/configuracion/modificar_mdl','configuracion@modificar_mdl');
	Route::get('/configuracion/ver_modalidad/{id}','configuracion@ver_modalidad');
	Route::get('/configuracion/eliminarModalidad/{id}','configuracion@eliminarModalidad');


	Route::get('rama','configuracion@rama');
	Route::post('/configuracion/crear_rm','configuracion@crear_rm');
    Route::post('/configuracion/modificar_rm','configuracion@modificar_rm');
	Route::get('/configuracion/ver_rama/{id}','configuracion@ver_rama');
	Route::get('/configuracion/eliminarRama/{id}','configuracion@eliminarRama');


	Route::get('categoria','configuracion@categoria');
	Route::post('/configuracion/crear_ct','configuracion@crear_ct');
	Route::post('/configuracion/modificar_ct','configuracion@modificar_ct');
	Route::get('/configuracion/ver_categoria/{id}','configuracion@ver_categoria');
	Route::get('/configuracion/eliminarCategoria/{id}','configuracion@eliminarCategoria');

	
	/*************************************************/
});