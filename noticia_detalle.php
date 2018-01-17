<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once("config/conexion.inc.php");
include_once("config/class.noticia.php");
include_once ("config/class.banner.php");
include_once ("config/class.publicidad.php");


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
}

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesi&oacute;n de usuario a caducado! ingrese de nuevo!</td></tr>";
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta &aacute;rea!</td></tr>";
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}


if(isset($_GET['cont']) && $_GET['cont']!="")
	$cont=$_GET['cont'];

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("arriba");

if(!isset($noticia))
	$noticia= new Noticia;
$noticia->get_noticia($cont);

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

/* footer para Smarty 

var_dump($banner->listado);
exit();

*/
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign('mensaje',$mensaje);
$smarty->assign('mensaje2',$mensaje2);
$smarty->assign('mensaje3',$mensaje3);
$smarty->assign("banner1", $banner1->listado);
$smarty->assign("banner2", $banner2->listado);
$smarty->assign("publicidad1", $publicidad1->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign('accion', "News Details");
$smarty->assign("noticia", $noticia->listado);
$smarty->assign("accion","Noticias");

$smarty->assign('enlaces_A',$link->listado);

//print_r($categoria->listado);
// display results
$smarty->force_compile=true;
$smarty->display('noticia_detalle.tpl');
/* Fin footer para Smarty */
?>
