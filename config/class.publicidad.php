<?php
include_once('conexion.inc.php');

class Publicidad{

  var $connection;

  var $nombre;
  var $fecha;
  var $descripcion;
  var $buscar;
  var $mensaje;
  var $accion;
  var $combo;
  var $etiqueta;
  var $url;
  var $directorio;
  var $listado;
  var $lista;
  var $id;
  var $fotos;

  function __construct(){
    $this->connection = new Connection;
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->nombre=$_POST['nombre'];
    $this->url=$_POST['url'];
    $this->fecha=$_POST['fecha'];
    $this->descripcion=$_POST['descripcion'];
  }

  function listar_publicidad(){
    if(isset($_POST['buscar']) && $_POST['buscar']!=""){
      $_SESSION['buscar']=$_POST['buscar'];
      $this->buscar = '%'.$_SESSION['buscar'].'%';

      $sql="SELECT * FROM publicidad WHERE
																		(nombre_pub LIKE ? OR
																		fecha_pub LIKE ? OR
																		descripcion_pub LIKE ?)	ORDER BY fecha_pub DESC";
      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->buscar);
        $query->bindParam(2, $this->buscar);
        $query->bindParam(3, $this->buscar);

        $query->execute();

        $this->connection->Close();

        $resultado = $query->fetchAll();
      }catch (PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $sql="SELECT * FROM publicidad GROUP BY id_pub";

      try{
        $query = $this->connection->prepare($sql);

        $query->execute();

        $this->connection->Close();

        $resultado = $query->fetchAll();
      }catch(PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
    }

    foreach($resultado as &$publicidad){
      unset($query);
      $id = $publicidad['id_pub'];
      $tabla = 'publicidad';

      $sql = "SELECT COUNT( * ) AS fotos FROM directorio WHERE pertenece_dir = ? AND tabla_dir = ?";
      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $id);
        $query->bindParam(2, $tabla);

        $query->execute();

        $this->connection->Close();

        $con = $query->fetch();
        $publicidad['fotos'] = $con['fotos'];
      }catch(PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
    }

