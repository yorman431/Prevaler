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

class Color{
	var $nombre;
	var $apellido;
	var $telefono;
	var $email;
	
	var $codigo;
	var $listado;
	var $buscar;
	var $mensaje;
	var $mensaje2;
	var $accion;
	var $id;
	
	var $tipo;
	var $ano;
	var $valor_vehiculo;
	var $saldo;
	var $valor_inicial;
	var $comision;
	var $plazo;
	var $cuotas;
	var $total;
	
	var $marca;
	var $modelo;
	var $descripcion;
	var $indicador;
	
	function Color(){// Constructor
	}
	
	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->nombre=$_POST['nombre'];
		$this->apellido=$_POST['apellido'];
		$this->telefono=$_POST['telefono'];
		$this->email=$_POST['email'];
		
		$this->tipo=$_POST['tipo'];
		$this->ano=$_POST['ano'];
		$this->valor_vehiculo=$_POST['valor_vehiculo'];
		$this->saldo=$_POST['saldo'];
		$this->valor_inicial=$_POST['valor_inicial'];
		$this->comision=$_POST['comision'];
		$this->plazo=$_POST['plazo'];
		$this->cuotas=$_POST['cuotas'];
		$this->total=$_POST['total'];
	}
	
	function asignar_valores2(){
		/* Metodo para recibir valores del exterior. */
		$this->nombre=$_POST['nombre'];
		$this->apellido=$_POST['apellido'];
		$this->telefono=$_POST['telefono'];
		$this->email=$_POST['email'];
		
		$this->marca=$_POST['marca'];
		$this->modelo=$_POST['modelo'];
		$this->ano=$_POST['ano'];
		$this->tipo=$_POST['tipo'];
		$this->descripcion=$_POST['descripcion'];
	}
	
	function listar_color(){
		/* Metodo para listar los colores y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){	
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM color WHERE (nombre_color LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			codigo_color LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_color ASC";
		}else{
			$sql="SELECT * FROM color ORDER BY id_color";
		}
		$consulta=mysql_query($sql);
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
	}
	
	function mostrar_colores_producto(){
		/*Metodo para mostrar la categoria seleccionada */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM colorxpro, color WHERE producto_cxp='$id' AND id_color=color_cxp ORDER BY id_color ASC";
			$consulta=mysql_query($sql) or die(mysql_error());
			while ($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$this->listado[] = $resultado;
			}
		} 
	}
	
	function insertar_color(){
	/*Metodo para insertar un color seleccionado */	
		$this->accion="Insertar Muestra  de Color";
		if (isset($_POST['envio']) && $_POST['envio']=="Enviar"){
			$this->asignar_valores();
			$sql="INSERT INTO color VALUES ('', '$this->nombre', '$this->codigo')";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/colores/");
		}			
	}
	
	function asignar_color(){
	/*Metodo para asignar un color seleccionado */	
		$this->accion="Asignar Muestra de Color";
		if (isset($_POST['envio']) && $_POST['envio']=="Enviar"){
			echo $_POST['color'];
			/* $sql="INSERT INTO color VALUES ('', '$this->nombre', '$this->codigo')";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/producto/detalle.php?id={$id}"); */
			exit();
		}else{
			$this->listar_color();
		}
	}
	
	function calcular_cotizacion(){
	/*Metodo para insertar un color seleccionado */	
		if (isset($_POST['envio']) && $_POST['envio']=="Calcular"){
			$this->asignar_valores();
			//$sql="INSERT INTO color VALUES ('', '$this->nombre', '$this->codigo')";
			//$consulta=mysql_query($sql) or die(mysql_error());
			$costante=array (24 => 0.0528711,36 => 0.0392329,48 => 0.0326018,60 => 0.0287680);
			
			if($this->tipo=="Usado"){ $porcentaje=0.4; $this->indicador=40;}
			if($this->tipo=="Nuevo"){ $porcentaje=0.3; $this->indicador=30;}
				$media=$this->valor_vehiculo*$porcentaje;
			if($this->valor_inicial>=$media){
				$this->saldo=$this->valor_vehiculo-$this->valor_inicial;
				$this->comision=$this->saldo*0.03;
				$this->cuotas=$this->saldo*$costante[$this->plazo];
				$this->total=$this->valor_inicial+$this->comision;
				$this->mensaje=1;
			}else{
				$this->mensaje=2;
			}
		}			
	}
	
	function eliminar_color(){
	/*Metodo para eliminar un color seleccionado */	
		$id=$_GET['id'];
		$sql="DELETE FROM color WHERE id_color='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		header("location:/admin/colores/");
	}
	
	function enviar_repuestos(){
	    //metodo para el envio desde el formulario de contacto
		$this->asignar_valores2();
		$cuerpo ="<img width='200' height='100' src='http://www.vehiculosvenezuela.com/imagenes/logon.jpg' />
		<br /><u>DATOS PERSONALES:</u><br />";
		$cuerpo .="<br />";
		$cuerpo .= "<strong>Nombre: <strong/>".$this->nombre."<br />" ;
		$cuerpo .= "<strong>Apellido: <strong/>".$this->apellido."<br />" ;
		$cuerpo .= "<strong>Tel&eacute;fono: <strong/>".$this->telefono."<br />" ;
		$cuerpo .= "<strong>E-mail: <strong/>".$this->email."<br />" ;
		$cuerpo .= "<br />";
		$cuerpo .= "----  DATOD DE REPUESTO  ----";
		$cuerpo .= "<br />";
		$cuerpo .= "<strong>Marca: <strong/>".$this->marca."<br />" ;
		$cuerpo .= "<strong>Modelo: <strong/>".$this->modelo."<br />" ;
		$cuerpo .= "<strong>A&ntilde;o: <strong/>".$this->ano."<br />" ;
		$cuerpo .= "<strong>Tipo: <strong/>".$this->tipo."<br />" ;
		$cuerpo .= "<strong>Descripci&oacute;n: <strong/>".$this->descripcion."<br />" ;
		$cuerpo .= "<br />";
		$cuerpo .= "----  END DATA  ----";
		$cuerpo .= "<br />";
		$subject= "Solicitud de Repuesto desde www.vehiculosvenezuela.com";
		$subject2= "Solicitud desde www.vehiculosvenezuela.com";
		$basemailfor="info@vehiculosvenezuela.com";
		//$basemailfor="marabino20@gmail.com";
		$basemailfrom = $this->email;
		$respuesta ="<img width='200' height='100' src='http://www.vehiculosvenezuela.com/imagenes/logon.jpg' /><br /><br />
		<strong>Reciba un cordial saludo: ".$this->nombre." ".$this->apellido."<strong/><br /><br />
		Hemos recibido su solicitud con &eacute;xito y le damos gracias por contactarnos, en este momento la estamos procesando y obtendrá una respuesta a la brevedad posible.
		<br><br> 
		 Muchas Gracias
		<br /><br />
		Atentamente,<br /><br />
		Veh&iacute;culosVenezuela<br />
		www.vehiculosvenezuela.com";
		$this->mensaje="Su solicitud de repuesto ha sido enviado satisfactoriamente!";
		if(mail ("$basemailfor", "$subject2", "$cuerpo", "From: $basemailfrom\nContent-Type: text/html" )){
		   mail ("$basemailfrom", "$subject", "$respuesta", "From: $basemailfor\nContent-Type: text/html" );
		   
		}
	}
	
}
?>