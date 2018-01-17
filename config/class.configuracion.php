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
class Config{
  var $dolar;
  var $euro;
  var $correo;
  var $rif;
  var $empresa;
  var $descuento;
  var $aumento;
  var $mensaje;

  var $connection;

  function __construct(){
    $this->connection = new Connection();
  }

  function convertir_fecha($CampoFecha){
    if(!empty($CampoFecha)){
      if(strpos($CampoFecha,"-")){
        $conv_fecha = split("-",$CampoFecha); $conv_fecha = $conv_fecha[2]."/".$conv_fecha[1]."/".$conv_fecha[0];
      }else{
        $conv_fecha = split("/",$CampoFecha); $conv_fecha = $conv_fecha[2]."-".$conv_fecha[1]."-".$conv_fecha[0];
      }
      return $conv_fecha;
    }
  }

  function asignar_valores(){
    /* Metodo para recibir valores del exterior. */
    $this->dolar=$_POST['dolar'];
    $this->euro=$_POST['euro'];
    $this->correo=$_POST['correo'];
    $this->rif=$_POST['rif'];
    $this->empresa=$_POST['empresa'];
    $this->descuento=$_POST['descuento'];
    $this->aumento=$_POST['aumento'];
  }


  function mostrar_config($id) {
    /*Metodo para mostrar un pagos seleccionado */
    $sql = "SELECT * FROM configuracion WHERE id_conf = ?";

    try {
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $id);

      $query->execute();

      $this->connection->Close();
    } catch (PDOException $e) {
      echo 'Error code: ' . $e->getMessage();
    }

    if (isset($query) && $resultado = $query->fetch()) {
      $this->dolar = $resultado['dolar_conf'];
      $this->euro = $resultado['euro_conf'];
      $this->correo = $resultado['correo_conf'];
      $this->rif = $resultado['rif_conf'];
      $this->empresa = $resultado['empresa_conf'];
      $this->descuento = $resultado['descuento_conf'];
      $this->aumento = $resultado['aumento_conf'];
    } else {
      $this->mensaje = 1;
    }
  }

  function editar_config($id){
    /*Metodo para editar un pagos seleccionado */
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
      $this->asignar_valores();
      $sql="UPDATE configuracion SET dolar_conf='$this->dolar', euro_conf='$this->euro', correo_conf='$this->correo', rif_conf='$this->rif', empresa_conf='$this->empresa', descuento_conf='$this->descuento', aumento_conf='$this->aumento' WHERE id_conf='$id'";
      $consulta=mysql_query($sql) or die(mysql_error());
      $this->mensaje=1;
    }
    $this->mostrar_config($id);
  }

  function eliminar_config(){
    /*Metodo para eliminar un pagos seleccionado */
    $id=$_GET['id'];
    $sql="DELETE FROM configuracion WHERE id_conf='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    header("location:/admin/configuracion/");
  }

}
?>