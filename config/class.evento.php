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

class Evento{
	var $nombre;
	var $categoria;
	var $fecha;
	var $descripcion;
	var $buscar;
	var $mensaje;
	var $accion;
	var $combo;
	var $etiqueta;
	var $listado;
	var $id;
	var $fotos;
	
	function Evento(){// Constructor
	}
	
	function convertir_fecha($CampoFecha){
		if(!empty($CampoFecha)){
			if(strpos($CampoFecha,"-")){
				$conv_fecha = explode("-",$CampoFecha); $conv_fecha = $conv_fecha[2]."/".$conv_fecha[1]."/".$conv_fecha[0];
			}else{
				$conv_fecha = explode("/",$CampoFecha); $conv_fecha = $conv_fecha[2]."-".$conv_fecha[1]."-".$conv_fecha[0];
			}
			return $conv_fecha;
		}
	}
	
	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->nombre=$_POST['nombre'];
		$this->categoria=$_POST['categoria'];
		$this->fecha=$_POST['fecha'];
		$this->descripcion=$_POST['descripcion'];
	}
	
	function listar_evento(){
		/* Metodo para listar los eventos y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if(isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM evento WHERE 
			(nombre_eve LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			categoria_eve LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			fecha_eve LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			descripcion_eve LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_eve DESC";
		}else{
			
			$sql="SELECT *, COUNT( * ) AS fotos FROM evento GROUP BY id_eve ORDER BY fecha_eve DESC";
		}
		//echo $sql;
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_eve']=$this->convertir_fecha($resultado['fecha_eve']);
			$sql="SELECT COUNT( * ) AS fotos FROM imagen WHERE galeria_image=".$resultado['id_eve']." AND tabla_image='evento'";
			$contar=mysql_query($sql) or die(mysql_error());
			$numero=mysql_fetch_array($contar);
			$resultado['fotos']=$numero['fotos'];
			$this->listado[] = $resultado;
		}
	}
	
	function listar_evento2($valor){
		/* Metodo para listar los eventos y sus opciones. */
		date_default_timezone_set('America/Caracas');
		$fecha_actual=date("Y-m-d");
		if($valor=="Anterior"){
			$condicion="fecha_eve<'$fecha_actual'";
			$orden="DESC";
		}else if($valor=="Proximo"){
			$condicion="fecha_eve>='$fecha_actual'";
			$orden="ASC";
		}
		$sql="SELECT *, id_eve AS id_image, id_eve AS nombre_image FROM evento WHERE $condicion GROUP BY id_eve ORDER BY fecha_eve $orden";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$buscar=$resultado['id_eve'];
			$sql="SELECT id_image, nombre_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='evento' ORDER BY id_image";
			$imagenes=mysql_query($sql) or die(mysql_error());
			$respuesta = mysql_fetch_array($imagenes);
			$resultado['id_image']=$respuesta['id_image'];
			$resultado['nombre_image']=$respuesta['nombre_image'];
			$this->mensaje="si";
			$resultado['fecha_eve']=$this->convertir_fecha($resultado['fecha_eve']);
			
			$this->listado[] = $resultado;
		}
	}
	
	function listar_evento_publica(){
		/* Metodo para listar los eventos y sus opciones. */
		date_default_timezone_set('America/Caracas');
		$fecha_actual=date("Y-m-d");
		//AND fecha_eve>='$fecha_actual'
		$sql="SELECT * FROM evento, imagen WHERE id_eve=galeria_image AND tabla_image='evento' GROUP BY id_eve ORDER BY fecha_eve ASC LIMIT 0 , 3";
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_eve']=$this->convertir_fecha($resultado['fecha_eve']);
			$temporal=strtolower($resultado['nombre_eve']);
			$resultado['nombre_eve']=ucwords($temporal);
			$this->listado[] = $resultado;
		}
	}
	
	function mostrar_evento(){
		/*Metodo para mostrar un evento seleccionado*/
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM evento WHERE id_eve='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id = $_GET['id'];
			$this->nombre = $resultado['nombre_eve'];
			$this->categoria = $resultado['categoria_eve'];
			$this->fecha = $this->convertir_fecha($resultado['fecha_eve']);
			//$this->fecha = $resultado['fecha_eve'];
			$this->descripcion = $resultado['descripcion_eve'];
		} 
	}
	
	function ultimo_evento(){
		/*Metodo para mostrar un evento seleccionado*/
			$sql="SELECT * FROM evento GROUP BY id_eve ORDER BY id_eve DESC LIMIT 0 , 1";
			$consulta=mysql_query($sql);
			$resultado = mysql_fetch_array($consulta);
			$this->id = $resultado['id_eve'];
			$this->nombre = $resultado['nombre_eve'];
			$this->descripcion = $resultado['descripcion_eve'];
			$sql="SELECT * FROM imagen WHERE galeria_image='$this->id' AND tabla_image='evento' ORDER BY id_image LIMIT 0 , 2";
			$consulta=mysql_query($sql) or die(mysql_error());
			while($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$resultado['fecha_eve']=$this->convertir_fecha($resultado['fecha_eve']);
				$this->listado[] = $resultado;
			}
	}
	
	function insertar_evento(){
	/*Metodo para insertar un evento seleccionado */	
		$this->accion="Datos del Nuevo Evento";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$this->descripcion=html_entity_decode($this->descripcion);
			$this->fecha = $this->convertir_fecha($this->fecha);
			$sql="INSERT INTO evento VALUES ('','$this->categoria', '$this->nombre', '$this->fecha', '$this->descripcion')";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/evento/");
		}			
	}
	
	function editar_evento(){
	/*Metodo para editar un evento seleccionado */		
		$this->accion="Editando Datos del Evento";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			$this->descripcion=html_entity_decode($this->descripcion);
			$this->fecha = $this->convertir_fecha($this->fecha);
			$sql="UPDATE evento SET categoria_eve='$this->categoria', nombre_eve='$this->nombre', fecha_eve='$this->fecha', descripcion_eve='$this->descripcion' WHERE id_eve='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/evento/");
		}else{
		  $this->mostrar_evento();
		}
	}
	
	function eliminar_evento(){
	/*Metodo para eliminar un evento seleccionado */	
		$id=$_GET['id'];
		$sql="DELETE FROM evento WHERE id_eve='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		
		$sql="DELETE FROM imagen WHERE galeria_image='$id' AND tabla_image='evento'";
		$consulta2=mysql_query($sql) or die(mysql_error());
		
		header("location:/admin/evento/");
	}
}
?>