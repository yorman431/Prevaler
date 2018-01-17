<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de SubLink
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');
include_once(CONFIG_DIR . 'class.galeria.php'); 

$auth = new Auth;
$auth->permisos();

$link = new Link;
$link->accion="Detalles del Subenlace";
$link->mostrar_sublink();

$imagen=new Galeria;
$imagen->mostrar_imagenes("subcategoria");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible!</td></tr>";	
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
$smarty->assign("listado", $imagen->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", $link->accion);
$smarty->display('admin/link/detalle_sublink.tpl');
/* Fin footer para Smarty */
?> 