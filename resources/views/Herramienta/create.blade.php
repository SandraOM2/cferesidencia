
<form action="/herramientas" method="POST">
	@csrf
	<label for="descripcion">Descripcion</label>
	<input id="descripcion" type="text" name="descripcion" value="{{ $herramienta->descripcion }}">

	<button type="submit">Guardar</button>
</form>