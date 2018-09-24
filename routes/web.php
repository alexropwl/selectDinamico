<?php
use App\City;


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

Route::get('/', function () {
    return view('welcome');
});



Route::get('estados', 'EstadoController@index');


Route::get('/estados/novo', 'EstadoController@create');

Route::post('/estados/store', 'EstadoController@store');

Route::get('/estados/alterar/{id}', 'EstadoController@edit');

Route::post('/estados/editar/{id}','EstadoController@update');

Route::get('/estados/deletar/{id}', 'EstadoController@destroy');

Route::get('/cidades', 'CidadeController@index');

Route::get('/cidades/novo', 'CidadeController@create');

Route::post('/cidades/store', 'CidadeController@store');

Route::get('/cidades/edit/{id}','CidadeController@edit');

Route::post('cidades/update/{id}', 'CidadeController@update');

Route::get('cidades/delete/{id}', 'CidadeController@destroy');

Route::get('/usuarios', 'UsuarioController@index');

Route::get('/usuarios/novo', 'UsuarioController@create');

Route::get('city', 'CityController@new');

Route::get('/city/novo', 'CityController@index');

Route::get('states/get/{id}','CityController@states');
































