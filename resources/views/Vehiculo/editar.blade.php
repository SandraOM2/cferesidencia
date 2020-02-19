@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
		@method('PATCH')
		
		@include('vehiculo._form', ['transaccion' => 'Actualizar', 'titulo' => 'Editar'])
	</form>
</div>
@endsection