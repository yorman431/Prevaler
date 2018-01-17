<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Verificar Registro
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.registro.php');
include_once(CONFIG_DIR . 'class.pago.php');

$auth = new Auth;
$auth->permisos();

$registro = new Registro;
$registro->buscar_registro();
if ($_POST['envio'] == "Actualizar"){
	$registro->insertar_asiste($_POST['buscar']);
}
$registro->buscar_asiste($registro->cedula);
$registro->accion="Verificación de Inscripción";

$deposito = new Pago;
$deposito->mostrar_pagos($registro->cedula);

if($registro->mensaje==1){
	$mensaje="<tr><td align='center' colspan='4' class='ok'>Inserte una Cédula para buscar!</td></tr>";
}else if($registro->mensaje==2){
	$mensaje="<tr><td align='center' colspan='4' class='error'>Error: La cédula insertada no existe en el sistema!</td></tr>";
}else if($registro->mensaje==3){
	$mensaje3="<tr><td align='center' colspan='6' class='ok'>Confirmación validada exitosamente!</td></tr>";
}

if($deposito->mensaje==1){
	$mensaje2="<tr><td align='center' colspan='5' class='error'>No se encontro ningún pago asociado al participante!</td></tr>";
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
$smarty->assign('mitwitter',$registro->mitwitter);
$smarty->assign('telefono',$registro->telefono);
$smarty->assign('celular',$registro->celular);
$smarty->assign('tipo',$registro->tipo);
$smarty->assign('nacimiento',$registro->nacimiento);
$smarty->assign('estado',$registro->estado);
$smarty->assign('login',$registro->login);
$smarty->assign('inscrito',$registro->inscrito);
$smarty->assign('material',$registro->material);

if($deposito->mensaje!=1){
	$smarty->assign('banco',$deposito->banco);
	$smarty->assign('numero',$deposito->numero);
	$smarty->assign('fecha',$deposito->fecha);
	$smarty->assign('monto',$deposito->monto);
}else
	$smarty->assign('mensaje2',$mensaje2);
$smarty->assign('accion',$registro->accion); 
$smarty->assign('mensaje',$mensaje);
$smarty->assign('mensaje3',$mensaje3); 
$smarty->force_compile=true;
$smarty->display('admin/registro/verificar.tpl');
/* Fin footer para Smarty */
?> 