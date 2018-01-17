<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

/* Modelos a utilizar */
include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.contenido.php");
include_once ("config/class.galeria.php");
include_once ("config/class.banner.php");
include_once ("config/class.registro.php");
include_once ("config/class.producto.php");
include_once ("config/class.categoria.php");
include_once ("config/class.publicidad.php");
include_once ("config/conexion.inc.php");
include_once ("config/class.suscriptor.php");
/* Fin Modelos a utilizar */

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

	
	if ($_POST['go'] == "Go"){
		if(!isset($suscribir)){
			$suscribir = new Suscriptor;	
			$suscribir->guardar_suscripcion();
			$mensaje3=$suscribir->mensaje;
			$suscribir->mensaje="";
		}
	}

	if ($_POST['envio'] == "Enviar"){
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

if(!isset($categoria))
	$categoria = new Categoria();
$categoria->listar_categoria_imagen('portada');

if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad();

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad();

if(!isset($producto))
	$producto = new Producto;
$producto->listar_producto_categoria();

$content=1;

if(isset($_GET['cont'])) $cont=$_GET['cont']; else $cont=1;

if(!isset($contenido))
	$contenido= new Contenido();
$contenido->listar_contenido_publico($cont);
$contenido->mostrar_link_publico($cont);

if(!isset($galeria))
	$galeria = new Galeria();
$galeria->listar_galeria_publica();

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("arriba");
$nombre=$link->get_link($cont);


$mensaje2="";
if($contenido->mensaje!="si"){
	$mensaje2="<tr><td align='center' colspan='2'><span class='error'>No existen registros en esta sección</span></td></tr>";
}

/* footer para Smarty */
$smarty->assign("accion", "Galería");
$smarty->assign("activo", $cont);
$smarty->assign("claves", $contenido->claves);
$smarty->assign("descripcion", $contenido->descripcion);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje3", $mensaje3);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("enlaces_A", $link->listado);
$smarty->assign("banner", $banner->listado);
$smarty->assign('contenido', $contenido->listado);
$smarty->assign('galeria', $galeria->listado);
$smarty->assign("categoria", $categoria->listado);
$smarty->assign('producto', $producto->listado);
$smarty->assign("publicidad", $publicidad->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->force_compile=true;
$smarty->display('galeria.tpl');
/* Fin footer para Smarty */
?>
