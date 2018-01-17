<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.publicidad.php');

$auth = new Auth;
$auth->permisos();
$auth->nivel_acceso(2,"igual");

$mensaje="";

$publicidad = new Publicidad;
$publicidad->listar_publicidad();

if($publicidad->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='9' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("busqueda", $galeria->buscar);
$smarty->assign('listado', $publicidad->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", "Publicidades del Sitio Web");

$smarty->display('admin/publicidad/lista_publicidad.tpl');