<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.usuario.php');  

$auth = new Auth;
$auth->permisos();

$usuario = new Usuario;

$usuario->editar_usuario();
if($usuario->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El login que esta insertando ya existe en el sistema!</td></tr>";	
}else if($usuario->mensaje==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La clave no coincide con la cofirmaci�n de la clave!</td></tr>";	
}

$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign('id_usuario', $_SESSION['id_temp']);
$smarty->assign("nombres", $usuario->nombre);
$smarty->assign("apellidos", $usuario->apellido);
$smarty->assign("correo", $usuario->correo);
$smarty->assign("login", $usuario->login);
$smarty->assign("nivel", $usuario->nivel);
$smarty->assign("accion", $usuario->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/usuario/formulario.tpl');