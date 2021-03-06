<?php
/* header para Smarty */
require('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '../../smarty/templates';
$smarty->compile_dir = '../../smarty/templates_c';
$smarty->cache_dir = '../../smarty/cache';
$smarty->config_dir = '../../smarty/configs';
/*  Fin header para Smarty */

// Insertar de Producto
include_once ("../../config/class.producto.php");
include_once ("../../config/class.login.php");
include_once ("../../config/class.categoria.php");
include_once("../../config/conexion.inc.php"); 

$auth = new Auth;
$auth->permisos();
$producto = new Producto;
$producto->insertar_producto($conex);

if(isset($producto->mensaje2) && $producto->mensaje2=="error"){
	$mensaje2="<tr><td align='center' colspan='2' class='error'>El nombre de producto que esta insertando ya existe en el sistema!</td></tr>";
	$smarty->assign("mensaje", $mensaje2);
}

 if(!isset($categoria2))
       $categoria2= new Categoria;
$categoria2->crearArbol('categoria','id_cat','nombre_cat','padre_cat',0,'&mdash;', 'todos');

$facilidad = new Producto;
$facilidad->listar_facilidad($_GET['id']);

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("listado", $categoria2->listado);
$smarty->assign("listado2", $producto->listado2);
$smarty->assign("codigo", $producto->codigo);
$smarty->assign("nombres", $producto->nombre);
$smarty->assign("lugar", $producto->lugar);
$smarty->assign("fecha", $producto->fecha);
$smarty->assign("cantidad", $producto->cantidad);
$smarty->assign("prioridad", $producto->prioridad);
$smarty->assign("claves", $producto->claves);
$smarty->assign("detal", $producto->detal);
$smarty->assign("mayor", $producto->mayor);
$smarty->assign("limite", $producto->limite);
$smarty->assign("limite2", $producto->limite2);
$smarty->assign("descripcion", $producto->descripcion);
$smarty->assign("facilidad", $facilidad->listado);
$smarty->assign("disponible1", $producto->disponible1);
$smarty->assign("disponible2", $producto->disponible2);
$smarty->assign("accion", $producto->accion);
$smarty->assign("ultimo", $_GET['ultimo']);
$smarty->display('admin/producto/formulario.tpl');
/* Fin footer para Smarty */
?> 