<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index Documento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.documento.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$documento = new Documento;
$documento->listar_documento();

if($documento->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);

if(isset($documento->listado) && $documento->listado!="")
	$smarty->assign('listado', $documento->listado);

$smarty->assign("busqueda", $documento->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/documento/lista_documento.tpl');
/* Fin footer para Smarty */
?>