<?php
/*
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42)
 * Luis José Da Silva G. <luisjose@tusitio.com.ve>
 * Alejandro José Díaz Delgado. <contacto@diazcreativos.net.ve>
 * escribieron este archivo.
 * Mientras conserve
 * este comentario usted puede hacer lo que quiera con este material. Si alguna
 * vez nos encontramos
 * y piensa que este material le fue útil, usted puede invitarme una cerveza
 * en agradecimiento.
 * ----------------------------------------------------------------------------
*/
/* CLASE PARA AUTENTICACION DE USUARIOS Y CAMBIO DE CONTRASEÑA */

include_once("class.phpmailer.php");
include_once('conexion.inc.php');

class Auth {
  var $login;
  var $password;
  var $new_password;
  var $old_password;
  var $usuario;
  var $producto;
  var $codigo;
  var $nombre;
  var $apellido;
  var $telefono;
  var $comentario;
  var $fecha;
  var $adultos;
  var $ninos;
  var $edad3;
  var $flota;
  var $mensaje;
  var $sw;
  var $name;
  var $phone;
  var $email;
  var $year;
  var $make;
  var $model;
  var $style;
  var $insurance;
  var $sede;

  var $cedula;
  var $direccion;
  var $motivo;
  var $especialidad;
  var $medico;
  var $nombre_pol;
  var $cedula_pol;
  var $empresa;
  var $seguro;

  var $nombre1;
  var $apellido1;
  var $cedula1;
  var $fecha1;
  var $direccion1;
  var $diagnostico;
  var $procedimiento;

  var $nombre2;
  var $apellido2;
  var $cedula2;
  var $fecha2;
  var $direccion2;

  var $connection;

  function __construct(){
    $this->connection = new Connection;
  }

  function asignar_consulta($log,$pass){
    /* Metodo para asignar valores de los input
    para realizar consulta de login. */
    $this->login = $log;
    $this->password = $pass;
  }

  function asignar_ingreso(){
    /* Metodo para asignar valores de los input
    para realizar ingreso o cambio  de contraseña */
    $this->nombre=$_POST['nombre'];
    $this->telefono=$_POST['telefono'];
    $this->email=$_POST['email'];
    $this->sede=$_POST['sede'];
    $this->comentario=$_POST['comentario'];
  }

  function asignar_ingreso2(){
    /* Metodo para asignar valores de los input
    para realizar ingreso o cambio  de contraseña */
    $this->nombre=$_POST['nombre'];
    $this->cedula=$_POST['cedula'];
    $this->fecha=$_POST['fecha'];
    $this->email=$_POST['email'];
    $this->telefono=$_POST['telefono'];
    $this->direccion=$_POST['direccion'];
    $this->motivo=$_POST['motivo'];
    $this->sede=$_POST['sede'];
    $this->especialidad=$_POST['especialidad'];
    $this->medico=$_POST['medico'];

    $this->nombre_pol=$_POST['nombre_pol'];
    $this->cedula_pol=$_POST['cedula_pol'];
    $this->empresa=$_POST['empresa'];
    $this->seguro=$_POST['seguro'];
  }

  function asignar_ingreso3(){

    $this->nombre1=$_POST['nombre1'];
    $this->apellido1=$_POST['apellido1'];
    $this->cedula1=$_POST['cedula1'];
    $this->fecha1=$_POST['fecha1'];
    $this->email=$_POST['email'];
    $this->telefono=$_POST['telefono'];
    $this->direccion1=$_POST['direccion1'];

    $this->nombre_pol=$_POST['nombre_pol'];
    $this->cedula_pol=$_POST['cedula_pol'];
    $this->empresa=$_POST['empresa'];
    $this->seguro=$_POST['seguro'];
    $this->sede=$_POST['sede'];
    $this->especialidad=$_POST['especialidad'];
    $this->medico=$_POST['medico'];
    $this->diagnostico=$_POST['diagnostico'];
    $this->procedimiento=$_POST['procedimiento'];

    $this->nombre2=$_POST['nombre2'];
    $this->apellido2=$_POST['apellido2'];
    $this->cedula2=$_POST['cedula2'];
    $this->fecha2=$_POST['fecha2'];
    $this->direccion2=$_POST['direccion2'];

  }

