@csrf
<div class="card">
    <div class="card-header">
        <h2>{{ $titulo }}</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3 form-group">
                <label for="id">Id</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $puesto->id) }}" readonly>
            </div>
            <div class="col-9 form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" type="text" name="descripcion" value="{{ old('descripcion', $puesto->descripcion) }}">
                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-3 form-group">
                <label for="estado_id">Estado</label>
                <select id="estado_id" class="form-control" name="estado_id">
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" @if($estado->id == old('estado_id', $puesto->estado_id)) selected @endif>{{ $estado->descripcion }}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-between">
            <div class="col-auto">
                <a href="{{ route('puestos.index') }}" class="btn btn-secondary">Regresar</a>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>