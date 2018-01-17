<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */
// Editar de testimonio
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.testimonio.php');

$auth = new Auth;
$auth->permisos();

$testimonio = new Testimonio;

$testimonio->editar_testimonio();
if($testimonio->mensaje==1){
	$mensaje="<div class='alert alert-success'>El Testimonio ha sido actualizado con exito</div>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("fecha", $testimonio->fecha);
$smarty->assign("titulo", $testimonio->titulo);
$smarty->assign("comentario", $testimonio->comentario);
$smarty->assign("estrellas", $testimonio->estrellas);
$smarty->assign("accion", $testimonio->accion);
$smarty->display('admin/testimonio/formulario.tpl');
/* Fin footer para Smarty */
?> 