  function cambiar_password($login_, $old_passwd, $new_passwd){
    // Metodo para cambio de contraseña.
    if (($old_passwd == $user_old_passwd)
      && ($new_passwd == $confirm_passwd)){
      mysql_query("UPDATE usuarios SET passwd = '$new_passwd'
			WHERE login = '$login_'");

      return true;
    }
    else{
      return false;
    }
  }

  function login($_login, $_password){
    header("location: /admin/panel_central.php?msg=1");
    $sql = 'SELECT * FROM usuario WHERE login_uso = ? AND clave_uso = ?';

    try{
      $query = $this->connection->prepare($sql);
      $query->bindParam(1, $_login);
      $query->bindParam(2, $_password);
      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo('Error code: '.$e->getMessage());
      exit();
    }

    $rows = $query->rowCount();

    if ($rows > 0){
      $resultado = $query->fetch();
      $this->nombre = $resultado["nombre_uso"];
      $this->apellido = $resultado["apellido_uso"];
      $this->mensaje = "Bienvenido $this->nombre $this->apellido.";
      $_SESSION['estado_temp'] = 1;
      $_SESSION['login_temp'] = $resultado["login_uso"];
      $_SESSION['nombre_temp'] = $resultado["nombre_uso"];
      $_SESSION['apellido_temp'] = $resultado["apellido_uso"];
      $_SESSION['nivel_temp'] = $resultado["nivel_uso"];
      $_SESSION['id_temp'] = $resultado["id_uso"];
    }else{
      $this->mensaje = 'Usuario o contraseña incorrecto';
      $_SESSION['estado_temp'] = -1;
    }
  }

  function logout(){
    // Destruyendo sesion y redireccionando al Index.
    //header("location:index.php");
    unset($_SESSION['login_temporal']);
    unset($_SESSION['nombre_temporal']);
    unset($_SESSION['apellido_temporal']);
    unset($_SESSION['id_temporal']);
    header("location: index.php");
  }

  function logout2(){
    // Destruyendo sesion y redireccionando al Index.
    session_start();
    session_destroy();
    //header("location:index.php");
    header("location: index.php");
  }

  function permisos(){
    session_start();
    if(!isset($_SESSION['login_temp'])  || !isset($_SESSION['nivel_temp'])){
      session_destroy();
      header("location:/index.php?msg=1");
      exit();
    }else{
      $nivel=$_SESSION['nivel_temp'];
      if($nivel!=1 && $nivel!=2){
        session_destroy();
        header("location:/index.php?msg=2");
        exit();
      }
    }
  }

  function permisos2(){
    session_start();
    if(!isset($_SESSION['login_temporal']) || !isset($_SESSION['id_temporal'])){
      session_destroy();
      header("location:/index.php?msg=1");
      exit();
    }
  }

  function nivel_acceso($num,$tipo){
    if ($tipo=="distinto"){
      if (isset($_SESSION['nivel_temp']) && $_SESSION['nivel_temp']!=$num){
        header("location: /admin/panel_central.php?msg=2");
        exit();
      }
    }else if($tipo=="igual"){
      if (isset($_SESSION['nivel_temp']) && $_SESSION['nivel_temp']==$num){
        header("location: /admin/panel_central.php?msg=2");
        exit();
      }
    }
  }

  function login2($_login, $_password){
    // Metodo de ingreso al sistema de Usuarios Normales
    $this->login($_login,$_password);
    $resultado_login = mysql_query("SELECT * FROM registro
		WHERE login_reg = '$_login' AND clave_reg = '$_password'");
    $num_rows = mysql_num_rows($resultado_login);
    if (isset($num_rows)&& $num_rows == 0){
      $this->mensaje = "Login or Password incorrect!";
      $_SESSION['estado_temp'] = -1;
    }
    else{
      $fila_login = mysql_fetch_assoc($resultado_login);
      $this->nombre = $fila_login["nombre_reg"];
      $this->apellido = $fila_login["apellido_reg"];
      $this->mensaje = "Bienvenido $this->nombre $this->apellido.";
      $_SESSION['estado_temporal'] = 1;
      $_SESSION['login_temporal'] = $fila_login["login_reg"];
      $___login = $fila_login["login_reg"];
      $_SESSION['nombre_temporal'] = $fila_login["nombre_reg"];
      $_SESSION['apellido_temporal'] = $fila_login["apellido_reg"];
      $_SESSION['id_temporal'] = $fila_login["id_reg"];
      //mysql_query ("UPDATE usuarios SET last_login = curdate()
      //WHERE login = $___login");
      //if($_SESSION['_url'])
      header("location: panel_usuario.php#next");
    }
  }

  function enviar_contacto(){
    //metodo para el envio desde el formulario de contacto
    $this->asignar_ingreso();
    $nombre_sede = $this->sede;

    $resultado = $this->datoSede($nombre_sede);
    $cuerpo ="<img src='http://prevaler.diazcreativos.net.ve/imagenes/PREVALER.png' /><br /><br />
		<u>Datos de Entrada:</u><br />";
    $cuerpo .="<br />";
    $cuerpo .= "<strong>Nombre Completo: </strong>".utf8_decode($this->nombre)."<br />" ;
    $cuerpo .= "<strong>Número de telefono: </strong>".$this->telefono."<br />" ;
    $cuerpo .= "<strong>E-mail: </strong>".$this->email."<br />" ;
    $cuerpo .= "<strong>Mensaje: </strong>".$this->comentario."<br />";
    $cuerpo .= "<br />";
    $cuerpo .= "----  Fin  ----";
    $cuerpo .= "<br />";
    $subject= "Contacto  Web Prevaler";
    $subject2= "Contacto  Web Prevaler";
    $basemailfor=$resultado['email_sede'];
    //$basemailfor="sales@nickautoglass.com";
    $basemailfrom = $this->email;
    $respuesta ="<img src='http://prevaler.diazcreativos.net.ve/imagenes/PREVALER.png' /><br />
		<strong>Saludos Sr(a).: $this->nombre $this->apellido</strong><br /><br />
		Nosotros hemos recibido su mensaje, nuestro departamento de atención al cliente le responderá lo más pronto posible<br />
		Gracias por contactar a Prevaler.<br />
		Prevaler<br /><br />
		Tel&eacute;fonos: <br/>
		".$resultado['telefono_sede']."<br />
		Twitter: <a href='https://twitter.com/Prevaler_VE'>@Prevaler_VE</a><br />
		Instagram: <a href='https://www.instagram.com/prevaler_ve/'>@prevaler_ve</a><br />
		".$resultado['email_sede']."
		<br /><br />
		Atentamente,<br />
		Clínica Prevaler.";
    $this->mensaje="<strong>&iexcl;Excelente!</strong> Su Mensaje ha sido enviado exitosamente.";

    $mail = new PHPMailer();
    $mail->From = $basemailfrom;
    $mail->FromName = utf8_decode($subject);
    $mail->AddAddress($basemailfor, $this->nombre." ".$this->apellido);
    $mail->Subject = utf8_decode($subject);
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $exito = $mail->Send();

    $mail2 = new PHPMailer();
    $mail2->From = $basemailfor;
    $mail2->FromName = utf8_decode($subject2);
    $mail2->AddAddress($basemailfrom, $this->nombre." ".$this->apellido);
    $mail2->Subject = utf8_decode($subject2);
    $mail2->Body = $respuesta;
    $mail2->AltBody = $respuesta;
    $exito = $mail2->Send();
  }

  function enviar_cita(){
    $this->asignar_ingreso2();
    $nombre_sede = $this->sede;
    $resultado = $this->datoSede($nombre_sede);
    $cuerpo ="<img src='http://prevaler.diazcreativos.net.ve/imagenes/logo_admin.png' /><br /><br />
		<u>Datos de Entrada:</u><br />";
    $cuerpo .="<br />";
    $cuerpo .= "<strong>Nombre Completo: </strong>".utf8_decode($this->nombre)."<br />" ;
    $cuerpo .= "<strong>Número de Cédula: </strong>".$this->cedula."<br />" ;
    $cuerpo .= "<strong>Fecha de Nacimiento: </strong>".$this->fecha."<br />";
    $cuerpo .= "<strong>E-mail: </strong>".$this->email."<br />" ;
    $cuerpo .= "<strong>Teléfono: </strong>".$this->telefono."<br />" ;
    $cuerpo .= "<strong>Domicilio: </strong>".$this->direccion."<br />" ;
    $cuerpo .= "<strong>Motivo: </strong>".$this->motivo."<br />" ;
    $cuerpo .= "<strong>Especialidad Médica: </strong>".$this->especialidad."<br />";
    $cuerpo .= "<strong>Médico Elegido: </strong>".$this->medico."<br /><br />";
    if ($this->seguro != null) {
      $cuerpo .= "<strong>Cita Con Póliza de Seguro </strong><br /><br />";
      $cuerpo .= "<strong>Titular de la Póliza: </strong>".utf8_decode($this->nombre_pol)."<br />" ;
      $cuerpo .= "<strong>Cédula del Titular de la Póliza: </strong>".$this->cedula_pol."<br />" ;
      $cuerpo .= "<strong>Empresa: </strong>".$this->empresa."<br />";
      $cuerpo .= "<strong>Aseguradora: </strong>".$this->seguro."<br />" ;
    }else{
      $cuerpo .= "<strong>Cita Sin Póliza de Seguro </strong><br />";
    }

    $cuerpo .= "<br />";
    $cuerpo .= "----  Fin  ----";
    $cuerpo .= "<br />";
    $subject= "Solicitud de Cita  Web Prevaler";
    $subject2= "Solicitud de Cita  Web Prevaler";

    switch ($resultado['id_sede']) {
      case '1':
        $correo_envio="citas.porlamar@prevaler.com";
        break;
      case '2':
        $correo_envio="citas.caracas@prevaler.com";
        break;
      case '3':
        $correo_envio="citas.maracay@prevaler.com";
        break;
      case '4':
        $correo_envio="citas.valencia@prevaler.com";
        break;
      case '8':
        $correo_envio="citas.valenciasur@prevaler.com";
        break;

      default:
        $correo_envio="amadorafaelmujica@gmail.com";
        break;
    }

    $basemailfor=$resultado['email_sede'];
    //$basemailfor=$correo_envio;
    $basemailfrom = $this->email;
    $respuesta ="<img src='http://prevaler.diazcreativos.net.ve/imagenes/logo_admin.png' /><br />
		<strong>Saludos Sr(a).: $this->nombre $this->apellido</strong><br /><br />
		Nosotros hemos recibido su Solicitud de Cita, nuestro departamento de atención al cliente le responderá lo más pronto posible<br />
		Gracias por contactar a Prevaler.<br />
		Prevaler<br /><br />
		Tel&eacute;fonos: <br/>
		".$resultado['telefono_sede']."<br />
		Twitter: <a href='https://twitter.com/Prevaler_VE'>@Prevaler_VE</a><br />
		Instagram: <a href='https://www.instagram.com/prevaler_ve/'>@prevaler_ve</a><br />
		".$resultado['email_sede']."
		<br /><br />
		Atentamente,<br />
		Clínica Prevaler.";
    $this->mensaje="<strong>&iexcl;Excelente!</strong> Su Solicitud de Cita ha sido enviado exitosamente.";

    $mail = new PHPMailer();
    $mail->From = $basemailfrom;
    $mail->FromName = utf8_decode($subject);
    $mail->AddAddress($basemailfor, $this->nombre." ".$this->apellido);
    $mail->Subject = utf8_decode($subject);
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $mail->isHTML(true);
    $exito = $mail->Send();

    $mail2 = new PHPMailer();
    $mail2->From = $basemailfor;
    $mail2->FromName = utf8_decode($subject2);
    $mail2->AddAddress($basemailfrom, $this->nombre." ".$this->apellido);
    $mail2->Subject = utf8_decode($subject2);
    $mail2->Body = $respuesta;
    $mail2->AltBody = $respuesta;
    $mail2->isHTML(true);
    $exito = $mail2->Send();
  }

  function enviar_presupuesto(){
    //metodo para el envio desde el formulario de contacto
    $this->asignar_ingreso3();
    $nombre_sede = $this->sede;
    $resultado = $this->datoSede($nombre_sede);
    $cuerpo ="<img src='http://prevaler.diazcreativos.net.ve/imagenes/logo_admin.png' /><br /><br />
		<u>Datos de Entrada:</u><br />";
    $cuerpo .="<br />";
    $cuerpo .= "<strong>Nombre: </strong>".utf8_decode($this->nombre1)."<br />" ;
    $cuerpo .= "<strong>Apellido: </strong>".$this->apellido1."<br />" ;
    $cuerpo .= "<strong>RIF/Cédula: </strong>".$this->cedula1."<br />" ;
    $cuerpo .= "<strong>Fecha de Nacimiento: </strong>".$this->fecha1."<br />";
    $cuerpo .= "<strong>E-mail: </strong>".$this->email."<br />" ;
    $cuerpo .= "<strong>Teléfono: </strong>".$this->telefono."<br />" ;
    $cuerpo .= "<strong>Domicilio: </strong>".$this->direccion1."<br />" ;
    $cuerpo .= "<strong>Empresa: </strong>".$this->empresa."<br />";
    $cuerpo .= "<strong>Especialidad Médica: </strong>".$this->especialidad."<br />";
    $cuerpo .= "<strong>Médico Elegido: </strong>".$this->medico."<br />";
    $cuerpo .= "<strong>Diagnóstico: </strong>".$this->diagnostico."<br />";
    $cuerpo .= "<strong>Procedimiento: </strong>".$this->procedimiento."<br /><br />";
    if ($this->seguro != null) {
      $cuerpo .= "<strong>Presupuesto Con Póliza de Seguro </strong><br /><br />";
      $cuerpo .= "<strong>Titular de la Póliza: </strong>".utf8_decode($this->nombre_pol)."<br />" ;
      $cuerpo .= "<strong>Cédula del Titular de la Póliza: </strong>".$this->cedula_pol."<br />" ;
      $cuerpo .= "<strong>Empresa Aseguradora: </strong>".$this->seguro."<br />" ;
    }else{
      $cuerpo .= "<strong>Presupuesto Sin Póliza de Seguro </strong><br /><br />";
      $cuerpo .= "<strong>Datos de Facturación </strong><br /><br />";
      $cuerpo .= "<strong>Nombre: </strong>".utf8_decode($this->nombre2)."<br />" ;
      $cuerpo .= "<strong>Apellido: </strong>".$this->apellido2."<br />" ;
      $cuerpo .= "<strong>RIF/Cédula: </strong>".$this->cedula2."<br />" ;
      $cuerpo .= "<strong>Fecha de Nacimiento: </strong>".$this->fecha2."<br />";
      $cuerpo .= "<strong>Dirección: </strong>".$this->direccion2."<br />" ;
    }

    $cuerpo .= "<br />";
    $cuerpo .= "----  Fin  ----";
    $cuerpo .= "<br />";
    $subject= "Solicitud de Presupuesto  Web Prevaler";
    $subject2= "Solicitud de Presupuesto  Web Prevaler";

    switch ($resultado['id_sede']) {
      case '1':
        $correo_envio="presupuesto.porlamar@prevaler.com";
        break;
      case '2':
        $correo_envio="presupuesto.porlamar@prevaler.com";
        break;
      case '3':
        $correo_envio="presupuesto.caracas@prevaler.com";
        break;
      case '4':
        $correo_envio="presupuesto.valencia@prevaler.com";
        break;
      case '8':
        $correo_envio="presupuesto.valenciasur@prevaler.com";
        break;

      default:
        $correo_envio="amadorafaelmujica@gmail.com";
        break;
    }

    $basemailfor=$resultado['email_sede'];
    //$basemailfor=$correo_envio;
    $basemailfrom = $this->email;
    $respuesta ="<img src='http://prevaler.diazcreativos.net.ve/imagenes/logo_admin.png' /><br />
		<strong>Saludos Sr(a).: $this->nombre1 $this->apellido1</strong><br /><br />
		Nosotros hemos recibido su Solicitud de Presupuesto, nuestro departamento de atención al cliente le responderá lo más pronto posible<br />
		Gracias por contactar a Prevaler.<br />
		Prevaler<br /><br />
		Tel&eacute;fonos: <br/>
		".$resultado['telefono_sede']."<br />
		Twitter: <a href='https://twitter.com/Prevaler_VE'>@Prevaler_VE</a><br />
		Instagram: <a href='https://www.instagram.com/prevaler_ve/'>@prevaler_ve</a><br />
		".$resultado['email_sede']."
		<br /><br />
		Atentamente,<br />
		Clínica Prevaler.";
    $this->mensaje="<strong>&iexcl;Excelente!</strong> Su Solicitud de Presupuesto ha sido enviado exitosamente.";

    $mail = new PHPMailer();
    $mail->From = $basemailfrom;
    $mail->FromName = utf8_decode($subject);
    $mail->AddAddress($basemailfor, $this->nombre." ".$this->apellido);
    $mail->Subject = utf8_decode($subject);
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $mail->isHTML(true);
    $exito = $mail->Send();

    $mail2 = new PHPMailer();
    $mail2->From = $basemailfor;
    $mail2->FromName = utf8_decode($subject2);
    $mail2->AddAddress($basemailfrom, $this->nombre." ".$this->apellido);
    $mail2->Subject = utf8_decode($subject2);
    $mail2->Body = $respuesta;
    $mail2->AltBody = $respuesta;
    $mail2->isHTML(true);
    $exito = $mail2->Send();
  }

  function datoSede($sede){

    $sql = 'SELECT * FROM sede WHERE nombre_sede = ?';

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $sede);

      $query->execute();

      $this->connection->Close();

      return $query->fetch();
    }catch (PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }
    return 'Error, no existe sede: '.$sede;
  }

