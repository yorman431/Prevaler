<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.faq.php');


$auth = new Auth;
$auth->permisos();

$faq = new Faq;

$faq->editar_faq();
if($faq->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El login que esta insertando ya existe en el sistema!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("pregunta", $faq->pregunta);
$smarty->assign("prioridad", $faq->prioridad);
$smarty->assign("etiqueta", $faq->etiqueta);
$smarty->assign("padre", $faq->padre);
$smarty->assign("listado", $faq->listado);
$smarty->assign("respuesta", $faq->respuesta);
$smarty->assign("accion", $faq->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/faq/formulario.tpl');
