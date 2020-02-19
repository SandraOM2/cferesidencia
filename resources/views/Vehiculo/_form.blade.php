@csrf
<div class="card">
    <div class="card-header">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h1 class="mb-0">{{ $titulo }}</h1>
            </div>
            <div class="col-auto">
                <a href="/Vehiculo" class="btn btn-danger">Regresar</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="id">Id</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $vehiculo->id) }}" readonly>
            </div>
            <div class="col">
                <label for="numeroEconomico">Numero Economico</label>
                <input class="form-control @error('numeroEconomico') is-invalid @enderror" id="numeroEconomico" type="text" name="numeroEconomico" value="{{ old('numeroEconomico', $vehiculo->numeroEconomico) }}">
                @error('numeroEconomico')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col">
                <label for="marca">Marca</label>
                <input class="form-control @error('marca') is-invalid @enderror" id="marca" type="text" name="marca" value="{{ old('marca', $vehiculo->marca) }}">
                @error('marca')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col">
                <label for="modelo">Modelo</label>
                <input class="form-control @error('modelo') is-invalid @enderror" id="modelo" type="text" name="Modelo" value="{{ old('modelo', $vehiculo->modelo) }}">
                @error('modelo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col">
                <label for="año">Año</label>
                <input class="form-control @error('año') is-invalid @enderror" id="año" type="text" name="año" value="{{ old('año', $vehiculo->año) }}">
                @error('añoñ')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col">
                <label for="estado">Estado</label>
                <input class="form-control @error('estado') is-invalid @enderror" id="estado" type="text" name="estado" value="{{ old('estado', $vehiculo->estado) }}">
                @error('estado')
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