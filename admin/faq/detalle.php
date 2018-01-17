<?php
/* header para Smarty */
require('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '../../smarty/templates';
$smarty->compile_dir = '../../smarty/templates_c';
$smarty->cache_dir = '../../smarty/cache';
$smarty->config_dir = '../../smarty/configs';
/*  Fin header para Smarty */

// Detalle de Categoria
include_once ("../../config/class.faq.php");
include_once ("../../config/class.galeria.php");
include_once ("../../config/class.login.php");
include_once("../../config/conexion.inc.php"); 

$auth = new Auth;
$auth->permisos();

$faq = new Faq;
$faq->accion="Detalles de la pregunta";
$faq->mostrar_faq();

$imagen=new Galeria;
$imagen->mostrar_imagenes("faq");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("nombres", $faq->nombre);
$smarty->assign("id", $faq->id);
$smarty->assign("prioridad", $faq->prioridad);
$smarty->assign("listado", $imagen->listado);
$smarty->assign("padre", $faq->padre);
$smarty->assign("etiqueta", $faq->etiqueta);
$smarty->assign("claves", $faq->claves);
$smarty->assign("descripcion", $faq->descripcion);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", $faq->accion);
$smarty->display('admin/faq/detalle.tpl');
/* Fin footer para Smarty */
?> 