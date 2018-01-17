<?php 
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.categoria.php");
include_once ("config/class.publicidad.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once ("config/class.producto.php");
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

if(isset($_GET['msg']) && $_GET['msg']==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesi�n de usuario a caducado! ingrese de nuevo!</td></tr>";	
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta �rea!</td></tr>";	
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}

if(!isset($producto))
	$producto = new Producto;
$producto->mostrar_producto();
$producto->visita_producto();

if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");

if(!isset($banner))
	$banner= new Banner;
$banner->listar_banner_publica('inicio');

if(!isset($categoria2))
	$categoria2= new Categoria;

/*footer para Smarty*/
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);
$smarty->assign("id", $producto->id);

$smarty->assign("codigo", $producto->codigo);
$smarty->assign("nombres", $producto->nombre);
$smarty->assign("categoria", $producto->categoria);
$smarty->assign("precio", $producto->precio);
$smarty->assign("imagen", $producto->imagen);
$smarty->assign("descripcion", strip_tags($producto->descripcion));

$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('categorias',$categoria->listado);
$smarty->assign("accion", "Menu Details");
$smarty->assign("label", strtoupper($producto->nombre));
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("banner", $banner->listado);

$smarty->assign("imagenes", $imagen->listado);
$smarty->assign("listado", $categoria->listado);

$smarty->force_compile=true;
$smarty->display('catalogo_detalle.tpl');
/* Fin footer para Smarty */
