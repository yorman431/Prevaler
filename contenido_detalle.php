<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */
 
include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.galeria.php");
include_once ("config/class.categoria.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.banner.php");
include_once("config/conexion.inc.php");
require('smarty/libs/SmartyPaginate.class.php');

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
}

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesión de usuario a caducado! ingrese de nuevo!</td></tr>";	
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta área!</td></tr>";	
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}

if(isset($_GET['cont']) && $_GET['cont']!="")
	$cont=$_GET['cont'];

if(!isset($categoria))
	$categoria= new Categoria;
$categoria->listar_categoria_menu();
$smarty->assign("categorias", $categoria->listado);

if(!isset($contenido))
	$contenido= new Contenido;
$contenido->mostrar_contenido();

if(!isset($imagenes))
	$imagenes= new Galeria;
$imagenes->mostrar_imagenes3("contenido");

if($imagenes->mensaje!="si"){
	$mensaje2="<tr><td align='center' colspan='2'><span class='error'>No existen registros en esta sección</span></td></tr>";	
}

if(!isset($link))
	$link= new Link;
$link->listar_link_menu();
$nombre=$link->get_link($contenido->id_cat);

if(!isset($banner))
	$banner= new Banner;
$banner->listar_banner_publica($contenido->id_cat);

if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad("Banner Superior");
$smarty->assign("publicidad3", $publicidad->listado);

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Banner Lateral");
$smarty->assign("publicidad2", $publicidad2->listado);

if(!isset($publicidad1))
	$publicidad1= new Publicidad;
$publicidad1->cargar_publicidad("Top Banner");
$smarty->assign("publicidad1", $publicidad1->listado);

if(!isset($publicidad4))
	$publicidad4= new Publicidad;
$publicidad4->cargar_publicidad("Big Banner");
$smarty->assign("publicidad4", $publicidad4->listado);

function get_db_results($_data) {
	SmartyPaginate::setTotal(count($_data));
	return array_slice($_data, SmartyPaginate::getCurrentIndex(),
		SmartyPaginate::getLimit());
}

if(!isset($_GET['cont']) || $_GET['cont']=="")
	$cont=$contenido->id_cat;

/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign('mensaje',$mensaje);
$smarty->assign('mensaje2',$mensaje2);

$smarty->assign("id_cat", $contenido->id_cat);
$smarty->assign("enlace", $contenido->enlace);
$smarty->assign("nombre", $contenido->nombre);
$smarty->assign("fecha", $contenido->fecha);
$smarty->assign("contenido", $contenido->contenido);
$smarty->assign("accion", $nombre." | ".$contenido->nombre);
$smarty->assign("descripcion", substr(strip_tags($contenido->contenido),0,200).' ...');
$smarty->assign("claves", $contenido->claves);

$smarty->assign("enlaces", $link->listado);
$smarty->assign("banner", $banner->listado);
$smarty->assign("listado", $imagenes->listado);
//print_r($categoria->listado);
// display results
$smarty->force_compile=true;
$smarty->display('contenido_detalle.tpl');

/* Fin footer para Smarty */
?>