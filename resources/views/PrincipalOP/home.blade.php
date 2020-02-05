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

 @include('PrincipalOP.estadoVh')
 


@endsection
