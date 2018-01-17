<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

if(isset($_POST['tipo']) && $_POST['tipo']!=""){
	$tipo=$_POST['tipo'];
	$_SESSION['tipo']=$tipo;
}else if(isset($_SESSION['tipo']) && $_SESSION['tipo']!=""){
	$tipo=$_SESSION['tipo'];
}else{
	$tipo="arriba";
}
	
$link = new Link;
$link->listar_link($tipo);

if($link->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>There were no results of the requested query!</td></tr>";
}

if(isset($_GET['error']) && $_GET['error']!="")
	$error="<tr><td align='center' colspan='7' class='error'>No se puede eliminar elementos que tengan contenido asociado a el</td></tr>";
	
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $link->buscar);
$smarty->assign("tipo", $tipo);
$smarty->assign('accion', "Enlaces del Sitio Web");

if(isset($link->listado) && $link->listado!="")
	$smarty->assign('listado', $link->listado);

$smarty->assign("mensaje", $mensaje);
if(isset($_GET['error']) && $_GET['error']!="")
	$smarty->assign("error", $error);
$smarty->display('admin/link/lista_link.tpl');
