<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar de Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.registro.php');

$auth = new Auth;
$auth->permisos();

$registro = new Registro;
$registro->insertar_registro();

if($registro->mensaje==1){
	$mensaje="<tr><td align='center' colspan='4' class='error'>El Login o La c&eacute;dula que esta tratando de insertar ya existe en el sistema!</td></tr>";
}else if($registro->mensaje==2){
	$mensaje="<tr><td align='center' colspan='4' class='error'>La clave insertada no coincide con la verificación!</td></tr>";
}

if(!isset($estado))
	$estado= new Registro();
$estado->listar_estados();

if(isset($_POST['estado']) && $_POST['estado']!=""){
	$estado->listar_municipios($_POST['estado']);
	$registro->estado=$_POST['estado'];
	$registro->asignar_valores();
}

/* footer para Smarty */
$smarty->assign('nombre',$_SESSION['nombre_temp']);
$smarty->assign('apellido',$_SESSION['apellido_temp']);

$smarty->assign('id',$registro->id);
$smarty->assign('nombres',$registro->nombre);
$smarty->assign('apellidos',$registro->apellido);
$smarty->assign('tipo',$registro->tipo);
$smarty->assign('cedula',$registro->cedula);
$smarty->assign('correo',$registro->correo);
$smarty->assign('sexo',$registro->sexo);
$smarty->assign('telefono',$registro->telefono);
$smarty->assign('celular',$registro->celular);
$smarty->assign('estado',$registro->estado);
$smarty->assign('municipio',$registro->municipio);
$smarty->assign('nacimiento',$registro->nacimiento);
$smarty->assign('login',$registro->login);
$smarty->assign('publicidad',$registro->publicidad);
$smarty->assign('medio',$registro->medio);

$smarty->assign('estados',$estado->listado);
$smarty->assign('municipios',$estado->listado2);

$smarty->assign('estados',$estado->listado);
$smarty->assign('accion',$registro->accion); 
$smarty->assign('mensaje',$mensaje); 
$smarty->force_compile=true;
$smarty->display('admin/registro/formulario.tpl');
/* Fin footer para Smarty */
?> 