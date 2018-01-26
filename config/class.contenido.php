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
include_once("class.link.php");
include_once('conexion.inc.php');

class Contenido{

  var $connection;
  var $link;

  var $nombre;
  var $enlace;
  var $subenlace;
  var $id;
  var $id_cat;
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

  function __construct(){
    $this->connection = new Connection;
    $this->link = new Link;
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
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->nombre=$_POST['nombre'];
    $this->enlace=$_POST['enlace'];
    $this->subenlace=$_POST['subenlace'];
    $this->prioridad=$_POST['prioridad'];
    $this->fecha=$_POST['fecha'];
    $this->contenido=$_POST['contenido'];
    $this->tipo=$_POST['tipo'];
  }

  function listar_contenido(){
    if (isset($_POST['buscar']) && $_POST['buscar'] != ''){
      $_SESSION['buscar']=$_POST['buscar'];
      $this->buscar = $_POST['buscar'];
      $buscar = '%'.$_POST['buscar'].'%';

      $sql = 'SELECT * FROM contenido, link WHERE id_cat = enlace_con AND(
              nombre_cat LIKE ? OR
			        nombre_con LIKE ? OR
			        fecha_con LIKE ? OR
			        contenido_con LIKE ?)
			        ORDER BY enlace_con, subenlace_con ASC';

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $buscar);
        $query->bindParam(2, $buscar);
        $query->bindParam(3, $buscar);
        $query->bindParam(4, $buscar);
        $query->execute();

        $this->connection->Close();

        if($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else{
      $sql = 'SELECT * FROM contenido, link WHERE id_cat = enlace_con ORDER BY enlace_con, subenlace_con ASC';

      try{
        $query = $this->connection->prepare($sql);
        $query->execute();

        $this->connection->Close();

        if($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }

    for ($i = 0; $i < count($this->listado); $i++){
      $this->listado[$i]['enlace_con'] = $this->get_enlace2($this->listado[$i]['enlace_con']);
      if ($this->listado[$i]['subenlace_con'] == 1){
        $this->listado[$i]['subenlace_con'] = 'Ninguno';
      }else{
        $this->listado[$i]['subenlace_con'] = $this->get_subenlace($this->listado[$i]['subenlace_con']);
      }
      $this->listado[$i]['fecha_con'] = $this->convertir_fecha($this->listado[$i]['fecha_con']);
    }
  }

  function listar_contenido_publico($tipo){
    /* Metodo para listar los usuarios y sus opciones. */
    if(isset($_GET['sub'])&& $_GET['sub']!=""){
      $sub=$_GET['sub'];

      $sql = "SELECT * FROM contenido WHERE enlace_con = ? AND subenlace_con = ?";
      $restriccion="'$tipo'=enlace_con AND subenlace_con='$sub'";
    }else{
      $restriccion="'$tipo'=enlace_con AND subenlace_con='1'";
    }
    $sql="SELECT * FROM contenido WHERE $restriccion GROUP BY id_con ORDER BY prioridad_con ASC";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $this->mensaje="si";
      $resultado['enlace_con']=$this->get_enlace($resultado['enlace_con']);
      $resultado['subenlace_con']=$this->get_subenlace($resultado['subenlace_con']);
      $resultado['fecha_con']=$this->convertir_fecha($resultado['fecha_con']);
      $this->listado[] = $resultado;
    }
  }

  function listar_contenido_select($tipo){
    /* Metodo para listar los usuarios y sus opciones. */
    $restriccion="'$tipo'=enlace_con";
    $sql="SELECT * FROM contenido WHERE $restriccion GROUP BY id_con ORDER BY prioridad_con";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $this->mensaje="si";
      $id=$resultado['id_con'];
      $restriccion="'$id'=galeria_image AND tabla_image='contenido'";
      $sql2="SELECT * FROM imagen WHERE $restriccion GROUP BY id_image ORDER BY id_image";
      $consulta2=mysql_query($sql2) or die(mysql_error());
      while ($resultado2 = mysql_fetch_array($consulta2)){
        $resultado['imagen']=$resultado2['directorio_image'];
        $resultado['enlace_con']=$this->get_enlace($resultado['enlace_con']);
        $resultado['subenlace_con']=$this->get_subenlace($resultado['subenlace_con']);
        $resultado['fecha_con']=$this->convertir_fecha($resultado['fecha_con']);
        $this->listado[] = $resultado;
      }


    }
  }

