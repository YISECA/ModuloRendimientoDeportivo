$(function(e){ 	
});
function Buscar_Psico(e){	
	var key = $('input[name="buscador-psico"]').val(); 
    $.get('personaBuscarDeportista/'+key,{}, function(data){  
        if(data.length > 0){       	

        	/*$("#persona").val(data[0]['Id_Persona']);        	
        	$("#Nombres").val(data[0]['Primer_Nombre']+' '+data[0]['Segundo_Nombre']);        	
			$("#Apellidos").val(data[0]['Primer_Apellido']+' '+data[0]['Segundo_Apellido']);
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
			$("#Genero").attr("disabled", "disabled");*/


            $('#buscar-psico span').removeClass('glyphicon-refresh').addClass('glyphicon-remove');
            $('#buscar-psico span').empty();
         	document.getElementById("buscar-psico").disabled = false;     
               
        }else{    
            $('#buscar-psico span').removeClass('glyphicon-refresh').addClass('glyphicon-remove');
            $('#buscar-psico span').empty();
            document.getElementById("buscar-psico").disabled = false;
            $('#personas').html( '<li class="list-group-item" style="border:0"><div class="row"><h4 class="list-group-item-heading">No se encuentra ninguna persona registrada con estos datos.</h4></dvi><br>');
            $('#paginador').fadeOut();
        }        
    },
	'json'
    );
}

function Reset_Psico(e){
	
}
/*function Buscar_Rud(e){	
	var key = $('input[name="buscador"]').val(); 
    $.get('personaBuscarDeportista/'+key,{}, function(data){  
        if(data.length > 0){        	

        	$("#persona").val(data[0]['Id_Persona']);        	
        	$("#Nombres").val(data[0]['Primer_Nombre']+' '+data[0]['Segundo_Nombre']);        	
			$("#Apellidos").val(data[0]['Primer_Apellido']+' '+data[0]['Segundo_Apellido']);
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
              			}).done(function(){
              				$("#ClasificacionDeportista").val(responseDep.deportista['Clasificacion_Deportista_Id']).change();              				
              			});
          			//Cuando Hay deportista    
          				ShowRopa(data[0]['Id_Genero'], 1, responseDep.deportista['Sudadera_Talla_Id'], responseDep.deportista['Camiseta_Talla_Id'], responseDep.deportista['Pantaloneta_Talla_Id']);
						ShowZapatos(data[0]['Id_Genero'], 2, responseDep.deportista['Tenis_Talla_Id']);

          				$("#deportista").val(responseDep.deportista['Id']);
						
						$("#LugarExpedicion").val(responseDep.deportista['Lugar_Expedicion_Id']);
						$("#FechaExpedicion").val(responseDep.deportista['Fecha_Expedicion']);
						$("#Pasaporte").val(responseDep.deportista['Numero_Pasaporte']);
						$("#FechaVigenciaPasaporte").val(responseDep.deportista['Fecha_Pasaporte']);
						$("#EstadoCivil").val(responseDep.deportista['Estado_Civil_Id']);
						$("#Estrato").val(responseDep.deportista['Estrato_Id']);
						$("#DepartamentoNac").val(responseDep.deportista['Departamento_Id_Nac']);
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


						$("#Modficar").show();
              			$("#Registrar").hide();

              			//$("#registro").show();

              		}else{
              			$("#Modificar").hide();
              			$("#Registrar").show();
              			
              		}
             	}).done(function (){             		
                    $('#buscar span').removeClass('glyphicon-refresh').addClass('glyphicon-remove');
                    $('#buscar span').empty();
                 	document.getElementById("buscar").disabled = false;     
                 	$("#camposRegistro").show('slow');            	
      			});
          	});
        }else{    
            $('#buscar span').removeClass('glyphicon-refresh').addClass('glyphicon-remove');
            $('#buscar span').empty();
            document.getElementById("buscar").disabled = false;
            $('#personas').html( '<li class="list-group-item" style="border:0"><div class="row"><h4 class="list-group-item-heading">No se encuentra ninguna persona registrada con estos datos.</h4></dvi><br>');
            $('#paginador').fadeOut();
        }        
    },
	'json'
    );
}

/*
function Reset_Rud(e){
	$("#camposRegistro").hide('slow');

	$("#seccion_uno").hide("slow");
	$("#seccion_dos").hide("slow");
	$("#seccion_tres").hide("slow");
	$("#seccion_cuatro").hide("slow");
	$("#seccion_cinco").hide("slow");

	$("#ClasificacionDeportista").val('').change();
	$("#LugarExpedicion").val('');
	$("#FechaExpedicion").val('');
	$("#Pasaporte").val('');
	$("#FechaVigenciaPasaporte").val('');
	$("#EstadoCivil").val('');
	$("#Estrato").val('');
	$("#DepartamentoNac").val('');
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
}*/