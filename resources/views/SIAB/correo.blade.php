<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      @section('style')
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="{{ asset('public/Css/jquery-ui.css') }}" media="screen">    
          <link rel="stylesheet" href="{{ asset('public/Css/bootstrap.min.css') }}" media="screen">   
          <link rel="stylesheet" href="{{ asset('public/Css/sticky-footer.css') }}" media="screen">    
      @show
      @section('script')
          <script src="{{ asset('public/Js/jquery.js') }}"></script>
          <script src="{{ asset('public/Js/jquery-ui.js') }}"></script>
          <script src="{{ asset('public/Js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('public/Js/main.js') }}"></script>

      @show
  </head>

  <body>
    <center><h3>FELICIDADES, SU REGISTRO HA SIDO EXITOSO!</h3></center>
 <div class="content" id="RUD">
        <div class="content">
            <div style="text-align:center;">
                <h3>Registro Único de Deportistas (RUD)</h3>
            </div>  
            <div class="panel">
                <!-- Default panel contents -->
                <div class="panel-heading">                      </div>                 
                <ul class="list-group" id="seccion_uno" name="seccion_uno">                    
                    <li class="list-group-item">
                        <div class="panel-body">
                            <h4>Información importante!</h4>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail" class="control-label"  id="PerteneceL" >
                                    Su registro se completo de forma exitosa, ahora hace parte de la base de datos del Instituto Distrital de Recreación y Deporte (IDRD). Ha continuación encontrará los enlaces para descargar la resolución y los deberes y obligaciones vigentes a la fecha:
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-12">                            
                                <a href="{{ asset('public/Archivos/Resolucion.pdf') }}">
                                    <label for="inputEmail" class="control-label" id="ResolucionL" >RESOLUCIÓN VIGENTE</label>
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a  href="{{ asset('public/Archivos/Deberes.pdf') }}" download="Deberes">
                                    <label for="inputEmail" class="control-label" id="DeberesL">DEBERES Y OBLIGACIONES</label>
                                </a>
                            </div>
                        <br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  </body>
</html>