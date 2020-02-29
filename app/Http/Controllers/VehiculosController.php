<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Estado;
use App\Vehiculo;
use App\Http\Requests\GuardarVehiculoRequest;
use App\Modelo;

class VehiculosController extends Controller
{
    public function index()
    {
        return view('vehiculos.listar')
            ->with('vehiculos', Vehiculo::get());
    }

    public function create()
    {
        return view('vehiculos.crear')
            ->with('vehiculo', new Vehiculo)
            ->with('marcas', Marca::where('estado_id', 1)->get())
            ->with('estados', Estado::get());
    }

    public function store(GuardarVehiculoRequest $request)
    {
        $vehiculo = new Vehiculo;
        $vehiculo->numero_economico = $request->numero_economico;
        $vehiculo->marca_id = $request->marca_id;
        $vehiculo->modelo_id = $request->modelo_id;
        $vehiculo->año = $request->año;
        $vehiculo->estado_id = $request->estado_id;
        $vehiculo->save();

        return redirect()->route('vehiculos.index');
    }

    public function edit($id)
    {
        return view('vehiculos.editar')
            ->with('vehiculo', Vehiculo::where('id', $id)->get()->first())
            ->with('marcas', Marca::where('estado_id', 1)->get())
            ->with('estados', Estado::get());
    }

    public function update(Vehiculo $vehiculo, GuardarVehiculoRequest $request)
    {
        $vehiculo->numero_economico = $request->numero_economico;
        $vehiculo->marca_id = $request->marca_id;
        $vehiculo->modelo_id = $request->modelo_id;
        $vehiculo->año = $request->año;
        $vehiculo->estado_id = $request->estado_id;
        $vehiculo->save();

        return redirect()->route('vehiculos.index');
    }

    public function getModelosByMarca($marca_id)
    {
        return Modelo::select('id', 'descripcion')->where('marca_id', $marca_id)->get();
    }
}
