<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Banner
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.banner.php'); 

$auth = new Auth;
$auth->permisos();

$banner=new Banner;
$banner->mostrar_banner();

$mensaje="";
if($banner->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("id", $banner->id);
$smarty->assign("etiqueta", $banner->etiqueta);
$smarty->assign("ubicacion", $banner->ubicacion);
$smarty->assign("vinculo", $banner->vinculo);
$smarty->assign("url", $banner->url);
$smarty->assign("tipo", $banner->tipo);
$smarty->assign("accion", $banner->accion);
$smarty->assign("mensaje", $mensaje);

// display results
$smarty->force_compile=true;
$smarty->display('admin/banner/detalle.tpl');
/* Fin footer para Smarty */
?> 