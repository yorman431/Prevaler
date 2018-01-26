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

include_once('conexion.inc.php');

class Link{
  var $connection;

  var $codigo;
  var $nombre;
  var $link;
  var $sublink;
  var $id;
  var $prioridad;
  var $etiqueta;
  var $descripcion;
  var $listado;
  var $buscar;
  var $mensaje;
  var $accion;
  var $claves;
  var $tipo;
  var $arbol;

  function __construct(){
    $this->connection = new Connection;
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->nombre=$_POST['nombre'];
    $this->prioridad=$_POST['prioridad'];
    $this->etiqueta=$_POST['etiqueta'];
    $this->descripcion=$_POST['descripcion'];
    $this->claves=$_POST['claves'];
    $this->tipo=$_POST['tipo'];
  }

  function asignar_valores2(){
    /* Metodo para recibir valores del exterior. */
    $this->id=$_POST['id_link'];
    $this->prioridad=$_POST['id_sublink'];
    $this->etiqueta=$_POST['etiqueta'];
  }

  function listar_link($tipo){
    if (isset($_POST['buscar']) && $_POST['buscar'] != ''){
      $_SESSION['buscar'] = $_POST['buscar'];
      $buscar = '%'.$_SESSION['buscar'].'%';
      $this->buscar = $_SESSION['buscar'];

      $sql='SELECT * FROM link WHERE tipo_cat = ? AND
						(prioridad_cat LIKE ? OR
						etiqueta_cat LIKE ? OR
						nombre_cat LIKE ?) ORDER BY prioridad_cat ASC';

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $tipo);
        $query->bindParam(2, $buscar);
        $query->bindParam(3, $buscar);
        $query->bindParam(4, $buscar);
        $query->execute();

        $this->connection->Close();
      }catch(PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else{
      $sql='SELECT * FROM link WHERE tipo_cat = ? ORDER BY tipo_cat, prioridad_cat ASC';

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $tipo);
        $query->execute();

        $this->connection->Close();
        if($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo('Error Code: '.$e->getMessage());
      }
    }
  }

  function listar_link_menu($tipo){
    $sql= "SELECT *, id_cat AS subenlaces FROM link WHERE tipo_cat = ? ORDER BY prioridad_cat ASC";

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $tipo);
      $query->execute();
      $this->connection->Close();
      if($this->listado = $query->fetchAll()){
        $this->mensaje = "si";
      }
    }catch (PDOException $e){
      echo ($e->getMessage());
    }

    for($i = 0; $i < count($this->listado); $i++){
      $this->listado[$i]['etiqueta_cat'] = $this->modificar_url($this->listado[$i]['etiqueta_cat']);
    }
  }

  function buscar_links2($id){
    /*Metodo para buscar el nombre de la categoria */
    $sql="SELECT * FROM categoria WHERE padre_cat='$id' ORDER BY prioridad_cat";
    $buscar=mysql_query($sql);
    $temp="";
    while ($resultado = mysql_fetch_array($buscar)){
      $resultado['enlaces'] = $this->buscar_links2($resultado['id_cat']);
      $resultado['url'] = $this->modificar_url($resultado['etiqueta_cat']);
      $temp[] = $resultado;
    }

    return $temp;
  }

  function prepareMenu($array){
    $return = array();
    //1
    krsort($array);
    foreach ($array as $k => &$item)
    {
      if (is_numeric($item['Parent']))
      {
        $parent = $item['Parent'];
        if (empty($array[$parent]['Childs']))
        {
          $array[$parent]['Childs'] = array();
        }
        //2
        array_unshift($array[$parent]['Childs'],$item);
        unset($array[$k]);
      }
    }
    //3
    ksort($array);
    return $array;
  }

  function listar_sublink(){
    if (isset($_POST['buscar']) && $_POST['buscar']!=""){
      $this->buscar=$_SESSION['buscar'];
      $buscar = '%'.$_POST['buscar'].'%';

      $sql="SELECT * FROM sublink WHERE
						(prioridad_sub LIKE ? OR
						nombre_sub LIKE ?) ORDER BY prioridad_sub ASC";

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $buscar);
        $query->bindParam(2, $buscar);
        $query->execute();

        $this->connection->Close();

        if($this->listado = $query->fetchAll()){
          $this->mensaje = 'si';
        }
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else{
      $sql="SELECT * FROM sublink ORDER BY prioridad_sub ASC";

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
    }
  }

  function mostrar_link(){
    /*Metodo para mostrar la categoria seleccionada */
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql='SELECT * FROM link WHERE id_cat = ?';

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $_GET['id']);
        $query->execute();

        if($resultado = $query->fetch()){
          $this->id = $_GET['id'];
          $this->nombre = $resultado['nombre_cat'];
          $this->etiqueta = $resultado['etiqueta_cat'];
          $this->descripcion = $resultado['descripcion_cat'];
          $this->claves = $resultado['claves_cat'];
          $this->tipo = $resultado['tipo_cat'];
          $this->prioridad = $resultado['prioridad_cat'];

          $sql='SELECT * FROM linkxsub, sublink WHERE link_rel = ? AND sublink_rel = id_sub ORDER BY prioridad_sub ASC';
          try{
            $query2 = $this->connection->prepare($sql);

            $query2->bindParam(1, $_GET['id']);
            $query2->execute();

            if ($this->listado = $query2->fetchAll()){
              $this->mensaje = 'si';
            }
          }catch (PDOException $e){
            echo ('Error Code: '.$e);
          }
          $this->connection->Close();
        }
      }catch(PDOException $e){
        echo('Error Code: '.$e->getMessage());
        exit();
      }
    }
  }

  function mostrar_link_publico($id){
    /*Metodo para mostrar la categoria seleccionada */
    $sql="SELECT * FROM link WHERE id_cat='$id'";
    $consulta=mysql_query($sql);
    $resultado = mysql_fetch_array($consulta);
    $this->id=$id;
    $this->nombre=$resultado['nombre_cat'];
    $this->etiqueta=$resultado['etiqueta_cat'];
    $this->descripcion=$resultado['descripcion_cat'];
    $this->claves=$resultado['claves_cat'];
    $this->tipo=$resultado['tipo_cat'];
    $this->prioridad=$resultado['prioridad_cat'];
  }

  function cargar_sublink(){
    /*Metodo para mostrar la categoria seleccionada */
    if (isset($_GET['cont']) && $_GET['cont']!=""){
      $id=$_GET['cont'];
      $sql="SELECT *, id_sub AS etiqueta, id_sub AS directorio_image, id_sub AS nombre_image FROM link, linkxsub, sublink WHERE id_cat='$id' AND link_rel=id_cat AND sublink_rel=id_sub ORDER BY prioridad_sub ASC";
      $consulta=mysql_query($sql);
      while ($resultado = mysql_fetch_array($consulta)){
        $buscar=$resultado['id_sub'];
        $sql="SELECT directorio_image, nombre_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='subcategoria' ORDER BY id_image";
        $imagenes=mysql_query($sql) or die(mysql_error());
        $respuesta = mysql_fetch_array($imagenes);
        $resultado['directorio_image']=$respuesta['directorio_image'];
        $resultado['nombre_image']=$respuesta['nombre_image'];
        $resultado['etiqueta']=$this->modificar_url($resultado['nombre_sub']);
        $resultado['etiqueta_cat']=$this->modificar_url($resultado['etiqueta_cat']);
        $this->mensaje="si";
        $this->listado[] = $resultado;
      }
    }
  }

  function mostrar_sublink(){
    if (isset($_GET['id']) && $_GET['id']!=""){
      $sql='SELECT * FROM sublink WHERE id_sub = ?';

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $_GET['id']);
        $query->execute();

        $this->connection->Close();

        $resultado = $query->fetch();

        $this->id = $_GET['id'];
        $this->nombre = $resultado['nombre_sub'];
        $this->prioridad = $resultado['prioridad_sub'];
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }
  }

  function insertar_link(){
    /*Metodo para insertar una categoria */
    $this->accion="Nuevo Link";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      header("location:/admin/link/");

      $this->asignar_valores();
      $sql="INSERT INTO link (tipo_cat, nombre_cat, etiqueta_cat, claves_cat, descripcion_cat, prioridad_cat)
						VALUES (?, ?, ?, ?, ?, ?)";

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->tipo);
        $query->bindParam(2, $this->nombre);
        $query->bindParam(3, $this->etiqueta);
        $query->bindParam(4, $this->claves);
        $query->bindParam(5, $this->descripcion);
        $query->bindParam(6, $this->prioridad);
        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo('Error Code: '.$e->getMessage());
        exit();
      }
    }
  }

  function insertar_sublink(){
    $this->accion="Select Sub-Link";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores2();
      header("location:/admin/link/detalle.php?id=$this->id");

      $sql="INSERT INTO linkxsub (link_rel, sublink_rel) VALUES (?, ?)";

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->id);
        $query->bindParam(2, $this->sublink);
        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else if (isset($_POST['envio']) && $_POST['envio']=="Add Nuevo"){
      header("location:/admin/link/sublink_insertar.php?id=$this->id");
      $this->asignar_valores2();
    }else{
      $sql="SELECT * FROM sublink ORDER BY nombre_sub, prioridad_sub ASC";

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

  function guardar_sublink(){
    $this->accion="New Sub-Links";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();
      $this->id=$_GET['id'];

      if(isset($this->id) && $this->id!="")
        header("location:/admin/link/sublink.php?id=$this->id");
      else
        header("location:/admin/link/sublink_lista.php");

      $sql="INSERT INTO sublink (nombre_sub, prioridad_sub) VALUES (?, ?)";

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->prioridad);
        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }
  }
  function editar_link(){
    $this->accion="Editar Links";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      $this->asignar_valores();
      $sql="UPDATE link SET
						tipo_cat = ?,
						nombre_cat = ?,
						etiqueta_cat = ?,
						claves_cat = ?,
						descripcion_cat = ?,
						prioridad_cat = ? WHERE id_cat = ?";

      try{
        header("location:/admin/link/");
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $this->tipo);
        $query->bindParam(2, $this->nombre);
        $query->bindParam(3, $this->etiqueta);
        $query->bindParam(4, $this->claves);
        $query->bindParam(5, $this->descripcion);
        $query->bindParam(6, $this->prioridad);
        $query->bindParam(7, $_GET['id']);
        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo ('Error Code: '.$e->getMessage());
      }
    }else{
      $this->mostrar_link();
    }
  }


  function editar_sublink(){
    $this->accion="Editing Sub-Link";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      header("location:/admin/link/sublink_lista.php");
      $this->asignar_valores();
      $sql = 'UPDATE sublink SET nombre_sub = ?, prioridad_sub = ? WHERE id_sub = ?';

      try{
        $query = $this->connection->prepare($sql);

        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->prioridad);
        $query->bindParam(3, $_GET['id']);
        $query->execute();

        $this->connection->Close();
      }catch (PDOException $e){
        echo('Error Code: '.$e->getMessage());
      }
    }else{
      $this->mostrar_sublink();
    }
  }

  function eliminar_link(){
    $sql='SELECT id_con FROM contenido WHERE enlace_con = ?';

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);
      $query->execute();

      if($resultado = $query->fetchAll()){
        header("location:/admin/link/?error=1");
      }else{
        header("location:/admin/link/");
        unset($query);
        $sql = 'DELETE FROM link WHERE id_cat = ?';

        try{
          $query = $this->connection->prepare($sql);
          $query->bindParam(1, $_GET['id']);
          $query->execute();

          $sql = 'DELETE FROM linkxsub WHERE link_rel = ?';
          unset($query);
          try{
            $query = $this->connection->prepare($sql);
            $query->bindParam(1, $_GET['id']);
            $query->execute();
          }catch (PDOException $e){
            echo ('Error Code: '.$e->getMessage());
          }
        }catch (PDOException $e){
          echo ('Error Code: '.$e->getMessage());
        }
      }
    }catch (PDOException $e){
      echo ('Error Code: '.$e->getMessage());
    }
  }

  function eliminar_sublink2(){
    $sql='SELECT id_con FROM contenido WHERE subenlace_con= ?';

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);
      $query->execute();

      if($query->rowCount() > 0){
        header("location:/admin/link/sublink_lista.php?error=2");
      }else{
        header("location:/admin/link/sublink_lista.php");
        unset($query);
        $sql = 'DELETE FROM sublink WHERE id_sub = ?';

        try{
          $query = $this->connection->prepare($sql);
          $query->bindParam(1, $_GET['id']);
          $query->execute();
        }catch (PDOException $e){
          echo('Error Code: '.$e->getMessage());
        }
      }

      $this->connection->Close();
    }catch (PDOException $e){
      echo ('Error Code: '.$e->getMessage());
    }
  }

  function eliminar_sublink(){
    $back=$_GET['back'];
    header("location:/admin/link/detalle.php?id=$back");

    $sql='DELETE FROM linkxsub WHERE id_rel = ?';

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);
      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo ('Error Code: '.$e->getMessage());
    }
  }

  public function get_link($id){
    $sql="SELECT etiqueta_cat FROM link WHERE id_cat = ?";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $id);

      $query->execute();

      $this->connection->Close();

      $link = $query->fetch();
    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    if (isset($link)){
      return $link['etiqueta_cat'];
    }else{
      return 'Error, link no response';
    }

  }

  public function get_link2($id){
    /*Metodo para obtener el nombre de una categoria */
    $sql="SELECT nombre_cat FROM link WHERE id_cat='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);

    return $resultado['nombre_cat'];
  }

  public function get_sublink($id){
    /*Metodo para obtener el nombre de una subcategoria */
    $sql="SELECT etiqueta_sub FROM link WHERE id_sub='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);

    return $resultado['etiqueta_sub'];
  }

  public function get_sublink2($id){
    /*Metodo para obtener el nombre de una subcategoria */
    $sql="SELECT nombre_sub FROM sublink WHERE id_sub='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);

    return $resultado['nombre_sub'];
  }

  function modificar_url($url) {
    //Rememplazamos caracteres especiales latinos
    $find = array(' ');
    $repl = array('-');
    $url = str_replace ($find, $repl, $url);

    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    $url = str_replace ($find, $repl, utf8_encode($url));

    $find = array('0', '1', '2', '3', '4', '5','6', '7', '8', '9');
    $repl = array('zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
    $url = str_replace ($find, $repl, utf8_encode($url));
    //utf8_decode();
    // Añaadimos los guiones
    $find = array(' ', '&', '\r\n', '\n', '+');
    $url = str_replace ($find, '-', $url);

    // Eliminamos y Reemplazamos demás caracteres especiales
    $find = array('/[^A-Za-z0-9\-<>\_]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '_', '');
    $url = preg_replace ($find, $repl, $url);
    $url= strtolower($url);
    //ucwords($url);

    return $url;
  }

  function buscar_links($id){
    /*Metodo para buscar el nombre de la categoria */
    $this->asignar_valores();
    $sql="SELECT * FROM linkxsub, sublink WHERE link_rel='$id' AND sublink_rel=id_sub ORDER BY prioridad_sub";
    $buscar=mysql_query($sql);
    unset($this->listado2);
    while ($resultado = mysql_fetch_array($buscar)){
      $this->mensaje="si";
      $this->listado2[] = $resultado;
    }

  }

  function get_links_todos($id){
    /*Metodo para obtener el nombre de una categoria */
    $sql="SELECT nombre_cat FROM link WHERE id_cat='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);

    return $resultado['nombre_cat'];
  }

  public function get_name($id){
    $sql = "SELECT nombre_cat FROM link WHERE id_cat = ?";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1,$id);

      $query->execute();

      $this->connection->Close();

      if ($nombre = $query->fetch())
        return $nombre['nombre_cat'];
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    return 'Error get_name, id no ingresado';
  }

  //function crearArbol($tabla,$id_field,$show_data,$link_field,$parent,$prefix){
  function crearArbol($tabla,$id_field,$show_data,$link_field,$parent){
    /*Armar query*/
    $sql='SELECT *,id_cat AS ruta FROM '.$tabla.' WHERE '.$link_field.'='.$parent;

    /*Asumiendo que se usa MySQL (se puede cambiar facilmente a otra db)*/

    $consulta=@mysql_query($sql) or die(mysql_error());
    if($consulta){
      /*Recorrer todos las entradas */
      while($resultado=mysql_fetch_array($consulta)){
        /* Imprimir campo a mostrar*/
        $resultado[$show_data]=$resultado[$show_data];
        $temp[]=$this->crearArbol($tabla, $id_field, $show_data, $link_field, $resultado[$id_field]);
      }

      if(isset($temp) && $temp != "")
        $resultado['enlaces'] = $temp;

      return $resultado;
    }
  }

}
