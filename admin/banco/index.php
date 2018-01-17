<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Banco
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.banco.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$banco = new Banco;
$banco->listar_banco();

if($banco->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);

if(isset($banco->listado) && $banco->listado!="")
	$smarty->assign('listado', $banco->listado);

$smarty->assign("busqueda", $banco->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/banco/lista_banco.tpl');
/* Fin footer para Smarty */
?> 