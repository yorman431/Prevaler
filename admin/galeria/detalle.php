<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Galeria
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.galeria.php'); 

$auth = new Auth;
$auth->permisos();

$galeria=new Galeria;
$galeria->mostrar_galeria();

$galeria->mostrar_imagenes("galeria");

$mensaje="";
if($galeria->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible</td></tr>";	
}

$galeria->accion="Detalles de Galeria";

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("id", $galeria->id);
$smarty->assign("nombres", $galeria->nombre);
$smarty->assign("fecha", $galeria->fecha);
$smarty->assign("descripcion", $galeria->descripcion);
$smarty->assign("accion", $galeria->accion);
$smarty->assign("mensaje", $mensaje);
if(isset($galeria->listado) && $galeria->listado!="")
	$smarty->assign('listado', $galeria->listado);
// display results
$smarty->force_compile=true;
$smarty->display('admin/galeria/detalle.tpl');
/* Fin footer para Smarty */
?> 