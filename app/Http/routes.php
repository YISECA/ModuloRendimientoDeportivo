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

	/****Valoracion Psico****/
	Route::get('psico','ValoracionPsicoController@index');
	Route::post('AddDeportista', 'ValoracionPsicoController@RegistrarValoracion');
	/*************************************************/

	

});
/*