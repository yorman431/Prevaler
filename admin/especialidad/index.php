<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.facilidad.php');

$auth = new Auth;
$auth->permisos();
$auth->nivel_acceso(1,"distinto");

$facilidad = new Facilidad;
$facilidad->listar_facilidad();

if($facilidad->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $facilidad->listado);
$smarty->assign("busqueda", $facilidad->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", "Especialidades del Sitio Web");
$smarty->display('admin/facilidad/lista_facilidad.tpl');