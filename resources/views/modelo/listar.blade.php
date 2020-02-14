@extends('layouts.app')

@section('content')
<div class="container py-3">
	<div class="card">
		<div class="card-header">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<h1 class="mb-0">Modelo</h1>
				</div>
				<div class="col-auto">
					<a href="/modelo/crear" class="btn btn-primary">Nuevo</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-resposive">
				<thead>
					<tr>
						<th width="50">ID</th>
						<th>Descripción</th>
						<th width="150">Estado</th>
						<th width="100">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($modelo as $modelo)
					<tr>
						<td>{{ $modelo->id }}</td>
						<td>{{ $modelo->descripcion }}</td>
						<td>{{ $modelo->estado }}</td>
						<td>
							<a href="/modelo/{{ $modelo->id }}/editar" class="btn btn-primary btn-sm">Editar</a>
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