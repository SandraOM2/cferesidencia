@csrf
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-auto">
                <h2 class="mb-0">Marca/ <small class="text-muted">{{ $accion }}</small></h2>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-md-2 form-group">
                <label for="id">Id:</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $marca->id) }}" readonly>
            </div>
            
            <div class="form-group col-md-6">
                <label for="descripcion">Descripción:</label>
                <input class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" type="text" name="descripcion" value="{{ old('descripcion', $marca->descripcion) }}">
                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="estado_id">Estado:</label>
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
                <p align="right"> <a href="{{ route('marcas.index') }} " class="btn btn-danger">Regresar</a></p>
            </div>
            
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>