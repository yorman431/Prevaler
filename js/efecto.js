/*Si este condicional es verdadero se intercambia el orden de los elementos en telefonos*/
var mq = window.matchMedia("(min-width: 520px) and (max-width: 768px)");
if (mq.matches) {
    $(".reordenar2").insertAfter(".reordenar1");
} else {
    $(".reordenar1").insertAfter(".reordenar2");
}

function mostrar_menu(id){
	var i = event.target.id;
    console.log(id);
    $(".flecha").css('display','none');
    $(".subcategoria").empty();
    $(".visitado").css('display','none');
	$(".sub"+i).css('display','block');
	$(".sub"+i).addClass('visitado');
    $("."+id).css('display','inline');
    var texto = $("#"+i).text();
    $('.subcategoria').text(texto);
    buscar_img(id);
}

function buscar_img(id){
    var img= "";
    $.ajax({
        url: '/imagen_categoria.php',
        type: 'POST',
        data:{
            id: id
        },
        success: function(data){
            $(".sub").css('display','none');
            $("#imagen_cat").empty(img);
            img="<img class='img-responsive' src='/imagenes/"+data+"'/>";
            $("."+id).css('display','inline');
            $("#imagen_cat").append(img);
        }
    })
}

function portafolio_in(){
    var id = event.currentTarget.id;
    $('.desaparece'+id).css('display','none');
    $('.aparece'+id).css('display','block');
    return true;
}
function portafolio_out(){
    var id = event.currentTarget.id;
    $('.desaparece'+id).css('display','block');
    $('.aparece'+id).css('display','none');
    return true;
}