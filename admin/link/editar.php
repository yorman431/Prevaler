<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Editar Link
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');

$auth = new Auth;
$auth->permisos();

$link = new Link;

$link->editar_link();
if($link->mensaje==1){
	$mensaje="<div class='alert alert-danger'>Este enlace no existe en el sistema</div>";	
}elseif($link->mensaje==2){
   $mensaje="<div class='alert alert-success'>El nuevo enlace fue modificado con éxito</div>";	
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $link->nombre);
$smarty->assign("accion", $link->accion);
$smarty->assign("etiqueta", $link->etiqueta);
$smarty->assign("tipo", $link->tipo);
$smarty->assign("prioridad", $link->prioridad);
$smarty->assign("claves", $link->claves);
$smarty->assign("descripcion", $link->descripcion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/link/formulario.tpl');
