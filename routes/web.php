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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addCliente', 'ClienteController@index')->name('addCliente');
Route::post('/cadastrado', 'ClienteController@create')->name('cadastrado');
Route::get('/consultaClientes', 'ClienteController@show')->name('consultaClientes');
Route::get('/addImovel', 'ImoveisController@index')->name('addImovel');
Route::get('/verContatos', 'ContatosController@index')->name('verContatos');
Route::get('/addAdmin', 'AdminController@index')->name('addAdmin');
Route::get('/pesquisarImovel', 'ImoveisController@show')->name("pesquisarImovel");
Route::get('/queroImovel', 'QueroImovelController@index')->name('queroImovel');
Route::get('/venderImovel', 'QueroVenderController@index')->name('venderImovel');
Route::post('/buscaCliente', 'ClienteController@buscarCliente')->name('buscaCliente');
Route::get('/contato', 'ContatosController@formContato')->name('contato');
Route::post('/salvandoForm', 'ContatosController@create')->name('salvandoForm');
