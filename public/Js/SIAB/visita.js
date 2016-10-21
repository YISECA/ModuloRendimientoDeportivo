var miembros = new Array();
$(function(e){

	$("#Registrar").on('click', function(){		
		registro('AddVisita');
	});   

	function registro (url){	
        var token = $("#token").val();
        var formData = new FormData($("#visitaF")[0]);
        var json_miembros = JSON.stringify(miembros);        
        formData.append("vector_miembros",json_miembros);
        
        $.ajax({
            url: url,  
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (xhr) {
            	$('#alert_actividad').html('<div class="alert alert-dismissible alert-success" ><strong>Exito!</strong>'+xhr.Mensaje+'</div>');
      				$('#mensaje_actividad').show(60);
      				$('#mensaje_actividad').delay(2000).hide(600);				
      				Reset_campos();
            },
            error: function (xhr){
              validador_errores(xhr.responseJSON);
            }
        });
	}

	var validador_errores = function(data){
    $('#visitaF .form-group').removeClass('has-error');
    VerCampos();

    $.each(data, function(i, e){
      $("#"+i).closest('.form-group').addClass('has-error');
        $("input[name="+i+"]").closest('.form-group').addClass('has-error');   
         if(i == 'op4'){ $("#p4o1").closest('.form-group').addClass('has-error'); }
         if(i == 'op5'){ $("#p5o1").closest('.form-group').addClass('has-error'); }
         if(i == 'op6'){ $("#p6o1").closest('.form-group').addClass('has-error'); }
         if(i == 'op7'){ $("#p7o1").closest('.form-group').addClass('has-error'); }
      });

    if(miembros.length == 0){
        $("input[name=NombreMiembro]").closest('.form-group').addClass('has-error');
        $("input[name=ParentescoMiembro]").closest('.form-group').addClass('has-error');
        $("input[name=NombreSubsidiado]").closest('.form-group').addClass('has-error');
        $("input[name=NombreContributivo]").closest('.form-group').addClass('has-error');
        $("input[name=NumAfiliados]").closest('.form-group').addClass('has-error');
        $("input[name=Enfermedades]").closest('.form-group').addClass('has-error');
        $("input[name=Discapacidades]").closest('.form-group').addClass('has-error');
        return false;
    }
	}

  $("#Add_Salud").on('click', function(){
    $("input[name=NombreMiembro]").css({'border-color': '#CCCCCC'});
    $("input[name=ParentescoMiembro]").css({'border-color': '#CCCCCC'});
    $("input[name=NombreSubsidiado]").css({'border-color': '#CCCCCC'});
    $("input[name=NombreContributivo]").css({'border-color': '#CCCCCC'});
    $("input[name=NumAfiliados]").css({'border-color': '#CCCCCC'});
    $("input[name=Enfermedades]").css({'border-color': '#CCCCCC'});
    $("input[name=Discapacidades]").css({'border-color': '#CCCCCC'});

    NombreMiembro = $("#NombreMiembro").val();
    ParentescoMiembro = $("#ParentescoMiembro").val();
    NombreSubsidiado= $("#NombreSubsidiado").val();
    NombreContributivo = $("#NombreContributivo").val();
    NumAfiliados = $("#NumAfiliados").val();
    Enfermedades = $("#Enfermedades").val();
    Discapacidades = $("#Discapacidades").val();   

   
    if(NombreMiembro == '' || ParentescoMiembro == '' || NombreSubsidiado == '' || NombreContributivo == ''|| NumAfiliados == '' || Enfermedades == '' || Discapacidades == ''){
      if(NombreMiembro == ''){ $("#NombreMiembro").css({ 'border-color': '#B94A48' });}
      if(ParentescoMiembro == ''){ $("#ParentescoMiembro").css({ 'border-color': '#B94A48' });}
      if(NombreSubsidiado == ''){ $("#NombreSubsidiado").css({ 'border-color': '#B94A48' });}
      if(NombreContributivo == ''){ $("#NombreContributivo").css({ 'border-color': '#B94A48' });}
      if(NumAfiliados == ''){ $("#NumAfiliados").css({ 'border-color': '#B94A48' });}
      if(Enfermedades == ''){ $("#Enfermedades").css({ 'border-color': '#B94A48' });}
      if(Discapacidades == ''){ $("#Discapacidades").css({ 'border-color': '#B94A48' });}
      return false;
    }
    miembros.push({ "NombreMiembro": NombreMiembro, "ParentescoMiembro": ParentescoMiembro, "NombreSubsidiado": NombreSubsidiado, 
                    "NombreContributivo": NombreContributivo, "NumAfiliados": NumAfiliados, "Enfermedades": Enfermedades, "Discapacidades": Discapacidades, });
    $('#alert_miembro').html('<div class="alert alert-dismissible alert-success" ><strong>Exito!</strong>Ítem de salud familiar agregado con éxito!</div>');
    $('#mensaje_miembro').show(60);
    $('#mensaje_miembro').delay(1000).hide(400);     

    $("#NombreMiembro").val('');
    $("#ParentescoMiembro").val('');
    $("#NombreSubsidiado").val('');
    $("#NombreContributivo").val('');
    $("#NumAfiliados").val('');
    $("#Enfermedades").val('');
    $("#Discapacidades").val('');   

    $("#MiembrosT").empty();
    tabla = '<table class="table table-bordered" style="background-color:#E8F8FC; border-color:#CEECF5;">'+
                '<th>Miembros de la familia afiliados a salud(nombre-parentesco)</th>'+
                '<th>Rég subsidiado</th>'+
                '<th>Rég contributivo</th>'+
                '<th>N° afiliados a salud</th>'+
                '<th>Enfermedades</th>'+
                '<th>Discapacidades</th>'
                ;

    $.each(miembros, function(i, e){      
      tabla += '<tr>'+
                  '<td>'+e.NombreMiembro+' - '+e.ParentescoMiembro+'</td>'+
                  '<td>'+e.NombreSubsidiado+'</td>'+
                  '<td>'+e.NombreContributivo+'</td>'+
                  '<td>'+e.NumAfiliados+'</td>'+
                  '<td>'+e.Enfermedades+'</td>'+
                  '<td>'+e.Discapacidades+'</td>'+
                '</tr>';                

    });
    tabla += '</table>';
    $("#MiembrosT").append(tabla);
  });

	$("input[name='op2']").on('change', function(){
		var valor = $('input[name="op2"]:checked').val();
		if(valor == 'Propia'){
			$("#OP2o1").show('slow');
		}else{
			$("#OP2o1").hide('slow');
		}
	});

	$("#p6o5").on('change', function(){
		if($(this).is(':checked')){$("#OP6o5").show('slow');
	   	}else{ $("#OP6o5").hide('slow');}
	});	

	$("#p6o6").on('change', function(){
		if($(this).is(':checked')){$("#OP6o6").show('slow');
	   	}else{ $("#OP6o6").hide('slow');}
	});


	$('input[name="op13"]').change(function(){  Checkeds('p13o4','OP13o4' ); });

	$('#FechaIntervencion').datepicker({format: 'yyyy-mm-dd', autoclose: true,});

	function Checkeds(nombre, otro){
		var valor = $("#"+nombre).is(":checked");
		if(valor == true){ $("#"+otro).show('slow'); }else{ $("#"+otro).hide('slow');}
	}

});


