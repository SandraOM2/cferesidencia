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
                <div class="mr-5">No. Económico:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">40000</span>
                
              </a>
            </div>
          </div>
          
          <div class="col-xl-3 col-sm-6 mb-3">
          	<div class="card text-white bg-secondary o-hidden h-100" data-toggle="modal"  data-target="#Trimestre">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-calendar-week"></i>
                </div>
                <div class="mr-5">Trimestre:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1">
                <span class="float-left">1</span>
                
              </a>
            </div>
          </div>  
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100" href="/her">
              <div class="card-body">
                <div class="card-body-icon">
                 <i class="fas fa-tools"></i>
                </div>
                <div class="mr-5">Herramienta:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/her">
                <span class="float-left">Registro de Herramienta</span>
                
              </a>
            </div>
          </div>
                  
        </div>




<!----------------------------- Trimestre--------------------------->
<!--<div class="modal fade" id="Trimestre" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="static">
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
    <input type="range" class="custom-range" min="1" max="3" step="0.5" id="customRange3">
  </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>-->



</div>
@endsection