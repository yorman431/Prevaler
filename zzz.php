<?php
require('config/setup.php');

include_once('./medicoXls.php');

$excel = new EXCEL();

if ($_POST['subir'] == 'Enviar')
  $excel->checkFile();

$smarty->display('zzz.tpl');