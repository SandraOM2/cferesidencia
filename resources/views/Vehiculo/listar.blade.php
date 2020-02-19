@extends('layouts.app')

@section('content')
<div class="container py-3">
	<div class="card">
		<div class="card-header">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<h1 class="mb-0">Vehiculos</h1>
				</div>
				<div class="col-auto">
					<a href="/vehiculo/crear" class="btn btn-primary">Nuevo</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-resposive">
				<thead>
					<tr>
						<th width="50">ID</th>
						<th>Número Economico</th>
						<th width="150">Marca</th>
						<th width="100">Modelo</th>
						<th width="100">Año</th>
						<th width="100">Estado</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($vehiculo as $vehiculo)
					<tr>
						<td>{{ $vehiculo->id }}</td>
						<td>{{ $vehiculo->numeroEconomico }}</td>
						<td>{{ $vehiculo->marca }}</td>
						<td>{{ $vehiculo->modelo }}</td>
						<td>{{ $vehiculo->año }}</td>
						<td>{{ $vehiculo->estado }}</td>

						<td>
							<a href="/Vehiculo/{{ $vehiculo->id }}/editar" class="btn btn-primary btn-sm">Editar</a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="4" class="text-center">Sin información</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection