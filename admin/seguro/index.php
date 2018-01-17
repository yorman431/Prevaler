<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de seguro
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.seguro.php');

$auth = new Auth;
$auth->permisos();

$seguro = new Seguro;
$seguro->listar_seguro();

if($seguro->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/*
	var_dump($seguro->listado);
exit();
*/



/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_seguro', $_SESSION['id_temp']);
$smarty->assign("listado", $seguro->listado);
$smarty->assign("busqueda", $seguro->buscar);
$smarty->assign('accion', "Aseguradoras Adscritas al Sitio Web");
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/seguro/lista_seguro.tpl');
/* Fin footer para Smarty */
?> 