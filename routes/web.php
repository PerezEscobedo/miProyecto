<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('usuario/{id}', 'Pruebas\OtroController@valor');


Route::get('producto', 'Pruebas\OtroController@index');

Route::get('Indice', 'Pruebas\MarcaController@index');
Route::get('Indice2', 'Pruebas\MarcaController@create');

Route::get('Clave/{id}', 'Pruebas\MarcaController@show')->
where('id','[0-9]+');

Route::get('Saludo/{nombre}/{apellido?}', 'Pruebas\OtroController@Saludo');


Route::get('SaludoSoldado/{nombre}', 'Pruebas\OtroController@SaludoSoldado');
