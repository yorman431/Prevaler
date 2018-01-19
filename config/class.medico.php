<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 162)
 * Alejandro José Díaz Delgado. <contacto@diazcreativos.net.ve> escribió este archivo.
 * Mientras conserve
 * este comentario usted puede hacer lo que quiera con este material. Si alguna
 * vez nos encontramos
 * y piensa que este material le fue útil, usted puede invitarme una cerveza
 * en agradecimiento.
 * ----------------------------------------------------------------------------
*/
include_once("class.hotel.php");
include_once("class.facilidad.php");
include_once('conexion.inc.php');

class Medico{
  var $nombre;
  var $especialidad;
  var $sede;
  var $id;
  var $imagen;
  var $fecha;
  var $contenido;
  var $listado;
  var $tipo;
  var $listado2;
  var $buscar;
  var $mensaje;
  var $mensaje2;
  var $prioridad;
  var $accion;
  var $perfil;

  var $connection;

  function __construct(){
    $this->connection = new Connection();
  }

  function convertir_fecha($CampoFecha){
    if(!empty($CampoFecha)){
      if(strpos($CampoFecha,"-")){
        $conv_fecha = explode("-",$CampoFecha); $conv_fecha = $conv_fecha[2]."/".$conv_fecha[1]."/".$conv_fecha[0];
      }else{
        $conv_fecha = explode("/",$CampoFecha); $conv_fecha = $conv_fecha[2]."-".$conv_fecha[1]."-".$conv_fecha[0];
      }
      return $conv_fecha;
    }
    return ('Error $CampoFecha sin valor');
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->nombre=$_POST['nombre'];
    $this->especialidad=$_POST['especialidad'];
    $this->sede=$_POST['sede'];
    $this->prioridad=$_POST['prioridad'];
    $this->contenido=$_POST['contenido'];
  }

  function listar_medico(){
    if (isset($_POST['buscar'])){
      $_SESSION['buscar']=$_POST['buscar'];
      $buscar = '%'.$_POST['buscar'].'%';

      $sql="SELECT * FROM medico, sede WHERE id_sede = sede_med AND(
			         nombre_med LIKE ? OR
           orden_med LIKE ? OR
           descripcion_med LIKE ? OR
           especialidad_med LIKE ?)
           ORDER BY orden_med ASC";
    }else{
      $sql="SELECT id_med, nombre_med, descripcion_med, especialidad_med, orden_med, nombre_sede, nombre_fac  FROM medico, sede, facilidad WHERE id_sede = sede_med AND id_fac = especialidad_med ORDER BY orden_med ASC";
    }

    try{
      $query = $this->connection->prepare($sql);

      if ($_POST['buscar']){
        $query->bindParam(1, $buscar);
        $query->bindParam(2, $buscar);
        $query->bindParam(3, $buscar);
        $query->bindParam(4, $buscar);
      }

      $query->execute();

      $this->connection->Close();

      if ($this->listado = $query->fetchAll())
        $this->mensaje = 'si';

    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }

  function listar_medico_publico($sede){

    $sql="SELECT * FROM medico, imagen WHERE sede_med = ? AND id_med = galeria_image AND tabla_image = ? ORDER BY orden_med ASC";

    $tabla = 'medico';
    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $sede);
      $query->bindParam(2, $tabla);

      $query->execute();

      $this->connection->Close();

