<?php
require('config/setup.php');

include_once('medicoXls.php');

$excel = new MedicoExcel();

if ($_POST['subir'] == 'Enviar')
  $excel->checkFile();

$smarty->display('zzz.tpl');