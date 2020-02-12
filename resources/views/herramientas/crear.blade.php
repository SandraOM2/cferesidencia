@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('herramientas.store') }}" method="POST">
		@include('herramientas._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection