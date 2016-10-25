$(function()
{


	$('#a_edicar').on('click', function(e)
	{
			
			var Id_mdl=$('select[name="Id_mdl"]').val();
			if(Id_mdl==""){
				$('#div_mensaje').fadeIn(20);
				$('#div_editar').fadeOut(20);
				$('#div_eliminar').fadeOut(20);
				$('#div_nuevo').fadeOut(20);
			}else{

				$.get(
		            '/ModuloRendimientoDeportivo/configuracion/ver_modalidad/'+Id_mdl,
		            {},
		            function(data)
		            {
		                if(data)
		                {
		                   $('#Id_Dept').val(data.Deporte_Id);
		                   $('#nom_modl').val(data.Nombre_Modalidad);
		                   $('#id_Mdl').val(data.Id);
		                }
		            },
		            'json'
		        );

				$('#div_mensaje').fadeOut(20);
				$('#div_editar').show(20);
				$('#div_eliminar').fadeOut(20);
				$('#div_nuevo').fadeOut(20);
			}
			return false;
	});

	$('#a_eliminar').on('click', function(e)
	{
			
			var Id_mdl=$('select[name="Id_mdl"]').val();
			if(Id_mdl==""){
				$('#div_mensaje').fadeIn(20);
				$('#div_eliminar').fadeOut(20);
				$('#div_nuevo').fadeOut(20);
				$('#div_editar').fadeOut(20);
			}else{

				$.get(
		            '/ModuloRendimientoDeportivo/configuracion/ver_modalidad/'+Id_mdl,
		            {},
		            function(data)
		            {
		                if(data)
		                {
		                   $('#id_moalidad').val(data.Id);
		                   $('#label_eliminar').html("¿Desea eliminar la modalidad <ins>"+data.Nombre_Modalidad+"</ins> de forma permanente del sistema?. <br>Tenga en cuenta que si elimina una modalidad se eliminara por defecto todos los datos relacionados ha este deporte. Si no esta seguro de este cambio por favor diríjase al administrador del sistema.");
		                }
		            },
		            'json'
		        );

				$('#div_mensaje').fadeOut(20);
				$('#div_eliminar').show(20);
				$('#div_nuevo').fadeOut(20);
				$('#div_editar').fadeOut(20);
			}
			return false;
	});

	$('#a_nuevo').on('click', function(e)
	{
			
			    $('#Id_mdl').val('');
				$('#div_mensaje').fadeOut(20);
				$('#div_nuevo').show(20);
				$('#div_eliminar').fadeOut(20);
				$('#div_editar').fadeOut(20);
			
			return false;
	});

	$('#btn_crear_mdl').on('click', function(e)
	{
		
			$.ajax({
	            type: 'POST',
	            url: '/ModuloRendimientoDeportivo/configuracion/crear_mdl',
	            data: $('#form_nuevo').serialize(),
	            success: function(data){

	            	if(data.status == 'error')
					{			

						$("#div_mensaje2").removeClass("alert alert-warning");
						$("#div_mensaje2").addClass("alert alert-danger");	
						$("#div_mensaje2").html("<strong>Falta seleccionar campos para el registro."); 
						$('#div_mensaje2').fadeIn();
						setTimeout(function(){
							$('#div_mensaje2').fadeOut(); 
						}, 2500)  

					}else{	
						
					    $("#div_mensaje2").removeClass("alert alert-danger");		
						$("#div_mensaje2").addClass("alert alert-success");			
						$("#div_mensaje2").html("<strong>Se ha registrado exitosamente la modalidad: </strong> "+data.Nombre_Modalidad); 
						$('#div_mensaje2').fadeIn();
						setTimeout(function(){
							$('#div_mensaje2').fadeOut(); 
						}, 2500)  

					}

	            }
		    });
		

	});

	$('#btn_eliminar_mdl').on('click', function(e)
	{
			var id=$('#id_moalidad').val();
			    $.get(
		            '/ModuloRendimientoDeportivo/configuracion/eliminarModalidad/'+id,
		            {},
		            function(data)
		            {
		                if(data.status == 'True')
		                {
		                	$('#div_eliminar').fadeOut();
		                    $("#div_mensaje2").removeClass("alert alert-danger");
							$("#div_mensaje2").addClass("alert alert-success");	
							$("#div_mensaje2").html("<strong>Modalidad eliminada con exíto."); 
							$('#div_mensaje2').fadeIn();
							setTimeout(function(){
								$('#div_mensaje2').fadeOut(); 
							}, 2500) 
		                }
		                else
		                {
		                	$('#div_eliminar').fadeOut();
		                    $("#div_mensaje2").removeClass("alert alert-success");
							$("#div_mensaje2").addClass("alert alert-danger");	
							$("#div_mensaje2").html("<strong>No se elimino la modalidad, por favor averiguar con el encargado del sistema."); 
							setTimeout(function(){
								$('#div_mensaje2').fadeOut(); 
							}, 2500) 
		                }
		            },
		            'json'
		        );
	});


	$('#btn_editar').on('click', function(e)
	{
			$.ajax({
	            type: 'POST',
	            url: '/ModuloRendimientoDeportivo/configuracion/modificar_mdl',
	            data: $('#form_edit').serialize(),
	            success: function(data)
	            {

	            	if(data.status == 'error')
					{			
						
						$("#div_mensaje2").removeClass("alert alert-warning");
						$("#div_mensaje2").addClass("alert alert-danger");	
						$("#div_mensaje2").html("<strong>Falta seleccionar campos para el registro."); 
						$('#div_mensaje2').fadeIn();
						setTimeout(function(){
							$('#div_mensaje2').fadeOut(); 
						}, 2500)  

					}else{	
						
					    $("#div_mensaje2").removeClass("alert alert-danger");		
						$("#div_mensaje2").addClass("alert alert-success");			
						$("#div_mensaje2").html("<strong>Se ha modificado exitosamente la modalidad: </strong> "+data.Nombre_Modalidad); 
						$('#div_mensaje2').fadeIn();
						setTimeout(function(){
							$('#div_mensaje2').fadeOut(); 
						}, 2500)  

					}

	            }
		    });
	});


	$('#cerrar_actividad').delegate('button[data-funcion="cerrar"]','click',function (e) {   
        $(".form-control").val('');
        vector_datos_actividades.length=0;
		vector_acompañantes.length=0;
    }); 


});