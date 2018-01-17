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

    $this->nombre=$_POST['nombre'];
    $this->telefono=$_POST['telefono'];
    $this->email=$_POST['email'];
    $this->comentario=$_POST['comentario'];
  }
  function asignar_ingreso_quote(){
    $this->name=$_POST['name'];
    $this->phone=$_POST['phone'];
    $this->email=$_POST['email'];
    $this->year=$_POST['year'];
    $this->make=$this->get_modelo($_POST['make']);
    $this->model=$_POST['model'];
    $this->style=$_POST['style'];
    $this->insurance=$_POST['insurance'];
  }

  function asignar_ingreso2(){
    /* Metodo para asignar valores de los input
    para realizar ingreso o cambio  de contraseña */
    $this->nombre=$_POST['nombre'];
    $this->telefono=$_POST['telefono'];
    $this->email=$_POST['email'];
    $this->comentario=$_POST['comentario'];
    $this->producto=$_POST['producto'];
    $this->codigo=$_POST['codigo'];
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
    $cuerpo ="<img src='http://dellecucine.com/imagenes/logo_admin.png' /><br /><br />
		<u>Datos de Entrada:</u><br />";
    $cuerpo .="<br />";
    $cuerpo .= "<strong>Nombre Completo: </strong>".utf8_decode($this->nombre)."<br />" ;
    $cuerpo .= "<strong>Número de telefono: </strong>".$this->telefono."<br />" ;
    $cuerpo .= "<strong>E-mail: </strong>".$this->email."<br />" ;
    $cuerpo .= "<strong>Comentarios: </strong>".$this->comentario."<br />";
    $cuerpo .= "<br />";
    $cuerpo .= "----  Fin  ----";
    $cuerpo .= "<br />";
    $subject= "Contacto  Web Delle Cucine";
    $subject2= "Contacto  Web Delle Cucine";
    $basemailfor="dellecucine@gmail.com";
    //$basemailfor="sales@nickautoglass.com";
    $basemailfrom = $this->email;
    $respuesta ="<img src='http://dellecucine.com/imagenes/logo_admin.png' /><br />
		<strong>Saludos Sr(a).: $this->nombre $this->apellido</strong><br /><br />
		Nosotros hemos recibido su mensaje, nuestro departamento de atención al cliente le responderá lo más pronto posible<br />
		Gracias por contactar a Delle Cucine.<br />
		Delle Cucine<br /><br />
		Tel&eacute;fonos: <br/>
		+1 (954) 451-3247<br />
		Facebook: <a href='https://es-la.facebook.com/Delle-Cucine-LLC-184302075471616/'>Delle Cucine</a><br />
		Twitter: <a href='https://twitter.com/dellecucine'>@Delle Cucine</a><br />
		Instagram: <a href='https://www.instagram.com/dellecucine/'>@Delle Cucine</a><br />
		www.dellecucine.com
		<br /><br />
		Atentamente,<br />
		Delle Cucine.";
    $this->mensaje="<strong>&iexcl;Excelente!</strong> Su Mensaje ha sido enviado exitosamente.";

    $mail = new PHPMailer(true);
    $mail->From = $basemailfrom;
    $mail->FromName = utf8_decode($subject);
    $mail->AddAddress($basemailfor, $this->nombre." ".$this->apellido);
    $mail->Subject = utf8_decode($subject);
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $exito = $mail->Send();

    $mail2 = new PHPMailer(true);
    $mail2->From = $basemailfor;
    $mail2->FromName = utf8_decode($subject2);
    $mail2->AddAddress($basemailfrom, $this->nombre." ".$this->apellido);
    $mail2->Subject = utf8_decode($subject2);
    $mail2->Body = $respuesta;
    $mail2->AltBody = $respuesta;
    $exito = $mail2->Send();

  }

  function enviar_solicitud(){
    //metodo para el envio desde el formulario de contacto
    $this->asignar_ingreso2();
    $cuerpo ="<img src='http://dellecucine.com/imagenes/logo_admin.png' /><br /><br />
		<u>Datos de Entrada:</u><br />";
    $cuerpo .="<br />";
    $cuerpo .= "<strong>Nombre Completo: </strong>".utf8_decode($this->nombre)."<br />" ;
    $cuerpo .= "<strong>Número de telefono: </strong>".$this->telefono."<br />" ;
    $cuerpo .= "<strong>E-mail: </strong>".$this->email."<br />" ;
    $cuerpo .= "<strong>Comentarios: </strong>".$this->comentario."<br />";
    $cuerpo .= "<strong>Categor&iacute;a del Producto: </strong>".$this->codigo."<br />" ;
    $cuerpo .= "<strong>Producto Solicitado: </strong>".$this->producto."<br />";
    $cuerpo .= "<br />";
    $cuerpo .= "----  Fin  ----";
    $cuerpo .= "<br />";
    $subject= "Contacto  Web Delle Cucine";
    $subject2= "Contacto  Web Delle Cucine";
    $basemailfor="dellecucine@gmail.com";
    //$basemailfor="sales@nickautoglass.com";
    $basemailfrom = $this->email;
    $respuesta ="<img src='http://dellecucine.com/imagenes/logo_admin.png' /><br />
		<strong>Saludos Sr(a).: $this->nombre $this->apellido</strong><br /><br />
		Nosotros hemos recibido su solicitud, nuestro departamento de atención al cliente le responderá lo más pronto posible<br />
		Gracias por contactar a Delle Cucine.<br />
		Delle Cucine<br /><br />
		Tel&eacute;fonos: <br/>
		+1 (954) 451-3247<br />
		Facebook: <a href='https://es-la.facebook.com/Delle-Cucine-LLC-184302075471616/'>Delle Cucine</a><br />
		Twitter: <a href='https://twitter.com/dellecucine'>@Delle Cucine</a><br />
		Instagram: <a href='https://www.instagram.com/dellecucine/'>@Delle Cucine</a><br />
		www.dellecucine.com
		<br /><br />
		Atentamente,<br />
		Delle Cucine.";
    $this->mensaje="Su Solicitud ha sido enviada exitosamente.";

    $mail = new PHPMailer(true);
    $mail->From = $basemailfrom;
    $mail->FromName = utf8_decode($subject);
    $mail->AddAddress($basemailfor, $this->nombre." ".$this->apellido);
    $mail->Subject = utf8_decode($subject);
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;
    $exito = $mail->Send();

    $mail2 = new PHPMailer(true);
    $mail2->From = $basemailfor;
    $mail2->FromName = utf8_decode($subject2);
    $mail2->AddAddress($basemailfrom, $this->nombre." ".$this->apellido);
    $mail2->Subject = utf8_decode($subject2);
    $mail2->Body = $respuesta;
    $mail2->AltBody = $respuesta;
    $exito = $mail2->Send();


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
?>
