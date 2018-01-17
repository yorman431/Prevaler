<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.categoria.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.banner.php");
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
	
	if ($_POST['enviar'] == "Logout")
		$acceso->logout();
		
	if ($_POST['envio'] == "SEND"){
		$acceso->enviar_contacto();
		$mensaje2="<tr><td align='center' colspan='2' class='ok'>$acceso->mensaje</td></tr>";
		$acceso->mensaje="";
	}
}

if(isset($_GET['cont'])){
	if($_GET['cont']!=$_SESSION['contenido_actual'])
		unset($_SESSION['buscar']);
	$_SESSION['contenido_actual']=$_GET['cont'];
}

$cont=$_SESSION['contenido_actual'];

if($cont==3 && $_GET['sub']==14){
	header("location: cotizacion.php");
	exit();
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

if(!isset($enlaces_B))
	$enlaces_B= new Link();
$enlaces_B->listar_link_menu("normal");

$nombre=$link->get_link($cont);

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido_imagen($cont);
$nombresub=$contenido->get_subenlace($_GET['sub']);
$contenido->accion=$link->etiqueta." | ".$nombresub; 
$data=$contenido->listado;

if($contenido->mensaje!="si"){
	$mensaje2="<tr><td align='center' colspan='2' class='error'>No existen registros en esta sección</td></tr>";	
}

if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad("Banner Superior");

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Banner Izquierdo A");

if(!isset($publicidad3))
	$publicidad3= new Publicidad;
$publicidad3->cargar_publicidad("Banner Central");

if(!isset($galeria))
	$galeria= new Galeria;
$galeria->listar_galeria_publica2();
$smarty->assign('galerias',$galeria->listado);

/* footer para Smarty */
$smarty->assign("categoria", $nombre);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("accion", $nombre);
$smarty->assign("listado", $categoria2->listado);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign("cont", $cont);
$smarty->assign("listado", $categoria2->listado);

if(isset($data) && $data!=""){
	$smarty->assign('contenido', get_db_results($data));
	// assign {$paginate} var
	SmartyPaginate::assign($smarty);
	// display results
}

$smarty->assign("publicidad", $publicidad->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("publicidad3", $publicidad3->listado);

$smarty->force_compile=true;
$smarty->display('contenido.tpl');
/* Fin footer para Smarty */
?>