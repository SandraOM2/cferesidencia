@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('puestos.store') }}" method="POST">
		@include('puestos._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection