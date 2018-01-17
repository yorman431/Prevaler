<?php
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Eliminar de Link
include_once(CONFIG_DIR . 'class.login.php');
include_once(CONFIG_DIR . 'class.link.php');

$auth = new Auth;
$auth->permisos();

$link = new Link;
$link->eliminar_link();

/* footer para Smarty */
$smarty->assign('nombre', $_SESSION['nombre_temp']);
$smarty->assign('apellido', $_SESSION['apellido_temp']);