    $this->listado = $resultado;
  }

  function listar_publicidad_publica(){
    /* Metodo para listar las galerías y sus opciones. */
    $sql="SELECT * FROM publicidad, directorio WHERE pertenece_dir=id_pub AND tabla_dir='publicidad' GROUP BY id_pub ORDER BY id_pub DESC";
    //echo $sql;
    $consulta=mysql_query($sql) or die(mysql_error());
    while($resultado = mysql_fetch_array($consulta)){
      $this->mensaje="si";
      $this->listado[] = $resultado;
    }
  }

  function mostrar_publicidad(){
    /*Metodo para mostrar una galería seleccionada */
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql="SELECT * FROM publicidad WHERE id_pub = ?";

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        $resultado = $query->fetch();
      }catch(PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
      $this->id = $_GET['id'];
      $this->nombre = $resultado['nombre_pub'];
      $this->fecha = $resultado['fecha_pub'];
      $this->descripcion = $resultado['descripcion_pub'];
    }
  }

  function insertar_publicidad(){
    $this->accion="Nueva Publicidad";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();

      $sql="INSERT INTO publicidad (nombre_pub, fecha_pub, descripcion_pub) 
						VALUES (?, ?, ?)";

      try{
        header("location: /admin/publicidad/");
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->fecha);
        $query->bindParam(3, $this->descripcion);

        $query->execute();

        $this->connection->Close();
      }catch(PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function editar_publicidad(){
    /*Metodo para editar una galería seleccionada */
    $this->accion="Editar Publicidad";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      $id=$_GET['id'];
      $this->asignar_valores();
      $sql="UPDATE publicidad SET nombre_pub = ?, fecha_pub = ?, descripcion_pub = ? WHERE id_pub = ?";

      try{
        header("location:/admin/publicidad/");
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->fecha);
        $query->bindParam(3, $this->descripcion);
        $query->bindParam(4, $_GET['id']);

        $query->execute();

        $this->connection->Close();
      }catch(PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $this->mostrar_publicidad();
    }
  }

  function eliminar_publicidad(){
    //eliminamos las imagenes del directorio primero
    header("location:/admin/publicidad/");
    $sql="SELECT directorio_dir FROM directorio WHERE pertenece_dir = ?";

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);

      $query->execute();

      $this->connection->Close();

      $imagenes = $query->fetchAll();
    }catch(PDOexception $e){
      echo 'Error code: '.$e->getMessage();
    }

    foreach($imagenes as &$imagen){
      $archivo = '../../imagenes/publicidad/'.$imagen['directorio_dir'];
      unlink($archivo);
    }

    $sql="DELETE FROM directorio WHERE pertenece_dir = ? AND tabla_dir = ?";

    try{
      unset($query);
      $tabla = 'publicidad';
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);
      $query->bindParam(2, $tabla);

      $query->execute();

      $this->connection->Close();
    }catch(PDOexception $e){
      echo 'Error Code: '.$e->getMessage();
    }

    $sql="DELETE FROM publicidad WHERE id_pub = ?";

    try{
      unset($query);
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);

      $query->execute();

      $this->connection->Close();
    }catch(PDOexception $e){
      echo 'Error code: '.$e->getMessage();
    }
  }

  function cargar_publicidad($pos){
    $tabla = 'publicidad';
    $sql="SELECT * FROM publicidad, directorio WHERE id_pub = pertenece_dir AND tabla_dir = ? AND nombre_pub = ? ORDER BY id_dir DESC";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $tabla);
      $query->bindParam(2, $pos);

      $query->execute();

      $this->connection->Close();

      if ($this->listado = $query->fetchAll()){
        $this->mensaje = 'si';
      }
    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }

  function cargar_laterales($pos){
    /* Metodo para listar las galerías y sus opciones. */
    $sql="SELECT *, id_pub AS imagenes FROM publicidad WHERE nombre_pub='$pos' ORDER BY id_pub DESC";
    //echo $sql;
    $consulta=mysql_query($sql) or die(mysql_error());
    while($resultado = mysql_fetch_array($consulta)){
      $id=$resultado['id_pub'];
      $sql2="SELECT * FROM directorio WHERE pertenece_dir='$id' ORDER BY id_dir ASC";
      $consulta2=mysql_query($sql2) or die(mysql_error());
      $lista="";
      while ($resultado2 = mysql_fetch_array($consulta2)){
        $lista[]=$resultado2;
      }
      $resultado['imagenes']=$lista;
      $this->mensaje="si";
      $this->listado[] = $resultado;
    }
  }

  function mostrar_imagenes($tabla){
    /*Metodo para mostrar las imagenes de la galeria */
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql="SELECT * FROM directorio WHERE pertenece_dir = ? AND tabla_dir = ?";

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $_GET['id']);
        $query->bindParam(2, $tabla);

        $query->execute();

        $this->connection->Close();

        if ($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch(PDOexception $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function insertar_imagen($carpeta){
    /*Metodo para insertar una imagen a una galería determinada*/
    $this->accion="Insertar Imagen";
    if (isset($_POST['envio']) && $_POST['envio']=="Enviar"){
      $this->asignar_valores();
      $id=$_GET['id'];

      if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        //revisamos que sea jpg
        if ($_FILES['archivo']['type'] == "image/jpeg" || $_FILES['archivo']['type'] == "image/pjpeg"){
          //nombre de la imagen
          if ($_FILES['archivo']['size']>=512000){
            $this->mensaje=1;
          }else{
            if($_FILES['archivo']['type'] == "image/jpeg")
              $archivo = time().".jpg";
            else if($_FILES['archivo']['type'] == "image/pjpeg")
              $archivo = time().".jpg";

            $peso=$_FILES['archivo']['size'];
            $tipo=$_FILES['archivo']['type'];
            $directorio="../../imagenes/".$carpeta;
            if (!is_dir($directorio)) exec("mkdir $directorio");
            $directorio.="/".$archivo;
            $directorio2=$carpeta."/".$archivo;
            $directorio3="../../imagenes/".$carpeta."/".$archivo;
            $temp="../../imagenes/miniaturas/".$carpeta;
            if (!is_dir($temp)) exec("mkdir $temp");
            $directorio4=$temp."/".$archivo;
            move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
            $this->crear_miniatura($directorio3, $directorio4, 300, $tipo);
            //consulta

            $sql="INSERT INTO directorio (url_dir, directorio_dir, tipo_dir, pertenece_dir, nombre_dir, tabla_dir) 
										VALUES (?, ?, ?, ?, ?, ?)";

            try{
              header("location:/admin/publicidad/detalle.php?id=$id");

              $query = $this->connection->prepare($sql);

              $query->bindParam(1, $this->url);
              $query->bindParam(2, $archivo);
              $query->bindParam(3, $tipo);
              $query->bindParam(4, $id);
              $query->bindParam(5, $this->nombre);
              $query->bindParam(6, $carpeta);

              $query->execute();

              $this->connection->Close();
            }catch(PDOexception $e){
              echo 'Error code: '.$e->getMessage();
            }
            $consulta=mysql_query($sql) or die(mysql_error());
          }
        }else{
          $this->mensaje=2;
        }
      } else {
        //imagen no se pudo subir o no seleccionaron.
        $this->mensaje=3;
      }//fin file upload.
    }
  }

  function crear_miniatura( $pathToImages, $pathToThumbs, $thumbWidth, $tipo ) {
    //echo "Creating thumbnail for {$fname} <br />";
    // load image and get image size

    if($tipo == "image/jpeg")
      $img = imagecreatefromjpeg( $pathToImages );
    else if($tipo == "image/gif")
      $img = imagecreatefromgif( $pathToImages );
    else if($tipo == "image/png")
      $img = imagecreatefrompng( $pathToImages );

    $width = imagesx( $img );
    $height = imagesy( $img );

    // calculate thumbnail size
    $new_width = $thumbWidth;
    $new_height = floor( $height * ( $thumbWidth / $width ) );

    // create a new temporary image
    $tmp_img = imagecreatetruecolor( $new_width, $new_height );
    if($tipo == "image/png"){
      imagealphablending($tmp_img, false);
    }
    // copy and resize old image into new image
    imagecopyresampled( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

    // save thumbnail into a file
    if($tipo == "image/jpeg")
      imagejpeg( $tmp_img, $pathToThumbs, 100);
    else if($tipo == "image/gif")
      imagegif( $tmp_img, $pathToThumbs);
    else if($tipo == "image/png"){
      imagesavealpha($tmp_img, true);
      imagepng( $tmp_img, $pathToThumbs);
    }
  }

  function eliminar_imagen(){
    /*Metodo para eliminar un usuario seleccionado */
    $carpeta=$_GET['tabla'];
    $id=$_GET['id'];
    $id_back=$_GET['back'];
    $sql="SELECT directorio_dir FROM directorio WHERE id_dir = ?";

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);

      $query->execute();

      $this->connection->Close();
    }catch(PDOexception $e){
      echo 'Error code: '.$e->getMessage();
    }

    if ($directorio = $query->fetch()){
      $archivo="../../imagenes/publicidad/".$directorio['directorio_dir'];
      unlink($archivo);
    }

    $sql="DELETE FROM directorio WHERE id_dir = ? AND tabla_dir = ?";

    try{
      header("location:/admin/publicidad/detalle.php?id=".$id_back);
      unset($query);

      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);
      $query->bindParam(2, $_GET['tabla']);

      $query->execute();

      $this->connection->Close();
    }catch(PDOexception $e){
      echo 'Error code: '.$e->getMessage();
    }
  }
}
