@extends('layouts.app')
@section('content')
<div id="content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">RPE: 143289</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link">Vehiculo:4567</a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
    <span class="navbar-text">
      
    </span>
  </div>
</nav>

      <!-- DataTables Example -->

<div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="table-success">
                  <tr>
                    <th></th>
                    <th>Herramienta</th>                    
                  </tr>
                </thead>
                
                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>

                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>
                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>
                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>
                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>
                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>
                <tbody>
                  <tr >
                    <td><div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                       <label class="custom-control-label" for="customSwitch2"></label>
                    </div></td>
                    <td>Cinturon de seguridad </td>
                    </tr>
                    
                </tbody>


                
              </table>



              <div align="right">
             <a class="btn btn-outline-success" href="/camara" role="button"><i class="fas fa-camera"></i></a>
             <button type="button" class="btn btn-secondary" style="background: #989C99">Cancelar</button>
             <button type="button" class="btn btn-success" style="background:#7AB416">Guardar</button>
            </div>


        



      </div>



      <!-- imagen -->
<div class="modal fade" id="Obcervaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Obcervaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form>
   
   <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>


          
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" value="Reset" data-dismiss="modal">Cancelar</button>
        <a href="/"><button type="button" class="btn btn-primary" style="background:#7AB416">Guardar</button></a>
      </div>
    </div>
  </div>
</div>
@endsection