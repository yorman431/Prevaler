<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.noticia.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$noticia = new Noticia;
$noticia->accion="Detalles de la Noticia";
$noticia->mostrar_noticia();

$imagen=new Galeria;
$imagen->mostrar_imagenes("noticia");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No image available!</td></tr>";
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("id", $noticia->id);
$smarty->assign("categoria", $noticia->categoria);
$smarty->assign("titulo", $noticia->titulo);
$smarty->assign("subtitulo", $noticia->subtitulo);
$smarty->assign("contenido", $noticia->contenido);
$smarty->assign("fecha", $noticia->fecha);
$smarty->assign("hora", $noticia->hora);
$smarty->assign("autor", $noticia->autor);
$smarty->assign("accion", $noticia->accion);
$smarty->assign("listado", $imagen->listado);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2);
$smarty->display('admin/noticia/detalle.tpl');
