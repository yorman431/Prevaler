<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Sublink
include_once(CONFIG_DIR . 'class.link.php');

session_start();
$link = new Link;

$link->insertar_sublink();
if($link->mensaje==2){
    $mensaje="Se ha vinculado con exito este subenlace al enlace principal";
}
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado", $link->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", $link->accion);
$smarty->assign("id", $_GET['id']);
$smarty->display('admin/link/sublink.tpl');
