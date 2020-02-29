@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('modelos.update', $modelo) }}" method="POST">
		@method('PATCH')
		
		@include('modelos._form', ['transaccion' => 'Actualizar', 'accion' => 'Editar'])
	</form>
</div>
@endsection