@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="content-wrapper">
       <div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
        <div class="container">
              <h4 class="display-4 text-secondary"><i class="fas fa-hard-hat"></i>Puestos</h4>
        
        <div class="row">
          <div class="col">
            <span class="float-right">
               <a href="{{ route('puestos.create') }}" class="btn btn-danger"><i class="fas fa-plus"></i></a>
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
                        <th style="width: 50px;" scope="col">Id</th>
                        <th scope="col">Descripcion</th>
                        <th style="width: 120px;" scope="col">Estado</th>
                        <th style="width: 100px;" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($puestos as $puesto)
                    <tr>
                        <td scope="row">{{ $puesto->id }}</td>
                        <td>{{ $puesto->descripcion }}</td>
                        <td>{{ $puesto->estado->descripcion }}</td>
                        <td><a href="{{ route('puestos.edit', $puesto) }}" class="btn btn-outline-info btn-sm">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
         </div>
       </div>
      </div>
    </div>
</div>

@endsection