  function recuperar_clave(){
    //metodo para el enviio desde el formulario de contacto
    if(!isset($_POST['correo']) || $_POST['correo']==""){
      header("location:recuperar_clave.php?msg=4");
      exit();
    }else{
      $correo=$_POST['correo'];
    }
    /* 		echo("Aqui llego");
      exit(); */
    $sql="SELECT * FROM registro WHERE correo_reg='$correo'";
    $consulta=mysql_query($sql) or die(mysql_error());
    if(!$resultado=mysql_fetch_array($consulta)){
      header("location:recuperar_clave.php?msg=5");
      exit();
    }else{
      $cuerpo ="<img width='200' height='100' src='http://uiformese.diazcreativos.net.ve/imagenes/logon.jpg' /><br /><br />";
      $cuerpo .="<U>Sus datos son:</U><br>";
      $cuerpo .="<BR>";
      $cuerpo .= "<b>Nombre: </b>".$resultado['nombre_reg']."<BR>" ;
      $cuerpo .= "<b>Apellido: </b>".$resultado['apellido_reg']."<BR>" ;
      $cuerpo .= "<b>Usuario: </b>".$resultado['login_reg']."<BR>" ;
      $cuerpo .= "<b>Clave: </b>".$resultado['clave_reg']."<BR>" ;
      $cuerpo .= "<BR>";
      $cuerpo .= "----  END DATOS  ----";
      $cuerpo .= "<BR>";
      $subject= "Recuperación de clave de Delle Cucine";
      $redir= "recuperar_clave.php?msg=6";
      $basemailfrom="adri220487@gmail.com";
      $basemailfor = $correo;

      mail ("$basemailfor", "$subject", "$cuerpo", "From: $basemailfrom\nContent-Type: text/html" );
      //print "<meta HTTP-EQUIV=REFRESH CONTENT=$cuerpo>";
      print "<meta HTTP-EQUIV=REFRESH CONTENT=1;URL=$redir>";
    }
  }

}
