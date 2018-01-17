<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index Evento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.evento.php');

$auth = new Auth;
$auth->permisos();

$mensaje="";

$evento = new Evento;
$evento->listar_evento();

if($evento->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='9' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("busqueda", $evento->buscar);
// assign your db results to the template
if(isset($evento->listado) && $evento->listado!="")
	$smarty->assign('listado', $evento->listado);
	
$smarty->assign("mensaje", $mensaje);

// display results
$smarty->force_compile=true;
$smarty->display('admin/evento/lista_evento.tpl');
/* Fin footer para Smarty */
?>