function Buscar(e){	
	var key = $('input[name="buscador"]').val(); 
  $.get('personaBuscarDeportista/'+key,{}, function(data){  
      if(data.length > 0){ //Existe la persona       	        
      	$.each(data, function(i, e){
        	$.get("deportista/" + e['Id_Persona'] + "", function (responseDep) { 

            if(responseDep.deportista){//Existe Deportista
              Deportista(responseDep.deportista, data[0]);
              console.log(responseDep);

              if(((responseDep.deportista.deportista_visita).length) != 0 ){//Existe visita
                VisitaCampos(responseDep.deportista.deportista_visita[0]);
                $("#camposRegistro").show('slow');
                $("#Registrar").hide('slow');
                $("#Add_Salud").hide('slow');
                $('#Li1').hide('slow');
                $('#Li2').hide('slow');
                VerCampos();
                
              }else{        
                $("#camposRegistro").show('slow');
                $("#Registrar").show('slow'); 
                $("#Add_Salud").show('slow');
                $('#Li1').show('slow');
                $('#Li2').show('slow');
                OcultarCampos();                  
              }
            }else{
              $('#buscar span').removeClass('glyphicon-refresh glyphicon-refresh-animate').addClass('glyphicon-remove');
              $('#buscar span').empty();
              document.getElementById("buscar").disabled = false;
              $('#personas').html( '<li class="list-group-item" style="border:0"><div class="row"><h4 class="list-group-item-heading">Esta persona aún no se encuentra registrada como deportista, registrela en el RUD, para continuar con el procedimiento.</h4></dvi><br>');
              $('#paginador').fadeOut();
            }
          });
        });
      }else{
        $('#buscar span').removeClass('glyphicon-refresh glyphicon-refresh-animate').addClass('glyphicon-remove');
        $('#buscar span').empty();
        document.getElementById("buscar").disabled = false;
        $('#personas').html( '<li class="list-group-item" style="border:0"><div class="row"><h4 class="list-group-item-heading">No se encuentra ninguna persona registrada con estos datos</h4></dvi><br>');
        $('#paginador').fadeOut();
      }
    }).done(function(){
      setTimeout(function(){ 
        $('#buscar span').removeClass('glyphicon-refresh glyphicon-refresh-animate').addClass('glyphicon-remove');
        $('#buscar span').empty();
        document.getElementById("buscar").disabled = false;   
      }, 1500);      
    });           	
}

