var agrupacionT = '';
var deporteT = '';
var modalidadT = '';

$(function(e){ 	

	$("#Registrar").on('click', function(){				
		registro('AddDeportista');

	});

	$("#Modificar").on('click', function(){
		registro('EditDeportista');

	});    

	function registro (url){	
		if($("#Resolucion").is(":checked") == true){
			var Resolucion = 1;
		}
		if($("#Deberes").is(":checked") == true){
			var Deberes = 1;
		}
		var Deportista =  $("#deportista").val();
		var Persona = $("#persona").val();
		var Pertenece = $("#Pertenece").val();
		var EtapaNacional = $("#EtapaNacional").val();
		var EtapaInternacional = $("#EtapaInternacional").val();
		var EtapaNacionalT = $("#EtapaNacionalT").val();
		var EtapaInternacionalT = $("#EtapaInternacionalT").val();
		var Smmlv = $("#Smmlv").val();
		var ClasificacionDeportista = $("#ClasificacionDeportista").val();
		var Agrupacion = $("#Agrupacion").val();
		var Deporte = $("#Deporte").val();
		var Modalidad = $("#Modalidad").val();
		var Club = $("#Club").val();
		var Nombres = $("#Nombres").val();
		var Apellidos = $("#Apellidos").val();
		var TipoDocumento = $("#TipoDocumento").val();
		var NumeroDocumento = $("#NumeroDocumento").val();
		var LugarExpedicion = $("#LugarExpedicion").val();
		var FechaExpedicion = $("#FechaExpedicion").val();
		var Pasaporte = $("#Pasaporte").val();
		var FechaVigenciaPasaporte = $("#FechaVigenciaPasaporte").val();
		var Genero = $("#Genero").val();
		var fechaNac = $("#fechaNac").val();
		var PaisNac = $("#PaisNac").val();
		var EstadoCivil = $("#EstadoCivil").val();
		var Estrato = $("#Estrato").val();
		var DepartamentoNac = $("#DepartamentoNac").val();
		var MunicipioNac = $("#MunicipioNac").val();
		var LibretaPreg = $("#LibretaPreg").val();
		var Libreta = $("#Libreta").val();
		var Distrito = $("#Distrito").val();
		var NombreContacto = $("#NombreContacto").val();
		var Parentesco = $("#Parentesco").val();
		var FijoContacto = $("#FijoContacto").val();
		var CelularContacto = $("#CelularContacto").val();
		var TipoCuenta = $("#TipoCuenta").val();
		var Banco = $("#Banco").val();
		var NumeroCuenta = $("#NumeroCuenta").val();
		var NumeroHijos = $("#NumeroHijos").val();
		var DepartamentoLoc = $("#DepartamentoLoc").val();
		var MunicipioLoc = $("#MunicipioLoc").val();
		var Direccion = $("#Direccion").val();
		var Barrio = $("#Barrio").val();
		var Localidad = $("#Localidad").val();
		var FijoLoc = $("#FijoLoc").val();
		var CelularLoc = $("#CelularLoc").val();
		var Correo = $("#Correo").val();
		var Regimen = $("#Regimen").val();
		var FechaAfiliacion = $("#FechaAfiliacion").val();
		var FechaAfiliacion = $("#FechaAfiliacion").val();
		var TipoAfiliacion = $("#TipoAfiliacion").val();
		var MedicinaPrepago = $("#MedicinaPrepago").val();
		var NombreMedicinaPrepago = $("#NombreMedicinaPrepago").val();
		var Eps = $("#Eps").val();
		var NivelRegimen = $("#NivelRegimen").val();
		var RiesgosLaborales = $("#RiesgosLaborales").val();
		var Arl = $("#Arl").val();
		var FondoPensionPreg = $("#FondoPensionPreg").val();
		var FondoPension = $("#FondoPension").val();
		var NombrePensiones = $("#NombrePensiones").val();
		var Sudadera = $("#Sudadera").val();
		var Camiseta = $("#Camiseta").val();
		var Pantaloneta = $("#Pantaloneta").val();
		var Tenis = $("#Tenis").val();
		var GrupoSanguineo = $("#GrupoSanguineo").val();
		var Medicamento = $("#Medicamento").val();
		var CualMedicamento = $("#CualMedicamento").val();
		var TiempoMedicamento = $("#TiempoMedicamento").val();		
		var OtroMedicoPreg = $("#OtroMedicoPreg").val();
		var OtroMedico = $("#OtroMedico").val();
		var token = $("#token").val();

		var datos = {
			 Resolucion: Resolucion,
			 Deberes: Deberes,
		     Deportista:Deportista,
			 Persona:Persona,
			 Pertenece: Pertenece,
			 EtapaNacional: EtapaNacional,
			 EtapaInternacional: EtapaInternacional,
			 EtapaNacionalT: EtapaNacionalT,
		     EtapaInternacionalT: EtapaInternacionalT,
			 Smmlv: Smmlv,
			 ClasificacionDeportista:ClasificacionDeportista,
			 Agrupacion: Agrupacion,
			 Deporte:Deporte,
			 Modalidad: Modalidad,
			 Club: Club,
			 LugarExpedicion:LugarExpedicion,
			 FechaExpedicion:FechaExpedicion,
			 Pasaporte:Pasaporte,
			 FechaVigenciaPasaporte:FechaVigenciaPasaporte,
			 EstadoCivil:EstadoCivil,
			 Estrato:Estrato,
			 DepartamentoNac:DepartamentoNac,
			 LibretaPreg:LibretaPreg,
			 Libreta:Libreta,
			 Distrito:Distrito,
			 NombreContacto:NombreContacto,
			 Parentesco:Parentesco,
			 FijoContacto:FijoContacto,
			 CelularContacto:CelularContacto,
			 TipoCuenta:TipoCuenta,
			 Banco:Banco,
			 NumeroCuenta:NumeroCuenta,
			 NumeroHijos:NumeroHijos,
			 DepartamentoLoc:DepartamentoLoc,
			 MunicipioLoc:MunicipioLoc,
			 Direccion:Direccion,
			 Barrio:Barrio,
			 Localidad:Localidad,
			 FijoLoc:FijoLoc,
			 CelularLoc:CelularLoc,
			 Correo:Correo,
			 Regimen:Regimen,
			 FechaAfiliacion:FechaAfiliacion,
			 FechaAfiliacion:FechaAfiliacion,
			 TipoAfiliacion:TipoAfiliacion,
			 MedicinaPrepago:MedicinaPrepago,
			 NombreMedicinaPrepago:NombreMedicinaPrepago,
			 Eps:Eps,
			 NivelRegimen:NivelRegimen,
			 RiesgosLaborales:RiesgosLaborales,
			 Arl:Arl,
			 FondoPensionPreg:FondoPensionPreg,
			 FondoPension:FondoPension,
			 Sudadera:Sudadera,
			 Camiseta:Camiseta,
			 Pantaloneta:Pantaloneta,
			 Tenis:Tenis,
			 GrupoSanguineo:GrupoSanguineo,
			 Medicamento:Medicamento,
			 CualMedicamento:CualMedicamento,
			 TiempoMedicamento:TiempoMedicamento,
			 OtroMedicoPreg:OtroMedicoPreg,
			 OtroMedico:OtroMedico,			 
        }

        var token = $("#token").val();		

         $.ajax({
            type: 'POST',
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            dataType: 'json',
            data: datos, 
            beforeSend: function(){
            	$("#camposRegistro").hide('slow');
				$("#seccion_uno").hide("slow");
				$("#seccion_dos").hide("slow");
				$("#seccion_tres").hide("slow");
				$("#seccion_cuatro").hide("slow");
				$("#seccion_cinco").hide("slow");
				$("#seccion_compromiso").hide("slow");
            	$("#loading").show('slow');
            }, 
            success: function (xhr) {  
            	$("#loading").hide('slow');
            	$('#alert_actividad').html('<div class="alert alert-dismissible alert-success" ><strong>Exito!</strong>'+xhr.Mensaje+'</div>');
				$('#mensaje_actividad').show(60);
				$('#mensaje_actividad').delay(2000).hide(600);				
				Reset_campos();
            },
            error: function (xhr){            	
            	$("#camposRegistro").show('slow');
            	$("#loading").hide('slow');
				validador_errores(xhr.responseJSON);
            }
        });
	}

	$.datepicker.setDefaults($.datepicker.regional["es"]);
	
	$('#FechaExpedicionDate').datepicker({format: 'yyyy-mm-dd', autoclose: true,});
	$('#FechaVigenciaPasaporteDate').datepicker({format: 'yyyy-mm-dd', autoclose: true,});
	$('#fechaNacDate').datepicker({format: 'yyyy-mm-dd', autoclose: true,});
	$('#FechaAfiliacionDate').datepicker({format: 'yyyy-mm-dd', autoclose: true,});

	var validador_errores = function(data){
		$('#registro .form-group').removeClass('has-error');
		$("#seccion_uno").show("slow");
		$("#seccion_dos").show("slow");
		$("#seccion_tres").show("slow");
		$("#seccion_cuatro").show("slow");
		$("#seccion_cinco").show("slow");
		$("#seccion_compromiso").show("slow");

		$.each(data, function(i, e){
			$("#"+i).closest('.form-group').addClass('has-error');
      	});
	}
	$("#seccion_compromiso_ver").on('click', function(e){
		var role = $(this).data('role');               
		if(role == 'ver'){
			$("#seccion_compromiso").show("slow");
			$(this).data('role', 'ocultar');
			$('#seccion_compromiso_ver').removeClass('glyphicon-resize-full').addClass('glyphicon-resize-small');
		}else if(role == 'ocultar'){
			$("#seccion_compromiso").hide("slow");
			$(this).data('role', 'ver');
			$('#seccion_compromiso_ver').removeClass('glyphicon-resize-small').addClass('glyphicon-resize-full');
		}				
	});

	$("#FondoPensionPreg").on('change',function (e){
		var id = $("#FondoPensionPreg").val();
		if(id==1){			
			$("#FondoPensionD").show("slow");
		}else if(id == 2){
			$("#FondoPensionD").hide("slow");
		}
	});

	$("#Medicamento").on('change',function (e){
		var id = $("#Medicamento").val();
		if(id==1){			
			$("#MedicamentoD").show("slow");
		}else if(id == 2){
			$("#MedicamentoD").hide("slow");
		}
	});
	
	$("#OtroMedicoPreg").on('change',function (e){
		var id = $("#OtroMedicoPreg").val();
		if(id==1){			
			$("#OtroMedicoD").show("slow");
		}else if(id == 2){
			$("#OtroMedicoD").hide("slow");
		}
	});

	$("#MedicinaPrepago").on('change',function (e){
		var id = $("#MedicinaPrepago").val();
		if(id==1){			
			$("#MedicinaPrepagoD").show("slow");
			$("#MedicinaPrepagoE").hide("slow");
		}else if(id == 2){
			$("#MedicinaPrepagoD").hide("slow");
			$("#MedicinaPrepagoE").show("slow");
		}
	});

	
	$("#LibretaPreg").on('change',function (e){
		var id = $("#LibretaPreg").val();
		if(id==1){			
			$("#militares").show("slow");
		}else if(id == 2){
			$("#militares").hide("slow");
		}
	});


	$("#ClasificacionDeportista").on('change',function (e){
		$("#Agrupacion").empty();
		$("#Deporte").empty();
		$("#Modalidad").empty();

		$("#Agrupacion").append("<option value=''>Seleccionar</option>");
		$("#Deporte").append("<option value=''>Seleccionar</option>");
		$("#Modalidad").append("<option value=''>Seleccionar</option>");

		var id = $("#ClasificacionDeportista").val();
		if(id != ''){
			$.get("getAgrupacion/" + id, function (agrupacion) {
				$.each(agrupacion.agrupacion, function(i, e){
					$("#Agrupacion").append("<option value='" +e.Id + "'>" + e.Nombre_Agrupacion + "</option>");
				});				
			}).done(function(){
				$("#Agrupacion").val(agrupacionT).change();
				agrupacionT = '';
			});
			$.get("getEtapas/" + id, function (etapas) {
				$("#EtapaNacional").empty();
				$("#EtapaInternacional").empty();
				$("#EtapaNacional").append("<option value=''>Seleccionar</option>");
				$("#EtapaInternacional").append("<option value=''>Seleccionar</option>");

				$.each(etapas['Nacional'], function(i, e){
					$("#EtapaNacional").append("<option value='"+e['Id']+"'>"+e['Nombre_Etapa']+"</option>");
				});

				$.each(etapas['Internacional'], function(i, e){
					$("#EtapaInternacional").append("<option value='"+e['Id']+"'>"+e['Nombre_Etapa']+"</option>");
				});
			}).done(function (){
				$("#EtapaNacional").val($("#EtapaNacionalT").val());
				$("#EtapaInternacional").val($("#EtapaInternacionalT").val());
			});
		}		
	});

	$("#Pertenece").on('change', function(){
		id = $("#Pertenece").val();
		if(id == 1){
			$("#DeportistaEtapas").show('slow');
		}else if(id == 2){
			$("#DeportistaEtapas").hide('slow');
		}
	});

	$("#Agrupacion").on('change',function (e){
		$("#Deporte").empty();
		$("#Modalidad").empty();

		$("#Deporte").append("<option value=''>Seleccionar</option>");
		$("#Modalidad").append("<option value=''>Seleccionar</option>");

		var id = $("#Agrupacion").val();
		if(id != ''){
			$.get("getDeporte/" + id, function (deporte) {
				$.each(deporte.deporte, function(i, e){
					$("#Deporte").append("<option value='" +e.Id + "'>" + e.Nombre_Deporte + "</option>");
				});				
			}).done(function(){
				$("#Deporte").val(deporteT).change();
				deporteT = '';
			});
		}		
	});

	$("#Deporte").on('change',function (e){
		$("#Liga").empty();
		$("#Liga").append($("#Deporte option:selected").text());
		$("#Modalidad").empty();
		$("#Modalidad").append("<option value=''>Seleccionar</option>");

		var id = $("#Deporte").val();
		if(id != ''){
			$.get("getModalidad/" + id, function (modalidad) {
				$.each(modalidad.modalidad, function(i, e){
					$("#Modalidad").append("<option value='" +e.Id + "'>" + e.Nombre_Modalidad + "</option>");
				});				
			}).done(function(){
				$("#Modalidad").val(modalidadT).change();
				modalidadT = '';
			});
		}		
	});
});

