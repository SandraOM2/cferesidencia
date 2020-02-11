@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<table class="table table-resposive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Descripción</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($herramientas as $herramienta)
			<tr>
				<td>{{ $herramienta->id }}</td>
				<td>{{ $herramienta->descripcion }}</td>
				<td>{{ $herramienta->estado }}</td>
				<td>
					<a href="/herramientas/{{ $herramienta->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection