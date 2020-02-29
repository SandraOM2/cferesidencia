<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Marca;
use App\Http\Requests\GuardarMarcaRequest;

class MarcasController extends Controller
{
    public function index()
    {
        return view('marcas.listar')
            ->with('marcas', Marca::get());
    }

    public function create()
    {
        return view('marcas.crear')
            ->with('marca', new Marca)
            ->with('estados', Estado::get());
    }

    public function store(GuardarMarcaRequest $request)
    {
        $marca = new Marca;
        $marca->descripcion = $request->descripcion;
        $marca->estado_id = $request->estado_id;
        $marca->save();

        return redirect()->route('marcas.index');
    }

    public function edit($id)
    {
        return view('marcas.editar')
            ->with('marca', Marca::where('id', $id)->get()->first())
            ->with('estados', Estado::get());
    }

    public function update(Marca $marca, GuardarMarcaRequest $request)
    {
        $marca->descripcion = $request->descripcion;
        $marca->estado_id = $request->estado_id;
        $marca->save();

        return redirect()->route('marcas.index');
    }

    public function destroy($id)
    {
        
    }
}
