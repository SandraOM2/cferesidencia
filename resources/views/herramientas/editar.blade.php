@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('herramientas.update', $herramienta) }}" method="POST">
		@method('PATCH')
		
		@include('herramientas._form', ['transaccion' => 'Actualizar', 'titulo' => 'Editar'])
	</form>
</div>
@endsection