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

$medico->insertar_medico();

$facilidad = new Facilidad;
$facilidad->listar_facilidad();

$hotel = new Hotel;
$hotel->listar_hotel();

if($medico->mensaje2==2){
	$mensaje="<div class='alert alert-danger'>El nombre del Especialista que usted esta insertando ya existe en el sistema</div>";
	$smarty->assign("enlace", 8);
}elseif($medico->mensaje2==1){
    $mensaje="<div class='alert alert-success'>El Especialista se ha insertando con exito</div>";
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado1", $facilidad->listado);
$smarty->assign("listado2", $hotel->listado);
$smarty->assign("listado", $medico->listado2);
$smarty->assign("nombres", $medico->nombre);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("fecha", $medico->fecha);
$smarty->assign("prioridad", $medico->prioridad);
$smarty->assign("contenido", $medico->contenido);
$smarty->assign("accion", $medico->accion);
$smarty->assign("sede", $medico->sede);
$smarty->assign("especialidad", $medico->especialidad);
$smarty->display('admin/medico/formulario.tpl');