<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */ 
include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.galeria.php");
include_once ("config/class.testimonio.php");
include_once ("config/class.categoria.php");
include_once ("config/class.banner.php");
include_once("config/conexion.inc.php");
session_start();
if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Enter"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	if ($_POST['enviar'] == "Salir")
		$acceso->logout();
	
	if ($_POST['envio'] == "SEND"){
		$acceso->enviar_contacto();
		$mensaje2="<div class='alert alert-success'>$acceso->mensaje</div>";
		$acceso->mensaje="";
	}

	if ($_POST['envio'] == "REQUEST"){
		$acceso->enviar_quote();
		$mensaje3="<div class='alert alert-success'>$acceso->mensaje</div>";
		$acceso->mensaje="";
	}
}


if(!isset($marcas))
	$marcas = new Auth;
$marcas->cargar_marcas();


if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");


if(!isset($enlaces_C))
	$enlaces_C= new Link();
$enlaces_C->listar_link_menu("pie");


if(isset($_GET['cont']))
  $content=$_GET['cont'];
else
  $content=1;

if(!isset($banner))
	$banner= new Banner();
$banner->listar_banner_publica('inicio');

if(!isset($categoria))
  $categoria = new Categoria();
$categoria->listar_categoria_imagen('portada');

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido_imagen($content);
/*
if(!isset($contenido_centro))
	$contenido_centro= new Contenido();
$contenido_centro->listar_contenido_publico(19);

if(!isset($servicios))
	$servicios= new Contenido();
$servicios->listar_servicios('servicio');
*/
if(!isset($testimonio))
	$testimonio= new Testimonio();
$testimonio->listar_testimonio_publico();

if($contenido->mensaje!="si"){
	$mensaje="<div class='alert alert-danger'>No hubo resultados de la consulta requerida!</div>";
}

if(isset($_GET['cat']) && $_GET['cat']!="")
	$_SESSION['categoria_actual']=$_GET['cat'];
else
	$_SESSION['categoria_actual']=1;
$cat=$_SESSION['categoria_actual'];

if (!isset($link))
  $link = new Link();
$nombre=$link->get_link($cat);

$listadoMenu = $enlaces_A->listado;

for ($i = 0; $i < count($listadoMenu); $i++){
  if ($listadoMenu[$i]['nombre_cat'] == 'MENU'){
    $menu = $listadoMenu[$i]['url'].'~'.$listadoMenu[$i]['id_cat'];
  }
}


$cantidad=count($testimonio->listado);

$loop_testimonio=ceil($cantidad/2);

/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign("accion", $nombre);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("mensaje2", $mensaje2); 
$smarty->assign("contenido", $contenido->listado);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('testimonio', $testimonio->listado);
$smarty->assign('loop_testimonio',$loop_testimonio);
$smarty->assign('banner',$banner->listado);
$smarty->assign('categoria', $categoria->listado);
$smarty->assign('marcas',$marcas->listado);
$smarty->assign('galerias',$galeria->listado);
$smarty->assign('menu', $menu);
$smarty->display('index.tpl');
/* Fin footer para Smarty */