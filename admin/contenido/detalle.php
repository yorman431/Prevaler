<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Contenido
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.contenido.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$contenido = new Contenido;
$contenido->accion="Detalles de Contenido";
$contenido->mostrar_contenido();

$imagen=new Galeria;
$imagen->mostrar_imagenes("contenido");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disposible</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("id", $contenido->id);
$smarty->assign("nombres", $contenido->nombre);
$smarty->assign("categoria", $contenido->enlace);
$smarty->assign("subcategoria", $contenido->subenlace);
$smarty->assign("fecha", $contenido->fecha);
$smarty->assign("contenido", $contenido->contenido);
$smarty->assign("accion", $contenido->accion);
$smarty->assign("prioridad", $contenido->prioridad);
$smarty->assign("listado", $imagen->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2);
$smarty->display('admin/contenido/detalle.tpl');
/* Fin footer para Smarty */
?> 