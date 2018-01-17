<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.facilidad.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$facilidad = new Facilidad;
$facilidad->accion="Detalles del Especialidad";
$facilidad->mostrar_facilidad();

$imagen=new Galeria;
$imagen->mostrar_imagenes("especialidad");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible!</td></tr>";	
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("id", $facilidad->id);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("nombres", $facilidad->nombre);
$smarty->assign("etiqueta", $facilidad->etiqueta);
$smarty->assign("accion", $facilidad->accion);
$smarty->assign("listado", $imagen->listado);
$smarty->display('admin/facilidad/detalle.tpl');