function Buscar(e){	
	var key = $('input[name="buscador"]').val(); 
    $.get('personaBuscarDeportista/'+key,{}, function(data){  

        if(data.length > 0){       
        	$("#persona").val(data[0]['Id_Persona']);        	
        	$("#Nombres").val(data[0]['Primer_Nombre']+' '+data[0]['Segundo_Nombre']);        	
			$("#Apellidos").val(data[0]['Primer_Apellido']+' '+data[0]['Segundo_Apellido']);

			$("#NombresCompromiso").empty();
			$("#NombresCompromiso").append(data[0]['Primer_Nombre']+' '+data[0]['Segundo_Nombre'] +' '+data[0]['Primer_Apellido']+' '+data[0]['Segundo_Apellido']);
			$("#TipoDocumento").val(data[0].tipo_documento['Descripcion_TipoDocumento']);
			$("#NumeroDocumento").val(data[0]['Cedula']);
			$("#fechaNac").val(data[0]['Fecha_Nacimiento']);
			$("#PaisNac").val(data[0]['Id_Pais']);
			$("#MunicipioNac").val(data[0]['Nombre_Ciudad']);
			$("#Genero").val(data[0]['Id_Genero']);

			$("#Nombres").attr("disabled", "disabled");
			$("#Apellidos").attr("disabled", "disabled");
			$("#TipoDocumento").attr("disabled", "disabled");
			$("#NumeroDocumento").attr("disabled", "disabled");
			$("#fechaNac").attr("disabled", "disabled");
			$("#PaisNac").attr("disabled", "disabled");
			$("#MunicipioNac").attr("disabled", "disabled");
			$("#Genero").attr("disabled", "disabled");

			ShowRopa(data[0]['Id_Genero'], 1);
			ShowZapatos(data[0]['Id_Genero'], 2);			
          	document.getElementById("RUD").style.display = "block";

          	$.each(data, function(i, e){

              	$.get("deportista/" + e['Id_Persona'] + "", function (responseDep) {              		
              		if(responseDep.deportista){  

              			$.get("getDeportistaDeporte/" + responseDep.deportista['Id'] + "", function (DeportistaDeporte) {     
              				agrupacionT = DeportistaDeporte['Agrupacion_Id'];
              				deporteT = DeportistaDeporte['Deporte_Id'];
              				modalidadT =DeportistaDeporte['Modalidad_Id'];
              				$("#Club").val(DeportistaDeporte['Club_Id']);              				
              			}).done(function(){
              				$("#ClasificacionDeportista").val(responseDep.deportista['Clasificacion_Deportista_Id']).change();              				
              			});

              			if(responseDep.deportista['Pertenece'] == 1){
	          				$.get("getEtapasD/" + responseDep.deportista['Id'] + "", function (DeportistaEtapa) {     		
								$("#EtapaNacionalT").val(DeportistaEtapa.Nacional.pivot['Etapa_Id']);
								$("#EtapaInternacionalT").val(DeportistaEtapa.Internacional.pivot['Etapa_Id']);
								$("#Smmlv").val(DeportistaEtapa.Internacional.pivot['Smmlv']);								
	          				});
	          			} 
              			
          			//Cuando Hay deportista    
          				ShowRopa(data[0]['Id_Genero'], 1, responseDep.deportista['Sudadera_Talla_Id'], responseDep.deportista['Camiseta_Talla_Id'], responseDep.deportista['Pantaloneta_Talla_Id']);
						ShowZapatos(data[0]['Id_Genero'], 2, responseDep.deportista['Tenis_Talla_Id']);

						$("#Resolucion").prop('checked', true);
						$("#Deberes").prop('checked', true);

						$("#Pertenece").val(responseDep.deportista['Pertenece']).change();		
          				$("#deportista").val(responseDep.deportista['Id']);						
						$("#LugarExpedicion").val(responseDep.deportista['Lugar_Expedicion_Id']);
						$("#FechaExpedicion").val(responseDep.deportista['Fecha_Expedicion']);
						$("#Pasaporte").val(responseDep.deportista['Numero_Pasaporte']);
						$("#FechaVigenciaPasaporte").val(responseDep.deportista['Fecha_Pasaporte']);
						$("#EstadoCivil").val(responseDep.deportista['Estado_Civil_Id']);
						$("#Estrato").val(responseDep.deportista['Estrato_Id']);
						$("#DepartamentoNac").val(responseDep.deportista['Departamento_Id_Nac']);
						$("#LibretaPreg").val(responseDep.deportista['Libreta_Preg']).change();
						$("#Libreta").val(responseDep.deportista['Numero_Libreta_Mil']);
						$("#Distrito").val(responseDep.deportista['Distrito_Libreta_Mil']);
						$("#NombreContacto").val(responseDep.deportista['Nombre_Contacto']);
						$("#Parentesco").val(responseDep.deportista['Parentesco_Id']);
						$("#FijoContacto").val(responseDep.deportista['Fijo_Contacto']);
						$("#CelularContacto").val(responseDep.deportista['Celular_Contacto']);
						$("#TipoCuenta").val(responseDep.deportista['Tipo_Cuenta_Id']);
						$("#Banco").val(responseDep.deportista['Banco_Id']);
						$("#NumeroCuenta").val(responseDep.deportista['Numero_Cuenta']);
						$("#NumeroHijos").val(responseDep.deportista['Numero_Hijos']);
						$("#DepartamentoLoc").val(responseDep.deportista['Departamento_Id_Localiza']);
						$("#MunicipioLoc").val(responseDep.deportista['Ciudad_Id_Localiza']);
						$("#Direccion").val(responseDep.deportista['Direccion_Localiza']);
						$("#Barrio").val(responseDep.deportista['Barrio_Localiza']);
						$("#Localidad").val(responseDep.deportista['Localidad_Id_Localiza']);
						$("#FijoLoc").val(responseDep.deportista['Fijo_Localiza']);
						$("#CelularLoc").val(responseDep.deportista['Celular_Localiza']);
						$("#Correo").val(responseDep.deportista['Correo_Electronico']);
						$("#Regimen").val(responseDep.deportista['Regimen_Salud_Id']);
						$("#FechaAfiliacion").val(responseDep.deportista['Fecha_Afiliacion']);
						$("#TipoAfiliacion").val(responseDep.deportista['Tipo_Afiliacion_Id']);
						$("#MedicinaPrepago").val(responseDep.deportista['Medicina_Prepago']).change();
						$("#NombreMedicinaPrepago").val(responseDep.deportista['Nombre_MedicinaPrepago']);
						$("#Eps").val(responseDep.deportista['Eps_Id']);
						$("#NivelRegimen").val(responseDep.deportista['Nivel_Regimen_Sub_Id']);
						$("#RiesgosLaborales").val(responseDep.deportista['Riesgo_Laboral']);
						$("#Arl").val(responseDep.deportista['Arl_Id']);
						$("#FondoPensionPreg").val(responseDep.deportista['Fondo_PensionPreg_Id']).change();
						$("#FondoPension").val(responseDep.deportista['Fondo_Pension_Id']);
						
						$("#GrupoSanguineo").val(responseDep.deportista['Grupo_Sanguineo_Id']);
						$("#Medicamento").val(responseDep.deportista['Uso_Medicamento']).change();
						$("#CualMedicamento").val(responseDep.deportista['Medicamento']);
						$("#TiempoMedicamento").val(responseDep.deportista['Tiempo_Medicamento']);		
						$("#OtroMedicoPreg").val(responseDep.deportista['Otro_Medico_Preg']).change();
						$("#OtroMedico").val(responseDep.deportista['Otro_Medico']);
						
						$("#seccion_uno").show("slow");
						$("#seccion_dos").show("slow");
						$("#seccion_tres").show("slow");
						$("#seccion_cuatro").show("slow");
						$("#seccion_cinco").show("slow");
						$("#seccion_compromiso").show("slow");


						$("#Modficar").show();
              			$("#Registrar").hide();

              			//$("#registro").show();

              		}else{
              			$("#Modificar").hide();
              			$("#Registrar").show();
              			
              		}
             	}).done(function (){             		
                    $('#buscar span').removeClass('glyphicon-refresh glyphicon-refresh-animate').addClass('glyphicon-remove');
                    $('#buscar span').empty();
                 	document.getElementById("buscar").disabled = false;     
                 	$("#camposRegistro").show('slow');            	
      			});
          	});
        }else{    
            $('#buscar span').removeClass('glyphicon-refresh glyphicon-refresh-animate').addClass('glyphicon-remove');
            $('#buscar span').empty();
            document.getElementById("buscar").disabled = false;
            $('#personas').html( '<li class="list-group-item" style="border:0"><div class="row"><h4 class="list-group-item-heading">No se encuentra ninguna persona registrada con estos datos.</h4></dvi><br>');
            $('#paginador').fadeOut();
        }        
    },
	'json'
    );
}

