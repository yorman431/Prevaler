<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');

//Asignaciones para formulario
session_start();

$auth = new Auth;
$auth->permisos();

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='5' class='titulo'>Bienvenido a su Sistema de Gestión de Contenidos Web Nick Auto Glass., Versión 2.0.2</td></tr>";	
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios para entrar a esta &aacute;rea</td></tr>";	
}else if($auth->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$auth->mensaje</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);

$smarty->assign('accion', "Panel Principal");
$smarty->assign('mensaje', $mensaje);
$smarty->force_compile=true;
$smarty->display('admin/panel_central.tpl');