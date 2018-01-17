<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Noticia
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.noticia.php');

$auth = new Auth;
$auth->permisos();

$noticia = new Noticia;

$noticia->editar_noticia();
if($noticia->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>The user being inserted, already exists in the system!!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("categoria", $noticia->categoria);
$smarty->assign("titulo", $noticia->titulo);
$smarty->assign("subtitulo", $noticia->subtitulo);
$smarty->assign("contenido", $noticia->contenido);
$smarty->assign("fecha", $noticia->fecha);
$smarty->assign("hora", $noticia->hora);
$smarty->assign("autor", $noticia->autor);
$smarty->assign("accion", $noticia->accion);
$smarty->display('admin/noticia/formulario.tpl');
/* Fin footer para Smarty */
?>
