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


<!-- ana banana-->

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
                    <th>RPE</th>
                    <th>No. Económico</th>
                    <th>Descripción</th>
                    <th>Herramienta</th>
                    <th>Trimestre</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th>Foto</th>
                    <th>Fecha</th>
                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>RPE</th>
                    <th>No. Económico</th>
                    <th>Descripción</th>
                    <th>Herramienta</th>
                    <th>Trimestre</th>
                    <th>Estado</th>
                    <th>Observaciones</th>
                    <th>Foto</th>
                    <th>Fecha</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1234</td>
                    <td>1902</td>
                    <td>ES</td>
                    <td>Cinturon de seguridad</td>
                    <td>1</td>
                    <td>B</td>
                    <td>N/A</td>
                    <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#photo"><i class="fas fa-image"></i></button></td>
                    <td>14-05-20</td>
                   
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

<!-- imagen -->
<div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <picture>
            <source srcset="/img/cfe.png" type="image/svg+xml">
            <img src="/img/cfe.png" class="img-fluid img-thumbnail" alt="/img/tools.png">
            </picture>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:#7AB416">Aceptar</button>
      </div>
    </div>
  </div>
</div>


</div>
@endsection