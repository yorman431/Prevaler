<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Contenido
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.seguro.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$seguro = new Seguro;
$seguro->accion="Detalles de la Aseguradora";
$seguro->mostrar_seguro();

$imagen=new Galeria;
$imagen->mostrar_imagenes("seguro");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disposible</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado", $imagen->listado);
$smarty->assign("listado2", $seguro->listado2);
$smarty->assign("nombres", $seguro->nombre);
$smarty->assign("id", $seguro->id);
$smarty->assign("descripcion", $seguro->descripcion);
$smarty->assign("accion", $seguro->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/seguro/detalle.tpl');
/* Fin footer para Smarty */
?> 