<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::patch('/carrinhos/{user}/{id}', 'CarrinhoController@indexJSON');
Route::delete('/carrinhos/{user}/{id}', 'CarrinhoController@Destroy');
Route::post('/carrinhos', 'CarrinhoController@indexAPI');

Route::patch('/perfil', 'PerfilController@editAPI');
Route::patch('/recover','Auth\ForgotPasswordController@editAPI');

Route::post('/admin', 'AdminController@search');
Route::post('/admin/inserir', 'AdminController@store');
Route::delete('/admin/{table}/{id}', 'AdminController@destroy');
Route::patch('/admin/produto', 'AdminController@edit');