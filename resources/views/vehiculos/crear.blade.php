@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('vehiculos.store') }}" method="POST">
		@include('vehiculos._form', ['transaccion' => 'Guardar', 'accion' => 'Nuevo'])
	</form>
</div>
@endsection