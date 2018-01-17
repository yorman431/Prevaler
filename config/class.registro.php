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

include_once("class.configuracion.php");
include_once("class.phpmailer.php");
include_once('conexion.inc.php');

class Registro extends Config{
  var $nombre;
  var $apellido;
  var $cedula;
  var $tipo;
  var $sexo;
  var $correo;
  var $correo2;
  var $telefono;
  var $celular;
  var $pais;
  var $estado;
  var $municipio;
  var $direccion;
  var $nacimiento;
  var $lugar;
  var $website;
  var $login;
  var $clave;
  var $confirmar;
  var $publicidad;
  var $medio;
  var $listado;
  var $buscar;
  var $mensaje;
  var $accion;
  var $catalogo;
  var $categoria;

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
    $this->categoria=$_POST['categoria'];
    $this->nombre=$_POST['nombre'];
    $this->apellido=$_POST['apellido'];
    $this->sexo=$_POST['sexo'];
    $this->nacimiento=$_POST['nacimiento'];
    $this->lugar=$_POST['lugar'];
    $this->cedula=$_POST['cedula'];
    $this->tipo=$_POST['tipo'];
    $this->direccion=$_POST['direccion'];
    $this->correo=$_POST['correo'];
    $this->correo2=$_POST['correo2'];
    $this->telefono=$_POST['telefono'];
    $this->celular=$_POST['celular'];
    $this->pais=$_POST['pais'];
    $this->estado=$_POST['estado'];
    $this->municipio=$_POST['municipio'];
    $this->website=$_POST['website'];
    $this->login=$_POST['login2'];
    $this->clave=$_POST['clave2'];
    $this->confirmar=$_POST['confirmar'];
    $this->publicidad=$_POST['publicidad'];
    $this->medio=$_POST['medio'];
    $this->catalogo=$_POST['catalogo'];

