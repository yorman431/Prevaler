<?php  

include_once('../../config/conexion.inc.php');

$connection = new Connection();

$sede = $_POST['sede'];

$especialidad = $_POST['especialidad'];

$resultado = '<option selected hidden value="">Médico de Preferencia</option><option value="0">Sin Preferencia</option>';

$sql = "SELECT id_med, nombre_med FROM facilidad, medico, sede WHERE sede_med = ? AND id_fac = ? AND id_fac = especialidad_med GROUP BY id_med";

try{
	$query = $connection->prepare($sql);

	$query->bindParam(1, $sede);
	$query->bindParam(2, $especialidad);

	$query->execute();

	$connection->Close();

	$medicos = $query->fetchAll();
}catch(PDOException $e){
	echo 'Error code: '.$e->getMessage();
}

if (isset($medicos)){
	foreach ($medicos as &$medico) {
		$resultado .= '<option value="'.$medico["id_med"].'">Dr. '.$medico["nombre_med"].'</option>';
	}

	echo ($resultado);

}else{
	echo ('Error en la consulta');
}



