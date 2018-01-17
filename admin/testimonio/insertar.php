<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar de testimonio
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.testimonio.php'); 

$auth = new Auth;
$auth->permisos();

$testimonio = new Testimonio;

$testimonio->insertar_testimonio();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("titulo", $testimonio->titulo);
$smarty->assign("comentario", $testimonio->subtitulo);
$smarty->assign("estrellas", $testimonio->contenido);
$smarty->assign("fecha", $testimonio->fecha);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", $testimonio->accion);
$smarty->display('admin/testimonio/formulario.tpl');
/* Fin footer para Smarty */