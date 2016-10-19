@extends('master')

@section('script')
    @parent

    <script src="{{ asset('public/Js/Tecnico/agrupacion.js') }}"></script> 
@stop

@section('content')
    <div id="main_persona" class="row" data-url="{{ url(config('usuarios.prefijo_ruta')) }}"> </div>
    <div class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">AGRUPACION: Configuración de las agrupaciones</h3>
            </div>
            <div class="panel-body">
                
                <div class="row">
                   
                    <div class="col-xs-6 col-sm-8">
                        <div class="form-group">
                            <label class="control-label" for="Id_TipoDocumento">Agrupación</label>
                            <select name="Id_Agrupacion" id="Id_Agrupacion" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($agrupacion as $agrupaciones)
                                    <option value="{{ $agrupaciones['Id'] }}">{{ $agrupaciones['Nombre_Agrupacion'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-xs-6 col-sm-4">
                        <label class="control-label" for="Id_TipoDocumento">Gestionar:</label>
                        <div class="form-group">
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="a_edicar">Editar</button>
                              <button type="button" class="btn btn-default" id="a_eliminar">Eliminar</button>
                              <button type="button" class="btn btn-success" id="a_nuevo">Nuevo</button>
                            </div>
                        </div>
                    </div> 

                </div>




                <div class="alert alert-danger" role="alert" style="display: none"id="div_mensaje">Debe elejir una agrupación.</div>





                <!-- Editar -->
                <div class="row" id="div_editar" style="display: none">
                    <form id="form_edit">
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h3>Editar</h3>
                            </div>
                        </div> 
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Clasificación:</label>
                            <select name="Id_cla" id="Id_cla" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach($clasificacion_deportista as $clasificacion_deportistas)
                                        <option value="{{ $clasificacion_deportistas['Id'] }}">{{ $clasificacion_deportistas['Nombre_Clasificacion_Deportista'] }}</option>
                                    @endforeach
                            </select>
                        </div> 
                        
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Agrupación:</label>
                            <input type="text" class="form-control"  placeholder="Agrupación" id="nom_agrup" name="nom_agrup">
                            <input type="hidden" placeholder="Agrupación" id="id_agrup" name="id_agrup">
                        </div> 
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Acción:</label><br>
                            <button type="button" class="btn btn-primary" id="btn_editar">Modificar</button>
                        </div> 
                    </form>
                    
                </div>





                <!-- Eliminar -->
                <div class="row" id="div_eliminar" style="display: none">
                
                    <div class="col-xs-12">
                        <div class="page-header">
                            <h3>Eliminar</h3>
                        </div>
                    </div> 
                    <div class="col-xs-6 col-sm-8">
                        <label class="control-label" for="label_eliminar">Confirmación:</label>
                        <br><label class="control-label" id="label_eliminar"></label>
                        <input type="hidden" id="id_agrup"></input>
                    </div> 
            
                    <div class="col-xs-6 col-sm-4">
                        <label class="control-label" for="Id_TipoDocumento">Acción:</label><br>
                        <button type="button" class="btn btn-danger" id="btn_eliminar">Eliminar</button>
                    </div> 
                    
                </div>





                <!-- Crear Neuvo -->
                <div class="row" id="div_nuevo" style="display: none">
                    <form id="form_nuevo">
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h3>Crear Agrupación</h3>
                            </div>
                        </div> 
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Clasificación:</label>
                            <select name="Id_Clase" id="Id_Clase" class="form-control">
                                    <option value="">Seleccionar</option>
                                    @foreach($clasificacion_deportista as $clasificacion_deportistas)
                                        <option value="{{ $clasificacion_deportistas['Id'] }}">{{ $clasificacion_deportistas['Nombre_Clasificacion_Deportista'] }}</option>
                                    @endforeach
                            </select>
                        </div> 
                        
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Nom_Agrupacion">Nombre:</label>
                            <input type="text" class="form-control"  placeholder="Agrupación" name="Nom_Agrupacion">
                        </div> 
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Acción:</label><br>
                            <button type="button" class="btn btn-success" id="btn_crear">Crear</button>
                        </div> 
                    </form>  
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-12">
                        </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div  role="alert" style="display: none"id="div_mensaje2"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>		    
    </div>
@stop