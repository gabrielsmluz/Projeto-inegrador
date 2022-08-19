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
    return view('exemplo');
});
Route::get('/cadastro','App\Http\Controllers\OlaController@cadastro');
Route::get('/login','App\Http\Controllers\OlaController@login');
Route::get('/cardapio','App\Http\Controllers\OlaController@cardapio');
Route::get('/funcionarios','App\Http\Controllers\OlaController@funcionarios');
Route::get('/pedidos','App\Http\Controllers\OlaController@pedidos');
Route::get('/verpedidos','App\Http\Controllers\OlaController@verpedidos');
Route::get('/editarcardapio','App\Http\Controllers\OlaController@editarcardapio');
Route::get('/produtos','App\Http\Controllers\OlaController@produtos');
Route::get('/teste_background','App\Http\Controllers\OlaController@teste_background');
