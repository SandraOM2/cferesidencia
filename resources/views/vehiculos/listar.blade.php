@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div id="content-wrapper">
	   <div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
		<div class="container">
			  <h4 class="display-4 text-secondary"><i class="fas fa-truck-pickup"></i>Vehículos</h4>
		
		<div class="row">
		  <div class="col">
			<span class="float-right">
			   <a href="{{ route('vehiculos.create') }}" class="btn btn-danger"><i class="fas fa-plus"></i></a>
				 <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Descarga"><i class="fas fa-download"></i></button>
			</span>
		  </div>
		</div>
	   </div>
	  </div>
	  <div class="container py-3">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
				  <table id="dt-basic-checkbox" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th width="50">ID</th>
						<th>Número Economico</th>
						<th width="150">Marca</th>
						<th width="100">Modelo</th>
						<th width="100">Año</th>
						<th width="100">Estado</th>
						<th width="100">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($vehiculos as $vehiculo)
					<tr>
						<td>{{ $vehiculo->id }}</td>
						<td>{{ $vehiculo->numero_economico }}</td>
						<td>{{ $vehiculo->marca->descripcion }}</td>
						<td>{{ $vehiculo->modelo->descripcion }}</td>
						<td>{{ $vehiculo->año }}</td>
						<td>{{ $vehiculo->estado->descripcion }}</td>
						<td>
							<a href="{{ route('vehiculos.edit', $vehiculo) }} " class="btn btn-primary btn-sm">Editar</a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="7" class="text-center">Sin información</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		 </div>
	   </div>
      </div>
	</div>
 </div>
</div>

@endsection