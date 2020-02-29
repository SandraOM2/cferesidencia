@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('marcas.update', $marca) }}" method="POST">
		@method('PATCH')
		
		@include('marcas._form', ['transaccion' => 'Actualizar', 'accion' => 'Editar'])
	</form>
</div>
@endsection