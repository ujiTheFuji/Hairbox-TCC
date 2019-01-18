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


Route::get('/', 'Auth\LoginController@showLoginForm')->name('index');
Route::get('/login', 'Auth\LoginController@showLoginPage')->name('login-page');
Route::post('/', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/registrar')->group(function(){
    Route::get('/', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/', 'Auth\RegisterController@register')->name('create');
});



Route::prefix('/produtos')->middleware(['auth', 'LimiteAssinatura', 'Administrador'])->group(function(){
    Route::post('/', 'ProdutosController@search')->name('pesquisar');
    Route::get('/{mensagem?}', 'ProdutosController@index')->name('produtos');
    Route::get('/item/{id}', 'ProdutosController@item')->name('item');
    Route::get('/{tipo}/{marca}', 'ProdutosController@show')->name('prod_especificos');
});

Route::prefix('/carrinho')->middleware(['auth', 'LimiteAssinatura', 'Administrador'])->group(function(){
    Route::get('/', 'CarrinhoController@index')->name('carrinho');
    Route::post('/', 'CarrinhoController@store')->name('salvar_item');
    Route::get('/send', 'CarrinhoController@send')->name('mandar_item');
});

Route::prefix('/perfil')->middleware(['auth', 'Administrador'])->group(function(){
    Route::get('/json', 'PerfilController@indexjs')->name('perfil-json');
    Route::get('/{mensagem?}', 'PerfilController@index')->name('perfil');
    Route::post('/', 'PerfilController@destroy')->name('deletar');

});

Route::get('/home', 'PerfilController@index')->middleware(['auth', 'Administrador'])->name('home');

Route::get('/FAQ', function(){
    return view('faq');
})->middleware('Administrador')->name('faq');


Route::get('/termos', function(){
    return view('termos');
})->middleware('Administrador')->name('termos');

Route::get('/admin/json', 'AdminController@indexjs')->middleware(['auth', 'admin'])->name('admin-json');
Route::get('/admin', 'AdminController@index')->middleware(['auth', 'admin'])->name('admin');
Route::post('/admin', 'AdminController@store')->name('inserir_produto');

Route::get('/recover/{mensagem?}', 'Auth\ForgotPasswordController@index')->name('esqueceu');
Route::get('/recuperar', 'Auth\ForgotPasswordController@index')->name('recuperar');