      if ($this->listado = $query->fetchAll()){
        $this->mensaje = 'si';
      }
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }


  function listar_medico_imagen($tipo){
    /* Metodo para listar los usuarios y sus opciones. */
    if($tipo == '25'){
      $tipo2="inicio";
    }else if($tipo == '26'){
      $tipo2="nosotros";
    }else if($tipo == '28'){
      $tipo2="productos";
    }else if($tipo == '27'){
      $tipo2="noticias";
    }else if($tipo == '29'){
      $tipo2="galeria";
    }

    if(isset($_GET['sub'])&& $_GET['sub']!=""){
      $sub=$_GET['sub'];
      $restriccion="'$tipo'=enlace_con AND subenlace_con='$sub' AND tipo_con='$tipo'";
    }else{
      $restriccion="'$tipo'=enlace_con AND tipo_con='$tipo'";
    }
    $sql="SELECT *, id_con AS id_image, id_con AS nombre_image FROM medico WHERE $restriccion GROUP BY id_con ORDER BY enlace_con, prioridad_con, nombre_con";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $buscar=$resultado['id_con'];
      $sql="SELECT id_image, nombre_image,directorio_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='medico' ORDER BY id_image";
      $imagenes=mysql_query($sql) or die(mysql_error());
      $resultado['enlace_con']=$this->get_enlace($resultado['enlace_con']);
      $resultado['subenlace_con']=$this->get_subenlace($resultado['subenlace_con']);
      $resultado['fecha_con']=$this->convertir_fecha($resultado['fecha_con']);
      while ($respuesta = mysql_fetch_array($imagenes)){
        $imagen[]=$respuesta['directorio_image'];
      }
      $this->mensaje="si";
      $resultado['imagenes']=$imagen;
      $imagen="";
      $this->listado[] = $resultado;
    }
  }



  function mostrar_medico(){
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql="SELECT * FROM medico WHERE id_med = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        if ($resultado = $query->fetch()){
          $this->id = $_GET['id'];
          $this->nombre=$resultado['nombre_med'];
          $this->prioridad=$resultado['orden_med'];
          $id_esp = $resultado['especialidad_med'];
          $id_sede = $resultado['sede_med'];
          $this->contenido=$resultado['descripcion_med'];
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }

      if (isset($id_esp)){
        $sql = 'SELECT nombre_fac FROM facilidad WHERE id_fac = ?';

        try{
          unset($query);
          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $id_esp);

          $query->execute();

          $this->connection->Close();

          if ($resultado = $query->fetch())
            $this->especialidad = $resultado['nombre_fac'];

        }catch (PDOException $e){
          echo 'Error code: '.$e->getMessage();
        }
      }

      if (isset($id_sede)){
        $sql = 'SELECT nombre_sede FROM sede WHERE id_sede = ?';

        try{
          unset($query);
          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $id_sede);

          $query->execute();

          $this->connection->Close();

          if ($resultado = $query->fetch())
            $this->sede = $resultado['nombre_sede'];

        }catch (PDOException $e){
          echo 'Error code: '.$e->getMessage();
        }
      }
    }
  }

  function mostrar_medico_img(){
    /*Metodo para mostrar un usuario seleccionado */
    if (isset($_GET['id']) && $_GET['id']!=""){
      $id=$_GET['id'];
      $sql="SELECT * FROM medico,imagen WHERE id_med='$id' AND galeria_image=id_med AND tabla_image='medico'";

      $consulta=mysql_query($sql) or die(mysql_error());
      $resultado = mysql_fetch_array($consulta);
      $this->id=$id;
      $this->nombre=$resultado['nombre_med'];
      $this->prioridad=$resultado['orden_med'];
      $this->especialidad=$resultado['especialida_med'];
      $this->sede=$resultado['sede_med'];
      $this->contenido=$resultado['descripcion_med'];
      $this->imagen=$resultado['directorio_image'];
    }
  }
  function insertar_medico(){
    $this->accion="Datos del Especialista";

    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){

      $this->asignar_valores();
      $sql="SELECT COUNT(*) FROM medico  WHERE nombre_med = ? AND sede_med = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->sede);

        $query->execute();

        $this->connection->Close();

        $filas = $query->fetchColumn();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }

      if (isset($filas) && $filas > 0){
        $this->mensaje = 2;
      }else{
        $sql = "INSERT INTO medico (nombre_med, especialidad_med, descripcion_med, orden_med, sede_med) 
                VALUES (?, ?, ?, ?, ?)";

        try{
          unset($query);

          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $this->nombre);
          $query->bindParam(2,$this->especialidad);
          $query->bindParam(3, $this->contenido);
          $query->bindParam(4, $this->prioridad);
          $query->bindParam(5, $this->sede);

          $query->execute();

          $this->connection->Close();

          $this->mensaje = 1;
        }catch (PDOException $e){
          echo 'Error code: '.$e->getMessage();
        }
      }
    }
  }

  function editar_medico(){
    $this->accion="Editando Datos del Especialista";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){

      $this->asignar_valores();
      $this->fecha=$this->convertir_fecha($this->fecha);

      $sql="UPDATE medico SET 
              nombre_med = ?,
              especialidad_med = ?,
              orden_med = ?,
              descripcion_med = ?,
              sede_med = ?
            WHERE id_med = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->especialidad);
        $query->bindParam(3, $this->prioridad);
        $query->bindParam(4,$this->contenido);
        $query->bindParam(5,$this->sede);
        $query->bindParam(6, $_GET['id']);

        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
      $this->mensaje=1;
      $this->mostrar_medico();
    }else{
      $this->mostrar_medico();
    }
  }


  function eliminar_medico(){

    $sql="DELETE FROM medico WHERE id_med = ?";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $_GET['id']);

      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    $tabla = 'medico';
    $sql="DELETE FROM imagen WHERE galeria_image = '$id' AND tabla_image = 'medico'";

    try{
      header("location:/admin/medico/");
      unset($query);

      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $_GET['id']);
      $query->bindParam(2, $tabla);

      $query->execute();

      $this->connection->Close();

    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }
}
