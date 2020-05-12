<?php

namespace App\Http\Controllers\Salidas;

use App\Empleado;
use App\Herramienta;
use App\Salida;
use App\SalidaDetalle;
use App\Vehiculo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

date_default_timezone_set('UTC');

class SalidasController extends Controller
{
    public function index()
    {
        return view('salidas.listar');
    }

    public function create()
    {
        return view('salidas.crear')
            ->with('herramientas', Herramienta::where('estado_id', 1)->get())
            ->with('empleados', Empleado::get())
            ->with('vehiculos', Vehiculo::get());
    }

    public function store(Request $request)
    {
        $salida = new Salida;
        $salida->empleado_id = $request->empleado_id;
        $salida->vehiculo_id = $request->vehiculo_id;
        $salida->fecha_salida = Carbon::now();
        $salida->save();

        foreach ($request->herramientas as $herramienta){
            $salida_detalle = new SalidaDetalle;
            $salida_detalle->salida_id = $salida->id;
            $salida_detalle->herramienta_id = $herramienta;
            $salida_detalle->save();
        }

        return redirect()->route('salidas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
}
