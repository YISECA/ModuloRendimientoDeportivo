$(function(e){ 	

	$("#Registrar").on('click', function(){				
		registro('AddValoracion');
	});   

	function registroX (url){		

        Deportista=$("#deportista").val(); 
        Discapacidad = $('#Discapacidad').val();
        EdadInicio = $("#EdadPreg").val()
        AniosPractica = $("#PracticaPreg").val();
        P1 = $('input[name="op1"]:checked').val();
        P2 = $('input[name="op2"]:checked').val();
        P3 = $('input[name="op3"]:checked').val();
        P5 = $('input[name="op5"]:checked').val();
        P6 = $('input[name="op6"]:checked').val();

        P8 = $('input[name="op8"]:checked').val();
        P81 = $('input[name="op81"]').val();
        P82 = $('input[name="op82"]').val();

        P9 = $('input[name="op9"]:checked').val();
        P10 = $('input[name="op10"]:checked').val();

        P11 = $('input[name="op11"]:checked').val();
        P111 = $('input[name="op111"]').val();
        P112 = $('input[name="op112"]').val();
        P113 = $('input[name="op113"]').val();
        P114 = $('input[name="op114"]').val();

        P13 = $('input[name="op13"]:checked').val();
        P15 = $('input[name="op15"]:checked').val();
        P16 = $('input[name="op16"]:checked').val();
        P17 = $('input[name="op17"]:checked').val();

        P19 = $('input[name="op19"]:checked').val();
        P191 = $('input[name="op191"]').val();
        P192 = $('input[name="op192"]').val();
        P193 = $('input[name="op193"]').val();
        P194 = $('input[name="op194"]').val();
        P195 = $('input[name="op195"]').val();
        P196 = $('input[name="op196"]').val();

        P20 = $('input[name="op2"]:checked').val();
        P21 = $('input[name="op21"]:checked').val();
        P22 = $('input[name="op22"]:checked').val();
        P23 = $('input[name="op23"]:checked').val();
        P24 = $('input[name="op24"]:checked').val();
        P25 = $('input[name="op25"]:checked').val();
        P27 = $('input[name="op27"]:checked').val();
        P29 = $('input[name="op29"]:checked').val();
        P34 = $('input[name="op34"]:checked').val();
        P35 = $('input[name="op35"]:checked').val();
        P40 = $('input[name="op40"]:checked').val();
        P42 = $('input[name="op42"]:checked').val();
        P43 = $('input[name="op43"]:checked').val();
        P44 = $('input[name="op44"]:checked').val();
        P46 = $('input[name="op46"]:checked').val();
        P49 = $('input[name="op49"]:checked').val();
        P51 = $('input[name="op51"]:checked').val();
        ConceptoProfesional = $('textarea[name="ConceptoProfesional"]').val();
        var datos = {
        	Deportista : Deportista,
	        Discapacidad : Discapacidad,
	        EdadInicio : EdadInicio,
	        AniosPractica : AniosPractica,
	        P1 : P1,
	        P2 : P2,
	        P3 : P3,
	        P5 : P5,
	        P6 : P6,
	        P8 : P8,
	        P81 : P81,
	        P82 : P82,
	        P9 : P9,
	        P10 : P10,
	        P11 : P11,
	        P111 : P111,
	        P112 : P112,
	        P113 : P113,
	        P114 : P114,
	        P13 : P13,
	        P15 : P15,
	        P16 : P16,
	        P17 : P17,
	        P19 : P19,
	        P191 : P191,
	        P192 : P192,
	        P193 : P193,
	        P194 : P194,
	        P195 : P195,
	        P196 : P196,
	        P20 : P2,
	        P21 : P21,
	        P22 : P22,
	        P23 : P23,
	        P24 : P24,
	        P25 : P25,
	        P27 : P27,
	        P29 : P29,
	        P34 : P34,
	        P35 : P35,
	        P40 : P40,
	        P42 : P42,
	        P43 : P43,
	        P44 : P44,
	        P46 : P46,
	        P49 : P49,
	        P51 : P51,
        };
        console.log(datos);
    	
    	//console.log(Deportista, Discapacidad, EdadInicio, AniosPractica, P1, P2, P3, P5, P6, P8, P81, P82, P9, P10, P11, P111, P112, P113, P114, P13, P15, P16, P17, P19, P191, P192, P193, P194, P195, P196, P20, P21, P22, P23, P24, P25, P27, P29, P34, P35, P40, P42, P43, P44, P46, P49, P51, ConceptoProfesional);


	}

	function Checkeds(nombre, otro){
		var valor = $("#"+nombre).is(":checked");
		if(valor == true){ $("#"+otro).show('slow'); }else{ $("#"+otro).hide('slow');}
	}

	function CheckedSi(nombre, otro){
		var valor = $('input[name="'+nombre+'"]:checked').val();
		if(valor == 'Si'){$("#"+otro).show('slow'); }else if(valor == 'No'){ $("#"+otro).hide('slow'); }
	}

	function CheckedNo(nombre, otro){
		var valor = $('input[name="'+nombre+'"]:checked').val();
		if(valor == 'No'){$("#"+otro).show('slow'); }else if(valor == 'Si'){ $("#"+otro).hide('slow'); }
	}

	$( "#p4o10" ).on( "click",function(){Checkeds('p4o10', 'porqueOP4');});
	$('input[name="op26"]').change(function(){  Checkeds('p26o8','porqueOP26' ); });
	$( "#p41o11" ).on( "click",function(){Checkeds('p41o11', 'porqueOP41');});
	$( "#p472o5" ).on( "click",function(){Checkeds('p472o5', 'porqueOP472o5');});
	$( "#p522o4" ).on( "click",function(){Checkeds('p522o4', 'porqueOP522o4');});

	$('input[name="op14"]').change(function(){ CheckedSi('op14', 'porqueOP14');});
	$('input[name="op32"]').change(function(){ CheckedSi('op32', 'porqueOP32');});
	$('input[name="op33"]').change(function(){ CheckedSi('op33', 'porqueOP33');});
	$('input[name="op47"]').change(function(){ CheckedSi('op47', 'porqueOP47');});
	$('input[name="op52"]').change(function(){ CheckedSi('op52', 'porqueOP52');});

	$('input[name="op19"]').change(function(){  CheckedSi('op19', 'porqueOP19');  CheckedNo('op19', 'porqueOP14N'); });
	$('input[name="op10"]').change(function(){  CheckedSi('op10', 'porqueOP10');  CheckedNo('op10', 'porqueOP10N');	});

	$('#DesplazamientoPreg').change(function(){ 
		if($("#DesplazamientoPreg").val() == 1){
			$("#DesplazamientoD").show('slow');
		}else{
			$("#DesplazamientoD").hide('slow');
		}
	});

	
});

