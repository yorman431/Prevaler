<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Contenido
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.medico.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$medico = new Medico;
$medico->accion="Detalles del Especialista";
$medico->mostrar_medico();

$imagen=new Galeria;
$imagen->mostrar_imagenes("medico");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disposible</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado", $imagen->listado);
$smarty->assign("listado2", $medico->listado2);
$smarty->assign("nombres", $medico->nombre);
$smarty->assign("id", $medico->id);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("especialidad", $medico->especialidad);
$smarty->assign("sede", $medico->sede);
$smarty->assign("contenido", $medico->contenido);
$smarty->assign("prioridad", $medico->prioridad);
$smarty->assign("accion", $medico->accion);
$smarty->display('admin/medico/detalle.tpl');
/* Fin footer para Smarty */
?> 