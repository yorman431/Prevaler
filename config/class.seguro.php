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

class Seguro{
	var $login;
	var $clave;
	var $descripcion;
	var $id;
	var $nombre;
	var $listado;
	var $buscar;
	var $mensaje;
	var $accion;
	
	function Seguro(){// Constructor
	}

	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->nombre=$_POST['nombre'];
		$this->descripcion=$_POST['descripcion'];
	}
	
	function listar_seguro(){
		/* Metodo para listar los seguros y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){	
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM aseguradora WHERE
			(id_seg LIKE '%' '".$_SESSION['buscar']."' '%' OR
			 nombre_seg LIKE '%' '".$_SESSION['buscar']."' '%' OR
			 descripcion_seg LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_seg ASC";
		}else{
			$sql="SELECT * FROM aseguradora ORDER BY id_seg";
		}
		$consulta=mysql_query($sql);
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
	}

	function mostrar_seguro(){
		/*Metodo para mostrar un usuario seleccionado */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM aseguradora WHERE id_seg='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->nombre=$resultado['nombre_seg'];
			$this->descripcion=$resultado['descripcion_seg'];
		}
	}
	
	function eliminar_seguro(){
	/*Metodo para eliminar un seguro seleccionado */	
		$id=$_GET['id'];
		$sql="DELETE FROM aseguradora WHERE id_seg='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		header("location:/admin/seguro/");
	}

	function insertar_seguro(){
	/*Metodo para editar un usuario seleccionado */
		$this->accion="Datos de la Aseguradora";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$sql="SELECT * FROM aseguradora  WHERE nombre_seg='$this->nombre'";
			$consulta=mysql_query($sql) or die(mysql_error());
			if($resultado=mysql_fetch_array($consulta)){
                $this->mensaje2=2;
			}else{
				$sql2="INSERT INTO aseguradora VALUES (NULL, '$this->nombre', '$this->descripcion')";
				$consulta2=mysql_query($sql2) or die(mysql_error());
					$this->mensaje2=1;

			}

		}
	}

function editar_seguro(){
	/*Metodo para editar un usuario seleccionado */
		$this->accion="Editando Datos de la Aseguradora";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			$this->fecha=$this->convertir_fecha($this->fecha);
			$sql="UPDATE aseguradora SET nombre_seg='$this->nombre', descripcion_seg='$this->descripcion' WHERE id_seg='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$this->mensaje=1;
			$this->mostrar_seguro();
		}else{
			$this->mostrar_seguro();
		}
	}
}
?>