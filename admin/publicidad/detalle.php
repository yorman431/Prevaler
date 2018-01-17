<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.publicidad.php'); 

$auth = new Auth;
$auth->permisos();

$publicidad=new Publicidad;
$publicidad->mostrar_publicidad();

$publicidad->mostrar_imagenes("publicidad");

$mensaje="";
if($publicidad->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No images available!</td></tr>";	
}

$publicidad->accion="Advertising Details";

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("id", $publicidad->id);
$smarty->assign("nombres", $publicidad->nombre);
$smarty->assign("fecha", $publicidad->fecha);
$smarty->assign("descripcion", $publicidad->descripcion);
$smarty->assign("accion", $publicidad->accion);
$smarty->assign("mensaje", $mensaje);
if(isset($publicidad->listado) && $publicidad->listado!="")
	$smarty->assign('listado', $publicidad->listado);
// display results
$smarty->display('admin/publicidad/detalle.tpl');