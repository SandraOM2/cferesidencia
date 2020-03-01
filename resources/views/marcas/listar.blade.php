@extends('layouts.app')

@section('content')
<div class="container-fluid">
 <div id="content-wrapper">
	<div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
	 <div class="container">
		   <h4 class="display-4 text-secondary"><i class="fas fa-truck-pickup"></i>Marcas</h4>
	 
	 <div class="row">
	   <div class="col">
		 <span class="float-right">
			<a href="{{ route('marcas.create') }}" class="btn btn-danger"><i class="fas fa-plus"></i></a>
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
						<th>Descripción</th>
						<th width="150">Estado</th>
						<th width="100">Acciones</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($marcas as $marca)
					<tr>
						<td>{{ $marca->id }}</td>
						<td>{{ $marca->descripcion }}</td>
						<td>{{ $marca->estado->descripcion }}</td>
						<td>
							<a href="{{ route('marcas.edit', $marca) }}" class="btn btn-primary btn-sm">Editar</a>
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
  </div>
 </div>
</div>
@endsection