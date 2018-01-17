<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.banner.php");
include_once ("config/class.galeria.php");
include_once ("config/conexion.inc.php");
include_once ("config/class.faq.php");

session_start();

if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Enter"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	
	if ($_POST['enviar'] == "Logout")
		$acceso->logout();
		
	
	if ($_POST['go'] == "Go"){
		if(!isset($suscribir)){
			$suscribir = new Suscriptor;	
			$suscribir->guardar_suscripcion();
			$mensaje3=$suscribir->mensaje;
			$suscribir->mensaje="";
		}
	}
	if ($_POST['envio'] == "Enviar"){
		$acceso->enviar_contacto();
		$mensaje2="<tr><td align='center' colspan='2' class='ok'>$acceso->mensaje</td></tr>";
		$acceso->mensaje="";
	}
}

if(isset($_GET['cont']) && $_GET['cont']!="")
	$cont=$_GET['cont'];

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("arriba");

if(!isset($banner1))
	$banner1= new Banner;
$banner1->listar_banner_efecto("showBars");

if(!isset($banner2))
	$banner2= new Banner;
$banner2->listar_banner_efecto("showBarsRandom");

if(!isset($publicidad1))
	$publicidad1= new Publicidad;
$publicidad1->cargar_publicidad("Publicidad 1");

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Publicidad 2");



/* 

var_dump($categoria->listado);
exit();

footer para Smarty */
$smarty->assign("categoria", $nombre);
$smarty->assign("mensaje3", $mensaje3);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("cont", $cont);
$smarty->assign("accion", "Productos");
$smarty->assign("label", $link->get_name($cont));
$smarty->assign('enlaces_A',$link->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('servicios',$servicios->listado);
$smarty->assign('contenido', $contenido->listado);
$smarty->assign("banner1", $banner1->listado);
$smarty->assign("banner2", $banner2->listado);
$smarty->assign("publicidad1", $publicidad1->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign('menu', $menu);
$smarty->force_compile=true;
$smarty->display('presupuesto.tpl');
/* Fin footer para Smarty */