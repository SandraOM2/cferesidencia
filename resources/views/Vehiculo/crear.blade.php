@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('Vehiculo.store') }}" method="POST">
		@include('Vehiculo._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection