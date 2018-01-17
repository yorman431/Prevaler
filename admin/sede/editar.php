<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.hotel.php');
include_once(CONFIG_DIR . 'class.facilidad.php');

$auth = new Auth;
$auth->permisos();
$auth->nivel_acceso(3,"igual");

$hotel = new Hotel;

$hotel->editar_hotel();
if($hotel->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El login que esta insertando ya existe en el sistema!</td></tr>";	
}

$facilidad = new Hotel;
$facilidad->listar_facilidad_hotel($_GET['id']);


$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("id", $hotel->id);
$smarty->assign("estado",$hotel->estado);
$smarty->assign("ciudad", $hotel->ciudad);
$smarty->assign("latitud", $hotel->latitud);
$smarty->assign("longitud", $hotel->longitud);
$smarty->assign("telefono", $hotel->telefono);
$smarty->assign("codigo", $hotel->codigo);
$smarty->assign("nombres", $hotel->nombre);
$smarty->assign("prioridad", $hotel->prioridad);
$smarty->assign("ubicacion", $hotel->ubicacion);
$smarty->assign("descripcion", $hotel->descripcion);
$smarty->assign("condiciones", $hotel->condiciones);
$smarty->assign("claves", $hotel->claves);
$smarty->assign("principal", $hotel->principal);
$smarty->assign("fecha", $hotel->fecha);
$smarty->assign("especialidad", $facilidad->listado);
$smarty->assign("listado", $hotel->listado);
$smarty->assign("listado2", $hotel->listado2);
$smarty->assign("accion", $hotel->accion);
$smarty->assign('servicios', $hotel->listar_servicio_hotel($_GET['id']));

$smarty->force_compile=true;
$smarty->display('admin/hotel/formulario.tpl');
