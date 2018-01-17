<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.registro.php');

session_start();

$auth = new Auth;
$auth->permisos();

$registro = new Registro;
$registro->listar_registro();

if($registro->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='9' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $registro->listado);
$smarty->assign("busqueda", $registro->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->assign('listado', $registro->listado);

$smarty->force_compile=true;
$smarty->display('admin/registro/lista_registro.tpl');
/* Fin footer para Smarty */
?>