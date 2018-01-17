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
$publicidad->insertar_imagen("publicidad");
$mensaje="";

if($galeria->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2'><span class='error'>El Peso de la imagen no debe ser mayor a 1 Mb!</span></td></tr>";	
}else if($galeria->mensaje==3){
	$mensaje="<tr><td align='center' colspan='2'><span class='error'>No olvide la imagen por favor!</span></td></tr>";	
}else if($galeria->mensaje==2){
	$mensaje="<tr><td align='center' colspan='2'><span class='error'>S&oacute;lo aceptamos formato de imagen (.jpg o .gif)!</span></td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("nombres", $publicidad->nombre);
$smarty->assign("url", $publicidad->url);
$smarty->assign("fecha", $publicidad->fecha);
$smarty->assign("descripcion", $publicidad->descripcion);
$smarty->assign("accion", $publicidad->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("carpeta", "publicidad");
$smarty->assign("id", $_GET['id']);
$smarty->display('admin/publicidad/imagen.tpl');