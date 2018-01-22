<?php

include_once 'conexion.inc.php';
class Usuario{
  var $login;
  var $clave;
  var $confirmar;
  var $nueva_clave;
  var $vieja_clave;
  var $id;
  var $nombre;
  var $apellido;
  var $correo;
  var $nivel;
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
    $this->apellido=$_POST['apellido'];
    $this->correo=$_POST['correo'];
    $this->nivel=$_POST['nivel'];
    $this->login=$_POST['login'];
    $this->clave=$_POST['clave'];
    $this->confirmar=$_POST['confirmar'];
  }

  function listar_usuario(){
    if (isset($_POST['buscar']))
      $_SESSION['buscar']=$_POST['buscar'];

    if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
      $this->buscar = '%'.$_SESSION['buscar'].'%';

      $sql="SELECT * FROM usuario WHERE
           (nombre_uso LIKE ? OR 
           login_uso LIKE ? OR 
           apellido_uso LIKE ? OR 
           correo_uso LIKE ?) 
           ORDER BY id_uso ASC";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam( 1, $this->buscar);
        $query->bindParam( 2, $this->buscar);
        $query->bindParam( 3, $this->buscar);
        $query->bindParam( 4, $this->buscar);

        $query->execute();

        $this->connection->Close();

        if ($this->listado = $query->fetchAll())
          $this->mensaje = 'si';

      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $sql="SELECT * FROM usuario ORDER BY id_uso";

      try{
        $query = $this->connection->prepare($sql);

        $query->execute();

        if ($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function mostrar_usuario(){

    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql="SELECT * FROM usuario WHERE id_uso = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        if ($usuario = $query->fetch()){
          $this->nombre = $usuario['nombre_uso'];
          $this->apellido = $usuario['apellido_uso'];
          $this->correo = $usuario['correo_uso'];
          $this->login = $usuario['login_uso'];
          $this->nivel = $usuario['nivel_uso'];
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function insertar_usuario(){
    $this->accion="Datos del Nuevo Usuario";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();
      if($this->clave!=$this->confirmar){
        $this->mensaje=2;
      }else{
        $sql="SELECT COUNT(*) FROM usuario WHERE login_uso='$this->login'";

        try{
          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $this->login);

          $query->execute();

          $this->connection->Close();

          $fila = $query->fetchColumn();

          if ($fila > 0){
            $this->mensaje = 1;
          }else{
            $sql="INSERT INTO usuario (nombre_uso, apellido_uso, correo_uso, login_uso, clave_uso, nivel_uso) 
                  VALUES (?, ?, ?, ?, ?, ?)";

            try{
              header("location:/admin/usuario/");
              unset($query);

              $query = $this->connection->prepare($sql);

              $query->bindParam(1, $this->nombre);
              $query->bindParam(2, $this->apellido);
              $query->bindParam(3, $this->correo);
              $query->bindParam(4, $this->login);
              $query->bindParam(5, $this->clave);
              $query->bindParam(6, $this->nivel);

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
  }

  function editar_usuario(){
    $this->accion="Editando Datos del Usuario";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      $this->asignar_valores();
      if($this->clave!=$this->confirmar){
        $this->mensaje=2;
      }else{
        $sql="SELECT COUNT(*) FROM usuario WHERE login_uso = ? AND id_uso != ?";

        try{
          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $this->login);
          $query->bindParam(2, $_GET['id']);

          $query->execute();

          $this->connection->Close();

          $fila = $query->fetchColumn();

          if ($fila > 0){
            $this->mensaje = 1;
          }else{
            $sql="UPDATE usuario SET 
                    nombre_uso = ?,
                    apellido_uso = ?,
                    correo_uso = ?,
                    nivel_uso = ?,
                    login_uso = ?,
                    clave_uso = ?
                  WHERE id_uso = ?";

            try{
              header("location:/admin/usuario/");

              unset($query);

              $query = $this->connection->prepare($sql);

              $query->bindParam(1, $this->nombre);
              $query->bindParam(2, $this->apellido);
              $query->bindParam(3, $this->correo);
              $query->bindParam(4, $this->nivel);
              $query->bindParam(5, $this->login);
              $query->bindParam(6, $this->clave);
              $query->bindParam(7, $_GET['id']);

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
    }else{
      $this->mostrar_usuario();
    }
  }

  function eliminar_usuario(){
    $sql="DELETE FROM usuario WHERE id_uso = ?";

    try{
      header("location:/admin/usuario/");

      $query = $this->connection->prepare($sql);

      $query->bindParam(1,$_GET['id']);

      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }
}