  function listar_servicios($tipo){
    /* Metodo para listar los usuarios y sus opciones. */
    $restriccion="'$tipo'=tipo_cat AND enlace_con=id_cat AND galeria_image=enlace_con AND tabla_image='contenido'";
    $sql="SELECT * FROM contenido, imagen,link WHERE $restriccion GROUP BY id_con ORDER BY prioridad_con ASC";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $this->mensaje="si";
      $resultado['enlace_con']=$this->get_enlace($resultado['enlace_con']);
      $resultado['subenlace_con']=$this->get_subenlace($resultado['subenlace_con']);
      $resultado['fecha_con']=$this->convertir_fecha($resultado['fecha_con']);
      $this->listado[] = $resultado;
    }
  }

  function listar_contenido_imagen($tipo){
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
    $sql="SELECT *, id_con AS id_image, id_con AS nombre_image FROM contenido WHERE $restriccion GROUP BY id_con ORDER BY enlace_con, prioridad_con, nombre_con";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $buscar=$resultado['id_con'];
      $sql="SELECT id_image, nombre_image,directorio_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='contenido' ORDER BY id_image";
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

  function mostrar_contenido(){
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql="SELECT * FROM contenido WHERE id_con = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $_GET['id']);
        $query->execute();

        $this->connection->Close();

        $resultado = $query->fetch();

        $this->id = $_GET['id'];
        $this->nombre = $resultado['nombre_con'];
        $this->enlace = $this->get_enlace2($resultado['enlace_con']);
        $this->id_cat = $resultado['enlace_con'];
        if ($resultado['subenlace_con'] == 1){
          $this->subenlace = 'Ninguno';
        }else{
          $this->subenlace = $this->get_subenlace($resultado['subenlace_con']);
        }
        $this->fecha = $this->convertir_fecha($resultado['fecha_con']);
        $this->contenido = $resultado['contenido_con'];

      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }
  }

  function mostrar_contenido_img(){
    /*Metodo para mostrar un usuario seleccionado */
    if (isset($_GET['id']) && $_GET['id']!=""){
      $id=$_GET['id'];
      $sql="SELECT * FROM contenido,imagen WHERE id_con='$id' AND galeria_image=id_con AND tabla_image='contenido'";

      $consulta=mysql_query($sql) or die(mysql_error());
      $resultado = mysql_fetch_array($consulta);
      $this->id=$id;
      $this->nombre=$resultado['nombre_con'];
      $this->tipo=$resultado['tipo_con'];
      $this->fecha=$this->convertir_fecha($resultado['fecha_con']);
      $this->contenido=$resultado['contenido_con'];
      $this->imagen=$resultado['directorio_image'];
    }
  }
  function insertar_contenido(){
    $this->accion="Content Data";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();
      $sql="INSERT INTO contenido (nombre_con, enlace_con, subenlace_con, fecha_con, contenido_con)
            VALUES (?, ?, ?, ?, ?)";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->enlace);
        $query->bindParam(3, $this->subenlace);
        $query->bindParam(4, $this->fecha);
        $query->bindParam(5, $this->contenido);
        $query->execute();
        $id = $this->connection->lastInsertId();
        header("location:/admin/contenido/detalle.php?id=$id");

        $this->connection->Close();
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else{
      $sql = 'SELECT * FROM link ORDER BY prioridad_cat ASC';

      try{
        $query = $this->connection->prepare($sql);

        $query->execute();

        $this->connection->Close();

        if($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }
  }

  function editar_contenido(){
    $this->accion="Editing Content Data";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      header("location:/admin/contenido/");
      $this->asignar_valores();

      $sql="UPDATE contenido SET nombre_con = ?,
																enlace_con = ?,
																subenlace_con = ?,
																fecha_con = ?,
																contenido_con = ?
					WHERE id_con = ?";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->enlace);
        $query->bindParam(3, $this->subenlace);
        $query->bindParam(4, $this->fecha);
        $query->bindParam(5, $this->contenido);
        $query->bindParam(6, $_GET['id']);
        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else{
      $this->mostrar_contenido();

      $sql="SELECT * FROM link ORDER BY prioridad_cat ASC";

      try{
        $query = $this->connection->prepare($sql);

        $query->execute();

        $this->connection->Close();

        if ($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }

      $sql="SELECT * FROM linkxsub, sublink WHERE link_rel = ? AND sublink_rel = id_sub ORDER BY prioridad_sub";

      try{
        unset($query);
        unset($this->listado2);

        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->id_cat);
        $query->execute();

        $this->connection->Close();

        if ($this->listado2 = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }
  }


  function eliminar_contenido(){
    /*Metodo para eliminar un usuario seleccionado */
    $id=$_GET['id'];
    $sql="DELETE FROM contenido WHERE id_con='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());

    $sql="DELETE FROM imagen WHERE galeria_image='$id' AND tabla_image='contenido'";
    $consulta2=mysql_query($sql) or die(mysql_error());

    header("location:/admin/contenido/");
  }

  function buscar_enlaces($id){
    $sql='SELECT * FROM linkxsub, sublink WHERE link_rel = ? AND sublink_rel = id_sub ORDER BY prioridad_sub';

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $id);
      $query->execute();

      $this->connection->Close();

      unset($this->listado2);
      if ($this->listado2 = $query->fetchAll()){
        $this->mensaje = 'si';
      }
    }catch (PDOException $e){
      echo ('Error Code: '.$e->getMessage());
    }
  }

  function get_enlace($id){
    return $this->link->get_link($id);
  }

  function get_enlace2($id){
    $sql='SELECT nombre_cat FROM link WHERE id_cat = ?';

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $id);
      $query->execute();

      $this->connection->Close();

      $resultado = $query->fetch();
      return $resultado['nombre_cat'];

    }catch (PDOException $e){
      echo ('Error Code: '.$e->getMessage());
    }
  }

  function get_subenlace($id){
    $sql="SELECT nombre_sub FROM sublink WHERE id_sub = ?";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $id);
      $query->execute();

      $this->connection->Close();

      $resultado = $query->fetch();

      return $resultado['nombre_sub'];
    }catch (PDOException $e){
      echo ('Error Code: '.$e->getMessage());
      exit();
    }
  }

  function crear_codigo($cat,$sub){
    /*Metodo para crear códigos de productos */
    $cat=$this->get_categoria($cat);
    $sub=$this->get_subcategoria($sub);
    $codigo=$cat[0];
    $codigo.=$cat[1];
    $codigo.="-";
    $codigo.=$sub[0];
    $codigo.=$sub[1];
    $codigo=strtoupper($codigo);
    $codigo.=".";
    //$sql="SELECT COUNT(*) AS total FROM producto";
    $sql="SELECT MAX(id_pro) AS total FROM producto";
    $count=mysql_query($sql) or die(mysql_error());
    $row=mysql_fetch_array($count);
    $total=$row['total'];
    $total++;
    if($total<=99 && $total>=10){
      $valor="0";
      $valor.=$total;
    } else if($total<=9){
      $valor="00";
      $valor.=$total;
    }else{
      $valor=$total;
    }
    $codigo.=$valor;

    return $codigo;
  }

  function cambiar_perfil(){
    /*Metodo para editar un usuario seleccionado */
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $id=$_POST['perfil'];
      $sql="UPDATE perfiles SET estado_per='inactivo'";
      $consulta=mysql_query($sql) or die(mysql_error());

      $sql="UPDATE perfiles SET estado_per='activo' WHERE id_per='$id'";
      $consulta=mysql_query($sql) or die(mysql_error());
      header("location:/admin/temas/?msg=1");
    }else{
      $sql="SELECT id_per FROM perfiles WHERE estado_per='activo'";
      $consulta=mysql_query($sql) or die(mysql_error());
      $resultado=mysql_fetch_array($consulta);
      $this->perfil=$resultado['id_per'];
    }
  }
}
?>
