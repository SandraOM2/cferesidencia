@extends('layouts.app')

@section('content')

  

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">

<body>



<div class="container">

  <div class="app">

    <a href="#" id="start-camera" class="visible"></a>
    <video id="camera-stream"></video>
    <img id="snap">

    <p id="error-message"></p>

    <div class="controls">
      <a href="#" id="delete-photo" title="Delete Photo" class="disabled"><i class="material-icons">delete</i></a>
      <a href="#" id="take-photo" title="Take Photo"><i class="material-icons">camera_alt</i></a>
      <a href="#" id="download-photo" download="selfie.png" title="Save Photo" class="disabled"><i class="material-icons">file_download</i></a>  
    </div>

    <!-- Hidden canvas element. Used for taking snapshot of video. -->
    <canvas></canvas>

  </div>

</div>


<script src="assets/js/script.js"></script>

</body>

@endsection