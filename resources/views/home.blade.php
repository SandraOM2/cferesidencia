@extends('layouts.app')

@section('content')
    <!-- dashboard-->

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" ><center><img src="img/inge3.png" height="150" width="150" data-toggle="modal"  data-target="#Revisar"></center></div><center>
                                        <div class="comp-tl">
                                            <h2>Nombre: Sandra</h2>
                                            <p>RPE: 14562</p>
                                            <p>Puesto: Departamento CCC</p>
                                          </div>
                                    </div>
                                     </center>
                                   </div>
                                 </div>
                               </div>
                               <div></div>
                               <span></span>

        <!-- Icon Cards-->
        <br></br>
        <span></span>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3"></div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                 <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="mr-5">Odometro:</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/camara">
                <span class="float-left">Inicio</span>
                
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="mr-5">Odometro : </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/camara">
                <span class="float-left">Fin</span>
                
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3"></div>          
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Fecha</th>
                    <th>Veh&iacuteculo</th>
                    <th>Hora de entrada</th>
                    <th>Hora de salida</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>14-09-2019</td>
                    <td>44567</td>
                    <td>10:00am</td>
                    <td>6:00pm</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
          
        </div>

      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal" id="Revisar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Inspección de Vehiculos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

   <table class="table table-borderless" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Características</th>
                    <th>Cumple</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Estado de las llantas</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch1"><label class="custom-control-label" for="customSwitch1"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Presión de las llantas</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch2"><label class="custom-control-label" for="customSwitch2"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Cinturanes de Seguridad</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch3"><label class="custom-control-label" for="customSwitch3"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
     <!------ --->               <td>Luces</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch4"><label class="custom-control-label" for="customSwitch4"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Estado de Cristales</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch5"><label class="custom-control-label" for="customSwitch5"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Limpia parabisas</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch6"><label class="custom-control-label" for="customSwitch6"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Claxon</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch7"><label class="custom-control-label" for="customSwitch7"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Aceite</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch8"><label class="custom-control-label" for="customSwitch8"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Agua</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch9"><label class="custom-control-label" for="customSwitch9"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Frenos</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch10"><label class="custom-control-label" for="customSwitch10"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Llanta de ref. - Gato</td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch11"><label class="custom-control-label" for="customSwitch11"></label></div></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>Extintor - Botiquin </td>
                    <td><div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="customSwitch12"><label class="custom-control-label" for="customSwitch12"></label></div></td>
                  </tr>
                </tbody>
              </table>
            
            
        


      </div>
      <div class="modal-footer">
        <p> <a class="btn btn-danger" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Obcervaciones  </a>

          <div class="collapse" id="collapseExample">
             <div class="card text-center">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
        </div>
         </p>


      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="/her"><button type="button" class="btn btn-success" >Guardar</button></a>
      </div>
    </div>
  </div>
</div>


</div>



@endsection
