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
$contenido->insertar_contenido($conex);
if(isset($_POST['enlace']) && $_POST['enlace']!=""){
	$contenido->buscar_enlaces($_POST['enlace']);
	$smarty->assign("enlace", $_POST['enlace']);
}else{
	$contenido->buscar_enlaces(1);
	$smarty->assign("enlace", 1);
}

if($contenido->mensaje2==2){
	$mensaje="<div class='alert alert-danger'>El nombre del contenido que usted esta insertando ya existe en el sistema</div>";
	$smarty->assign("enlace", 8);
}elseif($contenido->mensaje2==1){
    $mensaje="<div class='alert alert-success'>El contenido se ha insertando con exito</div>";
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
$smarty->assign("prioridad", $contenido->prioridad);
$smarty->assign("contenido", $contenido->contenido);
$smarty->assign("accion", $contenido->accion);
$smarty->display('admin/contenido/formulario.tpl');