$(function(e){

	$("input[name='op2']").on('change', function(){
		var valor = $('input[name="op2"]:checked').val();
		if(valor == 'Propia'){
			$("#OP2o1").show('slow');
		}else{
			$("#OP2o1").hide('slow');
		}
	});

	$("#p6o5").on('change', function(){
		if($(this).is(':checked')){
   			$("#OP6o5").show('slow');
	   	}else{
	   		$("#OP6o5").hide('slow');
	   	}
	});

});
