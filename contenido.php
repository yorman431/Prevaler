<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.categoria.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.producto.php");
include_once ("config/class.banner.php");
include_once ("config/class.galeria.php");
include_once ("config/class.testimonio.php");
include_once ("config/conexion.inc.php");

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
		
	if ($_POST['envio'] == "Enviar"){
		$acceso->enviar_contacto();
		$mensaje2="<tr><td align='center' colspan='2' class='ok'>$acceso->mensaje</td></tr>";
		$acceso->mensaje="";
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


if(isset($_GET['cont']) && $_GET['cont']!="")
	$cont=$_GET['cont'];

if($cont==1){
	header("location: index.php");
	exit();
}else if($cont == 2){
  header("location: catalogo_opcion.php");
  exit();
}else if($cont==5){
	header("location: contacto.php");
	exit();
}else if($cont==29){
	header("location: galeria.php");
	exit();
}else if($cont==27){
	header("location: noticias.php");
	exit();
}

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("arriba");

if(!isset($banner))
  $banner= new Banner();
$banner->listar_banner_publica();


if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad();

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad();

$nombre=$link->get_link($cont);

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido();

if($contenido->mensaje!="si"){
	$mensaje2="<div class='error'>No existen registros en esta secci�n</div>";	
}

if(!isset($galeria))
	$galeria= new Galeria;
$galeria->mostrar_imagenes2("contenido");


$listadoMenu = $enlaces_A->listado;

for ($i = 0; $i < count($listadoMenu); $i++){
  if ($listadoMenu[$i]['nombre_cat'] == 'MENU'){
    $menu = $listadoMenu[$i]['url'].'~'.$listadoMenu[$i]['id_cat'];
  }
}

/* footer para Smarty */
$smarty->assign("categoria", $nombre);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje3", $mensaje3);
$smarty->assign("cont", $cont);
$smarty->assign("accion", $nombre);
$smarty->assign("label", $link->get_name($cont));
$smarty->assign("publicidad", $publicidad->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("publicidad3", $publicidad3->listado);
$smarty->assign('enlaces_A',$link->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('servicios',$servicios->listado);
$smarty->assign('categorias',$categoria->listado);
$smarty->assign('contenido', $contenido->listado);
$smarty->assign('marcas',$marcas->listado);
$smarty->assign('banner',$banner->listado);
$smarty->assign('galerias',$galeria->listado);
$smarty->assign('menu', $menu);
$smarty->force_compile=true;
$smarty->display('contenido.tpl');
/* Fin footer para Smarty */