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

Route::get('/','IndexController@index');

//cronometragem
Route::get('/cronometragem','CronometragemController@index');
Route::get('/cronometragem/get-tomada-tempo','CronometragemController@getTomadaTempo');
Route::get('/cronometragem/get-elementos','CronometragemController@getElementos');
Route::post('/cronometragem/guardar','CronometragemController@guardar');

//Crud's
Route::resource('operacao','OperacaoController');   
Route::resource('produto','ProdutoController'); 
Route::resource('usuario','UsuarioController'); 
Route::resource('elemento','ElementoController');
Route::resource('tomada-tempo','TomadaTempoController'); 
Route::resource('login','LoginController');