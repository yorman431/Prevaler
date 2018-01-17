<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Pagos
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.pago.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$pago = new Pago;
$pago->listar_pago();

if($pago->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='10' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);

if(isset($pago->listado) && $pago->listado!="")
	$smarty->assign('listado', $pago->listado);

$smarty->assign("busqueda", $pago->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/pagos/lista_pago.tpl')
/* Fin footer para Smarty */
?>