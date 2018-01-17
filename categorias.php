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

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesión de usuario a caducado! ingrese de nuevo!</td></tr>";	
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta área!</td></tr>";	
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}

if(!isset($banner))
	$banner= new Banner;
$banner->listar_banner_publica();

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("todo");

if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");

if(!isset($enlaces_B))
	$enlaces_B= new Categoria();
$enlaces_B->listar_categoria_menu();

if(!isset($enlaces_C))
	$enlaces_C= new Link();
$enlaces_C->listar_link_menu("pie");

if(!isset($banner))
	$banner= new Banner;
$banner->listar_banner_publica();

if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad("Banner Central");

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Mas Vendido");

if(!isset($publicidad3))
	$publicidad3= new Publicidad;
$publicidad3->cargar_publicidad("Marcas");

$nombre=$link->get_link($cont);

if(!isset($categoria))
	$categoria= new Categoria;
if(!isset($_GET['id']) || $_GET['id']=="") $id=0; else $id=$_GET['id'];

$categoria->cargar_subcategorias2($_GET['id']);

if($clasificado->mensaje==1){
	$mensaje2="<tr><td align='center' colspan='2' class='error'>No olvide la imagen por favor!</td></tr>";	
}else if($clasificado->mensaje==3){
	$mensaje2="<tr><td align='center' colspan='2' class='error'>Sólo aceptamos formato de imagen (.jpg o .gif)!</td></tr>";	
}else if($clasificado->mensaje==2){
	$mensaje2="<tr><td align='center' colspan='2' class='error'>El Peso de la imagen no debe ser mayor a 1 Mb!</td></tr>";	
}

if(!isset($galeria))
	$galeria= new Galeria;
$galeria->listar_galeria_publica2();
$smarty->assign('galerias',$galeria->listado);

/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign('mensaje',$mensaje);
$smarty->assign('mensaje2',$mensaje2);
$smarty->assign("banner", $banner->listado);

$smarty->assign("publicidad", $publicidad->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("publicidad3", $publicidad3->listado);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('categorias',$categoria->listado);
$smarty->assign("breadcrumbs", $categoria->ruta_breadcrumbs($id));

$smarty->assign("accion", "Products & Solutions ".$categoria->ruta_categoria($id));
$smarty->assign("label", "Products & Solutions");

$smarty->assign("id_banner", $categoria->buscar_ruta_hoja($id));

$smarty->assign("listado", $categoria->listado);
//print_r($categoria->listado);


// display results
$smarty->force_compile=true;
$smarty->display('categorias2.tpl');
/* Fin footer para Smarty */
?>