<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Banner
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.faq.php');


$auth = new Auth;
$auth->permisos();

$faq = new Faq;
$faq->insertar_faq();
if($faq->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La categoria que esta insertando ya existe en el sistema!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("nombres", $faq->nombre);
$smarty->assign("apellidos", $faq->prioridad);
$smarty->assign("etiqueta", $faq->etiqueta);
$smarty->assign("claves", $faq->claves);
$smarty->assign("descripcion", $faq->descripcion);
$smarty->assign("padre", $faq->padre);
$smarty->assign("accion", $faq->accion);
$smarty->assign("listado", $faq->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/faq/formulario.tpl');
/* Fin footer para Smarty */
?> 