function agregarServicio(sede) {
  var element = $('#servicios');
  var titulo = $('#servTitulo');
  var descripcion = $('#servDescripcion');

  $.ajax({
    url: '/admin/sede/servicio.php',
    method: 'POST',
    data:{
      titulo: titulo.val(),
      descripcion: descripcion.val(),
      accion: 'agregar',
      sede: sede
    },
    dataType:'json',
    success: function (servicio) {
      element.append('<div id="servicio'+servicio.id+'" class="form-group"><h5><strong>'+servicio.titulo.toUpperCase()+' <i class="fa fa-pencil" onclick="mostrarServicio('+servicio.id+','+sede+')"></i>&nbsp;&nbsp;<i class="fa fa-trash" onclick="eliminarServicio('+servicio.id+')"></i></strong></h5></div>');
    }
  });

  titulo.val('');
  descripcion.val('');
}

function mostrarServicio (id, sede) {
  var titulo = $('#servTitulo');
  var descripcion = $('textarea#servDescripcion');
  var button = $('#serviceButton');

  $.ajax({
    url: '/admin/sede/servicio.php',
    method: 'POST',
    data:{
      id: id,
      accion: 'mostrar'
    },
    dataType:'json',
    success: function (servicio) {
      titulo.val(servicio.titulo);
      descripcion.val(servicio.descripcion);
    }
  });

  button.empty();
  button.append('<button type="button" id="serviceButton" class="btn btn-primary" onclick="actualizarServicio('+id+','+sede+')"><i class="fa fa-upload"></i>&nbsp;&nbsp;Actualizar</button>');
}

function actualizarServicio (id, sede) {
  var titulo = $('#servTitulo');
  var descripcion = $('textarea#servDescripcion');
  var button = $('#serviceButton');
  var element = $('#servicio'+id);

  element.empty();
  $.ajax({
    url: '/admin/sede/servicio.php',
    method: 'POST',
    data:{
      id: id,
      titulo: titulo.val(),
      descripcion: descripcion.val(),
      accion: 'editar'
    },
    dataType:'json',
    success: function (servicio) {
      element.append('<div id="servicio'+servicio.id+'" class="form-group"><h5><strong>'+servicio.titulo.toUpperCase()+' <i class="fa fa-pencil" onclick="mostrarServicio('+servicio.id+','+sede+')"></i>&nbsp;&nbsp;<i class="fa fa-trash" onclick="eliminarServicio('+servicio.id+')"></i></strong></h5></div>');
    }
  });

  titulo.val('');
  descripcion.val('');
  button.empty();
  button.append('<button type="button" class="btn btn-success" onclick="agregarServicio('+sede+')"><i class="fa fa-plus"></i>&nbsp;&nbsp;Guardar</button>');
}

function eliminarServicio(id){
  var element = $('#servicio'+id);

  $.ajax({
    url: '/admin/sede/servicio.php',
    method: 'POST',
    data:{
      id: id,
      accion: 'eliminar'
    },
    dataType:'json',
    success: function (data) {

    }
  });
  element.empty();
}