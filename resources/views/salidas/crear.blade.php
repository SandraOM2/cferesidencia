@extends('layouts.app')

@section('content')
<div class="container my-3">
    <form action="{{ route('salidas.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-3 form-group">
                        <label for="empleado_id">Empleado</label>
                        <select name="empleado_id" id="empleado_id" class="custom-select">
                            <option value="">Seleccionar un empleado</option>
                            @foreach ($empleados as $empleado)
                            <option value="{{ $empleado->id }}">{{ $empleado->nombre_completo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-3 form-group">
                        <label for="vehiculo_id">Vehiculo</label>
                        <select name="vehiculo_id" id="vehiculo_id" class="custom-select">
                            <option value="">Seleccionar un vehiculo</option>
                            @foreach ($vehiculos as $vehiculo)
                            <option value="{{ $vehiculo->id }}">{{ $vehiculo->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Seleccionar</th>
                            <th>Herramienta</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($herramientas as $herramienta)
                        <tr>
                            <td class="text-center">
                                <div class="custom-control custom-switch">
                                    <input id="{{ 'herramienta_id_'.$herramienta->id }}" type="checkbox" class="custom-control-input" name="herramientas[]" value="{{ $herramienta->id }}">
                                    <label class="custom-control-label" for="{{ 'herramienta_id_'.$herramienta->id }}"></label>
                                </div>
                            </td>
                            <td>{{ $herramienta->descripcion }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <a href="{{ route('salidas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection

