@csrf
<div class="card">
    <div class="card-header">
        <h2 class="mb-0">Vehiculo/ <small class="text-muted">{{ $accion }}</small></h2>
    </div>
    <div class="card-body">
        <div class="row">

            <div class="col-2 form-group">
                <label for="id">Id:</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $vehiculo->id) }}" readonly>
            </div>

            <div class="col-3 form-group">
                <label for="numero_economico">Número Económico:</label>
                <input class="form-control @error('numero_economico') is-invalid @enderror" id="numero_economico" type="text" name="numero_economico" value="{{ old('numero_economico', $vehiculo->numero_economico) }}">
                @error('numero_economico')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="w-100"></div>

            <div class="col-3 form-group">
                <label for="marca_id">Marca:</label>
                <select id="marca_id" class="custom-select @error('marca_id') is-invalid @enderror" name="marca_id">
                    <option value="" {{ old('marca_id', $vehiculo->marca_id) == null ? 'selected' : '' }}>Seleccionar una marca</option>
                    @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ $marca->id == old('marca_id', $vehiculo->marca_id) ? 'selected' : '' }}>{{ $marca->descripcion }}</option>
                    @endforeach
                </select>
                @error('marca_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label for="modelo_id">Modelo:</label>
                <select id="modelo_id" class="custom-select @error('modelo_id') is-invalid @enderror" name="modelo_id" {{ old('modelo_id', $vehiculo->modelo_id) != null ? 'data-modelo-id='.old('modelo_id', $vehiculo->modelo_id) : '' }}>
                </select>
                @error('modelo_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-1 form-group">
                <label for="año">Año:</label>
                <input class="form-control @error('año') is-invalid @enderror" id="año" type="numeric" min="1900" value="2020" name="año" value="{{ old('año', $vehiculo->año) }}">
                @error('año')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label for="estado_id">Estado</label>
                <select id="estado_id" class="custom-select" name="estado_id">
                    @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" @if($estado->id == old('estado_id', $vehiculo->estado_id)) selected @endif>{{ $estado->descripcion }}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p align="right"> <a href="{{ route('vehiculos.index') }}" class="btn btn-danger">Regresar</a></p>
            </div>

            <div class="col-auto">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>

<script>
    const iMarca = document.getElementById('marca_id');
    const iModelo = document.getElementById('modelo_id');
    
    document.addEventListener('DOMContentLoaded', () => cargarModelosPorMarca());

    iMarca.addEventListener('change', () => cargarModelosPorMarca());

    function cargarModelosPorMarca() {
        while(iModelo.firstChild) iModelo.removeChild(iModelo.lastChild);
        
        if(iMarca.value) {
            iModelo.disabled = false;
        } else {
            iModelo.disabled = true;
            return;
        }

        let request = new XMLHttpRequest();

        request.open('GET', '/vehiculos/obtener_modelos_por_marca/' + iMarca.value);
        request.onload = () => {
            let modelos = JSON.parse(request.response);

            let oModelo = document.createElement('option');
            oModelo.value = "";
            oModelo.text = 'Selecionar un modelo';

            iModelo.appendChild(oModelo);
                
            modelos.forEach(modelo => {
                let oModelo = document.createElement('option');
                oModelo.value = modelo.id;
                oModelo.text = modelo.descripcion;
                oModelo.selected = iModelo.getAttribute('data-modelo-id') == modelo.id;

                iModelo.appendChild(oModelo);
            });
        }
        request.send();
    }
</script>