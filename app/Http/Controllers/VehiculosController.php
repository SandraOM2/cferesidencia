<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuardarVehiculoRequest;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Vehiculo = Vehiculo::get();
        return view('Vehiculo.listar')->with('Vehiculo', $Vehiculo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vehiculo.crear')->with('Vehiculo', new Vehiculo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarVehiculoRequest $request)
    {
        // return $request->validated();

        Vehiculo::create($request->validated());

        return redirect()->route('Vehiculo.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vehiculo = Vehiculo::where('id', $id)->get()->first();
        return view('Vehiculo.editar')->with('Vehiculo', $Vehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Vehiculo $vehiculo, GuardarVehiculoRequest $request)
    {
        $vehiculo->update($request->validated());

        return redirect()->route('Vehiculo.index');
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