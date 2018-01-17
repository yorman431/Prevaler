<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Banner
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.banner.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$banner = new Banner;
$banner->listar_banner();

if($banner->mensaje!="si"){
	$mensaje="<div class='alert alert-danger'>No hubo resultados de la consulta requerida!</div>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $banner->buscar);
$smarty->assign('accion', "Banners del Sitio Web");
// assign your db results to the template
if(isset($banner->listado) && $banner->listado!="")
	$smarty->assign('listado', $banner->listado);
	
$smarty->assign("mensaje", $mensaje);

// display results
$smarty->force_compile=true;
$smarty->display('admin/banner/lista_banner.tpl');
/* Fin footer para Smarty */
?>