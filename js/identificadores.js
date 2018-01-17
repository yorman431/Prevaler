
function escribir(){
    var entrada = '<textarea  cols="30" rows="7" class="form-control" name="texto" value="" onkeyup = "javascripts: if(event.keyCode == 13) montar_texto();" id="campo_texto"></textarea>';
     $("#muestra_texto").css('display','block');
     $("#muestra_texto").empty();
     $("#muestra_texto").append(entrada);
    return false;
}

function montar_texto(){
    var texto =$('#campo_texto').val();
    var texto_format = '<div onclick="javascript: return linea_punteadaon2();" id="texto" style="font-size:12px;">'+texto+'</div>';
    var campo_size = '<select class="form-control"  name="size" onchange= "javascripts: cambiar_size_texto();" id="campo_size">';
    for (i = 1; i < 64; i++){
     campo_size+="<option value="+i+">"+i+"</option>";
    }
    campo_size+="</select>";
    var campo_font = '<select class="form-control"  name="font" onchange= "javascripts: cambiar_font_texto();" id="campo_font"><option style="font-family:'+'Arial'+';" value="Arial">Arial</option><option style="font-family:'+'Times New Roman'+';" value="Times New Roman">Times New Roman</option><option style="font-family:'+'Courier New'+';" value="Courier New">Courier New</option><option style="font-family:'+'monospace'+';"  value="monospace">monospace</option><option style="font-family:'+'Georgia'+';"  value="Georgia">Georgia</option><option style="font-family:'+'Verdana'+';" value="Verdana">Verdana</option><option style="font-family:'+'Geneva'+';" value="Geneva">Geneva</option><option style="font-family:'+'Calibri'+';" value="Calibri">Calibri</option><option style="font-family:'+'BradleyHandITC'+';" value="BradleyHandITC">Bradley Hand ITC</option><option style="font-family:'+'Mistral'+';"  value="Mistral">Mistral</option><option style="font-family:'+'MonotypeCorsiva'+';"  value="MonotypeCorsiva">Monotype Corsiva</option><option style="font-family:'+'Vijaya'+';"  value="Vijaya">Vijaya</option><option style="font-family:'+'ScriptoramaHostessJF'+';"  value="ScriptoramaHostessJF">ScriptoramaHostessJF</option><option style="font-family:'+'Georgia'+';"  value="Georgia">Georgia</option><option style="font-family:'+'Verdana'+';" value="Verdana">Verdana</option><option style="font-family:'+'Geneva'+';" value="Geneva">Geneva</option><option style="font-family:'+'Calibri'+';" value="Calibri">Calibri</option><option style="font-family:'+'BradleyHandITC'+';" value="BradleyHandITC">Bradley Hand ITC</option><option style="font-family:'+'Mistral'+';"  value="Mistral">Mistral</option><option style="font-family:'+'MonotypeCorsiva'+';"  value="MonotypeCorsiva">Monotype Corsiva</option><option style="font-family:'+'Vijaya'+';"  value="Vijaya">Vijaya</option><option style="font-family:'+'LucidaHandwriting-Italic'+';"  value="LucidaHandwriting-Italic">Lucida Handwriting</option><option style="font-family:'+'LucidaCalligraphy-Italic'+';"  value="LucidaCalligraphy-Italic">Lucida Calligraphy</option></select>'; 
     $("#muestra_texto_size").css('display','block');
     $("#muestra_texto_font").css('display','block');
     $("#muestra_texto_letter").css('display','block');
     $("#muestra_texto_align").css('display','block');
     $("#eliminar_text").css('display','block');
     $("#muestra_grado").css('display','block');
     $("#muestra_texto_size").empty();
     $("#muestra_texto_font").empty();
     $("#muestra_texto_size").append(campo_size);
     $("#muestra_texto_font").append(campo_font);
     $("#contenedor_texto").css('display','block');
     $("#contenedor_texto").css('left','120px');
     $("#contenedor_texto").css('top','256px');
     $("#contenedor_texto").css('width','300px');
     if ($("#texto").length){
        $("#texto").text(texto);
    }else{
        $("#contenedor_texto").append(texto_format);
    }
}

function linea_punteadaon(){
    $("#porta_imagen").css('border-color','#333333');
}

