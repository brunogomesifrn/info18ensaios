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
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/autenticacao', function () {
    return view('login');
})->name('autenticacao');

Route::get('/cadastro', function () {
    return view('cadastro_usuario');
});

Route::get('/usuario', function () {
    return view('usuario');
})->middleware('auth');

Route::get('/desconectar', function () {
	Auth::logout();
    return view('index');
});

Route::get('/espacos', 'EspacoControlador@index')->middleware('auth');
Route::get('/espacos_cadastro', 'EspacoControlador@create')->middleware('auth');
Route::post('/espacos_salvar', 'EspacoControlador@store')->middleware('auth');
