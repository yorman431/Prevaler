function mostrar_campo_c(){
    var id = event.currentTarget.id;
    var entrada = '<input class="form-control"  name="porcentaje" value="" onkeyup = "javascripts: if(event.keyCode == 13) actualizar_precios_c();" id="'+id+'"></input>';
     $("#porcentaje_categoria"+id).empty();
     $("#porcentaje_categoria"+id).append(entrada);
    return false;
}

function actualizar_precios_c(){
	var id = event.currentTarget.id;
	var porcentaje = $("#"+id).val();
    if(porcentaje.length == 0){
        var inicial ="<a id='"+id+"' onclick='javascripts:mostrar_campo_c();'><i class='fa fa-money fa-lg' aria-hidden='true' style='color:#33cc33;'></i></a>";
         $("#comentario_registro"+id).empty();
         $("#comentario_registro"+id).append(inicial);
    }else{
        var datos={
            categoria:id,
            porcentaje:porcentaje
            }
         $.ajax({
              url: '/descuentos.php',
              type: 'POST',
              data: {data: datos},
              success: function(porc){
                porcent="<p style='color:#33cc33;'> "+porc+"%"+"&nbsp;"+" aplicado a productos de &eacute;sta categor&iacute;a</p>"+"&nbsp;"+"<a id='"+id+"' onclick='javascripts:mostrar_campo_c();'><i class='fa fa-plus' aria-hidden='true' style='color:#cc0000;'></i>";
                $("#porcentaje_categoria"+id).empty();
                $("#porcentaje_categoria"+id).append(porcent);
              }
          }) 
    }
    return true;
}

function mostrar_campo_f(){
    var id = event.currentTarget.id;
    var entrada = '<input class="form-control"  name="porcentaje" value="" onkeyup = "javascripts: if(event.keyCode == 13) actualizar_precios_f();" id="'+id+'"></input>';
     $("#porcentaje_facilidad"+id).empty();
     $("#porcentaje_facilidad"+id).append(entrada);
    return false;
}

function actualizar_precios_f(){
	var id = event.currentTarget.id;
	var porcentaje = $("#"+id).val();
    if(porcentaje.length == 0){
        var inicial ="<a id='"+id+"' onclick='javascripts:mostrar_campo_f();'><i class='fa fa-money fa-lg' aria-hidden='true' style='color:#33cc33;'></i></a>";
         $("#comentario_facilidad"+id).empty();
         $("#comentario_facilidad"+id).append(inicial);
    }else{
        var datos={
            material:id,
            porcentaje:porcentaje
            }
         $.ajax({
              url: '/descuentoss.php',
              type: 'POST',
              data: {data: datos},
              success: function(porc){
                porcent="<p style='color:#33cc33;'> "+porc+"%"+"&nbsp;"+" aplicado a productos de &eacute;sta categor&iacute;a</p>"+"&nbsp;"+"<a id='"+id+"' onclick='javascripts:mostrar_campo_f();'><i class='fa fa-plus' aria-hidden='true' style='color:#cc0000;'></i>";
                $("#porcentaje_facilidad"+id).empty();
                $("#porcentaje_facilidad"+id).append(porcent);
              }
          }) 
    }
    return true;
}



