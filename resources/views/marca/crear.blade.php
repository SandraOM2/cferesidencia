@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('marca.store') }}" method="POST">
		@include('marca._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection