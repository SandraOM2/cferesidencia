@extends('layouts.app')

@section('content')



 <div id="content-wrapper">

      <div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
  <div class="container">
     <h1 class="display-4 text-secondary" ><i class="fas fa-tools"></i> Herramienta</h1>
    <div class="row">
    <div class="col">
        <span class="float-right">
    <button type="button" class="btn btn-secondary" data-toggle="modal"  data-target="#Añadir"><i class="fas fa-plus"></i></button>
    <!--<button type="button" class="btn btn-secondary"data-toggle="modal"  data-target="#Editar"><i class="fas fa-edit"></i></button>
    <button type="button" class="btn btn-secondary"data-toggle="modal" data-target="#Eliminar"><i class="fas fa-trash-alt"></i></button>-->
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Descarga"><i class="fas fa-download"></i></button>
        </span>




    </div>
</div>
    
  </div>
</div>

        <!-- DataTables Example -->
        
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table id="dt-basic-checkbox" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th></th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1234</td>
                    <td>cable</td>
                    <td>rrrr</td>
                    <td>bueno</td>
                    <td>ninguna</td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal"  data-target="#Editar"><i class="fas fa-edit"></i></button></td>
                    <td><button type="button" class="btn btn-danger"data-toggle="modal" data-target="#Eliminar"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                  
         
                </tbody>
              </table>
            
        

      </div>        
      </div>
      </div>


<!-----------------MODALS------------------------------------->     


@include('Herramienta.addh')
@include('Herramienta.edith')

@include('modal.modal-descarga')
@include('modal.modal-eliminar')

@endsection