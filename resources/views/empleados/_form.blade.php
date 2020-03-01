@csrf
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-auto">
                <h2 class="mb-0">Personal/ <small class="text-muted">{{$titulo }}</small></h2>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-2 ">
                <label for="id">Id:</label>
                <input class="form-control" type="text" name="id" id="id" value="{{ old('id', $empleado->id) }}" readonly>
            </div>
            <div class="form-group col-3 ">
                <label for="rpe">RPE:</label>
                <input class="form-control @error('rpe') is-invalid @enderror" id="rpe" type="text" name="rpe" value="{{ old('rpe', $empleado->rpe) }}">
                @error('rpe')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12">
                <h4>Datos del empleado</h4>
            </div>
            <div class="form-group col-5 ">
                <label for="nombres">Nombre(s):</label>
                <input class="form-control @error('nombres') is-invalid @enderror" id="nombres" type="text" name="nombres" value="{{ old('nombres', $empleado->nombres) }}">
                @error('nombres')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-3 ">
                <label for="apellido_paterno">Apellido peterno:</label>
                <input class="form-control @error('apellido_paterno') is-invalid @enderror" id="apellido_paterno" type="text" name="apellido_paterno" value="{{ old('apellido_paterno', $empleado->apellido_paterno) }}">
                @error('apellido_paterno')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-3 ">
                <label for="apellido_materno">Apellido materno:</label>
                <input class="form-control @error('apellido_materno') is-invalid @enderror" id="apellido_materno" type="text" name="apellido_materno" value="{{ old('apellido_materno', $empleado->apellido_materno) }}">
                @error('apellido_materno')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-3 ">
                <label for="puesto_id">Puesto:</label>
                <select id="puesto_id" class="form-control @error('puesto_id') is-invalid @enderror" name="puesto_id">
                    <option value="" @if(old('puesto_id', $empleado->puesto_id) == null) selected @endif>Seleccionar un puesto</option>
                    @foreach ($puestos as $puesto)
                    <option value="{{ $puesto->id }}" @if($puesto->id == old('puesto_id', $empleado->puesto_id)) selected @endif>{{ $puesto->descripcion }}</option>
                    @endforeach
                </select>
                @error('puesto_id')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group col-3 ">
                <label for="estado_id">Estado:</label>
                <select id="estado_id" class="form-control" name="estado_id">
                    @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}" @if($estado->id == old('estado_id', $empleado->estado_id)) selected @endif>{{ $estado->descripcion }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <h4>Usuario del empleado</h4>
            </div>
            <div class="form-group col-6 ">
                <label for="correo_electronico">Correo electrónico:</label>
                <input type="email" class="form-control @error('correo_electronico') is-invalid @enderror" id="correo_electronico" type="text" name="correo_electronico" value="{{ old('correo_electronico', $empleado->correo_electronico) }}">
                @error('correo_electronico')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class=" form-group col-6 ">
                <label for="contraseña">Contraseña:</label>
                <input type="password" class="form-control @error('contraseña') is-invalid @enderror" id="contraseña" type="text" name="contraseña" value="{{ old('contraseña', $empleado->contraseña) }}">
                @error('contraseña')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p align="right"> <a href="{{ route('personal.index') }} " class="btn btn-danger">Regresar</a></p>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">{{ $transaccion }}</button>
            </div>
        </div>
    </div>
</div>