@extends('layouts.app')

@section('content')

 <div id="content-wrapper">

      <div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
  <div class="container">
     <h1 class="display-4 text-secondary" ><i class="fas fa-clipboard"></i> Registro</h1>
    <div class="row">
    <div class="col">
        <span class="float-right">
    
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
                    <th>Foto</th>
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
                    <th>Foto</th>
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
                    <td><button type="button" class="btn btn-success"><i class="fas fa-camera"></i></button></td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal"  data-target="#Editar"><i class="fas fa-edit"></i></button></td>
                    <td><button type="button" class="btn btn-danger"data-toggle="modal" data-target="#Eliminar"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                  
         
                </tbody>
              </table>
            
        

      </div>        
      </div>
      </div>





<!-- Descarga -->


<div class="modal fade" id="Descarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Descargando Archivo...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:#7AB416">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection