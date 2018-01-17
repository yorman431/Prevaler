<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de  Evento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.evento.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$evento=new Evento;
$evento->accion="Detalles del Evento";
$evento->mostrar_evento();

$imagen=new Galeria;
$imagen->mostrar_imagenes("evento");



$mensaje="";
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("id", $evento->id);
$smarty->assign("categoria", $evento->categoria);
$smarty->assign("nombres", $evento->nombre);
$smarty->assign("fecha", $evento->fecha);
$smarty->assign("descripcion", $evento->descripcion);
$smarty->assign("accion", $evento->accion);
$smarty->assign("mensaje", $mensaje);

if(isset($evento->listado) && $evento->listado!="")
	$smarty->assign('listado', $evento->listado);
if(isset($imagen->listado) && $imagen->listado!="")
	$smarty->assign('listado', $imagen->listado);
	
// display results
$smarty->force_compile=true;
$smarty->display('admin/evento/detalle.tpl');
/* Fin footer para Smarty */
?> 