<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Index de Usuario
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.usuario.php');

$auth = new Auth;
$auth->permisos();

$usuario = new Usuario;
$usuario->listar_usuario();

if($usuario->mensaje!="si"){
	$mensaje="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("listado", $usuario->listado);
$smarty->assign("busqueda", $usuario->buscar);
$smarty->assign('accion', "Usuarios del Sitio Web");
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/usuario/lista_usuario.tpl');
/* Fin footer para Smarty */
?> 