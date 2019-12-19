@extends('layouts.app')

@section('content')



<div id="content-wrapper">

      <div class="jumbotron jumbotron-fluid" style="background:#F2F5ED">
  <div class="container">
     <h1 class="display-4 text-secondary" ><i class="fas fa-tasks"></i> Registro </h1>
    
  </div>
</div>

           <div id="content-wrapper">

      <div class="container-fluid">
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
          	<div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                 <i class="fas fa-hard-hat"></i>
                </div>
                <div class="mr-5">RPE:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">145362</span>
                
              </a>
            </div>

          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-truck-monster"></i>
                </div>
                <div class="mr-5">Vehiculo:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">40000</span>
                
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100"data-toggle="modal"  data-target="#Herramientas">
              <div class="card-body">
                <div class="card-body-icon">
                 <i class="fas fa-tools"></i>
                </div>
                <div class="mr-5">Herramienta:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">Registro de Herramienta</span>
                
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
          	<div class="card text-white bg-secondary o-hidden h-100" data-toggle="modal"  data-target="#Observaciones">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="far fa-comments"></i>
                </div>
                <div class="mr-5">Observaciones:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Añadir Observaciones</span>
                
              </a>
            </div>
          </div>          
        </div>

       

<!-- Modal -->
<div class="modal fade" id="Herramientas" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Herramienta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <span class="todo-wrap">
    <input type="checkbox" id="1" >
    <label for="1" class="todo">
      <i class="fa fa-check"></i>
      Cinturón de seguridad
    </label>
    </span>
    <span>
       <i class="fas fa-camera"></i>
    </span>
  <span class="todo-wrap">
    <input type="checkbox" id="2"/>
    <label for="2" class="todo">
      <i class="fa fa-check"></i>
      Guantes dieléctricos clase 3
    </label>
    <span>
       <i class="fas fa-camera"></i>
    </span>
  </span>
  <span class="todo-wrap">
    <input type="checkbox" id="3"/>
    <label for="3" class="todo">
      <i class="fa fa-check"></i>
      Guantes de piel suave para electricista
    </label>
    <span>
       <i class="fas fa-camera"></i>
    </span>
   <!-- <span class="delete-item" title="remove">
      <i class="fa fa-times-circle"></i>
    </span>-->
  </span>
	<span class="todo-wrap">
    <input type="checkbox" id="4"/>
    <label for="4" class="todo">
      <i class="fa fa-check"></i>
      Guantes de piel largo para electricista
    </label>
    <span>
       <i class="fas fa-camera"></i>
    </span>
   <!-- <span class="delete-item" title="remove">
      <i class="fa fa-times-circle"></i>
    </span>-->
  </span>
  <span class="todo-wrap">
    <input type="checkbox" id="5" >
    <label for="5" class="todo">
      <i class="fa fa-check"></i>
      Cinturón de seguridad
    </label>
    <span>
       <i class="fas fa-camera"></i>
    </span>

   <!-- <span class="delete-item" title="remove">
      <i class="fa fa-times-circle"></i>
    </span>-->
  </span>
  <span class="todo-wrap">
    <input type="checkbox" id="6"/>
    <label for="6" class="todo">
      <i class="fa fa-check"></i>
      Guantes dieléctricos clase 3
    </label>
    <span>
       <i class="fas fa-camera"></i>
    </span>
   <!-- <span class="delete-item" title="remove">
      <i class="fa fa-times-circle"></i>
    </span>-->
  </span>
  <span class="todo-wrap">
    <input type="checkbox" id="7"/>
    <label for="7" class="todo">
      <i class="fa fa-check"></i>
      Guantes de piel suave para electricista
    </label>
   <span>
       <i class="fas fa-camera"></i>
    </span>
  </span>
	<span class="todo-wrap">
    <input type="checkbox" id="8"/>
    <label for="8" class="todo">
      <i class="fa fa-check"></i>
      Guantes de piel largo para electricista
      </label>
      <span>
       <i class="fas fa-camera"></i>
    </span>

     
      
     
 <!-- <div id="add-todo">
    <i class="fa fa-plus"></i>
    Agregar Herramienta
  </div>-->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!----------------------------- Observaciones--------------------------->
<div class="modal fade" id="Observaciones" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Observaciones:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="form-group">
    <label for="exampleFormControlTextarea1">....</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>



</div>
@endsection