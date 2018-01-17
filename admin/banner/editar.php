<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Editar Banner
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.banner.php'); 

$auth = new Auth;
$auth->permisos();

$banner = new Banner;

$banner->editar_banner();
if($banner->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El login que esta insertando ya existe en el sistema!</td></tr>";	
}
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("etiqueta", $banner->etiqueta);
$smarty->assign("efecto", $banner->efecto);
$smarty->assign("vinculo", $banner->vinculo);
$smarty->assign("accion", $banner->accion);
$smarty->display('admin/banner/formulario.tpl');
/* Fin footer para Smarty */
?> 