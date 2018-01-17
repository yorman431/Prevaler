<?php
/* header para Smarty */
require('../../smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '../../smarty/templates';
$smarty->compile_dir = '../../smarty/templates_c';
$smarty->cache_dir = '../../smarty/cache';
$smarty->config_dir = '../../smarty/configs';
/*  Fin header para Smarty */

// Index de Producto
include_once ("../../config/class.login.php");
include_once ("../../config/class.registro.php");
include_once("../../config/conexion.inc.php");

$auth = new Auth;
$auth->permisos();

$registro = new Registro;
$registro->editar_registro();
$registro->accion="Detalles del Participante";


if($registro->mensaje==2){
	$mensaje="<tr><td align='center' colspan='4' class='ok'>Los Datos han sido actualizados exitosamente!</td></tr>";
}

/* footer para Smarty */
$smarty->assign('nombre',$_SESSION['nombre_temp']);
$smarty->assign('apellido',$_SESSION['apellido_temp']);

$smarty->assign('id',$registro->id);
$smarty->assign('nombres',$registro->nombre);
$smarty->assign('apellidos',$registro->apellido);
$smarty->assign('cedula',$registro->cedula);
$smarty->assign('sexo',$registro->sexo);
$smarty->assign('correo',$registro->correo);
$smarty->assign('correo2',$registro->correo2);
$smarty->assign('telefono',$registro->telefono);
$smarty->assign('celular',$registro->celular);
$smarty->assign('tipo',$registro->tipo);
$smarty->assign('participacion',$registro->participacion);
$smarty->assign('login',$registro->login);
$smarty->assign('interno',$registro->interno);
if($registro->interno=="true"){
	$smarty->assign('nucleo',$registro->nucleo);
	$smarty->assign('escuela',$registro->escuela);
	$smarty->assign('departamento',$registro->departamento);
}else{
	$smarty->assign('instituto',$registro->instituto);
	$smarty->assign('detalles',$registro->detalles);
}
$smarty->assign('accion',$registro->accion); 
$smarty->assign('mensaje',$mensaje); 
$smarty->force_compile=true;
$smarty->display('admin/registro/detalle.tpl');
/* Fin footer para Smarty */
?> 