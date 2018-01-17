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

class Carro_Compra{
	var $ahorro;
	var $cantidad;
	var $producto;
	var $total;
	var $numero;
	var $descuento;
	var $prioridad;
	var $id;
	var $detal;
	var $mayor;
	var $limite;
	var $descripcion;
	var $listado;
	var $temporal=array("imagen", "codigo", "nombre", "categoria", "cantidad", "precio", "id");
	var $buscar;
	var $mensaje;
	var $accion;
	
	function Carro_Compra(){// Constructor
	}
	
	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->cantidad=$_POST['cantidad'];
		$this->producto=$_POST['id'];
	}
	
	function listar_carro(){
		/* Metodo para listar los productos y sus opciones. */
		$this->mensaje="no";
		if(isset($_SESSION['carro']) && $_SESSION['carro']!=""){
			unset($this->listado);
			$carro_size=count($_SESSION['carro']);
			foreach($_SESSION['carro'] as $valor => $indice){
			//for($i=0;$i<=$carro_size;$i++){
				if($_SESSION['carro'][$valor]!=""){
					$this->mensaje="si";
					$this->listado[] = $_SESSION['carro'][$valor];
				}
			}
		}
	}
	
	function insertar_carro(){
	/*Metodo para insertar un pedido seleccionado */
		$this->asignar_valores();
		$buscar=false;
		if(isset($_SESSION['carro']) && $_SESSION['carro']!=""){
			foreach($_SESSION['carro'] as $valor => $indice){
				if($_SESSION['carro'][$valor]['id']==$this->producto){
					$_SESSION['carro'][$valor]['cantidad']=$_SESSION['carro'][$valor]['cantidad']+$this->cantidad;
					$buscar=true;
				}
			}
	    }
		if($buscar==false){
		$sql="SELECT producto.nombre_pro,producto.codigo_pro,producto.mayor_pro,producto.detal_pro, imagen.id_image, categoria.nombre_cat  
		FROM producto 
		INNER JOIN categoria ON producto.categoria_pro=categoria.id_cat
		INNER JOIN imagen ON producto.id_pro=imagen.galeria_image AND imagen.tabla_image='producto' 
		WHERE producto.id_pro='$this->producto'";
		
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado = mysql_fetch_array($consulta);
		
		//Roberto Edit
			$_SESSION['carro'][]=array("imagen"=>$resultado['id_image'], "codigo"=>$resultado['codigo_pro'], "nombre"=>$resultado['nombre_pro'], "categoria"=>$resultado['nombre_cat'], "cantidad"=>$this->cantidad, "precio_may"=>$resultado['mayor_pro'],"precio_det"=>$resultado['detal_pro'], "id"=>$this->producto);
		
		/* print_r($_SESSION['carro']);
		echo $carro_size; */
		}
	}
	
	
	function eliminar_producto_carro(){
	/*Metodo para eliminar un producto del carro*/ 
		  $id=$_GET['pos'];
		  $ncontrado=false;
		  $posicion=0;
		  foreach($_SESSION['carro'] as $valor => $indice){
			   if($_SESSION['carro'][$valor]['codigo']==$id){
				$ncontrado=true;
				$posicion=$valor;
			   }
		  }
		  if($ncontrado==true)
		  unset($_SESSION['carro'][$posicion]);
	}
	
	function total_monto(){
	/*Metodo para buscar el nombre de la categoria */
		if(isset($_SESSION['carro']) && $_SESSION['carro']!=""){
			$carro_size=count($_SESSION['carro']);
			if($carro_size<=0){
				$this->numero=0;
				$this->total=0;
				$this->descuento=0;
			}else{
				$this->numero=0;
				$this->total=0;
				$this->descuento=0;
				$total_detal=0;
				$total_mayor=0;
				foreach($_SESSION['carro'] as $valor => $indice){
					$this->numero = $this->numero+$_SESSION['carro'][$valor]['cantidad'];
					$total_detal = $total_detal+($_SESSION['carro'][$valor]['precio_det']*$_SESSION['carro'][$valor]['cantidad']);
					$total_mayor = $total_mayor+($_SESSION['carro'][$valor]['precio_may']*$_SESSION['carro'][$valor]['cantidad']);
				}
				if($this->numero>=100){
					$this->total=$total_mayor;
					$this->descuento=0;
					$this->ahorro=$total_detal-$total_mayor;
				}else if($this->numero>=100 && $this->numero<=101){
					$this->total=$total_detal;
					$this->descuento=$total_detal*0.10;
				}else{
					$this->total=$total_detal;
					$this->descuento=0;
				}
				/* for($i=0;$i<=$carro_size-1;$i++){
					$this->numero = $this->numero+$_SESSION['carro'][$i]['cantidad'];
					$this->total = $this->total+($_SESSION['carro'][$i]['precio']*$_SESSION['carro'][$i]['cantidad']);
				} */
			}
		}else{
			$this->numero=0;
			$this->total=0;
			$this->descuento=0;
		}
	}
	
	function formalizar_pedido($con){
	/*Metodo para insertar el pedido en la base de datos */
		if(isset($_SESSION['carro']) && $_SESSION['carro']!=""){
			//Recolectando datos del pedido
			$sql="SELECT MAX(id_ped) AS total FROM pedidos";
			$count=mysql_query($sql) or die(mysql_error());
			$row=mysql_fetch_array($count);
			$total=$row['total'];
			$total++;
			$codigo="PED-".$total;
			
			$cliente=$_SESSION['id_temporal'];
			$fecha=date("Y-m-d");
			$hora=date("h:i:s");
			$this->total_monto();
			$cantidad=$this->numero;
			$comentario=$_POST['comentario'];
			$descuento=$_POST['descuento'];
			$subtotal=$_POST['subtotal'];
			$monto=$this->total-$descuento;
			$id_pago=mysql_insert_id($con);
			$sql="INSERT INTO pedidos (codigo_ped, cliente_ped, fecha_ped, hora_ped, subtotal_ped, descuento_ped, monto_ped, cantidad_ped, comentario_ped) VALUES ('$codigo', '$cliente', '$fecha', '$hora', '$subtotal', '$descuento', '$monto', '$cantidad', '$comentario')";
			$consulta=mysql_query($sql) or die(mysql_error());
			//Insertando los detalles del pedido
			$carro_size=count($_SESSION['carro']);
			$pedido=mysql_insert_id($con);
			
			//Asignar id de pedido a pago
			$sql="UPDATE deposito SET pedido_dep='$pedido' WHERE id_dep='$id_pago'";
			$actualizar=mysql_query($sql) or die(mysql_error());
			
			foreach($_SESSION['carro'] as $valor => $indice){
				$producto = $_SESSION['carro'][$valor]['id'];
				$cantidad = $_SESSION['carro'][$valor]['cantidad'];
				if($this->numero>=100)
					$precio = $_SESSION['carro'][$valor]['precio_may'];
				else
					$precio = $_SESSION['carro'][$valor]['precio_det'];
				$sql="INSERT INTO detalle_pedido (pedido_det, producto_det, cantidad_det, precio_det) VALUES ('$pedido', '$producto', '$cantidad', '$precio')";
				$consulta=mysql_query($sql) or die(mysql_error());
			}
			unset($_SESSION['carro']);
			
			//Envio de correos informativos
			$this->enviar_correos($cliente);
			header("location: pedido_exitoso.php?id=$pedido");
		}
	}
	
	function get_direccion($id){
	/*Metodo para obtener el nombre de una categoria */	
		$sql="SELECT direccion_reg, ciudad_reg, estado_reg, pais_reg FROM registro WHERE id_reg='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);
		
		$dir=$resultado['direccion_reg'].", ".$resultado['ciudad_reg'].", ".$resultado['estado_reg']." - ".$resultado['pais_reg'];
		
		return $dir;
	}
	
	function enviar_correos($cliente){
	    //metodo para el envio de correos de aviso cuando se registran
		$id=$cliente;
		$sql="SELECT * FROM pedidos, registro WHERE cliente_ped=id_reg AND id_reg='$id' ORDER BY id_ped DESC";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado = mysql_fetch_array($consulta);
		
		$cuerpo ="<img width='280' height='136' src='http://www.compratuticket.com.ve/imagenes/logon.jpg' /><br /><br /><u>DATOS INGRESADOS:</u><br />";
		$cuerpo .="<br />";
		$cuerpo .= "<strong>Nombre: <strong/>".$resultado['nombre_reg']."<br />" ;
		$cuerpo .= "<strong>Apellido: <strong/>".$resultado['apellido_reg']."<br />" ;
		$cuerpo .= "<strong>Tel&eacute;fonos: <strong/>".$resultado['telefono_reg']." - ".$resultado['celular_reg']."<br />" ;
		$cuerpo .= "<strong>E-mail: <strong/>".$resultado['correo_reg']."<br />" ;
		$cuerpo .= "<strong>Pedido C&oacute;digo:</strong> ".$resultado['codigo_ped']."<br />";
		$cuerpo .= "<strong>Cantidad de Productos:</strong> ".$resultado['cantidad_ped']."<br />";
		$cuerpo .= "<strong>Monto a Cancelar:</strong> ".$resultado['monto_ped']."<br />";
		$cuerpo .= "<br />";
		$cuerpo .= "----  FIN DATOS  ----";
		$cuerpo .= "<br />";
		$subject= "Pedido Realizado CompraTuTicket";
		$subject2= "Pedido Realizado CompraTuTicket";
		$basemailfor="compratuticket@gmail.com";
		$basemailfrom = $resultado['correo_reg'];
		$respuesta ="<img width='280' height='136' src='http://www.compratuticket.com.ve/imagenes/logon.jpg' /><br /><br /><strong>Reciba un cordial saludo: ".$resultado['nombre_reg']." ".$resultado['apellido_reg']."<strong/><br /><br />
		Hemos recibido los datos de su pedido satisfactoriamente!.<br /><br />
		<strong>Pedido C&oacute;digo:</strong> ".$resultado['codigo_ped']."<br />
		<strong>Cantidad de Productos:</strong> ".$resultado['cantidad_ped']."<br />
		<strong>Monto a Cancelar:</strong> ".$resultado['monto_ped']."<br /><br />

		Si desea observar e imprimir los datos de su pedido, puede acceder a su cuenta de usuario.<br><br>
		Una vez mas gracias por confiar en CompraTuTicket.
		<br /><br /> 
		 Muchas Gracias.<br /><br />
		 Atentamente,<br /><br />
		Departamento de Ventas<br />
		www.compratuticket.com.ve<br />
<a href='http://www.twitter.com/compratuticket'>@CompraTuTicket</a><br />
		<a href='http://www.facebook.com/pages/CompraTuTicket/135147839889750?sk=wall'>Facebook: CompraTuTicket</a>";
		if(mail ("$basemailfor", "$subject2", "$cuerpo", "From: $basemailfrom\nContent-Type: text/html" )){
		   mail ("$basemailfrom", "$subject", "$respuesta", "From: $basemailfor\nContent-Type: text/html" );
		   
		}
	}
}
?>