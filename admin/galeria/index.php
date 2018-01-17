<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index Galeria
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.galeria.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$galeria = new Galeria;
$galeria->listar_galeria();

if($galeria->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='9' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $galeria->buscar);
// assign your db results to the template
if(isset($galeria->listado) && $galeria->listado!="")
	$smarty->assign('listado', $galeria->listado);
	$smarty->assign('accion', "Galerias del Sitio Web");
$smarty->assign("mensaje", $mensaje);

// display results
$smarty->force_compile=true;
$smarty->display('admin/galeria/lista_galeria.tpl');
/* Fin footer para Smarty */
?>