<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar SubLink
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');

$auth = new Auth;
$auth->permisos();

$link = new Link;

$link->guardar_sublink();
if($link->mensaje==1){
	$mensaje="El sub-enlace que esta insertando ya existe en el sistema";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombre", $link->nombre);
$smarty->assign("prioridad", $link->prioridad);
$smarty->assign("etiqueta", $link->etiqueta);
$smarty->assign("accion", $link->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/link/formulario2.tpl');
