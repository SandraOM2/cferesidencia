
<?php

Auth::routes();

Route::get('/', function () {
    return view('bienvenido');
})->name('bienvenido');

Route::middleware('auth')->group(function() {
    
    Route::prefix('tablero')->group(function() {

        Route::get('graficas', function () {
            return view('tablero.graficas');
        })->name('tablero.graficas');

    });

    Route::namespace('Empleados')->group(function() {
    
        Route::resource('puestos', 'PuestosController')->except(['show']);
        Route::resource('personal', 'EmpleadosController')->except(['show']);
    
    });
    
    Route::namespace('Vehiculos')->group(function() {
        
        Route::resource('marcas', 'MarcasController')->except(['show']);
        Route::resource('modelos', 'ModelosController')->except(['show']);
        Route::resource('vehiculos', 'VehiculosController')->except(['show']);
        Route::get('vehiculos/marcas/{marca}', function(App\Marca $marca){
            return $marca->modelos;
        });
    
    });
    
    Route::namespace('Herramientas')->group(function() {
    
        Route::resource('herramientas', 'HerramientasController')->except(['show']);
        
    });
    
    Route::namespace('Salidas')->group(function() {
    
        Route::resource('salidas', 'SalidasController');
    
    });

});