    $this->nombre= strtolower($this->nombre);
    $this->correo= strtolower($this->correo);
    $this->correo2= strtolower($this->correo2);
    $this->apellido= strtolower($this->apellido);
    $this->ciudad= strtolower($this->ciudad);
    $this->pais= strtolower($this->pais);
    $this->estado= strtolower($this->estado);
    $this->direccion= strtolower($this->direccion);
    $this->nombre=ucwords($this->nombre);
    $this->apellido=ucwords($this->apellido);
    $this->ciudad=ucwords($this->ciudad);
    $this->pais=ucwords($this->pais);
    $this->estado=ucwords($this->estado);
    $this->direccion=ucwords($this->direccion);
  }

  function asignar_valores2(){
    /* Metodo para recibir valores del exterior. */
    $this->clavenueva=$_POST['clavenueva'];
    $this->actual=$_POST['actual'];
    $this->confirmar=$_POST['confirmar'];
  }

  function listar_registro(){
    /* Metodo para listar los usuarios y sus opciones. */
    if (isset($_POST['buscar']))
      $_SESSION['buscar']=$_POST['buscar'];

    if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
      $this->buscar=$_SESSION['buscar'];
      $sql="SELECT *, id_reg AS edad FROM registro WHERE
			(nombre_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			apellido_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			cedula_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			tipo_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			estado_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			pais_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			direccion_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			correo_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			correo2_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			ciudad_reg LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_reg DESC";
    }else{
      $sql="SELECT * FROM registro ORDER BY id_reg DESC";
    }
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      //echo $resultado['nacimiento_reg'];
      $resultado['edad']=date("Y-m-d")-$resultado['nacimiento_reg'];
      $resultado['estado_reg']=$this->buscar_estado($resultado['estado_reg']);
      $this->mensaje="si";
      $this->listado[] = $resultado;
    }
  }

  function mostrar_registro(){
    /*Metodo para mostrar un usuario seleccionado */
    if (isset($_SESSION['id_temporal']) && $_SESSION['id_temporal']!="")
      $id=$_SESSION['id_temporal'];
    else if(isset($_GET['id']) && $_GET['id']!="")
      $id=$_GET['id'];
    $sql="SELECT * FROM registro WHERE id_reg='$id'";
    $consulta=mysql_query($sql);
    $resultado = mysql_fetch_array($consulta);
    $this->categoria=$resultado['categoria_reg'];
    $this->nombre=$resultado['nombre_reg'];
    $this->apellido=$resultado['apellido_reg'];
    $this->sexo=$resultado['sexo_reg'];
    $this->nacimiento=$this->convertir_fecha($resultado['nacimiento_reg']);
    $this->lugar=$resultado['lugar_reg'];
    $this->tipo=$resultado['tipo_reg'];
    $this->cedula=$resultado['cedula_reg'];
    $this->direccion=$resultado['direccion_reg'];
    $this->correo=$resultado['correo_reg'];
    $this->correo2=$resultado['correo2_reg'];
    $this->telefono=$resultado['telefono_reg'];
    $this->celular=$resultado['celular_reg'];
    $this->pais=$resultado['pais_reg'];
    $this->estado=$resultado['estado_reg'];
    $this->municipio=$resultado['municipio_reg'];
    $this->website=$resultado['website_reg'];
    $this->login=$resultado['login_reg'];
    $this->publicidad=$resultado['publicidad_reg'];
    $this->medio=$resultado['medio_reg'];
    $this->catalogo=$resultado['catalogo_reg'];

  }

  function insertar_registro(){
    /*Metodo para editar un usuario seleccionado */
    $this->accion="Registro de Nuevos Usuarios";
    if (isset($_POST['envio']) && $_POST['envio']=="Registrarse"){
      $this->asignar_valores();
      if($this->clave!=$this->confirmar){
        $this->mensaje=2;
      }else{
        $sql="SELECT * FROM registro WHERE login_reg='$this->login' OR cedula_reg='$this->cedula'";
        $consulta=mysql_query($sql) or die(mysql_error());
        if($resultado=mysql_fetch_array($consulta)){
          $this->mensaje=1;
        }else{
          $this->nacimiento=$this->convertir_fecha($this->nacimiento);
          $sql="INSERT INTO registro VALUES ('', '$this->categoria', '$this->tipo', '$this->cedula', '$this->nombre', '$this->apellido', '$this->sexo', '$this->nacimiento', '$this->lugar', '$this->direccion', '$this->correo', '$this->correo2', '$this->telefono', '$this->celular', '$this->pais', '$this->estado', '$this->municipio', '$this->website', '$this->login', '$this->clave', '$this->publicidad', '$this->medio', 'No')";
          $consulta=mysql_query($sql) or die(mysql_error());
          $this->enviar_correos();
          header("location:/admin/registro/");
        }
      }
    }
  }

  function insertar_registro_publico(){
    /*Metodo para editar un usuario seleccionado */
    $this->accion="Registro de Nuevos Usuarios";
    if (isset($_POST['envio']) && $_POST['envio']=="Registrarse"){
      $this->asignar_valores();
      $size=strlen($this->clave);
      if($this->clave!=$this->confirmar){
        $this->mensaje=2;
      }else if($size<=3){
        $this->mensaje=3;
      }else{
        $sql="SELECT * FROM registro WHERE login_reg = ? OR cedula_reg = ?";

        try{
          $query = $this->connection->prepare($sql);

          $query->bindParam(1, $this->login);
          $query->bindParam(2, $this->cedula);

          $query->execute();

          $this->connection->Close();

        }catch(PDOException $e){
          echo 'Error code: '.$e->getMessage();
        }

        if (isset($query)){
          if ($resultado = $query->fetch()){
            $this->mensaje = 1;
          }else{
            $catalogo_reg = 'No';
            $this->nacimiento=$this->convertir_fecha($this->nacimiento);
            $sql="INSERT INTO registro (categoria_reg, tipo_reg, cedula_reg, nombre_reg, apellido_reg, sexo_reg, nacimiento_reg, lugar_reg, direccion_reg, correo_reg, correo2_reg, telefono_reg, celular_reg, pais_reg, estado_reg, municipio_reg, website_reg, login_reg, clave_reg, publicidad_reg, medio_reg, catalogo_reg) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            try{
              header("location:/autenticar.php?msg=ok");
              unset($query);
              $query = $this->connection->prepare($sql);

              $query->bindParam(1, $this->categoria);
              $query->bindParam(2, $this->tipo);
              $query->bindParam(3, $this->cedula);
              $query->bindParam(4, $this->nombre);
              $query->bindParam(5, $this->apellido);
              $query->bindParam(6, $this->sexo);
              $query->bindParam(7, $this->nacimiento);
              $query->bindParam(8, $this->lugar);
              $query->bindParam(9, $this->direccion);
              $query->bindParam(10, $this->correo);
              $query->bindParam(11, $this->correo2);
              $query->bindParam(12, $this->telefono);
              $query->bindParam(13, $this->celular);
              $query->bindParam(14, $this->pais);
              $query->bindParam(15, $this->estado);
              $query->bindParam(16, $this->municipio);
              $query->bindParam(17, $this->website);
              $query->bindParam(18, $this->login);
              $query->bindParam(19, $this->clave);
              $query->bindParam(20, $this->publicidad);
              $query->bindParam(21, $this->medio);
              $query->bindParam(22, $catalogo_reg);

              $query->execute();

              $this->connection->Close();
            }catch(PDOException $e){
              echo 'Error code: '.$e->getMessage();
            }

            $this->enviar_correos();
          }
        }

        if($resultado=mysql_fetch_array($consulta)){
          $this->mensaje=1;
        }else{

          $sql="INSERT INTO registro VALUES ('', '$this->categoria', '$this->tipo', '$this->cedula', '$this->nombre', '$this->apellido', '$this->sexo', '$this->nacimiento', '$this->lugar', '$this->direccion', '$this->correo', '$this->correo2', '$this->telefono', '$this->celular', '$this->pais', '$this->estado', '$this->municipio', '$this->website', '$this->login', '$this->clave', '$this->publicidad', '$this->medio', 'No')";
          $consulta=mysql_query($sql) or die(mysql_error());
          $this->enviar_correos();
          header("location:/autenticar.php?msg=ok");
          exit();
        }
      }
    }
  }

  function insertar_registro_publico2($con){
    /*Metodo para editar un usuario seleccionado */
    $this->asignar_valores();
    $this->clave=$this->generar_clave();
    //$clave_code=hash_hmac('md5', $this->clave, 'TpTnG1BQ9#~Q');
    $this->login=$this->correo;

    if(isset($_GET['type']) &&  $_GET['type'] == "natural"){
      $this->categoria="Cliente";
    }else if(isset($_GET['type']) &&  $_GET['type'] == "empresa"){
      $this->categoria="Agencia";
    }

    $sql="SELECT * FROM registro WHERE login_reg='$this->login' OR correo_reg='$this->correo'";
    //echo $sql."<br /><br />";
    $consulta=mysql_query($sql) or die(mysql_error());
    if($resultado=mysql_fetch_array($consulta)){
      $this->mensaje=1;
    }else{
      //$this->nacimiento=$this->convertir_fecha($this->nacimiento);
      $sql="INSERT INTO registro VALUES ('', '$this->categoria', '$this->tipo', '$this->cedula', '$this->nombre', '$this->apellido', '$this->sexo', '$this->nacimiento', '$this->lugar', '$this->direccion', '$this->correo', '','$this->telefono', '$this->celular', '$this->pais', '$this->estado', '$this->municipio', '$this->website', '$this->login', '$this->clave', '$this->publicidad', '$this->medio', '$this->catalogo')";

      $consulta=mysql_query($sql) or die(mysql_error());
      $id=mysql_insert_id($con);

      $this->enviar_correos();
      //$this->clave=hash_hmac('md5', $this->clave, 'TpTnG1BQ9#~Q');
      $this->login2($this->login, $this->clave);
      //header("location: publicar.php");
      //exit();
    }
  }

  function editar_registro(){
    /*Metodo para editar un usuario seleccionado */
    $this->accion="Editando Mi Perfil";
    if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_SESSION['id_temporal']) && $_SESSION['id_temporal']!=""){
      $id=$_SESSION['id_temporal'];
      $this->asignar_valores();
      $this->nacimiento=$this->convertir_fecha($this->nacimiento);
      $sql="UPDATE registro SET categoria_reg='$this->categoria', nombre_reg='$this->nombre', apellido_reg='$this->apellido', sexo_reg='$this->sexo', nacimiento_reg='$this->nacimiento', lugar_reg='$this->lugar', tipo_reg='$this->tipo', cedula_reg='$this->cedula', correo_reg='$this->correo', correo2_reg='$this->correo2', telefono_reg='$this->telefono', celular_reg='$this->celular', direccion_reg='$this->direccion', pais_reg='$this->pais', estado_reg='$this->estado', municipio_reg='$this->municipio', website_reg='$this->website' , publicidad_reg='$this->publicidad', medio_reg='$this->medio' WHERE id_reg='$id'";
      //importante
      $_SESSION['editar_usuario']="no";
      $consulta=mysql_query($sql) or die(mysql_error());
      $this->nacimiento=$this->convertir_fecha($this->nacimiento);
      $this->mensaje=2;
      //header("location:/perfil.php");

    }else{
      $this->mostrar_registro();
    }
  }

  function editar_registro2(){
    /*Metodo para editar un usuario seleccionado */
    $this->accion="Editar Registro de Cliente";
    if (isset($_POST['envio']) && $_POST['envio']=="Actualizar"){
      $id=$_GET['id'];
      $this->asignar_valores();
      $this->nacimiento=$this->convertir_fecha($this->nacimiento);
      $sql="UPDATE registro SET categoria_reg='$this->categoria', nombre_reg='$this->nombre', apellido_reg='$this->apellido', sexo_reg='$this->sexo', nacimiento_reg='$this->nacimiento', lugar_reg='$this->lugar', tipo_reg='$this->tipo', cedula_reg='$this->cedula', correo_reg='$this->correo', correo2_reg='$this->correo2', telefono_reg='$this->telefono', celular_reg='$this->celular', direccion_reg='$this->direccion', pais_reg='$this->pais', estado_reg='$this->estado', municipio_reg='$this->municipio', website_reg='$this->website' , publicidad_reg='$this->publicidad', medio_reg='$this->medio', catalogo_reg='$this->catalogo' WHERE id_reg='$id'";
      $consulta=mysql_query($sql) or die(mysql_error());
      $this->mensaje=2;
      //header("location:/perfil.php");

    }else{
      $this->mostrar_registro();
    }
  }

  function editar_clave(){
    /*Metodo para editar un usuario seleccionado */
    $this->accion="Editando Mi Clave";
    if (isset($_POST['envio']) && $_POST['envio']=="Cambiar"){
      $id=$_SESSION['id_temporal'];
      $this->asignar_valores2();
      $size=strlen($this->clavenueva);
      $sql="SELECT * FROM registro WHERE id_reg='$id' AND clave_reg='$this->actual'";
      $consulta=mysql_query($sql) or die(mysql_error());
      if(!$resultado=mysql_fetch_array($consulta)){
        $this->mensaje=1;
      }else if($size<=3){
        $this->mensaje=3;
      }else if($this->clavenueva==$this->confirmar){
        $sql="UPDATE registro SET clave_reg='$this->clavenueva' WHERE id_reg='$id'";
        $consulta=mysql_query($sql) or die(mysql_error());
        header("location:/panel_usuario.php?msg=3");
      }else{
        $this->mensaje=2;
      }

    }
  }

  function eliminar_registro(){
    /*Metodo para eliminar un usuario seleccionado */
    $id=$_GET['id'];
    $sql="DELETE FROM registro WHERE id_reg='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());

    $sql="SELECT * FROM pedidos WHERE cliente_ped='$id'";
    $buscar=mysql_query($sql) or die(mysql_error());
    while($resultado=mysql_fetch_array($buscar)){
      $pedido=$resultado['id_ped'];
      $sql="DELETE FROM detalle_pedido WHERE pedido_det='$pedido'";
      $borrar=mysql_query($sql) or die(mysql_error());
    }
    $sql="DELETE FROM pedidos WHERE cliente_ped='$id'";
    $eliminar=mysql_query($sql) or die(mysql_error());

    header("location:/admin/registro/");
  }

  function login2($_login, $_password){
    // Metodo de ingreso al sistema de Usuarios Normales
    //$_password=hash_hmac('md5', $_password, 'TpTnG1BQ9#~Q');
    $sql="SELECT * FROM registro WHERE login_reg = '$_login' AND clave_reg = '$_password'";

    $resultado_login = mysql_query($sql) or die(mysql_error());
    $num_rows = mysql_num_rows($resultado_login);
    $this->mensaje="";
    if (isset($num_rows)&& $num_rows == 0){
      $this->mensaje = "Login o clave inv&aacute;lido.";
      $_SESSION['estado_temp'] = -1;
    }
    else{
      $fila_login = mysql_fetch_assoc($resultado_login);
      $this->nombre = $fila_login["nombre_reg"];
      $this->apellido = $fila_login["apellido_reg"];
      $this->mensaje = "ok";
      $_SESSION['estado_temporal'] = 1;
      $_SESSION['login_temporal'] = $fila_login["login_reg"];
      $___login = $fila_login["login_reg"];
      $_SESSION['nombre_temporal'] = $fila_login["nombre_reg"];
      $_SESSION['apellido_temporal'] = $fila_login["apellido_reg"];
      $_SESSION['tipo_temporal'] = $fila_login["tipo_reg"];
      $_SESSION['cedula_temporal'] = $fila_login["cedula_reg"];
      $_SESSION['nacimiento_temporal'] = $fila_login["nacimiento_reg"];
      $_SESSION['nacionalidad_temporal'] = $fila_login["pais_reg"];
      $_SESSION['id_temporal'] = $fila_login["id_reg"];
      $_SESSION['categoria_temporal'] = $fila_login["categoria_reg"];
      $_SESSION['preguntas'] = "no";

      //mysql_query ("UPDATE usuarios SET last_login = curdate()
      //WHERE login = $___login");
      //if($_SESSION['_url'])
    }
  }

  function enviar_correos(){
    //metodo para el envio de correos de aviso cuando se registran
    if(!isset($config))
      $config= new Config;
    $config->mostrar_config(1);

    $cuerpo ="<img src='".$config->website."/imagenes/logon.jpg' /><br /><br />";
    $cuerpo .= "<u>DATOS INGRESADOS:</u><br />";
    $cuerpo .="<br />";
    $cuerpo .= "<strong>Nombre: </strong>".utf8_decode($this->nombre)."<br />" ;
    $cuerpo .= "<strong>Apellido: </strong>".utf8_decode($this->apellido)."<br />" ;
    $cuerpo .= "<strong>Tel&eacute;fono: </strong>".$this->telefono."<br />" ;
    $cuerpo .= "<strong>E-mail: </strong>".$this->correo."<br />" ;
    $cuerpo .= "<br />";
    $cuerpo .= "----  FIN DATOS  ----";
    $cuerpo .= "<br />";
    $subject= "Nueva Cuenta en ".$config->empresa." website";
    $subject2= "Nueva Cuenta en ".$config->empresa." website";
    $basemailfor="info@distribuidoraqmart.com";
    $basemailfrom = $this->correo;
    $respuesta ="<img src='".$config->website."/imagenes/logon.jpg' /><br /><br />
		<strong>Reciba un cordial saludo: ".$this->nombre." ".$this->apellido."</strong><br /><br />
		Usted se encuentra ya registrado en nuestro sistema.<br />
		Para acceder al panel de control de su perfil, use los siguientes datos:<br /><br />
		Login: ".$this->login."<br />
		Password: ".$this->clave."
		<br /><br />
		Bienvenido! 
		<br /><br />
		Gracias por confiar en ".$config->empresa."
		<br /><br />
		 Atentamente,<br /><br />
		 Departamento de Ventas<br />
		Website: ".$config->website."<br />
		Twitter: <a href='http://www.twitter.com/dqmart'>@DQmart</a><br />
		Instagram: <a href='http://www.instagram.com/dqmart'>@DQmart</a>";

    $mail = new PHPMailer(true);
    $mail->From = $basemailfrom;
    $mail->FromName = utf8_decode("Nueva Cuenta en Laura Paublini Swimwear");
    $mail->AddAddress($basemailfor, $this->nombre." ".$this->apellido);
    $mail->Subject = utf8_decode("Nueva Cuenta en Laura Paublini Swimwear");
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $exito = $mail->Send();

    $mail2 = new PHPMailer(true);
    $mail2->From = $basemailfor;
    $mail2->FromName = utf8_decode("Nueva Cuenta en Laura Paublini Swimwear");
    $mail2->AddAddress($basemailfrom, $this->nombre." ".$this->apellido);
    $mail2->Subject = utf8_decode("Nueva Cuenta en Laura Paublini Swimwear");
    $mail2->Body = $respuesta;
    $mail2->AltBody = $respuesta;
    $exito = $mail2->Send();
  }

  function listar_estados(){
    /* Metodo para listar los estados y sus opciones. */
    $sql="SELECT * FROM estado ORDER BY id_est ASC";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $this->mensaje="si";
      //$resultado['nombre_est']= utf8_encode($resultado['nombre_est']);
      $this->listado[] = $resultado;
    }
  }

  function listar_municipios($id){
    /* Metodo para listar los municipios y sus opciones. */
    $sql="SELECT * FROM municipio WHERE estado_mun='$id' ORDER BY nombre_mun ASC";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $this->mensaje="si";
      //$resultado['nombre_mun']= utf8_encode($resultado['nombre_mun']);
      $this->listado2[] = $resultado;
    }
  }

  function buscar_estado($id){
    /*Metodo para obtener el nombre de un estado */
    $sql="SELECT nombre_est FROM estado WHERE id_est='$id'";
    $consulta=mysql_query($sql) or die(mysql_error());
    $resultado=mysql_fetch_array($consulta);

    //return utf8_encode($resultado['nombre_est']);
    return $resultado['nombre_est'];
  }
}
?>