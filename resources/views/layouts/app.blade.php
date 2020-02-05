<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Control y Seguimiento</title>
   <link rel="shortcut icon" type="image/x-icon" href="img/logocfe.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


  <link href="{{ asset('css/checklist.css') }}" rel="stylesheet">



  
  
</head>
<body>
    <div id="page-top">
        
             @guest 
             <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
                    <a class="navbar-brand mr-1" href="/home" ><img src="img/logocfe.png" height="40" width="70">
                </a>

             @else    

             <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
                    <a class="navbar-brand mr-1" href="/home" ><img src="img/logocfe.png" height="40" width="70">
                </a>


  <button class="btn btn-success btn-sm text-white order-1 order-sm-0 "  id="sidebarToggle" href="#" >
     <i class="fas fa-bars"></i>
    </button>


@endguest
                 <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->




                        @guest
                            <li class="nav-item" >
                               <a class="nav-link"href="{{ route('login')}}">{{ __('Login') }}</a>
                            </li>
                           
                        @else


        


                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    



                                </div>




                            </li>

                             

                        @endguest


                    </ul>
                </div>
            </div>
        </nav>


        @guest
 <div id="wrapper"></div>
        @else


   <div id="wrapper">

    <!-- Sidebar -->

    <ul class="sidebar navbar-nav" style="background:#056100">
      
   <!-- <li class="nav-item active">
        <a class="nav-link" href="/home">
          <i class="fas fa-hard-hat"></i>
          <span>Personal Operador</span>
        </a>
      </li>-->

      <li class="nav-item active">
        <a class="nav-link" href="/ya">
          <i class="fas fa-hard-hat"></i>
          <span>Personal</span>
        </a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="/yaa">
          <i class="fas fa-tools"></i>
          <span>Herramienta</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/yap">
          <i class="fas fa-truck-monster"></i>
          <span>Vehículos</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/ay">
          <i class="fas fa-clipboard"></i>
          <span>Registro</span>
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="/qr">
          <i class="fas fa-qrcode"></i>
          <span>QR</span>
        </a>
      </li>

    </ul>
        @endguest
            @yield('content')


            <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
        
    </div>
</body>

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
 

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <!------- tabla ---->
  <script src="js/tabla.js"></script>
  <script src="js/check.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>
