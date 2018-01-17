<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.publicidad.php'); 

$auth = new Auth;
$auth->permisos();

$publicidad = new Publicidad;

$publicidad->editar_publicidad();
if($publicidad->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El login que esta insertando ya existe en el sistema!</td></tr>";	
}
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("nombres", $publicidad->nombre);
$smarty->assign("fecha", $publicidad->fecha);
$smarty->assign("descripcion", $publicidad->descripcion);
$smarty->assign("accion", $publicidad->accion);
$smarty->display('admin/publicidad/formulario.tpl');
