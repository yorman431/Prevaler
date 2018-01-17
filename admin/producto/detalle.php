<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Detalle de Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.producto.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$producto = new Producto;
$producto->mostrar_producto();

$accion="Detalles del Producto";

$imagen=new Galeria;
$imagen->mostrar_imagenes("producto");
if($imagen->mensaje!="si"){
	$mensaje="<tr><td colspan='4' align='center' class='error'>No hay imagen disponible!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign("accion", $accion);
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $imagen->listado);
$smarty->assign("listado2", $producto->listado2);
$smarty->assign("id", $producto->id);
$smarty->assign("categoria", $producto->categoria);
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
$smarty->display('admin/producto/detalle.tpl');
/* Fin footer para Smarty */
?> 