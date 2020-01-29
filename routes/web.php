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
Route::get('/yaa', function () {
    return view('Herramienta.contH');
});
Route::get('/ya', function () {
    return view('Personal.personal');
});
Route::get('/yap', function () {
    return view('Vehiculos.vehiculos');
});
Route::get('/p', function () {
    return view('aver');
});

Route::get('/pp', function () {
    return view('Registro.registrar');
});

Route::get('/ay', function () {
    return view('Registros.registros');
});


Route::get('/camara', function () {
    return view('Camara.cam');
});

Route::get('/her', function () {
    return view('Registro.Rherramienta');
});

Route::get('/qr', function () {
    return view('qr.qr');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