function Buscar(e){	

	$("#seccion_uno").hide("slow");
	$("#seccion_dos").hide("slow");
	$("#seccion_tres").hide("slow");
	$("#seccion_cuatro").hide("slow");
	$("#seccion_cinco").hide("slow");
	$("#seccion_seis").hide("slow");
	$("#seccion_siete").hide("slow");
	$("#seccion_ocho").hide("slow");
	$("#seccion_nueve").hide("slow");
	$("#seccion_diez").hide("slow");
	$("#seccion_once").hide("slow");
	$("#seccion_doce").hide("slow");
	$("#seccion_trece").hide("slow");


	var key = $('input[name="buscador"]').val(); 
    $.get('personaBuscarDeportista/'+key,{}, function(data){  
        if(data.length > 0){        	

        	$("#persona").val(data[0]['Id_Persona']);        	
        	$("#Nombres").val(data[0]['Primer_Nombre']+' '+data[0]['Segundo_Nombre']);        	
			$("#Apellidos").val(data[0]['Primer_Apellido']+' '+data[0]['Segundo_Apellido']);
			$("#TipoDocumento").val(data[0].tipo_documento['Descripcion_TipoDocumento']);
			$("#NumeroDocumento").val(data[0]['Cedula']);
			$("#fechaNac").val(data[0]['Fecha_Nacimiento']);
			$("#Etnia").val(data[0]['Id_Etnia']);
			$("#MunicipioNac").val(data[0]['Nombre_Ciudad']);
			$("#Genero").val(data[0]['Id_Genero']);

			$("#Nombres").attr("disabled", "disabled");
			$("#Apellidos").attr("disabled", "disabled");
			$("#TipoDocumento").attr("disabled", "disabled");
			$("#NumeroDocumento").attr("disabled", "disabled");
			$("#fechaNac").attr("disabled", "disabled");
			$("#Etnia").attr("disabled", "disabled");
			$("#MunicipioNac").attr("disabled", "disabled");
			$("#Genero").attr("disabled", "disabled");

          	$.each(data, function(i, e){

              	$.get("deportista/" + e['Id_Persona'] + "", function (responseDep) {              		
              		if(responseDep.deportista){  
              			$("#GrupoSanguineo").val(responseDep.deportista['Grupo_Sanguineo_Id']);
              			if(responseDep.deportista['Medicina_Prepago'] == 1){
              				$("#Prepagada").val(responseDep.deportista['Nombre_MedicinaPrepago']);
              				$("#Prepagada").show();
              				$("#Eps").hide();
              			}else{
              				$("#Eps").val(responseDep.deportista['Eps_Id']);
              				$("#Eps").show();
              				$("#Prepagada").hide();
              			}

              			$("#MunicipioLoc").val(responseDep.deportista['Ciudad_Id_Localiza']);
              			$("#Direccion").val(responseDep.deportista['Direccion_Localiza']);
              			$("#Estrato").val(responseDep.deportista['Estrato_Id']);
              			$("#FijoLoc").val(responseDep.deportista['Fijo_Localiza']);
						$("#CelularLoc").val(responseDep.deportista['Celular_Localiza']);
						$("#Correo").val(responseDep.deportista['Correo_Electronico']);
						$("#Pasaporte").val(responseDep.deportista['Numero_Pasaporte']);						
						$("#FechaVigenciaPasaporte").val(responseDep.deportista['Fecha_Pasaporte']);
						$("#LibretaPreg").val(responseDep.deportista['Libreta_Preg']);
						if(responseDep.deportista['Libreta_Preg'] == 2){
							$("#LibretaPorqueD").show();
						}else{
							$("#LibretaPorqueD").hide();
						}
              			$("#GrupoSanguineo").attr("disabled", "disabled");
              			$("#Prepagada").attr("disabled", "disabled");
          				$("#Eps").attr("disabled", "disabled");
          				$("#MunicipioLoc").attr("disabled", "disabled");
          				$("#Direccion").attr("disabled", "disabled");
              			$("#Estrato").attr("disabled", "disabled");
              			$("#FijoLoc").attr("disabled", "disabled");
						$("#CelularLoc").attr("disabled", "disabled");
						$("#Correo").attr("disabled", "disabled");
						$("#Pasaporte").attr("disabled", "disabled");
						$("#FechaVigenciaPasaporte").attr("disabled", "disabled");
						$("#LibretaPreg").attr("disabled", "disabled");
						$("#Deporte").attr("disabled", "disabled");
          				$("#Modalidad").attr("disabled", "disabled");
          				$("#Club").attr("disabled", "disabled");


              			$.get("getDeportistaDeporte/" + responseDep.deportista['Id'] + "", function (DeportistaDeporte) {  
              				$("#Deporte").val(DeportistaDeporte['Deporte_Id']);
              				$("#Modalidad").val(DeportistaDeporte['Modalidad_Id']);
              				$("#Club").val(DeportistaDeporte['Club_Id']);
              			});

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

function Reset(e){
	$("#camposRegistro").hide('slow');

}