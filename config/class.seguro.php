<?php

include_once ('conexion.inc.php');
class Seguro{
  var $login;
  var $clave;
  var $descripcion;
  var $id;
  var $nombre;
  var $listado;
  var $buscar;
  var $mensaje;
  var $accion;

  var $connection;

  function __construct(){
    $this->connection = new Connection();
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->nombre=$_POST['nombre'];
    $this->descripcion=$_POST['descripcion'];
  }

  function listar_seguro(){
    if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
      $_SESSION['buscar']=$_POST['buscar'];
      $buscar = '%'.$_SESSION['buscar'].'%';

      $sql="SELECT * FROM aseguradora WHERE
           (id_seg LIKE ? OR
            nombre_seg LIKE ? OR
            descripcion_seg LIKE ?) 
           ORDER BY id_seg ASC";
    }else{
      $sql="SELECT * FROM aseguradora ORDER BY id_seg";
    }

    try{
      $query = $this->connection->prepare($sql);

      if (isset($buscar)){
        $query->bindParam(1, $buscar);
        $query->bindParam(2, $buscar);
        $query->bindParam(3, $buscar);
      }

      $query->execute();

      $this->connection->Close();

      if ($this->listado = $query->fetchAll()){
        $this->mensaje = 'si';
      }
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }

  function listar_seguro_publico(){
    $sql="SELECT * FROM aseguradora ORDER BY nombre_seg";

    try{
      $query = $this->connection->prepare($sql);

      $query->execute();

      $this->connection->Close();

      if ($this->listado = $query->fetchAll()){
        $this->mensaje = 'si';
      }
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }

  function mostrar_seguro(){
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql="SELECT * FROM aseguradora WHERE id_seg = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        if ($seguro = $query->fetch()){
          $this->id = $_GET['id'];
          $this->nombre = $seguro['nombre_seg'];
          $this->descripcion = $seguro['descripcion_seg'];
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function eliminar_seguro(){
    $sql="DELETE FROM aseguradora WHERE id_seg = ?";

    try{
      header("location:/admin/seguro/");

      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $_GET['id']);

      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }

  function insertar_seguro(){
    $this->accion="Datos de la Aseguradora";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();

      $sql="SELECT COUNT(*) FROM aseguradora  WHERE nombre_seg = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);

        $query->execute();

        $this->connection->Close();

        $fila = $query->fetchColumn();

        if ($fila > 0){
          $this->mensaje = 2;
        }else{
          $sql = 'INSERT INTO aseguradora (nombre_seg, descripcion_seg) VALUES (?, ?)';

          try{
            unset($query);

            $query = $this->connection->prepare($sql);

            $query->bindParam(1,$this->nombre);
            $query->bindParam(2, $this->descripcion);

            $query->execute();

            $this->connection->Close();

            $this->mensaje = 1;
          }catch (PDOException $e){
            echo 'Error code: '.$e->getMessage();
          }
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function editar_seguro(){
    $this->accion="Editando Datos de la Aseguradora";

    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      $this->asignar_valores();

      $sql="UPDATE aseguradora SET nombre_seg = ?, descripcion_seg = ? WHERE id_seg = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->descripcion);
        $query->bindParam(3, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        $this->mensaje = 1;

        $this->mostrar_seguro();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $this->mostrar_seguro();
    }
  }
}