function ShowRopa(id_genero, id_tipo, sudadera, camiseta,pantaloneta){
    $.get("getTallas/"+id_genero+"/"+id_tipo, function (tallasRopa) {        
        $("#Sudadera").empty();
        $("#Sudadera").append("<option value=''>Seleccionar</option>");
        $("#Camiseta").empty();
        $("#Camiseta").append("<option value=''>Seleccionar</option>");
        $("#Pantaloneta").empty();
        $("#Pantaloneta").append("<option value=''>Seleccionar</option>");
        
        $.each(tallasRopa, function(i, e){
            $('#Sudadera').append('<option value="'+ e.Id +'">'+ e.Usa +'</option>');
            $('#Camiseta').append('<option value="'+ e.Id +'">'+ e.Usa +'</option>');
            $('#Pantaloneta').append('<option value="'+ e.Id +'">'+ e.Usa +'</option>');
        });        
    }).done(function(){
    	$("#Sudadera").val(sudadera);
		$("#Camiseta").val(camiseta);
		$("#Pantaloneta").val(pantaloneta);
    });
}

function ShowZapatos(id_genero, id_tipo, tenis){
    $.get("getTallas/"+id_genero+"/"+id_tipo, function (tallasRopa) {        
        $("#Tenis").empty();
        $("#Tenis").append("<option value=''>Seleccionar</option>");
        
        $.each(tallasRopa, function(i, e){
            $('#Tenis').append('<option value="'+ e.Id +'">'+ e.Eu +'</option>');
        });        
    }).done(function(){
    	$("#Tenis").val(tenis);
    });
}

