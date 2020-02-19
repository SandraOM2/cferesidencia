@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('vehiculo.store') }}" method="POST">
		@include('vehiculo._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection