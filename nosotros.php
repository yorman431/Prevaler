<?php
require('config/setup.php');

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once ("config/class.registro.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.hotel.php");

session_start();

if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Entrar"){
		$registro = new Registro;
		$registro->insertar_registro_publico();
	}
	if ($_POST['enviar'] == "Salir")
		$acceso->logout();


	if ($_POST['enviar'] == "Enviar1"){
		if(!isset($contacto)){
			$contacto = new Auth;	
			$contacto->enviar_contacto();
			$mensaje2=$contacto->mensaje;
			$contacto->mensaje="";
		}
	}
}

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesión de usuario a caducado! ingrese de nuevo!</td></tr>";
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta área!</td></tr>";
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
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


if(isset($_GET['cont'])) $cont=$_GET['cont']; else $cont="";

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido_publico(2);
$nombre=$contenido->get_enlace($cont);


if(!isset($hotel))
	$hotel = new Hotel;
$hotel->listar_hotel_cita();


/* 

$mensaje2="";
if($contenido->mensaje!="si"){
	$mensaje2="<tr><td align='center' colspan='2'><span class='error'>No existen registros en esta secci�n</span></td></tr>";
}





footer para Smarty */
$smarty->assign("accion", "Nosotros");
$smarty->assign("activo", $cont);
$smarty->assign("claves", $contenido->claves);
$smarty->assign("descripcion", $contenido->descripcion);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje3", $mensaje3);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("enlaces_A", $link->listado);
$smarty->assign("banner1", $banner1->listado);
$smarty->assign("banner2", $banner2->listado);
$smarty->assign('contenido', $contenido->listado);
$smarty->assign("categoria", $categoria->listado);
$smarty->assign("publicidad1", $publicidad1->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("publicidad3", $publicidad3->listado);
$smarty->assign("noticia", $noticia->listado);
$smarty->assign("faq", $faq->listado);
$smarty->assign("sede", $hotel->listado);
$smarty->force_compile=true;
$smarty->display('nosotros.tpl');
/* Fin footer para Smarty */
?>
