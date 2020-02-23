
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
    return view('inicio');
});

Auth::routes();

Route::resource('herramientas', 'HerramientasController')->except(['show']);
Route::resource('marca', 'MarcaController')->except(['show']);
Route::resource('modelo', 'ModeloController')->except(['show']);
Route::resource('vehiculos', 'VehiculosController')->except(['show']);
Route::resource('puestos', 'PuestosController')->except(['show']);
Route::resource('personal', 'EmpleadosController')->except(['show']);