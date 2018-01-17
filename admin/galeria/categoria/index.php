<?php
/* header para Smarty */
require('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '../../smarty/templates';
$smarty->compile_dir = '../../smarty/templates_c';
$smarty->cache_dir = '../../smarty/cache';
$smarty->config_dir = '../../smarty/configs';
/*  Fin header para Smarty */

// Index de Categoria
include_once ("../../config/class.login.php");
include_once ("../../config/class.categoria.php");
include_once("../../config/conexion.inc.php");
require('../../smarty/libs/SmartyPaginate.class.php');

$auth = new Auth;
$auth->permisos();

$categoria = new Categoria;
$categoria->listar_categoria();

if($categoria->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

if(isset($_GET['error']) && $_GET['error']!="")
	$error="<tr><td align='center' colspan='7' class='error'>No es posible eliminar éste enlace ya que existen contenidos asociados a él!</td></tr>";

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("busqueda", $categoria->buscar);

if(isset($categoria->listado) && $categoria->listado!="")
	$smarty->assign('listado', $categoria->listado);

$smarty->assign("mensaje", $mensaje);
if(isset($_GET['error']) && $_GET['error']!="")
	$smarty->assign("error", $error);
$smarty->display('admin/categoria/lista_categoria.tpl');
/* Fin footer para Smarty */
?>