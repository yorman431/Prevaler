<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Imagen Link
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.galeria.php');

session_start();
$galeria = new Galeria;

$galeria->insertar_imagen("link");
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
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombre2", $galeria->nombre);
$smarty->assign("fecha", $galeria->fecha);
$smarty->assign("descripcion", $galeria->descripcion);
$smarty->assign("accion", $galeria->accion);
$smarty->assign("carpeta", "link");
$smarty->assign("mensaje", $mensaje);
$smarty->assign("id", $_GET['id']);
$smarty->display('admin/link/imagen.tpl');
/* Fin footer para Smarty */
?> 