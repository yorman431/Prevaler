<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');

require_once(CONFIG_DIR . 'setupadmin.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.medico.php');
include_once(CONFIG_DIR . 'class.facilidad.php'); 
include_once(CONFIG_DIR . 'class.hotel.php');

$auth = new Auth;
$auth->permisos();

$medico = new Medico;

$medico->editar_medico();
if($medico->mensaje==1){
	$mensaje="<div class='alert alert-success'>El Especialista ha sido actualizado con exito</div>";	
}

$facilidad = new Facilidad;
$facilidad->listar_facilidad();

$hotel = new Hotel;
$hotel->listar_hotel();



/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado1", $facilidad->listado);
$smarty->assign("listado2", $hotel->listado);
$smarty->assign("nombres", $medico->nombre);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("especialidad", $medico->especialidad);
$smarty->assign("sede", $medico->sede);
$smarty->assign("contenido", $medico->contenido);
$smarty->assign("prioridad", $medico->prioridad);
$smarty->assign("accion", $medico->accion);
$smarty->display('admin/medico/formulario.tpl');
/* Fin footer para Smarty */
?> 