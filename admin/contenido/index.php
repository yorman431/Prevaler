<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index Contenido
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.contenido.php');

$auth = new Auth;
$auth->permisos();

$contenido = new Contenido;
$contenido->listar_contenido();

if($contenido->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='8' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("busqueda", $contenido->buscar);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("accion", "Listar Contenidos por enlaces");
// assign your db results to the template
if($contenido->mensaje=="si")
$smarty->assign('listado', $contenido->listado);

// display results
$smarty->force_compile=true;
$smarty->display('admin/contenido/lista_contenido.tpl');