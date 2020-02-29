@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('modelos.store') }}" method="POST">
		@include('modelos._form', ['transaccion' => 'Guardar', 'accion' => 'Nuevo'])
	</form>
</div>
@endsection