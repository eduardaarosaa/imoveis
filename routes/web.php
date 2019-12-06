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

Route::get('/', 'ImoveisController@verImoveis')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addCliente', 'ClienteController@index')->name('addCliente')->middleware('auth');
Route::post('/cadastrado', 'ClienteController@create')->name('cadastrado')->middleware('auth');
Route::get('/consultaClientes', 'ClienteController@show')->name('consultaClientes')->middleware('auth');
Route::get('/addImovel', 'ImoveisController@index')->name('addImovel')->middleware('auth')->middleware('auth');
Route::get('/verContatos', 'ContatosController@index')->name('verContatos')->middleware('auth');
Route::get('verContatos/{id}', 'ContatosController@visualizar')->name('visualizar')->middleware('auth');
Route::delete('/news1/{id}', 'ContatosController@destroy')->middleware('auth');
Route::get('/addAdmin', 'AdminController@index')->name('addAdmin');
Route::get('/pesquisarImovel', 'ImoveisController@show')->name("pesquisarImovel")->middleware('auth');
Route::get('/queroImovel', 'QueroImovelController@index')->name('queroImovel')->middleware('auth');
Route::get('queroImovel/{id}', 'QueroImovelController@visualizar')->name('visualizar')->middleware('auth');
Route::delete('/news/{id}', 'QueroImovelController@destroy')->middleware('auth');
Route::get('/venderImovel', 'QueroVenderController@index')->name('venderImovel')->middleware('auth');
Route::get('venderImovel/{id}', 'QueroVenderController@visualizar')->name('visualizar')->middleware('auth');
Route::delete('/news2/{id}', 'QueroVenderController@destroy')->middleware('auth');
Route::post('/buscaCliente', 'ClienteController@buscarCliente')->name('buscaCliente');
Route::get('/contato', 'ContatosController@formContato')->name('contato');
Route::post('/salvandoForm', 'ContatosController@create')->name('salvandoForm');
Route::post('/salvandoImovel', 'ImoveisController@create')->name('salvandoImovel');
Route::get('/formQueroVender', 'QueroVenderController@formQueroVender')->name('formQuerovender');
Route::post('/salvandoQueroVender', 'QueroVenderController@create')->name('salvandoQueroVender');
Route::get('/formQueroImovel', 'QueroImovelController@formQueroImovel')->name('formQueroImovel');
Route::post('/salvandoQueroImovel', 'QueroImovelController@create')->name('salvandoQueroImovel');
Route::get('/config', 'ConfigController@index')->name('config')->middleware('auth');
Route::get('/clientes/export', 'ConfigController@export')->name('export')->middleware('auth');;
Route::post('/BuscaImovel', 'ImoveisController@BuscaImovel')->name('buscaImovel');
Route::get('/verImoveis', 'ImoveisController@verImoveis')->name('verImoveis');
Route::get('/empresa', 'EmpresaController@index')->name('empresa');
Route::get('/editarCliente/{id}', 'ClienteController@edit')->name('cliente.edit')->middleware('auth');
Route::post('/alterarCliente/{id}', 'ClienteController@update')->name('alterarCliente')->middleware('auth');
Route::any('/filtrarImovel', 'ImoveisController@filtrarImovel')->name('filtrarImovel');
Route::any('detalhesImoveis/{id}', 'ImoveisController@detalhesImoveis')->name('detalhesImoveis');
Route::delete('/apagar/{id}', 'ImoveisController@destroy')->middleware('auth');;
Route::get('/editarImovel/{id}', 'ImoveisController@edit')->name('properties.edit')->middleware('auth');
Route::post('/alterarImovel/{id}', 'ImoveisController@update')->name('alterarImovel')->middleware('auth');
Route::post('storeMedia', 'ImoveisController@storeMedia')->name('properties.storeMedia')->middleware('auth');



///
Route::post('properties/media', 'ImoveisController@storeMedia')->name('properties.storeMedia');
