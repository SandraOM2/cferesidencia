@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('modelo.store') }}" method="POST">
		@include('modelo._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection