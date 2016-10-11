@extends('master')
@section('script')
  @parent
    <script src="{{ asset('public/Js/buscar_personas.js') }}"></script>     
    <script src="{{ asset('public/Js/SIAB/psico.js') }}"></script>   
    <script src="{{ asset('public/Js/bootstrap-datepicker.js') }}"></script>   
    {{Html::style('public/Css/bootstrap-datepicker3.css')}}   
@stop  
@section('content')
<!-- ------------------------------------------------------------------------------------ -->
<center><h3>VALORACIÓN PSICOSOCIAL</h3></center>
 <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"/>
 <input type="hidden" name="persona" id="persona" value=""/>
 <input type="hidden" name="deportista" id="deportista" value=""/>
    <div id="main_persona" class="row" data-url="{{ url(config('usuarios.prefijo_ruta')) }}">  
        <div class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Buscar persona</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div id="main_persona" class="row" data-url="{{ url(config('usuarios.prefijo_ruta')) }}">
                            <div id="alerta" class="col-xs-12" style="display:none;">
                              <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Datos actualizados satisfactoriamente.
                              </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="input-group">                                        
                                    <input id="buscador" name="buscador" type="text" class="form-control" placeholder="Buscar" value="1032455961" onkeypress="return ValidaCampo(event);">
                                    <span class="input-group-btn">
                                        <button id="buscar" data-role="buscar" data-buscador="buscar" class="btn btn-default" type="button">
                                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                        </button>
                                    </span>
                                </div>
                                <div tabindex="-1" id="mensaje-incorrectoB" class=" text-left alert alert-success alert-danger" role="alert" style="display: none; margin-top: 10px;">                                    
                                    <strong>Error </strong> <span id="mensajeIncorrectoB"></span>
                                </div>
                            </div>
                            <div class="col-xs-12"><br></div>
                                <div class="col-xs-12">
                                    <ul id="personas"></ul>
                                </div>
                                <div id="paginador" class="col-xs-12"></div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ------------------------------------------------------------------------------------ -->
        <div id="camposRegistro" style="display:none;">
            <form id="psico" name="psico" class="panel panel-default">
                <div class="content">
                    <div class="content">
                        <div style="text-align:center;">
                            <h3>Valoración psicosocial</h3>
                        </div>  
                        <div class="panel">
                            <!-- Default panel contents -->
                            <div class="panel-heading">                
                                <div class="bs-callout bs-callout-info">                    
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    <!--<label><h4>SECCIÓN UNO:</h4></label>-->
                                    <label><p>DATOS DE IDENTIFICACIÓN</p></label>                         
                                    <span data-role="ver" id="seccion_uno_ver" class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
                                </div>
                            </div>                 
                            <ul class="list-group" id="seccion_uno" name="seccion_uno">
                               <li class="list-group-item">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="NombresL" >Nombres:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control" placeholder="Nombres" type="text" name="Nombres" id="Nombres">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="ApellidosL">Apellidos:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control" placeholder="Apellidos" type="text" name="Apellidos" id="Apellidos">
                                        </div>
                                    </div>
                                    <br>
                                <!--</li>
                                <li class="list-group-item">-->
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="fechaNacL" >Fecha nacimiento:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="input-group date form-control" id="fechaNacDate" style="border: none;">
                                                <input id="fechaNac" class="form-control " type="text" value="" name="fechaNacL" default="" data-date="" data-behavior="fechaNac">
                                            <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar"></i> </span>
                                            </div>    
                                        </div> 
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="MunicipioNacL">Municipio nacimiento:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control" placeholder="Municipio de nacimiento" type="text" name="MunicipioNac" id="MunicipioNac">
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label"  id="NumeroDocumentoL" >Documento de identidad:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input class="form-control" placeholder="Documento" type="text" name="NumeroDocumento" id="NumeroDocumento">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label"  id="EtniaL" >Grupo étnico:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select name="Etnia" id="Etnia" class="form-control">
                                                <option value="">Seleccionar</option>                                                
                                                @foreach($Etnia as $Etnia)
                                                    <option value="{{ $Etnia['Id_Etnia'] }}">{{ $Etnia['Nombre_Etnia'] }}</option>
                                                @endforeach                           
                                            </select>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label"  id="GeneroL" >Género:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select name="Genero" id="Genero" class="form-control">
                                                <option value="">Seleccionar</option>                                                
                                                @foreach($Genero as $Genero)
                                                    <option value="{{ $Genero['Id_Genero'] }}">{{ $Genero['Nombre_Genero'] }}</option>
                                                @endforeach                           
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="GrupoSanguineoL" >Tipo de sangre:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select name="GrupoSanguineo" id="GrupoSanguineo" class="form-control">
                                                <option value="">Seleccionar</option>
                                                @foreach($GrupoSanguineo as $GrupoSanguineo)
                                                    <option value="{{ $GrupoSanguineo['Id_GrupoSanguineo'] }}">{{ $GrupoSanguineo['Nombre_GrupoSanguineo'] }}</option>
                                                @endforeach                                                           
                                            </select>
                                        </div> 
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="EpsL">Eps:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select name="Eps" id="Eps" class="form-control" style="display:none;">
                                                <option value="">Seleccionar</option>                        
                                                @foreach($Eps as $Eps)
                                                    <option value="{{ $Eps['Id_Eps'] }}">{{ $Eps['Nombre_Eps'] }}</option>
                                                @endforeach                           
                                            </select>
                                            <input class="form-control" placeholder="Discapacidad" type="text" name="Prepagada" id="Prepagada"  style="display:none;">
                                        </div>                      
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="DiscapacidadL">Discapacidad:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input class="form-control" placeholder="Discapacidad" type="text" name="Discapacidad" id="Discapacidad">
                                        </div>                      
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="MunicipioLocL">Ciudad de residencia:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select name="MunicipioLoc" id="MunicipioLoc" class="form-control">
                                                <option value="">Seleccionar</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="DireccionL" >Dirección :</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input class="form-control" placeholder="Dirección de donde reside" type="text" name="Direccion" id="Direccion">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="EstratoL" >Estrato:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <select name="Estrato" id="Estrato" class="form-control">
                                                <option value="">Seleccionar</option>  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="FijoContactoL" >Teléfono Fijo:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control" placeholder="Télefono Fijo del contacto" type="text" name="FijoContacto" id="FijoContacto">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="CelularContactoL" >Teléfono Celular:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input class="form-control" placeholder="Télefono celular del contacto" type="text" name="CelularContacto" id="CelularContacto">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="CorreoL" >Correo electrónico:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input class="form-control" placeholder="Correo electrónico" type="text" name="Correo" id="Correo">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="PasaporteL" >Número de pasaporte:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input class="form-control" placeholder="Número de pasaporte" type="text" name="Pasaporte" id="Pasaporte">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputEmail" class="control-label" id="FechaVigenciaPasaporteL">Vigencia:</label>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="input-group date form-control" id="FechaVigenciaPasaporteDate" style="border: none;">
                                                <input id="FechaVigenciaPasaporte" class="form-control " type="text" value="" name="FechaVigenciaPasaporteL" default="" data-date="" data-behavior="FechaVigenciaPasaporte">
                                            <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar"></i> </span>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="LibretaPregL" >Situación militar resuelta:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select name="LibretaPreg" id="LibretaPreg" class="form-control">
                                                <option value="">Seleccionar</option>                  
                                                <option value="1">Si</option>                  
                                                <option value="2">No</option>                  
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="LibretaPorqueL" >Por qué?:</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <textarea class="form-control" placeholder="Por qué?" name="LibretaPorque" id="LibretaPorque"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="inputEmail" class="control-label" id="DesplazamientoPregL" >Descripción o consecuencia:</label>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <textarea class="form-control" placeholder="Descripción o consecuencia del desplazamiento" name="DesplazamientoPreg" id="DesplazamientoPreg"></textarea>
                                        </div>
                                    </div>
                                </li>
                            </ul>                            
                        </div>
                        <!-- ------------------------------------------SECCION DOS---------------------------------------- -->
                        <div class="panel-heading">                
                            <div class="bs-callout bs-callout-info">                    
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <label><p>DATOS DEPORTIVOS</p></label>                         
                                <span data-role="ver" id="seccion_dos_ver" class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>
                            </div>
                        </div>                 
                        <ul class="list-group" id="seccion_dos" name="seccion_dos">
                           <li class="list-group-item">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail" class="control-label"  id="DeporteL" >Deporte:</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <select name="Deporte" id="Deporte" class="form-control">
                                            <option value="">Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail" class="control-label"  id="ModalidadL" >Modalidad:</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <select name="Modalidad" id="Modalidad" class="form-control">
                                            <option value="">Seleccionar</option>                                
                                        </select>
                                    </div>
                                </div>
                                <br>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail" class="control-label"  id="ClubL" >Club deportivo:</label>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <select name="Club" id="Club" class="form-control">
                                            <option value="">Seleccionar</option>                     
                                        </select>
                                    </div>                           
                                </div>
                                <br>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail" class="control-label"  id="EdadPregL" >A que edad comenzo a practicar este deporte:</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input class="form-control" placeholder="Edad en la que inicio en el deporte" type="text" name="EdadPreg" id="EdadPreg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail" class="control-label"  id="PracticaPregL" >Cuantos años lleva practicándolo:</label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input class="form-control" placeholder="Edad en la que inicio en el deporte" type="text" name="PracticaPreg" id="PracticaPreg">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop