<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.medico.php');


$auth = new Auth;
$auth->permisos();

$medico = new medico;
$medico->listar_medico();

if($medico->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='8' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $medico->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", "Listar Especialistas del Sitio Web");
if($medico->mensaje=="si")
$smarty->assign('listado', $medico->listado);

$smarty->force_compile=true;
$smarty->display('admin/medico/lista_medico.tpl');