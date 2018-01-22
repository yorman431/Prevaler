<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once ("../../config/class.usuario.php");
include_once ("../../config/class.login.php");
include_once("../../config/conexion.inc.php"); 

$auth = new Auth;
$auth->permisos();

$usuario = new Usuario;
$usuario->accion="Detalles del Usuario";
$usuario->mostrar_usuario();

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $usuario->nombre);
$smarty->assign("apellidos", $usuario->apellido);
$smarty->assign("correo", $usuario->correo);
$smarty->assign("login", $usuario->login);
$smarty->assign("nivel", $usuario->nivel);
$smarty->assign("accion", $usuario->accion);
$smarty->display('admin/usuario/detalle.tpl');
