<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */ 
include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.galeria.php");
include_once("config/conexion.inc.php");

session_start();
if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Enter"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	if ($_POST['enviar'] == "Salir")
		$acceso->logout();
	
	if ($_POST['envio'] == "SEND"){
		$acceso->enviar_contacto();
		$mensaje2="<div class='alert alert-success'>$acceso->mensaje</div>";
		$acceso->mensaje="";
	}

}

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("todo");

if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");


if(!isset($enlaces_C))
	$enlaces_C= new Link();
$enlaces_C->listar_link_menu("pie");

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido_imagen(14);

if(!isset($servicios))
	$servicios= new Contenido();
$servicios->listar_servicios('servicio');


if(!isset($galeria))
	$galeria = new Galeria();
$galeria->listar_galeria_publica();
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign("accion", 'Gallery');
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2); 
$smarty->assign("mensaje3", $mensaje3);
$smarty->assign("enlaces", $link->listado);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('contenido',$contenido->listado);
$smarty->assign('servicios',$servicios->listado);
$smarty->assign('galeria',$galeria->listado);
$smarty->force_compile=true;
$smarty->display('gallery.tpl');
/* Fin footer para Smarty */