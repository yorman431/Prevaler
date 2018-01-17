<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.contenido.php');

$auth = new Auth;
$auth->permisos();

$contenido = new Contenido;

$contenido->editar_contenido();
if($contenido->mensaje==1){
	$mensaje="<div class='alert alert-success'>El Contenido ha sido actualizado con exito</div>";	
}

if(isset($_POST['enlace']) && $_POST['enlace']!=""){
	$contenido->buscar_enlaces($_POST['enlace']);
	$smarty->assign("enlace", $contenido->get_enlace2($_POST['enlace']));
}else{
	$smarty->assign("enlace", $contenido->enlace);
	$smarty->assign("subenlace", $contenido->subenlace);
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado", $contenido->listado);
$smarty->assign("listado2", $contenido->listado2);
$smarty->assign("nombres", $contenido->nombre);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("subenlace", $contenido->subenlace);
$smarty->assign("fecha", $contenido->fecha);
$smarty->assign("contenido", $contenido->contenido);
$smarty->assign("prioridad", $contenido->prioridad);
$smarty->assign("accion", $contenido->accion);
$smarty->display('admin/contenido/formulario.tpl');
