@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="content-wrapper">
       <div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
        <div class="container">
              <h4 class="display-4 text-secondary"><i class="fas fa-hard-hat"></i>Personal</h4>
        
        <div class="row">
          <div class="col">
            <span class="float-right">
               <a href="{{ route('personal.create') }}" class="btn btn-danger"><i class="fas fa-plus"></i></a>
                 <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Descarga"><i class="fas fa-download"></i></button>
            </span>
          </div>
        </div>
       </div>
      </div>
      <div class="container py-3">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                  <table id="dt-basic-checkbox" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 50px;">Id</th>
                        <th scope="col" style="width: 50px;">RPE</th>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Puesto</th>
                        <th scope="col" style="width: 120px;" >Estado</th>
                        <th scope="col" style="width: 100px;" >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <td scope="row">{{ $empleado->id }}</td>
                        <td>{{ $empleado->rpe }}</td>
                        <td>{{ $empleado->nombres }}</td>
                        <td>{{ $empleado->apellido_paterno }}</td>
                        <td>{{ $empleado->apellido_materno }}</td>
                        <td>{{ $empleado->puesto->descripcion }}</td>
                        <td>{{ $empleado->estado->descripcion }}</td>
                        <td><a href="{{ route('personal.edit', $empleado) }}" class="btn btn-outline-info btn-sm">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
 </div>
</div>

@endsection