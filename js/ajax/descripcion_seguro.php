<?php  

include_once("../../config/conexion.inc.php");

$connection = new Connection();

$seguro = $_POST['seguro'];

$sql = "SELECT descripcion_seg FROM aseguradora WHERE nombre_seg = ?";


try{

	$query = $connection->prepare($sql);

	$query->bindParam(1, $seguro);

	$query->execute();

	$connection->Close();

	$aseguradoras = $query->fetchAll();

}catch(PDOException $e){
	echo 'Error code: '.$e->getMessage();
}

if (isset($aseguradoras)){
	foreach ($aseguradoras as &$aseguradora) {
		$resultado = '<div class="alert" align="center">'.$aseguradora["descripcion_seg"].'</div>';
	}
	echo ($resultado);
}else{
	echo ('Error en la consulta');
}