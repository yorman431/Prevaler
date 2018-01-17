
function cargar_especialidad(){
	var sede = $("#sede").val();

	$.ajax({
		url: 'js/ajax/especialidad.php',
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
        success: function(data){
        	$("#medico").empty();
        	$("#medico").append(data);
        }
	})
}