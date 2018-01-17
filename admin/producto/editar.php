<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Editar Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.producto.php');
include_once(CONFIG_DIR . 'class.categoria.php');

$auth = new Auth;
$auth->permisos();

if(!isset($producto))
	$producto = new Producto;

$producto->editar_producto();
if($producto->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El login que esta insertando ya existe en el sistema!</td></tr>";	
}

if(!isset($categoria2))
	$categoria2= new Categoria;
$categoria2->crearArbol('categoria','id_cat','nombre_cat','padre_cat',0,'&mdash;');


if(isset($_POST['categoria']) && $_POST['categoria']!=""){
	$producto->buscar_categorias($_POST['categoria']);
	$smarty->assign("categoria", $producto->get_categoria($_POST['categoria']));
}else{
	$smarty->assign("categoria", $producto->categoria);
	$smarty->assign("subcategoria", $producto->subcategoria);
}
/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $categoria2->listado);
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

$smarty->assign("paises", $pais->listado);
$smarty->assign("accion", $producto->accion);
$smarty->display('admin/producto/formulario.tpl');
/* Fin footer para Smarty */
?> 