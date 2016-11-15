$(function()
{

	$('#a_editar').on('click', function(e)
	{			
		var Id_division=$('select[name="Id_Division"]').val();
		if(Id_division == ""){
			$('#div_mensaje').fadeIn(20);
			$('#div_editar').fadeOut(20);
			$('#div_eliminar').fadeOut(20);
			$('#div_nuevo').fadeOut(20);
		}else{
			$.get(
	            'configuracion/ver_division/'+Id_division,
	            {},
	            function(data)
	            {
	                if(data)
	                {
	                   $('#nom_division').val(data.Nombre_Division);
	                   $('#Id_division').val(data.Id);
	                   $('#Tipo_Evaluacion_E').val(data.tipo_evaluacion['Id']).change();
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

	$('#btn_editar').on('click', function(e){
		$.ajax({
            type: 'POST',
            url: 'configuracion/modificar_div',
            data: $('#form_edit').serialize(),
            success: function(data){
            	if(data.status == 'error'){								
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
					$("#div_mensaje2").html("<strong>Se ha modificado exitosamente la categoria: </strong> "+data.Nombre_Rama); 
					$('#div_mensaje2').fadeIn();
					setTimeout(function(){
						$('#div_mensaje2').fadeOut(); 
					}, 2500)  
				}
            }
	    });
	});

	$('#a_eliminar').on('click', function(e){			
		var Id_division=$('select[name="Id_Division"]').val();
		if(Id_division==""){
			$('#div_mensaje').fadeIn(20);
			$('#div_eliminar').fadeOut(20);
			$('#div_nuevo').fadeOut(20);
			$('#div_editar').fadeOut(20);
		}else{

			$.get(
	            'configuracion/ver_division/'+Id_division,
	            {},
	            function(data)
	            {
	                if(data)
	                {
	                   $('#id_division_e').val(data.Id);
	                   $('#label_eliminar').html("¿Desea eliminar la división <ins>"+data.Nombre_Division+"</ins> de forma permanente del sistema?. <br>Tenga en cuenta que si elimina una división se eliminara por defecto todos los datos relacionados ha esta. Si no esta seguro de este cambio por favor diríjase al administrador del sistema.");
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

	$('#btn_eliminar_rm').on('click', function(e){
		var id=$('#id_division_e').val();
		    $.get(
	            'configuracion/eliminarDivision/'+id,
	            {},
	            function(data)
	            {
	                if(data.status == 'True')
	                {
	                	$('#div_eliminar').fadeOut();
	                    $("#div_mensaje2").removeClass("alert alert-danger");
						$("#div_mensaje2").addClass("alert alert-success");	
						$("#div_mensaje2").html("<strong>División eliminada con exíto."); 
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
						$("#div_mensaje2").html("<strong>No se elimino la división, por favor averiguar con el encargado del sistema."); 
						setTimeout(function(){
							$('#div_mensaje2').fadeOut(); 
						}, 2500) 
	                }
	            },
	            'json'
	        );
	});


	$('#a_nuevo').on('click', function(e){			
	    $('#Id_division').val('');
		$('#div_mensaje').fadeOut(20);
		$('#div_nuevo').show(20);
		$('#div_eliminar').fadeOut(20);
		$('#div_editar').fadeOut(20);			
		return false;
	});

	$('#btn_crear_ct').on('click', function(e){		
		$.ajax({
            type: 'POST',
            url: 'configuracion/crear_division',
            data: $('#form_nuevo').serialize(),
            success: function(data){
            	if(data.status == 'error'){			
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
					$("#div_mensaje2").html("<strong>Se ha registrado exitosamente la división: </strong> "+data.Nombre_Division); 
					$('#div_mensaje2').fadeIn();
					setTimeout(function(){
						$('#div_mensaje2').fadeOut(); 
					}, 2500)  
				}
            }
	    });
	});


    $('#example').DataTable({
        retrieve: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        dom: 'Bfrtip',
        select: true,
        "responsive": true,
        "ordering": true,
        "info": true,
        "language": {
            url: 'public/DataTables/Spanish.json',
            searchPlaceholder: "Buscar"
        }
    });

});