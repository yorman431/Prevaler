<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Banco
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.banco.php');

$auth = new Auth;
$auth->permisos();

$banco = new Banco;

$banco->insertar_banco();
if($banco->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El n&uacute;mero de cuenta que esta insertando ya existe en el sistema!</td></tr>";	
}

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("nombres", $banco->nombre);
$smarty->assign("cuenta", $banco->cuenta);
$smarty->assign("numero", $banco->numero);
$smarty->assign("titular", $banco->titular);
$smarty->assign("rif", $banco->rif);
$smarty->assign("accion", $banco->accion);
$smarty->assign("mensaje", $mensaje);
$smarty->display('admin/banco/formulario.tpl');
/* Fin footer para Smarty */
?> 