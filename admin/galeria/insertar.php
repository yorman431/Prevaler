<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Galeria
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.galeria.php'); 

$auth = new Auth;
$auth->permisos();

$galeria = new Galeria;

$galeria->insertar_galeria();

if(isset($galeria->mensaje) && $galeria->mensaje=="error"){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El n�mero de contrato que esta insertando ya existe en el sistema!</td></tr>";
	$smarty->assign("mensaje", $mensaje);
}
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $galeria->nombre);
$smarty->assign("fecha", $galeria->fecha);
$smarty->assign("descripcion", $galeria->descripcion);
$smarty->assign("accion", $galeria->accion);
$smarty->display('admin/galeria/formulario.tpl');
/* Fin footer para Smarty */
?> 