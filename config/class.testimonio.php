<?php
class Testimonio{
	var $titulo;
	var $estrellas;
	var $comentario;
	var $mensaje;
	var $accion;
	var $listado;
	var $id;
	var $fecha;
	
	function __construct(){// Constructor
	}
 
	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->titulo=$_POST['titulo'];
		$this->estrellas=$_POST['estrellas'];
		$this->comentario=$_POST['comentario'];
		$this->fecha=$this->convertir_fecha($_POST['fecha']);
	}

  function listar_testimonio_publico(){
			
	  $sql="SELECT * FROM testimonio ORDER BY fecha_test DESC";
    unset($this->listado);
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_test'] = date('d-m-Y', strtotime($resultado['fecha_test']));
			$this->listado[] = $resultado;
		}
	}

		function listar_testimonio(){
		/* Metodo para listar los usuarios y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){	
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM testimonio WHERE
			(titulo_test LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			comentario_test LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			estrellas_test LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY id_test DESC";
		}else{
			$sql="SELECT * FROM testimonio ORDER BY id_test DESC";
		}
		$consulta=mysql_query($sql);
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_test']=$this->convertir_fecha($resultado['fecha_test']);
			$this->listado[] = $resultado;
		}
	}

		function editar_testimonio(){
	/*Metodo para editar un usuario seleccionado */		
		$this->accion="Editando Datos de Testimonio";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			$sql="UPDATE testimonio SET titulo_test='$this->titulo', comentario_test='$this->comentario', estrellas_test='$this->estrellas', fecha_test='$this->fecha'  WHERE id_test='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/testimonio/");
		}else{
		  $this->mostrar_testimonio();
		}
	}

	function mostrar_testimonio(){
		/*Metodo para mostrar un usuario seleccionado */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM testimonio WHERE id_test='$id'";
			$consulta=mysql_query($sql);
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->titulo = $resultado['titulo_test'];
			$this->comentario = $resultado['comentario_test'];
			$this->estrellas = $resultado['estrellas_test'];
			$this->fecha = $this->convertir_fecha($resultado['fecha_test']);
			
		} 
	}

		function insertar_testimonio(){
	/*Metodo para editar un usuario seleccionado */	
		$this->accion="Datos del nuevo testimonio";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$sql="INSERT INTO testimonio VALUES (NULL, '$this->titulo', '$this->comentario', '$this->estrellas','$this->fecha')";
			
			if($consulta=mysql_query($sql) or die(mysql_error())){
             $this->mensaje=1;
			}
		}			
	}

		function eliminar_testimonio(){
	/*Metodo para eliminar un usuario seleccionado */	
		$id=$_GET['id'];
		$sql="DELETE FROM testimonio WHERE id_test='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		header("location:/admin/testimonio/");
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
}