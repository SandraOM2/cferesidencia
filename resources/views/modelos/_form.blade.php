@csrf
<div class="card">
    <div class="card-header">
        <h2 class="mb-0">Modelos <small class="text-muted">{{ $accion }}</small></h2>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-3 form-group">
                <label for="id">Id</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $modelo->id) }}" readonly>
            </div>

            <div class="col-9 form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" type="text" name="descripcion" value="{{ old('descripcion', $modelo->descripcion) }}">
                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label for="marca_id">Marca</label>
                <select id="marca_id" class="form-control @error('marca_id') is-invalid @enderror" name="marca_id">
                    <option value="" {{ old('marca_id', $modelo->marca_id) == null ? 'selected' : '' }}>Seleccionar una marca</option>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ $marca->id == old('marca_id', $modelo->marca_id) ? 'selected' : '' }}>{{ $marca->descripcion }}</option>
                    @endforeach
                </select>
                @error('marca_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label for="estado_id">Estado</label>
                <select id="estado_id" class="form-control" name="estado_id">
                    @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" {{ $estado->id == old('estado_id', $marca->estado_id) ? 'selected' : '' }}>{{ $estado->descripcion }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a href="{{ route('modelos.index') }}" class="btn btn-danger">Regresar</a>
            </div>
            
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>