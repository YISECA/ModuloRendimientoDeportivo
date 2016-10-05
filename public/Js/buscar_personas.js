var html;

$(function(e){   
    
    var $personas_actuales = $('#personas').html();    
    
    function reset(e){        
        $('input[name="buscador"]').val('');

        if($(this).data('buscador', 'buscar-rud')){
          Reset(e);
        }

      //Campos a limpiar
        
       /* $('#personas').html($personas_actuales);
        $('#paginador').fadeIn();*/
        
        $('#buscar span').removeClass('glyphicon-refresh').addClass('glyphicon-search');
        $('#buscar span').empty();
        
       /* $("#IdNal").val('');
        $("#IdInterNal").val('');
        $("#IdDeporte").val('');
        $("#IdModalidad").val('');*/
        
        document.getElementById("buscar").disabled = false;
        document.getElementById("buscador").disabled = false;
    };    
    

      
    $('#buscar').on('click', function(e){
        $("#mensajeIncorrectoB").empty();
        $("#mensaje-incorrectoB").fadeOut();
        $("#buscador").css({ 'border-color': '#CCCCCC' });    
        $("#buscar").css({ 'border-color': '#CCCCCC' });    
        var key = $('input[name="buscador"]').val();
        if(!key && $(this).data('role') == 'buscar'){
            $("#buscador").css({ 'border-color': '#B94A48' });
            $("#buscar").css({ 'border-color': '#B94A48' });
            var texto = $("#mensajeIncorrectoB").html();

            $("#mensajeIncorrectoB").html(texto + '<br>' + 'Debe ingresar un parámetro para realizar la búsqueda.');
            $("#mensaje-incorrectoB").fadeIn();
            $('#mensaje-incorrectoB').focus();            
            return false;
        }        
        var role = $(this).data('role');               
        
        switch(role){
            case 'buscar':                
                $('#buscar span').removeClass('glyphicon-search').addClass('glyphicon-refresh');
                $('#buscar span').append(' Cargando...');
                document.getElementById("buscar").disabled = true;
                document.getElementById("buscador").disabled = true;
                $(this).data('role', 'reset');

                if($(this).data('buscador', 'buscar-rud')){
                  Buscar(e);
              }
            break;
            case 'reset':                 
                $('#buscar span').removeClass('glyphicon-remove').addClass('glyphicon-refresh');
                $('#buscar span').append(' Cargando...');
                document.getElementById("buscar").disabled = true;
                document.getElementById("buscador").disabled = true;
                $(this).data('role', 'buscar');
                reset(e);
            break;
        }
    }); 
});
function ValidaCampo(e){
    tecla = (document.all) ? e.keyCode : e.which;
     if (tecla==8) return true;
     patron =/[A-Za-z0-9\s]/;
     te = String.fromCharCode(tecla);
     return patron.test(te);
 }