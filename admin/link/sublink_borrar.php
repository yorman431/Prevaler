<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

//Eliminar SubLink
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.link.php');
 
session_start();
$link = new Link;

$link->eliminar_sublink();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado", $link->listado);
$smarty->assign("accion", $link->accion);
$smarty->assign("id", $_GET['back']);
$smarty->display('admin/link/detalle.tpl');