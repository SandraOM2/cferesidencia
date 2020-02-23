@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h3 class="card-title">Personal</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('personal.create') }}" class="btn btn-primary">Nuevo</a>
                </div>
            </div>
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col" style="width: 50px;">Id</th>
                        <th scope="col" style="width: 50px;">RPE</th>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Puesto</th>
                        <th scope="col" style="width: 120px;" >Estado</th>
                        <th scope="col" style="width: 100px;" >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <td scope="row">{{ $empleado->id }}</td>
                        <td>{{ $empleado->rpe }}</td>
                        <td>{{ $empleado->nombres }}</td>
                        <td>{{ $empleado->apellido_paterno }}</td>
                        <td>{{ $empleado->apellido_materno }}</td>
                        <td>{{ $empleado->puesto->descripcion }}</td>
                        <td>{{ $empleado->estado->descripcion }}</td>
                        <td><a href="{{ route('personal.edit', $empleado) }}" class="btn btn-outline-info btn-sm">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection