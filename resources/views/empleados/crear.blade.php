@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('personal.store') }}" method="POST">
		@include('empleados._form', ['transaccion' => 'Guardar', 'titulo' => 'Nuevo'])
	</form>
</div>
@endsection