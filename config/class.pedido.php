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

class Pedido{
	var $codigo;
	var $cliente;
	var $fecha;
	var $hora;
	var $estado;
	var $id;
	var $monto;
	var $cantidad;
	var $limite;
	var $comentario;
	var $listado;
	var $listado2;
	var $buscar;
	var $mensaje;
	var $accion;
	
	function Pedido(){// Constructor
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

	function convertir_hora($CampoHora, $CampoMin, $CampoMer){
		if(!empty($CampoMin)){
			$conv_hora  = $CampoHora.":".$CampoMin." ".$CampoMer;
		}else{
			$conv_hora  =  preg_split("/[:]/",$CampoHora);
			$conv_hora2 = preg_split("/[ ]/",$CampoHora);
			$conv_hora  = $conv_hora[0]."/[:]/".$conv_hora[1];
		}
		return $conv_hora;
	}

	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->codigo=$_POST['codigo'];
		$this->nombre=$_POST['nombre'];
		$this->categoria=$_POST['categoria'];
		$this->subcategoria=$_POST['subcategoria'];
		$this->prioridad=$_POST['prioridad'];
		$this->detal=$_POST['detal'];
		$this->mayor=$_POST['mayor'];
		$this->limite=$_POST['limite'];
		$this->descripcion=$_POST['descripcion'];
		$this->estado=$_POST['estado'];
	}
	
