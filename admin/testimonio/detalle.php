<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Contenido
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.testimonio.php');


$auth = new Auth;
$auth->permisos();

$testimonio = new Testimonio;
$testimonio->accion="Detalles de Testimonio";
$testimonio->mostrar_testimonio();


/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("id", $testimonio->id);
$smarty->assign("titulo", $testimonio->titulo);
$smarty->assign("comentario", $testimonio->comentario);
$smarty->assign("estrellas", $testimonio->estrellas);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2);
$smarty->display('admin/testimonio/detalle.tpl');
/* Fin footer para Smarty */
?> 