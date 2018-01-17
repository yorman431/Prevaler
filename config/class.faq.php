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
class Faq{
  var $codigo;
  var $id;
  var $pregunta;
  var $padre;
  var $respuesta;
  var $subpregunta;
  var $prioridad;
  var $listado;
  var $ruta;
  var $suiche=false;
  var $buscar;
  var $mensaje;
  var $accion;

  var $connection;

  function __construct () {
    $this->connection = new Connection();
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->id=$_POST['id'];
    $this->pregunta=$_POST['pregunta'];
    $this->padre=$_POST['padre'];
    $this->respuesta=$_POST['respuesta'];
    $this->prioridad=$_POST['prioridad'];
  }

  function listar_faq(){
    /* Metodo para listar las categorias de categorias. */
    $this->crearArbol('faq','id_faq','pregunta_faq','padre_faq',0,'&mdash;');
    $this->mensaje="si";
  }

  function listar_faq_menu () {
    $padre = 0;
    $sql="SELECT *, id_faq AS lista FROM faq WHERE padre_faq = ? ORDER BY prioridad_faq,id_faq, pregunta_faq ASC";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $padre);

      $query->execute();

      $this->connection->Close();

      if ($faqs = $query->fetchAll()){
        $this->mensaje = 'si';
      }
    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    if (isset($faqs)){
      foreach ($faqs as &$faq){
        $padre = $faq['id_faq'];

        $sql2 = 'SELECT * FROM faq WHERE padre_faq = ? ORDER BY prioridad_faq,id_faq, pregunta_faq ASC';
        try{
          unset($query);

          $query = $this->connection->prepare($sql2);

          $query->bindParam(1, $padre);

          $query->execute();

          $this->connection->Close();

          $faqs2 = $query->fetchAll();
        }catch (PDOException $e){
          echo 'Error code: '.$e->getMessage();
        }

        if (isset($faqs2)){
          foreach ($faqs2 as &$faq2){
            $padre = $faq2['id_faq'];

            $sql3 = 'SELECT * FROM faq WHERE padre_faq = ? ORDER BY prioridad_faq,id_faq, pregunta_faq ASC';

            try{
              unset($query);

              $query = $this->connection->prepare($sql3);

              $query->bindParam(1, $padre);

              $query->execute();

              $this->connection->Close();

              $faq2['lista'] = $query->fetchAll();
            }catch (PDOException $e){
              echo 'Error code: '.$e->getMessage();
            }
          }
          $faq['lista'] = $faqs2;
        }
      }
      $this->listado = $faqs;
    }
  }

  function buscar_ruta_nodo($id){
    /* Metodo para listar las categorias de categorias. */
    $sql2="SELECT id_faq,pregunta_faq,padre_faq FROM faq WHERE id_faq='$id'";
    $buscar=mysql_query($sql2)	or die(mysql_error());
    $resultados=mysql_fetch_array($buscar);
    if($this->suiche==false){
      $this->ruta[]=$resultados;
      if($resultados['padre_faq']==0) $this->suiche=true;
      $this->buscar_ruta_nodo($resultados['padre_faq']);
    }
  }

  function ruta_faq($id){
    $this->suiche=false;
    //Cálculo de Ruta de Nodo
    $this->ruta="";
    $temp="";
    $this->buscar_ruta_nodo($id);
    for($i=count($this->ruta)-1;$i>=0;$i--){
      $temp.=" &raquo; ".$this->ruta[$i]['pregunta_faq'];
    }
    return($temp);
  }

  function mostrar_faq(){
    /*Metodo para mostrar la categoria seleccionada */
    if (isset($_GET['id']) && $_GET['id']!=""){
      $id=$_GET['id'];
      $sql="SELECT * FROM faq WHERE id_faq='$id'";
      $consulta=mysql_query($sql);
      $resultado = mysql_fetch_array($consulta);
      $this->id=$id;
      $this->pregunta=$resultado['pregunta_faq'];
      $this->padre=$resultado['padre_faq'];
      $this->respuesta=$resultado['respuesta_faq'];
      $this->prioridad=$resultado['prioridad_faq'];
      $this->crearArbol('faq','id_faq','pregunta_faq','padre_faq',0,'&mdash;');
      //print_r($this->listado);
    }
  }

  //function crearArbol($tabla,$id_field,$show_data,$link_field,$parent,$prefix){
  function crearArbol($tabla,$id_field,$show_data,$link_field,$parent,$prefix){
    /*Armar query*/
    $sql='SELECT *,id_faq AS ruta FROM '.$tabla.' WHERE '.$link_field.'='.$parent.' GROUP BY '.'pregunta_faq, prioridad_faq';
    /*Asumiendo que se usa MySQL (se puede cambiar facilmente a otra db)*/

    $consulta=@mysql_query($sql) or die(mysql_error());
    if($consulta){
      /*Recorrer todos las entradas */
      while($resultado=mysql_fetch_array($consulta)){
        /* Imprimir campo a mostrar*/
        //echo($prefix.$resultado[$show_data].'<br>');
        $resultado[$show_data]=$prefix."&raquo; ".$resultado[$show_data];
        //$this->buscar_ruta_nodo($resultado['id_cat']);
        //$resultado['ruta']=$this->ruta;
        $this->listado[] = $resultado;

        /* imprimir arbol the "hijos" de este elemento*/
        $this->crearArbol($tabla,$id_field,$show_data,
          $link_field,$resultado[$id_field],$prefix.$prefix);
      }
    }
  }

  function cargar_subpreguntas($id){
    /*Metodo para mostrar la categoria seleccionada */
    //echo $id;
    $sql="SELECT *, id_faq AS url FROM faq, imagen WHERE padre_faq='$id' AND galeria_image=id_cat AND tabla_image='faq' ORDER BY prioridad_faq, id_faq, nombre_faq";
    $consulta=mysql_query($sql) or die(mysql_error());
    if($resultado = mysql_fetch_array($consulta)){
      do{
        $this->mensaje="si";
        $this->listado[] = $resultado;
      }while ($resultado = mysql_fetch_array($consulta));
    }else{
      header("location:/redactar.php?id=$id#next");
    }
  }

  function cargar_subpreguntas2($id){

    /*Metodo para mostrar la categoria seleccionada */
    $sql="SELECT *, id_faq AS url FROM faq, imagen WHERE padre_faq='$id' AND galeria_image=id_faq AND tabla_image='faq' ORDER BY prioridad_faq, id_faq, pregunta_cat";
    $consulta=mysql_query($sql) or die(mysql_error());
    if($resultado = mysql_fetch_array($consulta)){
      do{
        $this->mensaje="si";
        $this->listado[] = $resultado;
      }while ($resultado = mysql_fetch_array($consulta));

    }else{
      $sql2="SELECT * FROM faq WHERE id_faq='$id'";
      $consulta2=mysql_query($sql2) or die(mysql_error());
      $resultado2 = mysql_fetch_array($consulta2);
    }
  }

  function insertar_faq(){
    /*Metodo para insertar una categoria */
    $this->accion="Datos de Pregunta";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();
      $sql="SELECT * FROM faq WHERE pregunta_faq='$this->pregunta' AND padre_faq='$this->padre'";
      $consulta=mysql_query($sql) or die(mysql_error());
      if($resultado=mysql_fetch_array($consulta)){
        $this->mensaje=1;
      }else{
        $sql="INSERT INTO faq VALUES (NULL, '$this->pregunta', '$this->padre', '$this->respuesta', '$this->prioridad')";
        $consulta=mysql_query($sql) or die(mysql_error());
        header("location:/admin/faq/");
      }
    }
    $this->crearArbol('faq','id_faq','pregunta_faq','padre_faq',0,'&mdash;');
  }

  function editar_faq(){
    /*Metodo para editar una categoria */
    $this->accion="Editando Datos de Pregunta";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
      $id=$_GET['id'];
      $this->asignar_valores();
      $sql="SELECT * FROM faq WHERE pregunta_faq='$this->pregunta' AND id_faq!='$id'";
      $consulta=mysql_query($sql) or die(mysql_error());
      if($resultado=mysql_fetch_array($consulta)){
        $this->mensaje=1;
      }else{
        $sql="UPDATE faq SET pregunta_faq='$this->pregunta', padre_faq='$this->padre', respuesta_faq='$this->respuesta', prioridad_faq='$this->prioridad' WHERE id_faq='$id'";
        $consulta=mysql_query($sql) or die(mysql_error());
        header("location:/admin/faq/");
      }
    }else{
      $this->mostrar_faq();
    }
  }

  function eliminar_faq(){
    /*Metodo para eliminar una categoria */
    $id=$_GET['id'];
    $sql="SELECT id_faq FROM faq WHERE padre_faq='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    if($resultado=mysql_fetch_array($consulta)){
      while($resultado=mysql_fetch_array($consulta)){
        $id2=$resultado['id_faq'];
        $sql="DELETE FROM faq WHERE id_faq='$id2'";
        $consulta=mysql_query($sql) or die(mysql_error());
      }

    }
    $sql="DELETE FROM faq WHERE id_faq='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    header("location:/admin/faq/");

  }

  function get_faq($id){
    /*Metodo para obtener el nombre de una categoria */
    $sql="SELECT pregunta_faq FROM faq WHERE id_faq='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);
    return $resultado['pregunta_faq'];
  }

  function modificar_url($url) {
    // Tranformamos todo a minusculas
    $url = strtolower($url);
    //Rememplazamos caracteres especiales latinos
    $find = array(' ');
    $repl = array('_');
    $url = str_replace ($find, $repl, $url);
    $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
    $repl = array('a', 'e', 'i', 'o', 'u', 'n');
    $url = str_replace ($find, $repl, utf8_encode($url));
    //utf8_decode();
    // Añaadimos los guiones
    $find = array(' ', '&', '\r\n', '\n', '+');
    $url = str_replace ($find, '_', $url);

    // Eliminamos y Reemplazamos demás caracteres especiales
    $find = array('/[^a-z0-9\-<>\_]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array('', '_', '');
    $url = preg_replace ($find, $repl, $url);


    return $url;
  }
}
?>
