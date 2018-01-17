function cargar_estados(){
    var pais = $("#pais").val();
    if(pais != 'Nulo'){
        if(pais == 'Otros'){
            var opt = '<span class="input-group-addon estados" style="background-color:#fff; border-color:#fff;"><i class="fa fa-circle" style="font-size:0.6em;" aria-hidden="true"></i>&nbsp;Estados/Provincias</span><input class="form-control" name="estado" value="" placeholder="Pais, Estado, Provincia, Municipio, Localidad"></input>';
            $("#div_estado").empty();
            $("#div_estado").append(opt);
        }else{
            var opt = '<span class="input-group-addon estados" style="background-color:#fff; border-color:#fff;"><i class="fa fa-circle" style="font-size:0.6em;" aria-hidden="true"></i>&nbsp;Estados/Provincias</span><select name="estado" class="form-control" id="estado"> <option selected hidden value="-1">Seleccionar</option>';
            cont = 0;
            $.ajax({
                url: '/estados.php',
                type: 'POST',
                data:{
                    pais: pais
                },
                dataType: 'json',
                success: function(data){
                    while (data[cont]){
                        opt = opt + '<option value="'+data[cont].codigo_est+'">' + data[cont].nombre_est + '</option>';
                        cont = cont + 1;
                    }
                    opt=opt+'</select>';
                    console.log('Resultado: ' + data[0].estado);
                    $("#div_estado").empty();
                    $("#div_estado").append(opt);
                }
            })
        }
    }
}

function enviar_registro() {
    var datos = $("#registrar").serialize(); 
    console.log(datos);
        $.ajax({
            url: '/procesar_registro.php',
            type: 'POST',
            data:datos,
            async: true,
            beforeSend:function(objeto){
                    $('#carga1').css({display:'block'});
                },
            complete:function(){
                $('#carga1').css('display','none')
          },
            success: function(respuesta) {    
                resp=respuesta;
                $("#mensaje3").html(resp);
            }
        })
        return false;

}

function cambiar_estado(){
    var id = event.target.id;
    var status = $("#"+id).val();
    
       $.ajax({
                url: '/actualizar_estatus.php',
                type: 'POST',
                data:{
                    status: status
                },
                async: true,
                success: function(x){  
                    tag=''; 
                    tag="#status_span"+x;
                    result="<i class='fa fa-check-square-o' aria-hidden='true' style='color:#94ce4f;'></i>";
                    $(tag).append(result);


                }
        })

   return false;
}

function mostrar_textbox(){
    var id = event.currentTarget.id;

    var entrada = '<input class="form-control"  name="comentario" value="" onkeyup = "javascripts: if(event.keyCode == 13) comentar_registro();" id="'+id+'"></input>';
     $("#comentario_registro"+id).empty();
     $("#comentario_registro"+id).append(entrada);
    return false;
}

function comentar_registro(){
    var id = event.currentTarget.id;
    var comentario = $("#"+id).val();
    if(comentario.length == 0){
        var inicial ="<a id='"+id+"''  onclick='javascripts:mostrar_textbox();'><i class='fa fa-comment fa-lg' aria-hidden='true'></i></a>";
         $("#comentario_registro"+id).empty();
         $("#comentario_registro"+id).append(inicial);
    }else{
           var datos={
            id:id,
            comentario:comentario
            }
         $.ajax({
              url: '/insertar_comentario.php',
              type: 'POST',
              data: {data: datos},
              success: function(comentario){
                coment="<p>"+comentario+"&nbsp;"+"<a id='"+id+"' onclick='javascripts:editar_comentario();'><i style='color:#ffff00;' class='fa fa-pencil' aria-hidden='true'></i></a>"+"</p>";
                $("#comentario_registro"+id).empty();
                $("#comentario_registro"+id).append(coment);
              }
          }) 
        }
    return true;
}

function editar_comentario(){
    var id = event.currentTarget.id;
    $.ajax({
          url: '/editar_comentario.php',
          type: 'POST',
          data: {id: id},
          success: function(comentario){
            var entrada = '<input class="form-control" rows="2" name="comentario" value="'+comentario+'" onkeyup = "javascripts: if(event.keyCode == 13) comentar_registro();" id="'+id+'"></input>';
             $("#comentario_registro"+id).empty();
             $("#comentario_registro"+id).append(entrada);
          }
      })
    
    return false;
}

function enviar_contacto() {
    var datos = $("#contactar").serialize();
        $.ajax({
            url: '/procesar_contacto.php',
            type: 'POST',
            data:datos,
            async: true,
            beforeSend:function(objeto){
                    $('#carga2').css({display:'block'});
                },
            complete:function(){
              $('#carga2').css('display','none')
          },
            success: function(respuesta) {
              resp=respuesta;
               $("#mensaje2").html(resp);
            }
        })
        return false;

}

function enviar_formulario_dijes(){
    var datos = $("#dijes").serializeArray();
    var imagen = new FormData($("#dijes")[0]);
    $.each(datos,function(key,input){
        imagen.append(input.name,input.value);
      });
      if(MM_validateForm2('nombre_si','','R','medidas','','R','correo','','R')){
        if(haymaterial()){
          $.ajax({
              url: '/procesar_dije.php',
              type: 'POST',
              data:imagen,
              contentType:false,
              processData:false,
              beforeSend:function(objeto){
                      $('#carga').css({display:'block'});
                  },
              complete:function(){
                $('#carga').css('display','none')
            },
              success: function(respuesta) {
                resp=respuesta;
                 $("#mensaje").html(resp);
              }
          })
        }
      }
        return false;
}

function activar_radio(){
   var respuesta=$('input:radio[name=posee]:checked').val();
   if(respuesta == 'No'){
      $('#propuestas').css({display:'block'});
   }else{
      $('#propuestas').css({display:'none'});
   }
}

function haymaterial(){
   var er=''
   var checked = []
    $("input:checked").each(function(){
        checked.push(parseInt($(this).val()));
    });
    console.log(checked.length);
    if(checked.length <= 0){
        er='<div class="alert alert-danger">Error: Debe seleccionar al menos un material</div>';
        $("#mensaje").empty();
        $("#mensaje").html(er);
        return false
    }else{
        return true
    }
}