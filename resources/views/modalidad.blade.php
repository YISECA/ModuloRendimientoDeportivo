@extends('master')

@section('script')
    @parent

    <script src="{{ asset('public/Js/Tecnico/modalidad.js') }}"></script> 
@stop

@section('content')
    <div class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">MODALIDAD: Configuración de modalidad.</h3>
            </div>
            <div class="panel-body">
                
                <div class="row">
                   
                    <div class="col-xs-6 col-sm-8">
                        <div class="form-group">
                            <label class="control-label" for="Id_TipoDocumento">Modalidad</label>
                            <select name="Id_mdl" id="Id_mdl" class="form-control">
                                <option value="">Seleccionar</option>
                                @foreach($modalidad as $modalidades)
                                    <option value="{{ $modalidades['Id'] }}">{{ $modalidades['Nombre_Modalidad'] }}</option>
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




                <div class="alert alert-danger" role="alert" style="display: none"id="div_mensaje">Debe elejir una modalidad.</div>





                <!-- Editar -->
                <div class="row" id="div_editar" style="display: none">
                    <form id="form_edit">
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h3>Editar</h3>
                            </div>
                        </div> 

                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Deporte:</label>
                            <select name="Id_Dept" id="Id_Dept" class="form-control">
                                     <option value="">Seleccionar</option>
                                    @foreach($deporte as $deportes)
                                        <option value="{{ $deportes['Id'] }}">{{ $deportes['Nombre_Deporte'] }}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Modalidad:</label>
                            <input type="text" class="form-control"  placeholder="Modalidad" id="nom_modl" name="nom_modl">
                            <input type="hidden" placeholder="Deporte" id="id_Mdl" name="id_Mdl">
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
                        <input type="hidden" id="id_deport"></input>
                    </div> 
            
                    <div class="col-xs-6 col-sm-4">
                        <label class="control-label" for="Id_TipoDocumento">Acción:</label><br>
                        <button type="button" class="btn btn-danger" id="btn_eliminar_mdl">Eliminar</button>
                    </div> 
                    
                </div>





                <!-- Crear Neuvo -->
                <div class="row" id="div_nuevo" style="display: none">
                    <form id="form_nuevo">
                        <div class="col-xs-12">
                            <div class="page-header">
                                <h3>Crear Deporte</h3>
                            </div>
                        </div> 
                    
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Deporte:</label>
                            <select name="Id_Deporte" id="Id_Deporte" class="form-control">
                                     <option value="">Seleccionar</option>
                                    @foreach($deporte as $deportes)
                                        <option value="{{ $deportes['Id'] }}">{{ $deportes['Nombre_Deporte'] }}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Nom_Deporte">Nombre modalidad:</label>
                            <input type="text" class="form-control"  placeholder="Modalidad" name="Nom_Modalidad">
                        </div> 
                        <div class="col-xs-6 col-sm-4">
                            <label class="control-label" for="Id_TipoDocumento">Acción:</label><br>
                            <button type="button" class="btn btn-success" id="btn_crear_mdl">Crear</button>
                        </div> 
                    </form>  
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