@extends('layouts.app')

@section('content')


<div id="content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <form class="form-inline">
  <div class="form-row">
    
  <div class="form-group mx-sm-3 mb-2">
  	<a class="navbar-brand">N° Económico</a>
    <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
  </div>
</form>
</nav>

      <!-- DataTables Example -->

<div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="table-success">
                  <tr>
                  	<th></th>
                    <th>Equipo de Seguridad</th>
                    <th>Estado</th>
                    
                    
                  </tr>
                </thead>
                
                <tbody>
                  <tr >
                  	<td><div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch2">
  <label class="custom-control-label" for="customSwitch2"></label>
</div></td>
                    <td>Cinturon de Seguridad</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                   </tr>
                    
                </tbody>

                <thead class="table-success">
                  <tr>
                  	<th></th>
                    <th>Herramienta Menor</th>
                    <th>Estado</th>
                    
                    
                  </tr>
                </thead>

               <tr >
               		<td><div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch3">
  <label class="custom-control-label" for="customSwitch3"></label>
</div></td>
                    <td>Broca</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                   
                    </tr>
                
                <tbody>
                  
                </tbody>

                <thead class="table-success">
                  <tr>
                  	<th></th>
                    <th>Herramienta Especializada</th>
                    <th>Estado</th>
                    
                    
                  </tr>
                </thead>
                
                <tbody>
                 <tr >
                 	<td><div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch4">
  <label class="custom-control-label" for="customSwitch4"></label>
</div></td>
                    <td>Escalera de Fibra de Vidrio</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                    
                    </tr>
                  
                </tbody>

                <thead class="table-success">
                  <tr>
                  	<th></th>
                    <th>Equipo de Peueba</th>
                    <th>Estado</th>
                    
                    
                  </tr>
                </thead>
                
                <tbody>
                 <tr >
                 <td><div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch5">
  <label class="custom-control-label" for="customSwitch5"></label>
</div></td>
                    <td>Probador de transformador</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                    
                    </tr>
                  
                </tbody>


                <thead class="table-success">
                  <tr>
                  	<th></th>
                    <th>Accesorios</th>
                    <th>Estado</th>
                    
                    
                  </tr>
                </thead>
                
                <tbody>
                 <tr >
 <td><div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1">
  <label class="custom-control-label" for="customSwitch1"></label>
</div></td>
                    <td>Cámara Forográfica</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>                       

                        </select></td>
                    
                    </tr>
                  
                </tbody>


              </table>


              </table>


              </table>

              <div align="right">
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#photo"><i class="fas fa-qrcode"></i></button>
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
        <button type="button" class="btn btn-primary" style="background:#7AB416">Guardar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="visible-print text-center">
  {!! QrCode::size(100)->generate(Request::url('http://cferesidencia.test/her')); !!}
  <p>Escanéame para volver a la página principal.</p>

</div>
      
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background:#7AB416">Aceptar</button>
      </div>
    </div>
  </div>
</div>



@endsection