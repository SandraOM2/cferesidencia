@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('puestos.update', $puesto) }}" method="POST">
		@method('PATCH')
		
		@include('puestos._form', ['transaccion' => 'Actualizar', 'titulo' => 'Editar'])
	</form>
</div>
@endsection