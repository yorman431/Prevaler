<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index SubLink
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$link = new Link;
$link->listar_sublink();

if($link->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

if(isset($_GET['error']) && $_GET['error']!="")
	$error="<tr><td align='center' colspan='7' class='error'>No es posible eliminar éste subenlace ya que existen contenidos asociados a él!</td></tr>";
	
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $link->buscar);
$smarty->assign('accion', "Subenlaces del Sitio Web");

if(isset($link->listado) && $link->listado!="")
	$smarty->assign('listado', $link->listado);

$smarty->assign("mensaje", $mensaje);
if(isset($_GET['error']) && $_GET['error']!="")
	$smarty->assign("error", $error);
$smarty->display('admin/link/lista_sublink.tpl');