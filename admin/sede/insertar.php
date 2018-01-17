<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.hotel.php');
include_once(CONFIG_DIR . 'class.facilidad.php');

$auth = new Auth;
$auth->permisos();
$hotel = new Hotel;
//var_dump($_POST);exit;
$hotel->insertar_hotel();

$facilidad = new Hotel;
$facilidad->listar_facilidad_hotel($_GET['id']);

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
//$smarty->assign('ciudad_activa', $_SESSION['ciudad_admin']);
$smarty->assign("id", $hotel->id);
$smarty->assign("estado",$hotel->estado);
$smarty->assign("ciudad", $hotel->ciudad);
$smarty->assign("latitud", $hotel->latitud);
$smarty->assign("longitud", $hotel->longitud);
$smarty->assign("codigo", $hotel->codigo);
$smarty->assign("nombres", $hotel->nombre);
$smarty->assign("prioridad", $hotel->prioridad);
$smarty->assign("ubicacion", $hotel->ubicacion);
$smarty->assign("contenido", $hotel->descripcion);
$smarty->assign("condiciones", $hotel->condiciones);
$smarty->assign("claves", $hotel->claves);
$smarty->assign("principal", $hotel->principal);
$smarty->assign("fecha", $hotel->fecha);
$smarty->assign("especialidad", $facilidad->listado);
$smarty->assign("telefono", $hotel->telefono);
$smarty->assign("listado", $hotel->listado);
$smarty->assign("listado2", $hotel->listado2);
$smarty->assign("accion", $hotel->accion);
$smarty->display('admin/hotel/formulario.tpl');
