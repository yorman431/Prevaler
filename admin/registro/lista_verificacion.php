<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Lista Verificacion
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.registro.php');

session_start();

$auth = new Auth;
$auth->permisos();

$registro = new Registro;
$registro->listado_verificado();

if($registro->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

require("estadisticas.php");

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $registro->listado);
$smarty->assign("busqueda", $registro->buscar);
$smarty->assign("total", $total);
$smarty->assign("udo", $udo);
$smarty->assign("otro", $otro);
$smarty->assign("material", $material);
$smarty->assign("ponentes", $ponentes);
$smarty->assign("participantes", $participantes);
$smarty->assign("mensaje", $mensaje);
$smarty->assign('listado', $registro->listado);
$smarty->force_compile=true;
$smarty->display('admin/registro/lista_verificacion.tpl');
/* Fin footer para Smarty */
?>