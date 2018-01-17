function restaurar_datos(){
  // Requerimos la data guardada en formato JSON
  var datos = JSON.parse(localStorage.getItem("producto"));
   if(!$.isEmptyObject(datos)){
     $.each(datos, function(i, item){
        var cantidad = parseInt(cantidad)+parseInt(datos[i][0].cantidad);
     });
      
      $.ajax({
          url: '/localstorage.php',
          type: 'POST',
          data: {myData: datos},
          success: function(cant){
              console.log(cant);
              $("#cant_producto").empty();
              $("#cant_producto").append(cant);
          }
      })
  }
  
  return true;
}

function almacenar_datos(){
  //me quede porque validar que si es un mismo elem incremente y
  // si elimina en la session eliminar del local storage
  var bandera = false;
	var i = event.target.id;
	var indice= i.getAttribute('value');
	var nombre  =$("#nombre_"+indice).text();
	var cantidad=$("#cantidad_"+indice).val();
	var id = $("#id_"+indice).val(); 
  var datos = JSON.parse(localStorage.getItem("producto"));
  console.log(producto);
    if($.isEmptyObject(datos)){
      var producto =[
      [ 
        {
          id:id,
          nombre: nombre, 
          cantidad: cantidad
        }
      ]
    ]
        datos=producto;
        console.log("vacio",datos);
    }else{
  
      $.each(datos, function(i, item){
        console.log(i);
        console.log(datos[i][0].id);
        if(datos[i][0].id == id){
            cantidad=parseInt(cantidad)+(parseInt(datos[i][0].cantidad));
            cantidad=cantidad.toString();
            datos[i][0].cantidad=cantidad;
            bandera=true;
        }
      });
      console.log("igual",datos);
      if(bandera==false){
            var producto = 
              [{
                id:id,
                nombre: nombre, 
                cantidad: cantidad
              }]
            datos.push(producto);
            console.log("nuevo",datos);  
      }
    }
// Convirtiendo JSON en string y Almacenando
localStorage.setItem("producto", JSON.stringify(datos));

  return true;
}

function eliminar_datos(){
  var productos = $("#envio").val();
  var id  = $("#eliminar").attr("title");
  console.log(productos);
  if(productos == "Realizar Pedido"){
    localStorage.removeItem("producto");
  }

  if(id != ""){
    var datos = JSON.parse(localStorage.getItem("producto"));
    $.each(datos, function(i, item){
      console.log(datos);
       if(datos[i][0].id == id){
          datos.splice(i, 1);
          localStorage.setItem("producto", JSON.stringify(datos));
       }
    });

  }
	return true;
}

//carga el ultimo registro insertado en un formulario
function guardar_ultimo(){
  var nombre   =$("#nombre").val();
  var categoria=$("#categoria").val();
  var prioridad= $("#prioridad").val();
  var detal = $("#detal").val();
  var mayor = $("#mayor").val();
  var limite = $("#limite").val();
  var claves = $("#claves").val();
  var descripcion = $("#descripcion").val();
  var producto =
    {
      nombre:nombre, 
      prioridad:prioridad,
      detal:detal,
      mayor:mayor,
      limite:limite,
      claves:claves,
      descripcion:descripcion,
      facilidad:facilidad
    }
  localStorage.setItem("ultimo", JSON.stringify(producto));
  return true;
}

function cargar_ultimo(){
  var ultimo = JSON.parse(localStorage.getItem("ultimo"));
  $("#nombre").empty();
  $("#nombre").val(ultimo['nombre']);
  $("#prioridad").empty();
  $("#prioridad").val(parseInt(ultimo['prioridad']));
  $("#detal").empty();
  $("#detal").val(parseInt(ultimo['detal']));
  $("#mayor").empty();
  $("#mayor").val(parseInt(ultimo['mayor']));
  $("#limite").empty();
  $("#limite").val(parseInt(ultimo['limite']));
  $("#claves").empty();
  $("#claves").append(ultimo['claves']);
  $("#descripcion").empty();
  $("#descripcion").append(ultimo['descripcion']);

  return true;
}