	function listar_pedido(){
		/* Metodo para listar los pedidos y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){	
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg AND(fecha_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR 																																			  			cantidad_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR
			codigo_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			monto_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			apellido_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			nombre_reg LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_ped DESC";
		}else{
			$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg ORDER BY id_ped DESC";
		}
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_ped']=$this->convertir_fecha($resultado['fecha_ped']);
			$this->listado[] = $resultado;
		}
	}
	
	function listar_pedido_usuario($tipo){
		/* Metodo para listar los pedidios en el perfil de usuario*/
		if($tipo=="Entregado")
			$sentencia="estado_ped='Entregado'";
		else
			$sentencia="estado_ped!='Entregado'";
			
		$id=$_SESSION['id_temporal'];
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){	
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg AND id_reg='$id' AND $sentencia AND(fecha_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR 																																			  			cantidad_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR
			codigo_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			monto_ped LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			apellido_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			nombre_reg LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_ped DESC";
		}else{
			$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg AND id_reg='$id' AND $sentencia ORDER BY id_ped DESC";
		}
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_ped']=$this->convertir_fecha($resultado['fecha_ped']);
			$this->listado[] = $resultado;
		}
	}
	
	function listar_producto_categoria(){
		/* Metodo para listar los productos por categoria. */
		$sql="SELECT * FROM producto, imagen, categoria WHERE id_cat=categoria_pro AND galeria_image=id_pro GROUP BY id_cat ORDER BY categoria_pro, prioridad_pro ASC";
		
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
	}
	
	function mostrar_imagenes(){
		$id=$_GET['id'];
		/* Metodo para mostrar las imagenes de los productos. */
		$sql="SELECT nombre_image, id_image, cantidad_det FROM pedidos, detalle_pedido, producto, imagen WHERE id_ped='$id' AND id_ped=pedido_det AND producto_det=id_pro AND galeria_image=id_pro GROUP BY id_pro ORDER BY id_det ASC";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
	}
	
	function mostrar_pedido(){
		/*Metodo para mostrar los pedidos */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg AND id_ped='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->codigo=$resultado['codigo_ped'];
			$this->cliente=$resultado['nombre_reg']." ".$resultado['apellido_reg'];
			$this->fecha=$this->convertir_fecha($resultado['fecha_ped']);
			$this->hora=$resultado['hora_ped'];
			$this->estado=$resultado['estado_ped'];
			$this->monto=$resultado['monto_ped'];
			$this->cantidad=$resultado['cantidad_ped'];
			$this->comentario=$resultado['comentario_ped'];
		} 
	}
	
	function editar_pedido(){
	/*Metodo para editar la información de un pedido*/		
		$this->accion="Editando Datos del Pedido";
		if (isset($_POST['envio']) && $_POST['envio']=="Actualizar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			
			$sql="SELECT * FROM pedidos WHERE id_ped='$id'";
			$consulta2=mysql_query($sql) or die(mysql_error());
			$resultado2 = mysql_fetch_array($consulta2);
			if($resultado2['estado_ped']!=$this->estado)
				$this->enviar_correos($resultado2['cliente_ped'],$id);
			
			$sql="UPDATE pedidos SET estado_ped='$this->estado', comentario_ped='$this->descripcion' WHERE id_ped='$id'";
			
			if($this->estado=="Verificado"){
				$sql="UPDATE deposito SET verificado_dep='1' WHERE pedido_dep='$id'";
				$consulta=mysql_query($sql) or die(mysql_error());
			}
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/pedidos/");
		}else{
		  $this->mostrar_pedido();
		  $this->mostrar_imagenes();
		}
	}
	
	function eliminar_pedido(){
	/*Metodo para eliminar un usuario seleccionado */	
		$id=$_GET['id'];
		$sql="SELECT * FROM pedidos WHERE id_ped='$id'";
		$buscar=mysql_query($sql) or die(mysql_error());
		while($resultado=mysql_fetch_array($buscar)){
			$pedido=$resultado['id_ped'];
			$sql="DELETE FROM detalle_pedido WHERE pedido_det='$pedido'";
			$borrar=mysql_query($sql) or die(mysql_error());
		}
		$sql="DELETE FROM pedidos WHERE id_ped='$id'";
		$eliminar=mysql_query($sql) or die(mysql_error());
		
		header("location:/admin/pedidos/");
	}
	
	function enviar_correos($cliente,$pedido){
	    //metodo para el envio de correos de aviso cuando se registran
		$id=$cliente;
		$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg AND id_reg='$id' AND id_ped='$pedido'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado = mysql_fetch_array($consulta);
		
		$cuerpo ="<img width='280' height='136' src='http://www.compratuticket.com.ve/imagenes/logon.jpg' /><br />
		<u>DATOS INGRESADOS:</u><br />";
		$cuerpo .="<br />";
		$cuerpo .= "<strong>Nombre: <strong/>".$resultado['nombre_reg']."<br />" ;
		$cuerpo .= "<strong>Apellido: <strong/>".$resultado['apellido_reg']."<br />" ;
		$cuerpo .= "<strong>Tel&eacute;fono: <strong/>".$resultado['telefono_reg']."<br />" ;
		$cuerpo .= "<strong>E-mail: <strong/>".$resultado['correo_reg']."<br />" ;
		$cuerpo .= "<strong>Estado del pedido ".$resultado['codigo_ped'].", Cambi&oacute; a  <strong/>".$this->estado."<br />" ;
		$cuerpo .= "<br />";
		$cuerpo .= "----  FIN DATOS  ----";
		$cuerpo .= "<br />";
		$subject= "Cambio de Estado de Pedido CompraTuTicket";
		$subject2= "Cambio de Estado de Pedido CompraTuTicket";
		$basemailfor="compratuticket@gmail.com";
		$basemailfrom = $resultado['correo_reg'];
		$respuesta ="<img width='280' height='136' src='http://www.compratuticket.com.ve/imagenes/logon.jpg' /><br /><strong>Reciba un cordial saludo: ".$resultado['nombre_reg']." ".$resultado['apellido_reg']."<strong/><br /><br />
		El estado de su pedido ".$resultado['codigo_ped'].", ha cambiado a ".$this->estado.".<br />
		Dicho estado se encuentra reflejado en los datos de su pedido en su cuenta personal.<br><br>
		Una vez mas gracias por confiar CompraTuTicket.
		<br /><br /> 
		 Muchas Gracias.<br /><br />
		 Atentamente,<br /><br />
		Departamento de Ventas de CompraTuTicket<br />
		www.compratuticket.com.ve<br />
<a href='http://www.twitter.com/compratuticket'>@CompraTuTicket</a><br />
		<a href='http://www.facebook.com/pages/CompraTuTicket/135147839889750?sk=wall'>Facebook: CompraTuTicket</a>";
		if(mail ("$basemailfor", "$subject2", "$cuerpo", "From: $basemailfrom\nContent-Type: text/html" )){
		   mail ("$basemailfrom", "$subject", "$respuesta", "From: $basemailfor\nContent-Type: text/html" );
		   
		}
	}
	
}
?>