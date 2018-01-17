<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.publicidad.php');  

$auth = new Auth;
$auth->permisos();

$publicidad = new Publicidad;

$publicidad->eliminar_publicidad();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);