<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Noticia
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.testimonio.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$testimonio = new Testimonio;
$testimonio->listar_testimonio();

if($testimonio->mensaje!="si"){
	$mensaje="<div class='alert alert-danger'>No hubo resultados de la consulta requerida!</div>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
if(isset($testimonio->listado) && $testimonio->listado!="")
$smarty->assign('listado', $testimonio->listado);
$smarty->assign("busqueda", $testimonio->buscar);
$smarty->assign('accion', "Testimonios del Sitio Web");
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/testimonio/listar_testimonio.tpl');
/* Fin footer para Smarty */
?>