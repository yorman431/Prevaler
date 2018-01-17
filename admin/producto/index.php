<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.producto.php'); 

session_start();

$auth = new Auth;
$auth->permisos();

$producto = new Producto;
$producto->listar_producto();

if($producto->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='10' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado2", $producto->listado2);
$smarty->assign("categoria", $producto->id_cat);
$smarty->assign("codigo", $producto->codigo);
$smarty->assign("telas", $producto->telas);
$smarty->assign("nombres", $producto->nombre);
$smarty->assign("fecha", $producto->fecha);
$smarty->assign("talla", $producto->talla);
$smarty->assign("descripcion", $producto->descripcion);
$smarty->assign("prioridad", $producto->prioridad);
$smarty->assign("color", $producto->color);
$smarty->assign("vistas", $producto->vistas);
$smarty->assign("estado", $producto->estado);
$smarty->assign("etiqueta", $producto->etiqueta);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign('accion', "Productos del Sitio Web");
// assign your db results to the template
if($producto->mensaje=="si")
$smarty->assign('listado', $producto->listado);
$smarty->force_compile=true;
$smarty->display('admin/producto/lista_producto.tpl');
/* Fin footer para Smarty */
?>