<?php 
$count=mysql_query("SELECT COUNT(*) AS total FROM participante, asiste WHERE cedula_part=cedula_asi AND material_asi='Si'") or die(mysql_error());
$row=mysql_fetch_array($count);
$total=$row['total'];

$count2=mysql_query("SELECT COUNT(*) AS udo FROM participante, asiste WHERE cedula_part=cedula_asi AND inscrito_asi='Confirmado'") or die(mysql_error());
$row2=mysql_fetch_array($count2);
$udo=$row2['udo'];

$count3=mysql_query("SELECT COUNT(*) AS otro FROM participante, deposito WHERE cedula_part=cedula_dep AND NOT EXISTS(SELECT * FROM asiste WHERE cedula_part=cedula_asi)") or die(mysql_error());
$row3=mysql_fetch_array($count3);
$otro=$row3['otro'];

$count4=mysql_query("SELECT COUNT(*) AS material FROM participante, deposito WHERE cedula_part=cedula_dep AND NOT EXISTS(SELECT * FROM asiste WHERE cedula_part=cedula_asi)") or die(mysql_error());
$row4=mysql_fetch_array($count4);
$material=$row4['material'];

$count5=mysql_query("SELECT COUNT(*) AS ponentes FROM participante, deposito, asiste WHERE cedula_part=cedula_asi AND material_asi='Si' AND cedula_part=cedula_dep AND tipo_presenta_part='Ponente'") or die(mysql_error());
$row5=mysql_fetch_array($count5);
$ponentes=$row5['ponentes'];

$count6=mysql_query("SELECT COUNT(*) AS participantes FROM participante, deposito, asiste WHERE cedula_part=cedula_asi AND material_asi='Si' AND cedula_part=cedula_dep AND tipo_presenta_part='No Ponente'") or die(mysql_error());
$row6=mysql_fetch_array($count6);
$participantes=$row6['participantes'];
?>