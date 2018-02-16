<?php
require('config/setup.php');

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once ("config/class.hotel.php");
include_once ("config/class.registro.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.medico.php");
include_once ("config/class.contenido.php");
include_once ("config/class.facilidad.php");

session_start();

if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Entrar"){
		$registro = new Registro;
		$registro->insertar_registro_publico();
	}
	if ($_POST['enviar'] == "Salir")
		$acceso->logout();

	if ($_POST['envio'] == "Enviar"){
		$acceso->enviar_contacto();
		$mensaje2="<tr><td align='center' colspan='2' class='ok'>$acceso->mensaje</td></tr>";
		$acceso->mensaje="";
	}
}

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesión de usuario a caducado! ingrese de nuevo!</td></tr>";
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta área!</td></tr>";
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("arriba");

if(!isset($banner1))
	$banner1= new Banner;
$banner1->listar_banner_ubicacion("derecha");

if(!isset($banner2))
	$banner2= new Banner;
$banner2->listar_banner_ubicacion("izquierda");

if(!isset($publicidad1))
	$publicidad1= new Publicidad;
$publicidad1->cargar_publicidad("Publicidad 1");

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Publicidad 2");

if(!isset($hotel))
	$hotel = new Hotel();
$hotel->mostrar_hotel_img();
$servicios = $hotel->mostrarServicio($_GET['id']);

$facilidad = new Hotel;
$facilidad->listar_facilidad_hotel2($_GET['id']);


if(!isset($medico))
	$medico= new Medico;
$medico->listar_medico_publico($_GET['id']);

$content=1;

/*

var_dump($medico->listado);
exit();


*/

$mensaje2="";


$mapas="<script type='text/javascript'>
			  var map;
			  var infowindow;
		
			  function initialize() {
				var pyrmont = new google.maps.LatLng($hotel->latitud, $hotel->longitud);
		
				map = new google.maps.Map(document.getElementById('map'), {
				  mapTypeId: google.maps.MapTypeId.ROADMAP,
				  center: pyrmont,
				  zoom: 16
				});
				
				var image = '/imagenes/$logo';
				var myLatLng = new google.maps.LatLng($hotel->latitud, $hotel->longitud);
				var beachMarker = new google.maps.Marker({
				  position: myLatLng,
				  map: map,
				  icon: image
			  });
		  
				var request = {
				  location: pyrmont,
				  radius: 200,
				  types: ['store']
				};
				infowindow = new google.maps.InfoWindow();
				var service = new google.maps.places.PlacesService(map);
				service.search(request, callback);
			  }
		
			  function callback(results, status) {
				if (status == google.maps.places.PlacesServiceStatus.OK) {
				  for (var i = 0; i < results.length; i++) {
					createMarker(results[i]);
				  }
				}
			  }
		
			  function createMarker(place) {
				var placeLoc = place.geometry.location;
				var marker = new google.maps.Marker({
				  map: map,
				  position: place.geometry.location
				});
		
				google.maps.event.addListener(marker, 'click', function() {
				  infowindow.setContent(place.name);
				  infowindow.open(map, this);
				});
			  }
		
			  google.maps.event.addDomListener(window, 'load', initialize);
			</script>";

/* footer para Smarty */
$smarty->assign("accion","Sedes");
$smarty->assign("activo", $cont);
$smarty->assign("claves", $contenido->claves);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje3", $mensaje3);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("id", $hotel->id);
$smarty->assign("estado", $hotel->estado);
$smarty->assign("ciudad", $hotel->ciudad);
$smarty->assign("codigo", $hotel->codigo);
$smarty->assign("nombres", $hotel->nombre);
$smarty->assign("telefono", $hotel->telefono);
$smarty->assign("prioridad", $hotel->prioridad);
$smarty->assign("ubicacion", $hotel->ubicacion);
$smarty->assign("descripcion", $hotel->descripcion);
$smarty->assign("condiciones", $hotel->condiciones);
$smarty->assign("claves", $hotel->claves);
$smarty->assign("principal", $hotel->principal);
$smarty->assign("latitud", $hotel->latitud);
$smarty->assign("longitud", $hotel->longitud);
$smarty->assign("fecha", $hotel->fecha);
//$smarty->assign("facilidad", $facilidad->listado);
$smarty->assign("listado", $hotel->listado);
$smarty->assign('servicios', $servicios);
$smarty->assign("enlaces_A", $link->listado);
$smarty->assign("banner1", $banner1->listado);
$smarty->assign("banner2", $banner2->listado);
$smarty->assign("publicidad1", $publicidad1->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("especialidad", $facilidad->listado);
$smarty->assign("mapas", $mapas);
$smarty->assign("medico", $medico->listado);
$smarty->force_compile=true;
$smarty->display('sedes.tpl');
