<?php
require('config/setup.php');

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.noticia.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.faq.php");
include_once ("config/class.hotel.php");

session_start();

if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Enviar1"){
		if(!isset($contacto)){
			$contacto = new Auth;	
			$contacto->enviar_contacto();
			$mensaje2=$contacto->mensaje;
			$contacto->mensaje="";
		}
	}
}

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("arriba");

if(!isset($banner1))
	$banner1= new Banner;
$banner1->listar_banner_ubicacion("derecha");

if(!isset($banner2))
	$banner2= new Banner;
$banner2->listar_banner_ubicacion("izquierda");

if(!isset($publicidad1))
	$publicidad1= new Publicidad;
$publicidad1->cargar_publicidad("Publicidad 1");

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Publicidad 2");

if(!isset($publicidad3))
	$publicidad3= new Publicidad;
$publicidad3->cargar_publicidad("Publicidad Central");

if(!isset($noticia))
	$noticia= new Noticia();
$noticia->listar_noticia_imagen();

if(!isset($faq))
	$faq= new Faq();
$faq->listar_faq_menu();


if(isset($_GET['cont'])) $cont=$_GET['cont']; else $cont=1;

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido();
$nombre=$contenido->get_enlace($cont);

if(!isset($hotel))
	$hotel = new Hotel();
$hotel->listar_hotel_imagen();

var_dump($faq->listado);

$smarty->assign("accion", "");
$smarty->assign("activo", $cont);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("enlaces_A", $link->listado);
$smarty->assign("banner1", $banner1->listado);
$smarty->assign("banner2", $banner2->listado);
$smarty->assign('contenido', $contenido->listado);
$smarty->assign("categoria", $categoria->listado);
$smarty->assign("publicidad1", $publicidad1->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("publicidad3", $publicidad3->listado);
$smarty->assign('noticia', $noticia->listado);
$smarty->assign('hotel', $hotel->listado);
$smarty->assign('faq', $faq->listado);
$smarty->display('index.tpl');