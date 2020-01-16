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


<!-----------------MODALS------------------------------------->     

<!----- Añadir--->
  <div class="modal fade" id="Añadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form>
    <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">ID:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
     
  <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Tipo:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
  </div>
    
  </div>
</form>
  <form>
    <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Marca:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
     
  <div class="form-row">
    <div class="col">
      <label for="inputState">Estado:</label>
      <select id="inputState" class="form-control">
        <option selected>Buen Estado</option>
        <option selected>Mal Estado</option>
        <option selected>Faltante</option>
        <option selected>Indispensable </option>
        <option>...</option>
      </select>
    </div>
    
  </div>
    
  </div>
</form>


          
      </div>
      <div class="modal-footer">
        <label for="inputZip">Foto:</label>
        <a class="btn btn-outline-success" href="/camara" role="button"><i class="fas fa-camera"></i></a>
        <button type="reset" class="btn btn-secondary" value="Reset" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" style="background:#7AB416">Añadir Registro</button>
      </div>
    </div>
  </div>
</div>


<!--- Editar ----->

<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form>
    <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">ID:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
     
  <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Tipo:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
  </div>
    
  </div>
</form>
  <form>
    <div class="form-row">
    <div class="col">
      <label for="recipient-name" class="col-form-label">Marca:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
     
  <div class="form-row">
    <div class="col">
      <label for="inputState">Estado:</label>
      <select id="inputState" class="form-control">
        <option selected>Buen Estado</option>
        <option selected>Mal Estado</option>
        <option selected>Faltante</option>
        <option selected>Indispensable </option>
        <option>...</option>
      </select>
    </div>
    
  </div>
    
  </div>
</form>


          
      </div>
     <div class="modal-footer">
        <label for="inputZip">Foto:</label>
        <a class="btn btn-outline-success" href="/camara" role="button"><i class="fas fa-camera"></i></a>
        <button type="reset" class="btn btn-secondary" value="Reset" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" style="background:#7AB416" data-dismiss="alert">Editar Registro</button>


        
      </div>
    </div>
  </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Advertencia!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de eliminar el registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" style="background:#7AB416">Aceptar</button>
      </div>
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