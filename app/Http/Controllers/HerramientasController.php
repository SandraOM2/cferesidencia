<?php

namespace App\Http\Controllers;

use App\Herramienta;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarHerramientaRequest;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herramientas = Herramienta::get();
        return view('herramientas.listar')->with('herramientas', $herramientas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('herramientas.crear')->with('herramienta', new Herramienta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarHerramientaRequest $request)
    {
        // return $request->validated();

        Herramienta::create($request->validated());

        return redirect()->route('herramientas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $herramienta = Herramienta::where('id', $id)->get()->first();
        return view('herramientas.editar')->with('herramienta', $herramienta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Herramienta $herramienta, GuardarHerramientaRequest $request)
    {
        $herramienta->update($request->validated());

        return redirect()->route('herramientas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
