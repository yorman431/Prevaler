<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Insertar Documento
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.documento.php');
include_once(CONFIG_DIR . 'class.categoria.php');

$auth = new Auth;
$auth->permisos();

$documento = new Documento;
$documento->insertar_documento();

if($documento->mensaje==1){
	$mensaje="<tr><td align='center' colspan='2' class='error'>El archivo supera 1Mb de espacio!</td></tr>";
}else if($documento->mensaje==2){
	$mensaje="<tr><td align='center' colspan='2' class='error'>S&oacute;lo se aceptan archivos de Imagen, Word, Excel y Adobe Reader<br /> (jpg, png, doc, xls o pdf)!</td></tr>";
}else if($documento->mensaje==3){
	$mensaje="<tr><td align='center' colspan='2' class='error'>Por favor no olvide el archivo!</td></tr>";
}

$categoria = new Categoria;
$categoria->listar_categoria();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);
$smarty->assign("titulo", $documento->titulo);
$smarty->assign("mensaje", $mensaje);
$smarty->assign("fecha", $documento->fecha);
$smarty->assign("accion", $documento->accion);
$smarty->assign("contenido", $documento->contenido);
$smarty->assign("listado", $categoria->listado);
$smarty->display('admin/documento/formulario.tpl');
/* Fin footer para Smarty */
?> 