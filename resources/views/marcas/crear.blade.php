@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('marcas.store') }}" method="POST">
		@include('marcas._form', ['transaccion' => 'Guardar', 'accion' => 'Nuevo'])
	</form>
</div>
@endsection