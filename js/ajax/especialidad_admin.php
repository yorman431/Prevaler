<?php  

include_once("../../config/conexion.inc.php");

$connection = new Connection();

$sede = $_POST['sede'];

$resultado = '<option selected hidden value="">Especialidad Médica</option>';

$sql = "SELECT id_fac, nombre_fac FROM facilidad, tiene, sede WHERE id_sede = ? AND id_sede = hotel_rel AND id_fac = facilidad_rel ORDER BY nombre_fac";

try{

	$query = $connection->prepare($sql);

	$query->bindParam(1, $sede);

	$query->execute();

	$connection->Close();

	$especialidades = $query->fetchAll();

}catch(PDOException $e){
	echo 'Error code: '.$e->getMessage();
}

if (isset($especialidades)){
	foreach ($especialidades as &$especialidad) {
		$resultado .= '<option value="'.$especialidad["id_fac"].'">'.$especialidad["nombre_fac"].'</option>';
	}
	echo ($resultado);

}else{
	echo ('Error en la consulta');
}

