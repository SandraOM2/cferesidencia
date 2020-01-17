@extends('layouts.app')

@section('content')


<div id="content-wrapper">

      <!-- DataTables Example -->

<div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead class="table-success">
                  <tr>
                    <th>Equipo de Seguridad</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Obcervaciones</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                  <tr >
                    <td>Cinturon de Seguridad</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                    <td><a class="btn btn-success" href="/camara" role="button"><i class="fas fa-camera"></i></a></td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal" data-target="#Obcervaciones"><i class="fas fa-comment-dots"></i></button></td>
                    </tr>
                    
                </tbody>

                <thead class="table-success">
                  <tr>
                    <th>Herramienta Menor</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Obcervaciones</th>
                    
                  </tr>
                </thead>

               <tr >
                    <td>Broca</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                    <td><a class="btn btn-success" href="/camara" role="button"><i class="fas fa-camera"></i></a></td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal" data-target="#Obcervaciones"><i class="fas fa-comment-dots"></i></button></td>
                    </tr>
                
                <tbody>
                  
                </tbody>

                <thead class="table-success">
                  <tr>
                    <th>Herramienta Especializada</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Obcervaciones</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                 <tr >
                    <td>Escalera de Fibra de Vidrio</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                    <td><a class="btn btn-success" href="/camara" role="button"><i class="fas fa-camera"></i></a></td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal" data-target="#Obcervaciones"><i class="fas fa-comment-dots"></i></button></td>
                    </tr>
                  
                </tbody>

                <thead class="table-success">
                  <tr>
                    <th>Equipo de Peueba</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Obcervaciones</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                 <tr >
                    <td>Probador de transformador</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>   
                        </select></td>
                    <td><a class="btn btn-success" href="/camara" role="button"><i class="fas fa-camera"></i></a></td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal" data-target="#Obcervaciones"><i class="fas fa-comment-dots"></i></button></td>
                    </tr>
                  
                </tbody>


                <thead class="table-success">
                  <tr>
                    <th>Accesorios</th>
                    <th>Estado</th>
                    <th>Foto</th>
                    <th>Obcervaciones</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                 <tr >
                    <td>Cámara Forográfica</td>
                    <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>...</option>
                          <option value="1">B</option>
                          <option value="2">M</option>
                          <option value="3">F</option>
                          <option value="4">X</option>                       

                        </select></td>
                    <td><a class="btn btn-success" href="/camara" role="button"><i class="fas fa-camera"></i></a></td>
                    <td><button type="button" class="btn btn-info"data-toggle="modal" data-target="#Obcervaciones"><i class="fas fa-comment-dots"></i></button></td>
                    </tr>
                  
                </tbody>


              </table>


              </table>


              </table>

              <div align="right">
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
@endsection