<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Imagen Evento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.galeria.php'); 

$auth = new Auth;
$auth->permisos(); 

$imagen=new Galeria;
$imagen->insertar_imagen("evento");
$mensaje="";

if($imagen->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2'><span class='error'>No olvide la imagen por favor!</span></td></tr>";	
}else if($imagen->mensaje==3){
	$mensaje="<tr><td align='center' colspan='2'><span class='error'>Sólo aceptamos formato de imagen (.jpg o .gif)!</span></td></tr>";	
}else if($imagen->mensaje==2){
	$mensaje="<tr><td align='center' colspan='2'><span class='error'>El Peso de la imagen no debe ser mayor a 1 Mb!</span></td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", $imagen->accion);
$smarty->assign("carpeta", "evento");
$smarty->assign("id", $_GET['id']);
$smarty->display('admin/galeria/imagen.tpl');
/* Fin footer para Smarty */
?> 