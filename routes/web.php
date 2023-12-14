<?php

use Illuminate\Support\Facades\Route;


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
    return view('index');
});

//Categorias
Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');
//Produtos
Route::get('/produtos', 'ControladorProduto@indexView');
Route::get('/produtos/novo', 'ControladorProduto@showForm');
Route::post('/produtos', 'ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'ControladorProduto@destroy');
Route::get('/produtos/editar/{id}', 'ControladorProduto@edit');
Route::put('/produtos/{id}', 'ControladorProduto@update');
//Clientes
Route::get('/novocliente', 'ClienteControlador@create');
Route::get('/clientes', 'ClienteControlador@index');
Route::post('/cliente/clientes', 'ClienteControlador@store');
