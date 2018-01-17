<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Link
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$link = new Link;
$link->accion="Detalles de Enlaces";
$link->mostrar_link();

if($link->mensaje!="si"){
	$mensaje="No hay subenlace disponible";	
}

$imagen=new Galeria;
$imagen->mostrar_imagenes("link");
if($imagen->mensaje!="si"){
	$mensaje2="No hay imagen disponible";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $link->nombre);
$smarty->assign("id", $link->id);
$smarty->assign("prioridad", $link->prioridad);
$smarty->assign("etiqueta", $link->etiqueta);
$smarty->assign("claves", $link->claves);
$smarty->assign("tipo", $link->tipo);
$smarty->assign("descripcion", $link->descripcion);
$smarty->assign("listado", $link->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("accion", $link->accion);
$smarty->assign("imagenes", $imagen->listado);
$smarty->display('admin/link/detalle.tpl');
/* Fin footer para Smarty */
?> 