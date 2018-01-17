<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Imagen Borrar Link
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$imagen=new Galeria;
$imagen->eliminar_imagen();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("id", $_GET['id_back']);
$smarty->display('admin/galeria/detalle.tpl');
/* Fin footer para Smarty */
?> 