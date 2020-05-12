<?php

namespace App\Http\Controllers\Vehiculos;

use App\Estado;
use App\Http\Controllers\Controller;
use App\Modelo;
use App\Http\Requests\GuardarModeloRequest;
use App\Marca;

class ModelosController extends Controller
{
    public function index()
    {
        $modelo = Modelo::get();
        return view('modelos.listar')->with('modelo', $modelo);
    }

    public function create()
    {
        return view('modelos.crear')
            ->with('modelo', new Modelo)
            ->with('marcas', Marca::where('estado_id', 1)->get())
            ->with('estados', Estado::get());
    }

    public function store(GuardarModeloRequest $request)
    {
        $modelo = new Modelo;
        $modelo->descripcion = $request->descripcion;
        $modelo->marca_id = $request->marca_id;
        $modelo->estado_id = $request->estado_id;
        $modelo->save();

        return redirect()->route('modelos.index');
    }

    public function edit($id)
    {
        return view('modelos.editar')
            ->with('modelo', Modelo::where('id', $id)->get()->first())
            ->with('marcas', Marca::where('estado_id', 1)->get())
            ->with('estados', Estado::get());
    }

    public function update(modelo $modelo, GuardarModeloRequest $request)
    {
        $modelo->descripcion = $request->descripcion;
        $modelo->marca_id = $request->marca_id;
        $modelo->estado_id = $request->estado_id;
        $modelo->save();

        return redirect()->route('modelos.index');
    }
}
