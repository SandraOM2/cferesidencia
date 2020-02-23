@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('personal.update', $empleado) }}" method="POST">
		@method('PATCH')
		
		@include('empleados._form', ['transaccion' => 'Actualizar', 'titulo' => 'Editar'])
	</form>
</div>
@endsection