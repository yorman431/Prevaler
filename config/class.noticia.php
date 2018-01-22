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

include_once ('conexion.inc.php');
class Noticia{
  var $categoria;
  var $titulo;
  var $subtitulo;
  var $contenido;
  var $id;
  var $fecha;
  var $hora;
  var $autor;
  var $listado;
  var $buscar;
  var $mensaje;
  var $accion;

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
    return 'Error valor $CampoFecha';
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->categoria=$_POST['categoria'];
    $this->titulo=$_POST['titulo'];
    $this->subtitulo=$_POST['subtitulo'];
    $this->contenido=$_POST['contenido'];
    $this->fecha=$_POST['fecha'];
    $this->hora=$_POST['hora'];
    $this->autor=$_POST['autor'];
  }

  function listar_noticia(){
    /* Metodo para listar los usuarios y sus opciones. */
    if (isset($_POST['buscar']))
      $_SESSION['buscar']=$_POST['buscar'];

    if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
      $this->buscar = '%'.$_SESSION['buscar'].'%';

      $sql="SELECT * FROM noticia WHERE
             (categoria_not LIKE ? OR
             titulo_not LIKE ? OR
             subtitulo_not LIKE ? OR
             fecha_not LIKE ? OR
             autor_not LIKE ? OR
             contenido_not LIKE ?)
             ORDER BY id_not DESC";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->buscar);
        $query->bindParam(2, $this->buscar);
        $query->bindParam(3, $this->buscar);
        $query->bindParam(4, $this->buscar);
        $query->bindParam(5, $this->buscar);
        $query->bindParam(6, $this->buscar);

        $query->execute();

        $this->connection->Close();

        if ($noticias = $query->fetchAll()){
          $this->mensaje = 'si';

          foreach ($noticias as &$noticia){
            $noticia['fecha_not'] = $this->convertir_fecha($noticia['fecha_not']);
          }

          $this->listado = $noticias;
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $sql="SELECT * FROM noticia ORDER BY id_not DESC";

      try{
        unset($query);

        $query = $this->connection->prepare($sql);

        $query->execute();

        $this->connection->Close();

        if ($noticias = $query->fetchAll()){
          $this->mensaje = 'si';

          foreach ($noticias as &$noticia){
            $noticia['fecha_not'] = $this->convertir_fecha($noticia['fecha_not']);
          }

          $this->listado = $noticias;
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function listar_noticia_publica(){
    /* Metodo para listar los usuarios y sus opciones. */

    $sql="SELECT * FROM noticia ORDER BY id_not DESC";
    $consulta=mysql_query($sql) or die(mysql_error());
    if($resultado = mysql_fetch_array($consulta)){
      for($i=0;$i<=2;$i++){
        $this->mensaje="si";
        $buscar=$resultado['id_not']; $temp="";
        $sql="SELECT directorio_image, nombre_image, id_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='noticia' ORDER BY id_image";
        $imagenes=mysql_query($sql) or die(mysql_error());
        while($respuesta = mysql_fetch_array($imagenes)){
          $temp[]=$respuesta;
        }

        $resultado['imagenes'] = $temp;

        $temporal=strtolower($resultado['titulo_not']);
        $resultado['titulo_not']=ucwords($temporal);
        $temporal=strtolower($resultado['subtitulo_not']);
        $resultado['subtitulo_not']=ucwords($temporal);
        $resultado['fecha_not']=$this->convertir_fecha($resultado['fecha_not']);
        $resultado['contenido_not']=strip_tags($resultado['contenido_not']);

        $this->listado[] = $resultado;
        $resultado = mysql_fetch_array($consulta);
      }
    }
  }

  function listar_noticia_imagen(){
    /* Metodo para listar los usuarios y sus opciones. */
    $sql="SELECT * FROM noticia GROUP BY id_not ORDER BY id_not ASC";

    try{
      $query = $this->connection->prepare($sql);

      $query->execute();

      $this->connection->Close();

      $this->listado = $query->fetchAll();
    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    $tabla = 'noticia';
    if (isset($this->listado)){
      $sql = 'SELECT directorio_image, nombre_image, id_image FROM imagen WHERE galeria_image = ? AND tabla_image = ? ORDER BY id_image';

      foreach ($this->listado as &$noticia){
        try{
          unset($query);
          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $noticia['id_not']);
          $query->bindParam(2, $tabla);

          $query->execute();

          $noticia['imagenes'] = $query->fetchAll();

        }catch(PDOException $e){
          echo 'Error code: '.$e->getMessage();
        }

        $noticia['titulo_not'] = ucwords(strtolower($noticia['titulo_not']));
        $noticia['subtitulo_not'] = ucwords(strtolower($noticia['subtitulo_not']));
        $noticia['fecha_not'] = $this->convertir_fecha($noticia['fecha_not']);
        $noticia['contenido_not'] = strip_tags($noticia['contenido_not']);
      }
    }
  }

  function listar_noticia_imagen2(){
    /* Metodo para listar los usuarios y sus opciones. */
    $sql="SELECT * FROM noticia GROUP BY id_not ORDER BY id_not DESC LIMIT 0,6";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $buscar=$resultado['id_not']; $temp="";
      $sql="SELECT directorio_image, nombre_image, id_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='noticia' ORDER BY id_image";
      $imagenes=mysql_query($sql) or die(mysql_error());
      while($respuesta = mysql_fetch_array($imagenes)){
        $temp[]=$respuesta;
      }

      $resultado['imagenes'] = $temp;

      $temporal=strtolower($resultado['titulo_not']);
      $resultado['titulo_not']=ucwords($temporal);
      $temporal=strtolower($resultado['subtitulo_not']);
      $resultado['subtitulo_not']=ucwords($temporal);
      $resultado['fecha_not']=$this->convertir_fecha($resultado['fecha_not']);
      $resultado['contenido_not']=strip_tags($resultado['contenido_not']);

      $this->listado[] = $resultado;
    }
  }

  function mostrar_noticia(){
    if (isset($_GET['id']) && $_GET['id']!=""){

      $sql="SELECT * FROM noticia WHERE id_not = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);

        $query->execute();

        $this->connection->Close();

        if ($noticia = $query->fetch()){
          $this->id = $_GET['id'];
          $this->categoria = $noticia['categoria_not'];
          $this->titulo = $noticia['titulo_not'];
          $this->subtitulo = $noticia['subtitulo_not'];
          $this->contenido = $noticia['contenido_not'];
          $this->fecha = $this->convertir_fecha($noticia['fecha_not']);
          $this->hora = $noticia['hora_not'];
          $this->autor = $noticia['autor_not'];

          $tabla = 'noticia';
          $sql = "SELECT * FROM imagen WHERE galeria_image = ? AND tabla_image = ?";

          try{
            unset($query);

            $query = $this->connection->prepare($sql);

            $query->bindParam(1, $this->id);
            $query->bindParam(2, $tabla);

            $query->execute();

            $this->connection->Close();

            $this->listado = $query->fetchAll();
          }catch (PDOException $e){
            echo 'Error code: '.$e->getMessage();
          }
        }
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function get_noticia($id){
    /*Metodo para obtener el nombre de una categoria */
    $sql="SELECT * FROM noticia, imagen WHERE id_not = $id AND id_not = galeria_image AND tabla_image = 'noticia'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);

    $this->listado = $resultado;
  }

  function insertar_noticia(){
    $this->accion="Datos de la Noticia";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();
      $this->fecha = $this->convertir_fecha($this->fecha);


      $sql="INSERT INTO noticia (categoria_not, titulo_not, subtitulo_not, contenido_not, fecha_not, hora_not, autor_not) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

      try{
        header("location:/admin/noticia/");

        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->categoria);
        $query->bindParam(2, $this->titulo);
        $query->bindParam(3, $this->subtitulo);
        $query->bindParam(4, $this->contenido);
        $query->bindParam(5, $this->fecha);
        $query->bindParam(6, $this->hora);
        $query->bindParam(7, $this->autor);

        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }
  }

  function editar_noticia(){
    $this->accion="Editando Datos de la Noticia";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){

      $this->asignar_valores();
      $this->fecha = $this->convertir_fecha($this->fecha);

      $sql = "UPDATE noticia SET 
                categoria_not = ?,
                titulo_not = ?,
                subtitulo_not = ?,
                contenido_not = ?,
                fecha_not = ?,
                hora_not = ?,
                autor_not = ?
              WHERE id_not = ?";

      try{
        header("location:/admin/noticia/");

        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->categoria);
        $query->bindParam(2, $this->titulo);
        $query->bindParam(3, $this->subtitulo);
        $query->bindParam(4, $this->contenido);
        $query->bindParam(5, $this->fecha);
        $query->bindParam(6, $this->hora);
        $query->bindParam(7, $this->autor);
        $query->bindParam(8, $_GET['id']);

        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }
    }else{
      $this->mostrar_noticia();
    }
  }

  function eliminar_noticia(){
    $sql = "DELETE FROM noticia WHERE id_not = ?";

    try{
      header("location:/admin/noticia/");

      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $_GET['id']);

      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e) {
      echo 'Error code: ' . $e->getMessage();
    }

    $carpeta="noticia";
    $sql="DELETE FROM imagen WHERE galeria_image = ? AND tabla_image = ?";

    try{
      unset($query);

      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $_GET['id']);
      $query->bindParam(2,  $carpeta);

      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
  }
}
