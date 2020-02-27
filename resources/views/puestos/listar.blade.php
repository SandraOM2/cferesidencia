@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <h3 class="card-title">Puestos</h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('puestos.create') }}" class="btn btn-primary">Nuevo</a>
                </div>
            </div>
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th style="width: 50px;" scope="col">Id</th>
                        <th scope="col">Descripcion</th>
                        <th style="width: 120px;" scope="col">Estado</th>
                        <th style="width: 100px;" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($puestos as $puesto)
                    <tr>
                        <td scope="row">{{ $puesto->id }}</td>
                        <td>{{ $puesto->descripcion }}</td>
                        <td>{{ $puesto->estado->descripcion }}</td>
                        <td><a href="{{ route('puestos.edit', $puesto) }}" class="btn btn-outline-info btn-sm">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection