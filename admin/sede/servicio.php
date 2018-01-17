<?php
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
include_once (CONFIG_DIR . 'conexion.inc.php');

$connection = new Connection();
$accion = $_POST['accion'];
if ($_POST['id']) {
  $id = $_POST['id'];
}

switch ($accion){
  case 'agregar':
    InsertarSede($_POST['sede']);
  break;

  case 'mostrar':
    MostrarSede($id);
  break;

  case 'editar':
    EditarSede($id);
  break;

  case 'eliminar':
    EliminarSede($id);
  break;

  default:
    echo 'Error, accion no reconocida, contacte Diaz Creativos';
}



function InsertarSede ($sede) {

  global $connection;

  $sql = 'INSERT INTO serviciosede (titulo, descripcion, id_sede) VALUES (?, ?, ?)';

  try{
    $query = $connection->prepare($sql);

    $query->bindParam(1, $_POST['titulo']);
    $query->bindParam(2, $_POST['descripcion']);
    $query->bindParam(3, $sede);

    $query->execute();

    $resultado['id'] = $connection->lastInsertId();
    $resultado['titulo'] = $_POST['titulo'];

    $connection->Close();

  }catch (PDOException $e){
    echo 'Error code: '.$e->getMessage();
  }

  if (isset($resultado)){
    echo json_encode($resultado);
  }else{
    echo ('insercion no fue realizada correctamente');
  }

}

function MostrarSede ($id) {
  global $connection;

  $sql = 'SELECT * FROM serviciosede WHERE id = ?';

  try{
    $query = $connection->prepare($sql);
    $query->bindParam(1, $id);

    $query->execute();

    $connection->Close();

  }catch(PDOException $e){
    echo 'Error code: '.$e->getMessage();
  }

  if (isset($query)){
    echo (json_encode($query->fetch()));
  }else{
    echo ('Error en la consulta');
  }


}

function EditarSede ($id) {
  global $connection;

  $sql = 'UPDATE serviciosede SET titulo = ?, descripcion = ? WHERE id = ?';

  try{
    $query = $connection->prepare($sql);

    $query->bindParam(1, $_POST['titulo']);
    $query->bindParam(2, $_POST['descripcion']);
    $query->bindParam(3, $id);

    $query->execute();

    $connection->Close();

    $respuesta['id'] = $id;
    $respuesta['titulo'] = $_POST['titulo'];
  }catch(PDOException $e){
    echo 'Error code: '.$e->getMessage();
  }

  if (isset($respuesta)){
    echo json_encode($respuesta);
  }else{
    echo ('Edicion no finalizada correctamente');
  }

}

function EliminarSede ($id) {
  global $connection;

  $sql = 'DELETE FROM serviciosede WHERE id = ?';

  try{
    $query = $connection->prepare($sql);

    $query->bindParam(1, $id);

    $query->execute();

    $connection->Close();

  }catch(PDOException $e){
    echo 'Error code: '.$e->getMessage();
  }

  echo ('Servicio eliminado satisfactoriamente');
}