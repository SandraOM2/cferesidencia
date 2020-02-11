@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="/herramientas" method="POST">
		@csrf
		<div class="row">
			<div class="col">
				<label for="id">Id</label>
				<input class="form-control" type="text" name="id" id="id" value="{{ $herramienta->id ?? '' }}" readonly>
			</div>
			<div class="col">
				<label for="descripcion">Descripcion</label>
				<input class="form-control" id="descripcion" type="text" name="descripcion" value="{{ $herramienta->descripcion ?? '' }}">
			</div>
			<div class="col">
				<button class="btn btn-primary" type="submit">{{ !isset($herramienta) ? 'Guardar' : 'Actualizar'}}</button>
			</div>
		</div>
	</form>
</div>
@endsection