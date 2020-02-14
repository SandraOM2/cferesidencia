@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('herramientas.update', $Vehiculo) }}" method="POST">
		@method('PATCH')
		
		@include('Vehiculo._form', ['transaccion' => 'Actualizar', 'titulo' => 'Editar'])
	</form>
</div>
@endsection