<?php
/* header para Smarty */
require('config/setup.php');
/*  Fin header para Smarty */

include_once ("config/class.login.php");
include_once ("config/class.link.php");
include_once ("config/class.galeria.php");
include_once ("config/class.color.php");
include_once ("config/class.publicidad.php");
include_once("config/conexion.inc.php");
require('smarty/libs/SmartyPaginate.class.php');
include_once ("config/class.categoria.php");
include_once ("config/class.banner.php");

if(!isset($acceso))
	$acceso = new Auth;
if ($_POST){
	if ($_POST['enviar'] == "Entrar"){
		$acceso->asignar_consulta($_POST['login'],$_POST['clave']);
		$acceso->login2($acceso->login, $acceso->password);
	}
	
	if ($_POST['enviar'] == "Salir")
		$acceso->logout();
		
	if ($_POST['envio'] == "Calcular"){
		if(!isset($cotizacion))
			$cotizacion= new Color;
		$cotizacion->calcular_cotizacion();
		if($cotizacion->mensaje==1){
	$mensaje2="<tr><td colspan='2' align='center' class='ok'>Su cotizaci&oacute;n a sido calculada exitosamente!</td></tr>";	
		}else if($cotizacion->mensaje==2){
	$mensaje2="<tr><td colspan='2' align='center' class='error'>Disculpe, el valor de la inicial para un veh&iacute;culo $cotizacion->tipo es de un m&iacute;nimo de  $cotizacion->indicador % <br />por favor verifique su monto inicial!</td></tr>";	
}

		$cotizacion->mensaje="";
	}
}

if(!isset($banner))
	$banner= new Banner;
$banner->listar_banner_publica($cont);
$smarty->assign("banner", $banner->listado);

if(!isset($link))
	$link= new Link;
$link->listar_link_menu("todo");

$nombre=$link->get_link(8);

if(!isset($enlaces_A))
	$enlaces_A= new Link();
$enlaces_A->listar_link_menu("arriba");

if(!isset($enlaces_B))
	$enlaces_B= new Link();
$enlaces_B->listar_link_menu("normal");

if(!isset($publicidad))
	$publicidad= new publicidad;
$publicidad->cargar_publicidad("Banner Superior");
$smarty->assign("publicidad", $publicidad->listado);

/* footer para Smarty */
$smarty->assign('nombre_uso',$_SESSION['nombre_temporal']);
$smarty->assign('apellido_uso',$_SESSION['apellido_temporal']);

$smarty->assign("nombre",$repuestos->nombre);
$smarty->assign("apellido",$repuestos->apellido);
$smarty->assign("telefono",$repuestos->telefono);
$smarty->assign("email",$repuestos->email);

$smarty->assign("tipo",$cotizacion->tipo);
$smarty->assign("ano",$cotizacion->ano);
$smarty->assign("valor_vehiculo",$cotizacion->valor_vehiculo);
$smarty->assign("saldo",$cotizacion->saldo);
$smarty->assign("valor_inicial",$cotizacion->valor_inicial);
$smarty->assign("comision",$cotizacion->comision);
$smarty->assign("plazo",$cotizacion->plazo);
$smarty->assign("cuotas",$cotizacion->cuotas);
$smarty->assign("total",$cotizacion->total);

$smarty->assign("enlaces", $link->listado);
$smarty->assign("accion", "Cotizaci&oacute;n de Cr&eacute;dito");
$smarty->assign("mensaje2",$mensaje2);

$smarty->assign('enlaces_A',$enlaces_A->listado);
$smarty->assign('enlaces_B',$enlaces_B->listado);
$smarty->assign("enlaces", $link->listado);

// display results
$smarty->force_compile=true;
$smarty->display('cotizacion.tpl');
/* Fin footer para Smarty */
?>