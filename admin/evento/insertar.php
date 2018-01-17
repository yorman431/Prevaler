<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Evento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.evento.php'); 

$auth = new Auth;
$auth->permisos();

$evento = new Evento;

$evento->insertar_evento();

if(isset($evento->mensaje) && $evento->mensaje=="error"){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El número de contrato que esta insertando ya existe en el sistema!</td></tr>";
	$smarty->assign("mensaje", $mensaje);
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("categoria", $evento->categoria);
$smarty->assign("nombres", $evento->nombre);
$smarty->assign("fecha", $evento->fecha);
$smarty->assign("descripcion", $evento->descripcion);
$smarty->assign("accion", $evento->accion);
$smarty->display('admin/evento/formulario.tpl');
/* Fin footer para Smarty */
?> 