<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once("config/conexion.inc.php");
include_once ("config/class.suscriptor.php");




if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Enter"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	
	if ($_POST['enviar'] == "Logout")
		$acceso->logout();
		
	if ($_POST['enviar'] == "Enviar"){
		if(!isset($contacto)){
			$contacto = new Auth;	
			$contacto->enviar_contacto();
			$mensaje2=$contacto->mensaje;
			$contacto->mensaje="";
		}
	}

	
	if ($_POST['go'] == "Go"){
		if(!isset($suscribir)){
			$suscribir = new Suscriptor;	
			$suscribir->guardar_suscripcion();
			$mensaje3=$suscribir->mensaje;
			$suscribir->mensaje="";
		}
	}
}

if(!isset($banner))
	$banner= new Banner;
$banner->listar_banner_publica($cont);
$smarty->assign("banner", $banner->listado);

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("todo");

if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");


if(!isset($enlaces_C))
	$enlaces_C= new Link();
$enlaces_C->listar_link_menu("pie");


if(!isset($galeria))
	$galeria= new Galeria;
$galeria->listar_galeria_publica2();
$smarty->assign('galerias',$galeria->listado);

$listadoMenu = $enlaces_A->listado;

for ($i = 0; $i < count($listadoMenu); $i++){
  if ($listadoMenu[$i]['nombre_cat'] == 'MENU'){
    $menu = $listadoMenu[$i]['url'].'~'.$listadoMenu[$i]['id_cat'];
  }
}


/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign("nombre",$acceso->nombre);
$smarty->assign("apellido",$acceso->apellido);
$smarty->assign("telefono",$acceso->telefono);
$smarty->assign("email",$acceso->email);
$smarty->assign("comentario",$acceso->comentario);
$smarty->assign("accion","Contacto");
$smarty->assign("label", "CONTACTOS");
$smarty->assign("mensaje",$mensaje);
$smarty->assign("mensaje2",$mensaje2);
$smarty->assign("mensaje3",$mensaje3);
$smarty->assign('correo', $correo);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('menu', $menu);



// display results
$smarty->force_compile=true;
$smarty->display('contacto.tpl');
/* Fin footer para Smarty */
?>