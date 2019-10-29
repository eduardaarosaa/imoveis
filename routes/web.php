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

Route::get('/', 'ImoveisController@verImoveis', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addCliente', 'ClienteController@index')->name('addCliente');
Route::post('/cadastrado', 'ClienteController@create')->name('cadastrado');
Route::get('/consultaClientes', 'ClienteController@show')->name('consultaClientes');
Route::get('/addImovel', 'ImoveisController@index')->name('addImovel');
Route::get('/verContatos', 'ContatosController@index')->name('verContatos');
Route::get('verContatos/{id}', 'ContatosController@visualizar')->name('visualizar');
Route::delete('/news1/{id}', 'ContatosController@destroy');
Route::get('/addAdmin', 'AdminController@index')->name('addAdmin');
Route::get('/pesquisarImovel', 'ImoveisController@show')->name("pesquisarImovel");
Route::get('/queroImovel', 'QueroImovelController@index')->name('queroImovel');
Route::get('queroImovel/{id}', 'QueroImovelController@visualizar')->name('visualizar');
Route::delete('/news/{id}', 'QueroImovelController@destroy');
Route::get('/venderImovel', 'QueroVenderController@index')->name('venderImovel');
Route::get('venderImovel/{id}', 'QueroVenderController@visualizar')->name('visualizar');
Route::delete('/news2/{id}', 'QueroVenderController@destroy');
Route::post('/buscaCliente', 'ClienteController@buscarCliente')->name('buscaCliente');
Route::get('/contato', 'ContatosController@formContato')->name('contato');
Route::post('/salvandoForm', 'ContatosController@create')->name('salvandoForm');
Route::post('/salvandoImovel', 'ImoveisController@create')->name('salvandoImovel');
Route::get('/formQueroVender', 'QueroVenderController@formQueroVender')->name('formQuerovender');
Route::post('/salvandoQueroVender', 'QueroVenderController@create')->name('salvandoQueroVender');
Route::get('/formQueroImovel', 'QueroImovelController@formQueroImovel')->name('formQueroImovel');
Route::post('/salvandoQueroImovel', 'QueroImovelController@create')->name('salvandoQueroImovel');
Route::get('/config', 'ConfigController@index')->name('config');
Route::get('/clientes/export', 'ConfigController@export')->name('export');
Route::post('/BuscaImovel', 'ImoveisController@BuscaImovel')->name('buscaImovel');
Route::get('/verImoveis', 'ImoveisController@verImoveis')->name('verImoveis');
Route::get('/empresa', 'EmpresaController@index')->name('empresa');
Route::get('/editarCliente/{id}', 'ClienteController@edit')->name('cliente.edit');
Route::post('/alterarCliente/{id}', 'ClienteController@update')->name('alterarCliente');
