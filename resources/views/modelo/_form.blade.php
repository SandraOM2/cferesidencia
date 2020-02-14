@csrf
<div class="card">
    <div class="card-header">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h1 class="mb-0">{{ $titulo }}</h1>
            </div>
            <div class="col-auto">
                <a href="/modelo" class="btn btn-danger">Regresar</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="id">Id</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $modelo->id) }}" readonly>
            </div>
            <div class="col">
                <label for="descripcion">Descripcion</label>
                <input class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" type="text" name="descripcion" value="{{ old('descripcion', $modelo->descripcion) }}">
                @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>