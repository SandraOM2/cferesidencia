@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
		@method('PATCH')
		
		@include('vehiculos._form', ['transaccion' => 'Actualizar', 'accion' => 'Editar'])
	</form>
</div>
@endsection