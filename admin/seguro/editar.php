<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.seguro.php');

$auth = new Auth;
$auth->permisos();

$seguro = new Seguro;

$seguro->editar_seguro();
if($seguro->mensaje==1){
	$mensaje="<div class='alert alert-success'>La Aseguradora ha sido actualizada con exito</div>";	
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $seguro->nombre);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("descripcion", $seguro->descripcion);
$smarty->assign("accion", $seguro->accion);
$smarty->display('admin/seguro/formulario.tpl');