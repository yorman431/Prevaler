<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.noticia.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$noticia = new Noticia;
$noticia->listar_noticia();

if($noticia->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>There is no query results!</td></tr>";
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $banner->buscar);
$smarty->assign('accion', "Noticias del Sitio Web");

if(isset($noticia->listado) && $noticia->listado!="")
	$smarty->assign('listado', $noticia->listado);

$smarty->assign("mensaje", $mensaje);
$smarty->force_compile=true;
$smarty->display('admin/noticia/lista_noticia.tpl');