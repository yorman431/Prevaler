<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Editar de Link
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');

$auth = new Auth;
$auth->permisos();

$link = new Link;

$link->editar_sublink();
if($categoria->mensaje==1){
	$mensaje="El login que esta insertando ya existe en el sistema";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $link->nombre);
$smarty->assign("prioridad", $link->prioridad);
$smarty->assign("etiqueta", $link->etiqueta);
$smarty->assign("accion", $link->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/link/formulario2.tpl');
/* Fin footer para Smarty */
?> 