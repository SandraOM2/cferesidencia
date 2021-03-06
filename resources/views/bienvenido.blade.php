<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Control y Seguimiento</title>
         <link rel="shortcut icon" type="image/x-icon" href="img/logocfe.png"> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="fontawesome\css\all.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F1F7E5;
                color: #6FA70D;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color:  #6FA70D;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ route('tablero.graficas') }}">Inicio</a>
                    @else
                    <a href="{{ route('login') }}">
                        <i class="fas fa-user-circle"></i>
                        Login
                    </a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="img/logocfe.png" height="150" width="370">
                <div class="title m-b-md">
                    Control y Seguimiento
                </div>
            </div>
        </div>
        
    </body>
</html>