function Reset_campos(e){
	$('#personas').html( '');
	$("#camposRegistro").hide('slow');

	$("#seccion_uno").hide("slow");
	$("#seccion_dos").hide("slow");
	$("#seccion_tres").hide("slow");
	$("#seccion_cuatro").hide("slow");
	$("#seccion_cinco").hide("slow");
	$("#seccion_compromiso").hide("slow");

	$("#Resolucion").prop('checked', false);
	$("#Deberes").prop('checked', false);
	$("#Pertenece").val('').change();
	$("#EtapaNacionalT").val('');
	$("#EtapaInternacionalT").val('');
	$("#EtapaNacional").val('');
	$("#EtapaInternacional").val('');
	$("#Smmlv").val('');
	$("#Club").val('');
	$("#ClasificacionDeportista").val('').change();
	$("#LugarExpedicion").val('');
	$("#FechaExpedicion").val('');
	$("#Pasaporte").val('');
	$("#FechaVigenciaPasaporte").val('');
	$("#EstadoCivil").val('');
	$("#Estrato").val('');
	$("#DepartamentoNac").val('');
	$("#LibretaPreg").val('');
	$("#Libreta").val('');
	$("#Distrito").val('');
	$("#NombreContacto").val('');
	$("#Parentesco").val('');
	$("#FijoContacto").val('');
	$("#CelularContacto").val('');
	$("#TipoCuenta").val('');
	$("#Banco").val('');
	$("#NumeroCuenta").val('');
	$("#NumeroHijos").val('');
	$("#DepartamentoLoc").val('');
	$("#MunicipioLoc").val('');
	$("#Direccion").val('');
	$("#Barrio").val('');
	$("#Localidad").val('');
	$("#FijoLoc").val('');
	$("#CelularLoc").val('');
	$("#Correo").val('');
	$("#Regimen").val('');
	$("#FechaAfiliacion").val('');
	$("#TipoAfiliacion").val('');
	$("#MedicinaPrepago").val('').change();
	$("#NombreMedicinaPrepago").val('');
	$("#Eps").val('');
	$("#NivelRegimen").val('');
	$("#RiesgosLaborales").val('');
	$("#Arl").val('');
	$("#FondoPensionPreg").val('').change();
	$("#FondoPension").val('');
	$("#Sudadera").val('');
	$("#Camiseta").val('');
	$("#Pantaloneta").val('');
	$("#Tenis").val('');
	$("#GrupoSanguineo").val('');
	$("#Medicamento").val('').change();
	$("#CualMedicamento").val('');
	$("#TiempoMedicamento").val('');		
	$("#OtroMedicoPreg").val('').change();
	$("#OtroMedico").val('');

	$('#registro .form-group').removeClass('has-error');

	$("#persona").val('');        	
	$("#Nombres").val('');        	
	$("#Apellidos").val('');
	$("#TipoDocumento").val('');
	$("#NumeroDocumento").val('');
	$("#fechaNac").val('');
	$("#PaisNac").val('');
	$("#MunicipioNac").val('');
	$("#Genero").val('');

	$("#Agrupacion").val('');
	$("#Deporte").val('');
	$("#Modalidad").val('');

	$("#Modificar").hide();
	$("#Registrar").hide();
	agrupacionT = '';
	deporteT = '';
	modalidadT = '';
}