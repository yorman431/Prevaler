<?php  

include_once("../../config/conexion.inc.php");

$sede = $_POST['sede'];
$resultado = '<option selected hidden value="">Especialidad Médica</option>';

$sql = "SELECT id_fac, nombre_fac FROM facilidad, tiene, sede WHERE id_sede = $sede AND id_sede = hotel_rel AND id_fac = facilidad_rel";

$consulta = mysql_query($sql) or die(mysql_error());

while($respuesta = mysql_fetch_array($consulta)){
	$resultado .= '<option value="'.$respuesta["id_fac"].'">'.$respuesta["nombre_fac"].'</option>'; 
}

echo ($resultado);
