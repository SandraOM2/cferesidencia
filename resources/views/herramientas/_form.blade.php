@csrf
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-auto">
                <h2 class="mb-0">Herramienta/ <small class="text-muted">{{$titulo }}</small></h2>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="form-group col-2 ">
                <label for="id">Id</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $herramienta->id) }}" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="descripcion">Descripcion</label>
                <input class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" type="text" name="descripcion" value="{{ old('descripcion', $herramienta->descripcion) }}">
                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-4 ">
                <label for="estado_id">Estado</label>
                <select id="estado_id" class="form-control" name="estado_id">
                    @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" @if($estado->id == old('estado_id', $herramienta->estado_id)) selected @endif>{{ $estado->descripcion }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p align="right"> <a href="{{ route('herramientas.index') }} " class="btn btn-danger">Regresar</a></p>
               
            </div>

            <div class="col-auto">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>