function linea_punteadaoff(){
    $("#porta_imagen").css('border-color','transparent');
    $("#contenedor_texto").css('border-color','transparent');
}

function linea_punteadaon2(){
    $("#contenedor_texto").css('border-color','#333333');
}


var loadFile = function(event){
    var ancho = $("#placa").width();
    var alto  = $("#placa").height();
    var imagen = window.URL.createObjectURL(event.target.files[0]);
    var imagen_format ='<img id="imagen" class="img-responsive" onclick="javascript: return linea_punteadaon();"  src="'+imagen+'"/>';
     $("#porta_imagen").css('display','block');
     $("#muestra_slider").css('display','block');
     $("#eliminar_img").css('display','block');
     if ($("#imagen").length){
        $("#imagen").attr('src',imagen);
     }else{
        $("#porta_imagen").append(imagen_format);
     }
     $("#porta_imagen").css('left','30%');
     $("#porta_imagen").css('top','35%');
     $("#porta_imagen").css('max-width', ancho+'px');
     $("#portal_imagen").css('max-height', alto+'px'); 
     $('#miModal').css('display','none');

};

function cambiar_font_texto(){
    var font =$( "#campo_font option:selected" ).text();
    $("#texto").css('font-family',font);
}
function cambiar_letter_italica(){
    if($( "#italic" ).hasClass( 'active')){
        $("#texto").css('font-style','normal');
        $("#italic").removeClass('active');
    }else{
        $("#texto").css('font-style','italic');
        $("#italic").addClass('active'); 
    }
}

function cambiar_letter_bold(){
    if($("#bold").hasClass( 'active')){
        $("#texto").css('font-weight','normal');
        $("#bold").removeClass('active');
    }else{
        $("#texto").css('font-weight','bold');
        $("#bold").addClass('active');   
    }      
}

function cambiar_letter_underline(){
    if($("#underline" ).hasClass( 'active')){ 
        $("#texto").css('text-decoration','none');
        $("#underline").removeClass('active');
    }else{
        $("#texto").css('text-decoration','underline');
        $("#underline").addClass('active');   
    }    
}
 
function cambiar_size_texto(){
    var size =$( "#campo_size option:selected" ).text();
    $("#texto").css('font-size',size+"px");
}

function cambiar_align_left(){
   
        $("#texto").css('text-align','left');
        $("#left").addClass('active'); 
 
}

function cambiar_align_center(){
   
        $("#texto").css('text-align','center');
        $("#center").addClass('active'); 
 }

function cambiar_align_right(){
 
        $("#texto").css('text-align','right');
        $("#right").addClass('active'); 
   
}

function cambiar_align_justify(){
 
        $("#texto").css('text-align','justify');
        $("#justify").addClass('active'); 
   
}

function eliminar_imagen(){
        $("#imagen").remove();
        $("#porta_imagen").css('display','none');
        $("#slider").slider({
          value: 0
        })
}

function eliminar_texto(){
        $("#texto").remove();
        $("#contenedor_texto").css('display','none');
}

function elegir_identificador(){
    var identificador =$('#identificadores').val();
    $.ajax({
                url: '/seleccionar_identificador.php',
                type: 'POST',
                data:{
                    identificador: identificador
                },
                async: true,
                success: function(valor){  
                    imagen="/imagenes/"+valor;
                    $("#placa").attr("src",imagen);
                    $("#ident_final").val(identificador);
                    
                    
                }
        })

   return false;
        
}

function cantidad_identificadores(){
    var laminas = $("#laminas").val().split('_');
    var alto = $("#alto").val();
    var ancho = $("#ancho").val();
    var cantlam = $("#cantlam").val();
    var aprox=0
    var costo =laminas[1]
    var total = (costo * cantlam);
    alto=(28/alto);
    ancho=(20/ancho);
    aprox=ancho*alto;
    aprox=(aprox*0.7);
    aprox=Math.trunc(aprox);
    $("#monto_final").val(total);
    $("#cantidad_final").val(aprox);
    $("#cantidad").empty();
    $("#cantidad").append(aprox);
    $("#monto").empty();
    $("#monto").append(total);
   

    return false;
}



