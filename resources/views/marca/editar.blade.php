@extends('layouts.app')

@section('content')
<div class="container mt-2">
	<form action="{{ route('marca.update', $marca) }}" method="POST">
		@method('PATCH')
		
		@include('marca._form', ['transaccion' => 'Actualizar', 'titulo' => 'Editar'])
	</form>
</div>
@endsection