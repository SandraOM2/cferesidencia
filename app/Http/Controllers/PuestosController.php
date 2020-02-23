<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarPuestoRequest;
use App\Puesto;
use App\Estado;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('puestos.listar')
            ->with('puestos', Puesto::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puestos.crear')
            ->with('puesto', new Puesto)
            ->with('estados', Estado::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPuestoRequest $request)
    {
        // return $request;
        $puesto = new Puesto;
        $puesto->descripcion = $request->descripcion;
        $puesto->estado_id = $request->estado_id;

        $puesto->save();

        return redirect()->route('puestos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('puestos.editar')
            ->with('puesto', Puesto::where('id', $id)->get()->first())
            ->with('estados', Estado::get());;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Puesto $puesto, GuardarPuestoRequest $request)
    {
        $puesto->descripcion = $request->descripcion;
        $puesto->estado_id = $request->estado_id;

        $puesto->save();
        
        return redirect()->route('puestos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {
        
    }
}