function Deportista (Deportista, Persona){
  $("#persona").val(Persona['Id_Persona']);         
  $("#deportista").val(Deportista['Id']);         
  $("#Deportista").val(Persona['Primer_Nombre']+' '+Persona['Segundo_Nombre']+' '+Persona['Primer_Apellido']+' '+Persona['Segundo_Apellido']);  
  $.get("getDeportistaDeporte/" + Deportista['Id'] + "", function (DeportistaDeporte) {  
    $("#Deporte").val(DeportistaDeporte['Deporte_Id']);
  });
}

function VisitaCampos (VisitaInfo){
  $("#FechaIntervencion").val(VisitaInfo["Fecha_Intervencion"]);
  $("#NombresAtiende").val(VisitaInfo["Nombres_Receptor"]);
  $("#ApellidosAtiende").val(VisitaInfo["Apellidos_Receptor"]);
  $("#DocumentoAtiende").val(VisitaInfo["Documento_Receptor"]);
  $('[name=op1][value="'+VisitaInfo["Vivienda"]+'"]').prop('checked',true).change();
  $('[name=op2][value="'+VisitaInfo["Tipo_Vivienda"]+'"]').prop('checked',true).change();
  $('[name=op2o1][value="'+VisitaInfo["Tipo_Vivienda_Propia"]+'"]').prop('checked',true).change();  
  $("#p3").val(VisitaInfo["Tiempo_Vivienda"]);
  $("#Habitacion").val(VisitaInfo["Total_Habitaciones"]);
  $("#Bano").val(VisitaInfo["Total_Banos"]);
  $("#Cocina").val(VisitaInfo["Total_Cocinas"]);
  $("#Sala").val(VisitaInfo["Total_Salas"]);
  $("#Comedor").val(VisitaInfo["Total_Comedores"]);
  $("#ZRopas").val(VisitaInfo["Total_Ropas"]);
  $("#OtrosDistribucion").val(VisitaInfo["Otros_Distribucion"]);
  $("#Camas").val(VisitaInfo["Total_Camas"]);
  $("#Closets").val(VisitaInfo["Total_Closets"]);
  $("#Televisor").val(VisitaInfo["Total_Televisores"]);
  $("#Nevera").val(VisitaInfo["Total_Neveras"]);
  $("#Estufa").val(VisitaInfo["Total_Estufas"]);
  $("#OtrosMuebles").val(VisitaInfo["Otros_Muebles"]);
  $("#").val(VisitaInfo[""]);
  $('[name=op8][value="'+VisitaInfo["Aseo"]+'"]').prop('checked',true).change();
  $('[name=op9][value="'+VisitaInfo["Organizacion"]+'"]').prop('checked',true).change();
  $('[name=op10][value="'+VisitaInfo["Iluminacion"]+'"]').prop('checked',true).change();
  $('[name=op11][value="'+VisitaInfo["Ventilacion"]+'"]').prop('checked',true).change();
  $('[name=op12][value="'+VisitaInfo["Condiciones_Vivienda"]+'"]').prop('checked',true).change();  
  $('[name=op13][value="'+VisitaInfo["Tipo_Ingreso"]+'"]').prop('checked',true).change();  
  $('[name=op14][value="'+VisitaInfo["Deudas"]+'"]').prop('checked',true).change();  
  $("#otro13o4").val(VisitaInfo["Otro_Ingreso"]);
  $("#TotalIngreso").val(VisitaInfo["Tipo_Ingreso"]);
  $("#Alimentacion").val(VisitaInfo["Egreso_Alimentacion"]);
  $("#Arriendo").val(VisitaInfo["Egreso_Arriendo"]);
  $("#Educacion").val(VisitaInfo["Egreso_Educacion"]);
  $("#CuotaV").val(VisitaInfo["Egreso_Cuota_Vivienda"]);
  $("#Salud").val(VisitaInfo["Egreso_Salud"]);
  $("#Recreacion").val(VisitaInfo["Egreso_Recreacion"]);
  $("#Servicios").val(VisitaInfo["Egreso_Servicios"]);
  $("#Transporte").val(VisitaInfo["Egreso_Transporte"]);
  $("#Adeudan").val(VisitaInfo["Deudas_Quien"]);
  $("#MontoEgresos").val(VisitaInfo["Total_Egresos"]);
  $("#MontoDeudas").val(VisitaInfo["Total_Deudas"]);
  $('[name=op15][value="'+VisitaInfo["Situacion_Economica"]+'"]').prop('checked',true).change();
  $("#PracticasDeportivas").val(VisitaInfo["Practicas_Deportivas"]);
  $("#JuegosFamiliares").val(VisitaInfo["Juegos_Familiares"]);
  $("#SalidasPublicos").val(VisitaInfo["Salidas_Publicas"]);
  $("#Quehaceres").val(VisitaInfo["Quehaceres"]);
  $("#ActividadesLibre").val(VisitaInfo["Actividad_Libre"]);
  $("#Television").val(VisitaInfo["Television"]);
  $("#ActividadesAcademicas").val(VisitaInfo["Actividad_Academica"]);
  $("#Internet").val(VisitaInfo["Internet"]);
  $("#Preg16").val(VisitaInfo["P16"]);
  $("#Preg17").val(VisitaInfo["P17"]);
  $("#Preg18").val(VisitaInfo["P18"]);
  $("#Preg19").val(VisitaInfo["P19"]);
  $("#Preg20").val(VisitaInfo["P20"]);
  $("#Preg21").val(VisitaInfo["P21"]);
  $("#Preg22").val(VisitaInfo["Concepto_Profesional"]);
  var initOP4 = new Array;
  var initOP5 = new Array;
  var initOP6 = new Array;
  var initOP7 = new Array;
  $.each(VisitaInfo.pregunta_a, function(i, e){
    if(e['PreguntaA_Id'] == 'P4'){
      initOP4.push(e['Respuesta']);
    }

    if(e['PreguntaA_Id'] == 'P5'){
      initOP5.push(e['Respuesta']);
    }

    if(e['PreguntaA_Id'] == 'P6'){
      initOP6.push(e['Respuesta']);
      if(e['Respuesta'] == 'Otros'){
        $('#otro6o6').val(e['Descripcion']); 
      }
      if(e['Respuesta'] == 'Gas'){
        $('[name=op6o5][value="'+e["Descripcion"]+'"]').prop('checked',true).change();
      }
    }

    if(e['PreguntaA_Id'] == 'P7'){
      initOP7.push(e['Respuesta']);
    }
  });

  $.each(initOP4, function (i, val) {
    $('#visitaF').find(':checkbox[name^="op4"][value="' + val + '"]').prop("checked", true).change();
  });
  
  $.each(initOP5, function (i, val) {
    $('#visitaF').find(':checkbox[name^="op5"][value="' + val + '"]').prop("checked", true).change();
  });

  $.each(initOP6, function (i, val) {
    $('#visitaF').find(':checkbox[name^="op6"][value="' + val + '"]').prop("checked", true).change();
  });

  $.each(initOP7, function (i, val) {
    $('#visitaF').find(':checkbox[name^="op7"][value="' + val + '"]').prop("checked", true).change();
  });

  $("#MiembrosT").empty();
    var tabla = '<table class="table table-bordered" style="background-color:#E8F8FC; border-color:#CEECF5;">'+
                '<th>Miembros de la familia afiliados a salud(nombre-parentesco)</th>'+
                '<th>Rég subsidiado</th>'+
                '<th>Rég contributivo</th>'+
                '<th>N° afiliados a salud</th>'+
                '<th>Enfermedades</th>'+
                '<th>Discapacidades</th>';
  $.each(VisitaInfo.miembros, function(i, e){      
    tabla += '<tr>'+
                '<td>'+e.Nombre_Miembro+' - '+e.Parentesco_Miembro+'</td>'+
                '<td>'+e.Regimen_Subsidiado+'</td>'+
                '<td>'+e.Regimen_Contributivo+'</td>'+
                '<td>'+e.Numero_Afiliados+'</td>'+
                '<td>'+e.Enfermedades+'</td>'+
                '<td>'+e.Discapacidades+'</td>'+
              '</tr>';   
    miembros.push({ "NombreMiembro": e.Nombre_Miembro, "ParentescoMiembro": e.Parentesco_Miembro, "NombreSubsidiado": e.Regimen_Subsidiado, 
                    "NombreContributivo": e.Regimen_Contributivo, "NumAfiliados": e.Numero_Afiliados, "Enfermedades": e.Enfermedades, "Discapacidades": e.Discapacidades, });             

  });
  tabla += '</table>';
  $("#MiembrosT").append(tabla);  
}

