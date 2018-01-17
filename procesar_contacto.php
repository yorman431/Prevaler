<?php
include_once ("config/class.login.php");

if(!isset($acceso))
	$acceso = new Auth;
  $acceso->enviar_contacto();
  echo $acceso->mensaje;
