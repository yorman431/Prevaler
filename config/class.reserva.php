
<?php

include_once("class.phpmailer.php");

class Reserva{

	var $id;
	var $nombre;
	var $adulto;
	var $nacionalidad;
	var $entrada;
	var $cedula;
	var $salida;
	var $nino;
	var $ciudad;
	var $email;
    var $edad;
    var $boletos;
	var $habitaciones;
	var $listado;
    var $comentario;
    var $mensaje;
	function Reserva(){// Constructor
	}

	function asignar_valor(){
		$this->nombre=$_POST['nombre'];
		$this->adulto=$_POST['adulto'];
		$this->nacionalidad=$_POST['nacionalidad'];
		$this->entrada=$_POST['entrada'];
		$this->cedula=$_POST['cedula'];
		$this->nino=$_POST['nino'];
		$this->ciudad=$_POST['ciudad'];
		$this->salida=$_POST['salida'];
		$this->email=$_POST['email'];
		$this->edad=$_POST['edad'];
		$this->boletos=$_POST['boletos'];
		$this->habitaciones=$_POST['habitaciones'];
		$this->comentario=$_POST['comentario'];
	}


	function listar_reserva(){
		$sql="SELECT * FROM reserva";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[]=$resultado;

		}
	}

	function detalle_reserva(){
		$id=$_GET['id'];
		$sql="SELECT * FROM reserva WHERE id_res='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[]=$resultado;
		}
	}

	function eliminar_reserva(){
		$id=$_GET['id'];
		$sql="DELETE FROM reserva WHERE id_res='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());

	}

	function editar_reserva(){
		$this->asignar_valor();
		$id=$_GET['id'];
		$sql="UPDATE reserva SET nombre_res='$this->nombre',adultos WHERE id_res='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$this->mensaje="si";

	}

	function convertir_fecha($CampoFecha){
		if(!empty($CampoFecha)){
			if(strpos($CampoFecha,"-")){
				$conv_fecha = explode("-",$CampoFecha);$conv_fecha = $conv_fecha[2]."/".$conv_fecha[1]."/".$conv_fecha[0];
			}else{
				$conv_fecha =explode("/",$CampoFecha); $conv_fecha = $conv_fecha[2]."-".$conv_fecha[1]."-".$conv_fecha[0];
			}
			return $conv_fecha;
		}
	}

     function convertir_fecha2($CampoFecha){
		 if(!empty($CampoFecha)){
			$i=strpos($CampoFecha," ");
			$hora=substr($CampoFecha,$i, $CampoFecha);
			$fecha=substr($CampoFecha,0,$i);
			return $this->convertir_fecha($fecha)." ".$hora;

		 }
	}


function enviar_reserva(){ /*Cotizacion via Mail*/
		//metodo para el envio desde el formulario de contacto
	$this->asignar_valor();
	$cuerpo ="<img src='http://surfparadise.diazcreativos.net.ve/imagenes/logon.jpg' /><br /><br />
	<u>Datos de Reserva:</u><br />";
	$cuerpo .="<br />";
	$cuerpo .= "<strong>Nombre Completo: </strong>".utf8_decode($this->nombre)."<br />" ;
	$cuerpo .= "<strong>Cantidad de Adultos: </strong>".$this->adulto."<br />" ;
	$cuerpo .= "<strong>Nacionalidad: </strong>".$this->nacionalidad."<br />" ;
	$cuerpo .= "<strong>Entrada: </strong>".$this->entrada."<br />" ;
	$cuerpo .= "<strong>Salida: </strong>".$this->salida."<br />" ;
	$cuerpo .= "<strong>Cédula: </strong>".$this->cedula."<br />" ;
	$cuerpo .= "<strong>Niño: </strong>".$this->nino."<br />" ;
	$cuerpo .= "<strong>Ciudad: </strong>".$this->ciudad."<br />";
	$cuerpo .= "<strong>Email: </strong>".$this->email."<br />";
	$cuerpo .= "<strong>Edad de los niños: </strong>".$this->edad."<br />";
	$cuerpo .= "<strong>Boletos: </strong>".$this->boletos."<br />";
	$cuerpo .= "<strong>Habitación: </strong>".$this->habitaciones."<br />";
	$cuerpo .= "<strong>Comentario: </strong>".$this->comentario."<br />";
	$cuerpo .= "<br />";
	$cuerpo .= "---- Fin de los datos de reservas  ----";
	$cuerpo .= "<br />";
	$subject= "Reserva Surf Paradise";
	$subject2= "Reserva Surf Paradise";
	$basemailfor="surfparadise@gmail.com";
	$basemailfrom = $this->email;
	$respuesta ="<img src='http://surfparadise.diazcreativos.net.ve/imagenes/logon.jpg' /><br />
	<strong>Saludos Sr./Srs.: $this->name</strong><br /><br />
	Hemos recibido su solicitud y será procesada a la brevedad posible, recuerde que esta reserva no está
	garantizada. Durante las próximas horas uno de nuestros representantes se comunicará con usted para 
	atender directamente su petición.

    ¡Gracias por contactarnos!
	<br /><br />
	Atentamente,<br />
	Departamento de Reservaciones Hotel Surf Paradise<br />
	Tel&eacute;fono: +58 (295) 269.8920 <br />
	Facebook: <a href='https://www.facebook.com/Hotel-Surf-Paradise-138172156224028/'>Hotel Surf Paradise
	</a><br/>
	Twitter: <a href='https://twitter.com/hsurfparadise'>@hsurfparadise</a><br />
	Instagram: <a href='https://www.instagram.com/hotelsurfparadise/'>@hotelsurfparadise</a><br />
	www.hotelsurfparadise.com";
	$this->mensaje="¡Enviado con Exito!";

	$mail = new PHPMailer(true);
	$mail->From = $basemailfrom;
	$mail->FromName = utf8_decode($subject);
	$mail->AddAddress($basemailfor, $this->nombre);
	$mail->Subject = utf8_decode($subject);
	$mail->Body = $cuerpo;
	$mail->AltBody = $cuerpo;
	$exito = $mail->Send();

	$mail2 = new PHPMailer(true);
	$mail2->From = $basemailfor;
	$mail2->FromName = utf8_decode($subject2);
	$mail2->AddAddress($basemailfrom, $this->nombre);
	$mail2->Subject = utf8_decode($subject2);
	$mail2->Body = $respuesta;
	$mail2->AltBody = $respuesta;
	$exito = $mail2->Send();
  }

}
