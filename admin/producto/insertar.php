<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.producto.php');

$auth = new Auth;
$auth->permisos();

if(!isset($producto))
	$producto = new Producto;

$producto->insertar_producto($conex);

if(!isset($pais))
	$pais= new Producto;

if(isset($producto->mensaje2) && $producto->mensaje2=="error"){
	$mensaje2="<tr><td align='center' colspan='2' class='error'>El nombre de producto que esta insertando ya existe en el sistema!</td></tr>";
	$smarty->assign("mensaje", $mensaje2);
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $categoria2->listado);
$smarty->assign("listado2", $producto->listado2);
$smarty->assign("codigo", $producto->codigo);
$smarty->assign("nombres", $producto->nombre);
$smarty->assign("descripcion", $producto->descripcion);
$smarty->assign("prioridad", $producto->prioridad);
$smarty->assign("estado", $producto->estado);
$smarty->assign("etiqueta", $producto->etiqueta);

$smarty->assign("paises", $pais->listado);
$smarty->assign("accion", $producto->accion);
$smarty->display('admin/producto/formulario.tpl');
/* Fin footer para Smarty */
?> 