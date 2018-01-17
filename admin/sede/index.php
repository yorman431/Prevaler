<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.hotel.php');

session_start();

$auth = new Auth;
$auth->permisos();

$hotel = new Hotel;
$hotel->listar_hotel();
$data=$hotel->listado;

if($hotel->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='9' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
//$smarty->assign('ciudad_activa', $_SESSION['ciudad_admin']);
$smarty->assign("busqueda", $hotel->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", "Sedes del Sitio Web");
// assign your db results to the template
if($hotel->mensaje=="si")
	$smarty->assign('listado', $hotel->listado);

$smarty->force_compile=true;
$smarty->display('admin/hotel/lista_hotel.tpl');