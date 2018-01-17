<?php  

include_once("../../config/conexion.inc.php");

$sede = $_POST['sede'];
$especialidad = $_POST['especialidad'];
$resultado = '<option selected hidden value="">Médico de Preferencia</option><option value="0">Sin Preferencia</option>';

$sql = "SELECT id_med, nombre_med FROM facilidad, medico, sede WHERE sede_med = $sede AND id_fac = $especialidad AND id_fac = especialidad_med GROUP BY id_med";

$consulta = mysql_query($sql) or die(mysql_error());

while($respuesta = mysql_fetch_array($consulta)){
	$resultado .= '<option value="'.$respuesta["id_med"].'">Dr. '.$respuesta["nombre_med"].'</option>'; 
}

echo ($resultado);
