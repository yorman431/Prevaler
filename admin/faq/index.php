<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.faq.php');

$auth = new Auth;
$auth->permisos();

$faq = new Faq;
$faq->listar_faq();
if($faq->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

if(isset($_GET['error']) && $_GET['error']!="")
	$error="<tr><td align='center' colspan='7' class='error'>No es posible eliminar éste enlace ya que existen contenidos asociados a él!</td></tr>";

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("busqueda", $faq->buscar);
$smarty->assign('accion', "Preguntas del Sitio Web");


if(isset($faq->listado) && $faq->listado!="")
	$smarty->assign('listado', $faq->listado);

$smarty->assign("mensaje", $mensaje);
if(isset($_GET['error']) && $_GET['error']!="")
	$smarty->assign("error", $error);
$smarty->display('admin/faq/lista_faq.tpl');