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
include_once ("config/class.noticia.php");
include_once ("config/class.producto.php");
include_once("config/conexion.inc.php");
include_once("config/pagination.class.php");

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
	$mensaje="<tr><td align='center' colspan='2' class='error'>La sesi&oacute;n de usuario a caducado! ingrese de nuevo!</td></tr>";	
}else if(isset($_GET['msg']) && $_GET['msg']==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Usted no posee privilegios pa entrar en esta &aacute;rea!</td></tr>";	
}else if($acceso->mensaje!=""){
	$mensaje="<tr><td align='center' colspan='2' class='error'>$acceso->mensaje</td></tr>";
}

if(!isset($galeria))
	$galeria= new Galeria();
$galeria->listar_galeria_publica2();

if($galeria->mensaje!="si"){
	$mensaje2="<tr><td align='center' colspan='7' class='error'>No hubo resultados de la consulta requerida!</td></tr>";
}

if(!isset($publicidad))
	$publicidad= new Publicidad;
$publicidad->cargar_publicidad("Banner Izquierda");
$smarty->assign("publicidad", $publicidad->listado);

if(!isset($publicidad2))
	$publicidad2= new Publicidad;
$publicidad2->cargar_publicidad("Banner Derecha");
$smarty->assign("publicidad2", $publicidad2->listado);

$noticia = new Noticia;
$noticia->accion="Últimas Noticias";
$noticia->listar_noticia_publica();

if(!isset($catalogo))
	$catalogo= new Producto();
$catalogo->listar_producto_nuevo();
$smarty->assign('nuevos',$catalogo->listado);

if(!isset($catalogo2))
	$catalogo2= new Producto();
$catalogo2->buscar_recomendado($producto->detal, $producto->nombre, $producto->id, $producto->id_cat);
$smarty->assign('recomendado',$catalogo2->listado);

$content=1;

if(isset($_GET['cont'])) $content=$_GET['cont']; else $content=1;

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

if(!isset($galeria2))
	$galeria2= new Galeria;
$galeria2->listar_galeria_publica2();

// Paginación de Registros

$pagination = new pagination();
$dataPages = $pagination->generate($galeria->listado, 10);
$smarty->assign('galeria', $dataPages);
//$pagination->showFirstAndLast=true;
//$smarty->assign('pagination', $pagination->links());
$smarty->assign('pagination', $pagination->links());

//------------------------


/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);

$smarty->assign("ip_usuario",$_SESSION['id_temporal']);
$smarty->assign("accion", $link->get_link(14)); 
$smarty->assign("descripcion", $link->descripcion);
$smarty->assign("claves", $link->claves);
$smarty->assign("mensaje2", $mensaje2);
$smarty->assign("mensaje", $mensaje);

$smarty->assign("publicidad", $publicidad->listado);
$smarty->assign("publicidad2", $publicidad2->listado);
$smarty->assign("publicidad3", $publicidad3->listado);
$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign('enlaces_C',$enlaces_C->listado);
$smarty->assign('categorias',$categoria->listado);

$smarty->assign("banner", $banner->listado);
$smarty->assign('noticias', $noticia->listado);
$smarty->assign('galerias', $galeria2->listado);

$smarty->assign("descuento", $_SESSION['procesando_carro']->descuento);
$smarty->assign("total_monto", $_SESSION['procesando_carro']->total);
$smarty->assign("cant_producto", $_SESSION['procesando_carro']->numero);

mysql_close($conex);
$smarty->force_compile=true;
$smarty->display('galeria.tpl');
/* Fin footer para Smarty */
?>