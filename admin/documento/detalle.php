<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Documento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.documento.php');

$auth = new Auth;
$auth->permisos();

$documento = new Documento;
$documento->accion="Detalles del Documento";

if (isset($_POST['envio']) && $_POST['envio']=="Descargar"){
	$documento->descargar_documento();
}
$documento->mostrar_documento();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("titulo", $documento->titulo);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("id", $documento->id);
$smarty->assign("fecha", $documento->fecha);
$smarty->assign("tipo", $documento->tipo);
$smarty->assign("peso", $documento->peso);
$smarty->assign("nombres", $documento->nombre);
$smarty->assign("categoria", $documento->categoria);
$smarty->assign("accion", $documento->accion);
$smarty->assign("contenido", $documento->contenido);
$smarty->force_compile=true;
$smarty->display('admin/documento/detalle.tpl');
/* Fin footer para Smarty */
?> 