<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Estado;
use App\Http\Requests\GuardarEmpleadoRequest;
use App\Puesto;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.listar')
            ->with('empleados', Empleado::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.crear')
            ->with('empleado', new Empleado)
            ->with('puestos', Puesto::where('estado_id', 1)->get())
            ->with('estados', Estado::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarEmpleadoRequest $request)
    {
        $empleado = new Empleado;
        $empleado->rpe = $request->rpe;
        $empleado->nombres = $request->nombres;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->puesto_id = $request->puesto_id;
        $empleado->estado_id = $request->estado_id;
        $empleado->save();

        return redirect()->route('personal.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('empleados.editar')
            ->with('empleado', Empleado::where('id', $id)->get()->first())
            ->with('puestos', Puesto::where('estado_id', 1)->get())
            ->with('estados', Estado::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuardarEmpleadoRequest $request, Empleado $empleado)
    {
        $empleado->rpe = $request->rpe;
        $empleado->nombres = $request->nombres;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->puesto_id = $request->puesto_id;
        $empleado->estado_id = $request->estado_id;
        $empleado->save();

        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
