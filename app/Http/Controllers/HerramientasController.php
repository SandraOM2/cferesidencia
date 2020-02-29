<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Herramienta;
use App\Http\Requests\GuardarHerramientaRequest;

class HerramientasController extends Controller
{
    public function index()
    {
        $herramientas = Herramienta::get();
        return view('herramientas.listar')
            ->with('herramientas', $herramientas);
    }

    public function create()
    {
        return view('herramientas.crear')
            ->with('herramienta', new Herramienta)
            ->with("estados", Estado::get());
    }

    public function store(GuardarHerramientaRequest $request)
    {
        $herramienta = new Herramienta;
        $herramienta->descripcion = $request->descripcion;
        $herramienta->estado_id = $request->estado_id;
        $herramienta->save();

        return redirect()->route('herramientas.index');
    }

    public function edit($id)
    {
        $herramienta = Herramienta::where('id', $id)->get()->first();
        return view('herramientas.editar')
            ->with('herramienta', $herramienta)
            ->with("estados", Estado::get());
    }

    public function update(Herramienta $herramienta, GuardarHerramientaRequest $request)
    {
        $herramienta->descripcion = $request->descripcion;
        $herramienta->estado_id = $request->estado_id;
        $herramienta->save();

        return redirect()->route('herramientas.index');
    }

    public function destroy($id)
    {
        
    }
}
