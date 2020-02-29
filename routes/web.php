
<?php

Auth::routes();

Route::get('/bienvenido', function () {
    return view('bienvenido');
})->name('bienvenido');

Route::get('/', function () {
    return view('tablero.inicio');
})->name('inicio');

Route::resource('puestos', 'PuestosController')->except(['show']);
Route::resource('personal', 'EmpleadosController')->except(['show']);
Route::resource('herramientas', 'HerramientasController')->except(['show']);
Route::resource('marcas', 'MarcasController')->except(['show']);
Route::resource('modelos', 'ModelosController')->except(['show']);
Route::resource('vehiculos', 'VehiculosController')->except(['show']);
Route::get('/vehiculos/obtener_modelos_por_marca/{marca_id}', 'VehiculosController@getModelosByMarca');