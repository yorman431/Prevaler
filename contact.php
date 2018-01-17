<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once("config/conexion.inc.php");


if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Enter"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	
	if ($_POST['enviar'] == "Logout")
		$acceso->logout();
		
	if ($_POST['envio'] == "SEND"){
		$acceso->enviar_contacto();
		$mensaje2="<tr><td align='center' colspan='2' class='ok'>$acceso->mensaje</td></tr>";
		$acceso->mensaje="";
	}
}

if(!isset($banner))
  $banner= new Banner();
$banner->listar_banner_publica('inicio');

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("todo");

if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");

if(!isset($enlaces_C))
	$enlaces_C= new Link();
$enlaces_C->listar_link_menu("pie");

if(!isset($servicios))
	$servicios= new Contenido();
$servicios->listar_servicios('servicio');

if(!isset($galeria))
	$galeria= new Galeria;
$galeria->listar_galeria_publica2();
$smarty->assign('galerias',$galeria->listado);

/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign("nombre",$acceso->nombre);
$smarty->assign("apellido",$acceso->apellido);
$smarty->assign("telefono",$acceso->telefono);
$smarty->assign("email",$acceso->email);
$smarty->assign("comentario",$acceso->comentario);
$smarty->assign("accion","Contact Us");
$smarty->assign("label", "CONTACTOS");
$smarty->assign("mensaje2",$mensaje2);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('servicios',$servicios->listado);
$smarty->assign('banner', $banner->listado);

// display results
$smarty->force_compile=true;
$smarty->display('contacto.tpl');
/* Fin footer para Smarty */
?>