function Reset_campos(e){
  $("#MiembrosT").empty();
  miembros = new Array();
	$('#personas').html( '');
	$("#camposRegistro").hide('slow');
	$('#registro .form-group').removeClass('has-error');

	$('#FechaIntervencion').val('');
    $('#NombresAtiende').val('');
    $('#ApellidosAtiende').val('');
    $('#DocumentoAtiende').val('');
    $('input[name="op1"]').prop('checked', false);
    $('input[name="op2"]').prop('checked', false).change();
    $('input[name="op2o1"]').prop('checked', false);
    $('#visitaF').find(':checkbox[name^="op4"]').prop("checked", false).change();
    $('#visitaF').find(':checkbox[name^="op5"]').prop("checked", false).change();
    $('#visitaF').find(':checkbox[name^="op6"]').prop("checked", false).change();    
    $('#visitaF').find(':checkbox[name^="op7"]').prop("checked", false).change();
    $('input[name="op8"]').prop('checked', false);
    $('input[name="op9"]').prop('checked', false);
    $('input[name="op10"]').prop('checked', false);
    $('input[name="op11"]').prop('checked', false);
    $('input[name="op12"]').prop('checked', false);
    $('input[name="op13"]').prop('checked', false);
    $('input[name="op14"]').prop('checked', false);
    $('#p3').val('');
    $('#otro6o6').val('');
    $('#Habitacion').val('');
    $('#Bano').val('');
    $('#Cocina').val('');
    $('#Sala').val('');
    $('#Comedor').val('');
    $('#ZRopas').val('');
    $('#OtrosDistribucion').val('');
    $('#Camas').val('');
    $('#Closets').val('');
    $('#Televisor').val('');
    $('#Nevera').val('');
    $('#Estufa').val('');
    $('#OtrosMuebles').val('');
    $('#NombreMiembro').val('');
    $('#ParentescoMiembro').val('');
    $('#NombreSubsidiado').val('');
    $('#NombreContributivo').val('');
    $('#NumAfiliados').val('');
    $('#Enfermedades').val('');
    $('#Discapacidades').val('');
    $('#op13').val('');
    $('#otro13o4').val('');
    $('#TotalIngreso').val('');
    $('#Alimentacion').val('');
    $('#Arriendo').val('');
    $('#Educacion').val('');
    $('#CuotaV').val('');
    $('#Salud').val('');
    $('#Recreacion').val('');
    $('#Servicios').val('');
    $('#Transporte').val('');
    $('#p14o1').val('');
    $('#Adeudan').val('');
    $('#MontoEgresos').val('');
    $('#MontoDeudas').val('');
    $('#op15').val('');
    $('#PracticasDeportivas').val('');
    $('#JuegosFamiliares').val('');
    $('#SalidasPublicos').val('');
    $('#Quehaceres').val('');
    $('#ActividadesLibre').val('');
    $('#Television').val('');
    $('#ActividadesAcademicas').val('');
    $('#Internet').val('');
    $('#Preg16').val('');
    $('#Preg17').val('');
    $('#Preg18').val('');
    $('#Preg19').val('');
    $('#Preg20').val('');
    $('#Preg21').val('');
    $('#Preg22').val('');	
}

function OcultarCampos(){
  $("#seccion_uno").hide("slow");
  $("#seccion_dos").hide("slow");
  $("#seccion_tres").hide("slow");
  $("#seccion_cuatro").hide("slow");
  $("#seccion_cinco").hide("slow");
  $("#seccion_seis").hide("slow");
  $("#seccion_siete").hide("slow");
  $("#seccion_ocho").hide("slow");
}

function VerCampos(){
  $("#seccion_uno").show("slow");
  $("#seccion_dos").show("slow");
  $("#seccion_tres").show("slow");
  $("#seccion_cuatro").show("slow");
  $("#seccion_cinco").show("slow");
  $("#seccion_seis").show("slow");
  $("#seccion_siete").show("slow");
  $("#seccion_ocho").show("slow");
}