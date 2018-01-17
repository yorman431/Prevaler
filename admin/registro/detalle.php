<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Editar de Producto
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.registro.php');

$auth = new Auth;
$auth->permisos();

if(!isset($registro))
	$registro = new Registro;
$registro->editar_registro2();
$registro->accion="Detalles del Registro";
			
if($registro->mensaje==2){
	$mensaje="<tr><td align='center' colspan='4' class='ok'>Los Datos han sido actualizados exitosamente!</td></tr>";
}

if(!isset($estado))
	$estado= new Registro();
$estado->listar_estados();

if(isset($_POST['estado']) && $_POST['estado']!=""){
	$estado->listar_municipios($_POST['estado']);
	$registro->estado=$_POST['estado'];
	$registro->asignar_valores();
}else if(isset($registro->estado) && $registro->estado!=""){
	$estado->listar_municipios($registro->estado);
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
$smarty->assign('telefono',$registro->telefono);
$smarty->assign('celular',$registro->celular);
$smarty->assign('estado',$registro->estado);
$smarty->assign('municipio',$registro->municipio);
$smarty->assign('nacimiento',$registro->nacimiento);
$smarty->assign('login',$registro->login);
$smarty->assign('publicidad',$registro->publicidad);
$smarty->assign('medio',$registro->medio);
$smarty->assign('accion',$registro->accion); 
$smarty->assign('mensaje',$mensaje); 

$smarty->assign('estados',$estado->listado);
$smarty->assign('municipios',$estado->listado2);

$smarty->force_compile=true;
$smarty->display('admin/registro/detalle.tpl');
/* Fin footer para Smarty */
?> 