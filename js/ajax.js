
function cargar_especialidad(){
	var sede = $("#sede").val();

	$.ajax({
		url: '/js/ajax/especialidad.php',
        type: 'POST',
        data:{
            sede: sede
        },
        dataType: 'html',
        beforeSend:function(objeto){
                $('#carga').css('display','block');
            },
        complete:function(){
          $('#carga').css('display','none');
        },
        success: function(data){
            $("#especialidad").empty();
            $("#especialidad").append(data);
            $("#input_especialidad").css("display", "flex");
            $("#input_medico").css("display", "none");
        }
	})
}

function cargar_medico(){
	var especialidad = $("#especialidad").val();
	var sede = $("#sede").val();

	$.ajax({
		url: 'js/ajax/medico.php',
        type: 'POST',
        data:{
            especialidad: especialidad,
            sede: sede
        },
        dataType: 'html',
        beforeSend:function(objeto){
                $('#carga').css('display','block');
            },
        complete:function(){
          $('#carga').css('display','none');
        },
        success: function(data){
            $("#medico").empty();
            $("#medico").append(data);
            $("#input_medico").css("display", "flex");
        }
	})
}

function especialidad_admin(){
    var sede = $("#sede").val();

    $.ajax({
        url: '/js/ajax/especialidad_admin.php',
        type: 'POST',
        data:{
            sede: sede
        },
        dataType: 'html',
        success: function(data){
            $("#especialidad").empty();
            $("#especialidad").append(data);
        }
    })
}


function mostrar_descripcion(){
    var seguro = $("#seguro").val();

    $.ajax({
        url: '/js/ajax/descripcion_seguro.php',
        type: 'POST',
        data:{
            seguro: seguro
        },
        dataType: 'html',
        beforeSend:function(objeto){
                $('#cargar').css('display','block');
            },
        complete:function(){
          $('#cargar').css('display','none');
        },
        success: function(data){
            $("#seguro_desc").empty();
            $("#seguro_desc").append(data);
        }
    })
}