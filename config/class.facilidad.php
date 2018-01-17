<?php
include_once ('conexion.inc.php');

class Facilidad{
  var $id;
  var $nombre;
  var $etiqueta;
  var $listado;
  var $buscar;
  var $mensaje;
  var $accion;
  var $encendido;

  var $connection;

  function __construct(){
    $this->connection = new Connection();
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->nombre=$_POST['nombre'];
    $this->etiqueta=$_POST['etiqueta'];
  }

  function listar_facilidad(){
    if (isset($_POST['buscar'])){
      $_SESSION['buscar']=$_POST['buscar'];
      $buscar = '%'.$_POST['buscar'].'%';
    }

    if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
      $sql="SELECT * FROM facilidad WHERE	(nombre_fac LIKE ? OR	etiqueta_fac LIKE ?)	ORDER BY id_fac ASC";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $buscar);
        $query->bindParam(2, $buscar);

        $query->execute();

        $this->connection->Close();

        $this->listado = $query->fetchAll();

      }catch(PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $sql="SELECT * FROM facilidad ORDER BY id_fac";

      try{
        $query = $this->connection->prepare($sql);

        $query->execute();

        $this->connection->Close();

        $this->listado = $query->fetchAll();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function listar_facilidad_imagen(){
    /* Metodo para listar los facilidades y sus opciones. */
    $sql="SELECT *, id_fac AS id_image, id_fac AS nombre_image FROM facilidad GROUP BY id_fac ORDER BY id_fac ASC";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $buscar=$resultado['id_fac'];
      $sql="SELECT directorio_image, nombre_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='especialidad' ORDER BY id_image";
      $imagenes=mysql_query($sql) or die(mysql_error());
      $respuesta = mysql_fetch_array($imagenes);
      $resultado['directorio_image']=$respuesta['directorio_image'];
      $resultado['nombre_image']=$respuesta['nombre_image'];
      $this->mensaje="si";
      $this->listado[] = $resultado;
    }
    //print_r($this->listado);
  }

  function mostrar_facilidad(){

    if (isset($_GET['id']) && $_GET['id']!=""){

      $sql="SELECT * FROM facilidad WHERE id_fac = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        if ($resultado = $query->fetch()){
          $this->id = $_GET['id'];
          $this->nombre = $resultado['nombre_fac'];
          $this->etiqueta = $resultado['etiqueta_fac'];
        }
      }catch(PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function insertar_facilidad(){
    $this->accion="Datos de la Nueva Especialidad";

    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();

      $sql="SELECT COUNT(*) FROM facilidad WHERE nombre_fac = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);

        $query->execute();

        $this->connection->Close();

        if ($query->fetchColumn() > 0){
          $this->mensaje = 1;
        }else{
          header("location:/admin/especialidad/");
          $sql="INSERT INTO facilidad (nombre_fac, etiqueta_fac) VALUES (?, ?)";

          try{
            unset($query);

            $query = $this->connection->prepare($sql);

            $query->bindParam(1, $this->nombre);
            $query->bindParam(2, $this->etiqueta);

            $query->execute();

            $this->connection->Close();
          }catch (PDOException $e){
            echo 'Error code: '.$e->getMessage();
          }
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function editar_facilidad(){
    $this->accion="Editando Datos de la Facilidad";

    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      $this->asignar_valores();

      $sql="SELECT COUNT(*) FROM facilidad WHERE nombre_fac = ? AND id_fac != ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        if ($query->fetchColumn() > 0){
          $this->mensaje = 1;
        }else{
          header("location:/admin/especialidad/");
          $sql = "UPDATE facilidad SET nombre_fac = ?, etiqueta_fac = ? WHERE id_fac = ?";

          try{
            unset($query);

            $query = $this->connection->prepare($sql);

            $query->bindParam(1, $this->nombre);
            $query->bindParam(2, $this->etiqueta);
            $query->bindParam(3, $_GET['id']);

            $query->execute();

            $this->connection->Close();
          }catch (PDOException $e){
            echo 'Error code: '.$e->getMessage();
          }
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $this->mostrar_facilidad();
    }
  }

  function eliminar_facilidad(){

    $sql="SELECT id_image, directorio_image, nombre_image FROM imagen WHERE galeria_image='$id' AND tabla_image='especialidad'";

    $tabla = 'especialidad';

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $_GET['id']);
      $query->bindParam(2, $tabla);

      $query->execute();

      $this->connection->Close();

      if ($imagenes = $query->fetchAll()){
        foreach ($imagenes as &$imagen){
          $directorio = '../../imagenes/'.$imagen['directorio_image'];
          $sql = 'DELETE FROM imagen WHERE id_image = ?';

          try{
            unset($query);

            $query = $this->connection->prepare($sql);

            $query->bindParam(1, $imagen['id_image']);

            $query->execute();

            $this->connection->Close();

            if ($query->rowCount() > 0){
              unlink($directorio);
            }
          }catch (PDOException $e){
            echo 'Error code: '.$e->getMessage();
          }
        }
      }

      $sql = 'DELETE FROM facilidad WHERE id_fac = ?';

      try{
        header("location:/admin/especialidad/");
        unset($query);

        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }
}