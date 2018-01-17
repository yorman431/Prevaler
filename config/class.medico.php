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
include_once("class.hotel.php");
include_once("class.facilidad.php");
include_once('conexion.inc.php');

class Medico{
	var $nombre;
	var $especialidad;
	var $sede;
	var $id;
	var $imagen;
	var $fecha;
	var $contenido;
	var $listado;
	var $tipo;
	var $listado2;
	var $buscar;
	var $mensaje;
	var $mensaje2;
	var $prioridad;
	var $accion;
	var $perfil;

	var $connection;

	function __construct(){
	  $this->connection = new Connection();
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
		$this->especialidad=$_POST['especialidad'];
		$this->sede=$_POST['sede'];
		$this->prioridad=$_POST['prioridad'];
		$this->contenido=$_POST['contenido'];
	}

	function listar_medico(){
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];

		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM medico, sede WHERE id_sede=sede_med AND(
			nombre_med LIKE '%' '".$_SESSION['buscar']."' '%' OR
			orden_med LIKE '%' '".$_SESSION['buscar']."' '%' OR
			descripcion_med LIKE '%' '".$_SESSION['buscar']."' '%' OR
			especialidad_med LIKE '%' '".$_SESSION['buscar']."' '%')
			ORDER BY orden_med ASC";
		}else{
			$sql="SELECT id_med, nombre_med, descripcion_med, especialidad_med, orden_med, nombre_sede, nombre_fac  FROM medico, sede, facilidad WHERE id_sede = sede_med AND id_fac = especialidad_med ORDER BY orden_med ASC";
		}

		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
		
	}

	function listar_medico_publico($sede){

		$sql="SELECT * FROM medico, imagen WHERE sede_med = ? AND id_med = galeria_image AND tabla_image = ? ORDER BY orden_med ASC";

		$tabla = 'medico';
		try{
    $query = $this->connection->prepare($sql);

    $query->bindParam(1, $sede);
    $query->bindParam(2, $tabla);

    $query->execute();

    $this->connection->Close();

    if ($this->listado = $query->fetchAll()){
      $this->mensaje = 'si';
    }
		}catch (PDOException $e){
			echo 'Error code: '.$e->getMessage();
		}
	}


	function listar_medico_imagen($tipo){
		/* Metodo para listar los usuarios y sus opciones. */
		if($tipo == '25'){
			$tipo2="inicio";
		}else if($tipo == '26'){
			$tipo2="nosotros";
		}else if($tipo == '28'){
			$tipo2="productos";
		}else if($tipo == '27'){
			$tipo2="noticias";
		}else if($tipo == '29'){
			$tipo2="galeria";
		}

		if(isset($_GET['sub'])&& $_GET['sub']!=""){
				$sub=$_GET['sub'];
				$restriccion="'$tipo'=enlace_con AND subenlace_con='$sub' AND tipo_con='$tipo'";
			}else{
				$restriccion="'$tipo'=enlace_con AND tipo_con='$tipo'";
			}
		$sql="SELECT *, id_con AS id_image, id_con AS nombre_image FROM medico WHERE $restriccion GROUP BY id_con ORDER BY enlace_con, prioridad_con, nombre_con";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$buscar=$resultado['id_con'];
			$sql="SELECT id_image, nombre_image,directorio_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='medico' ORDER BY id_image";
			$imagenes=mysql_query($sql) or die(mysql_error());
			$resultado['enlace_con']=$this->get_enlace($resultado['enlace_con']);
			$resultado['subenlace_con']=$this->get_subenlace($resultado['subenlace_con']);
			$resultado['fecha_con']=$this->convertir_fecha($resultado['fecha_con']);
			while ($respuesta = mysql_fetch_array($imagenes)){
			  $imagen[]=$respuesta['directorio_image'];
			}
			$this->mensaje="si";
			$resultado['imagenes']=$imagen;
			$imagen="";
			$this->listado[] = $resultado;
		}
	}



	function mostrar_medico(){
		/*Metodo para mostrar un usuario seleccionado */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM medico WHERE id_med='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->nombre=$resultado['nombre_med'];
			$this->prioridad=$resultado['orden_med'];
			$id_esp=$resultado['especialidad_med'];
			$id_sede=$resultado['sede_med'];
			$this->contenido=$resultado['descripcion_med'];

			$sql2="SELECT nombre_fac FROM facilidad WHERE id_fac='$id_esp'";
			$consulta2=mysql_query($sql2) or die(mysql_error());
			$resultado2 = mysql_fetch_array($consulta2);
			$this->especialidad=$resultado2['nombre_fac'];

			$sql3="SELECT nombre_sede FROM sede WHERE id_sede='$id_sede'";
			$consulta3=mysql_query($sql3) or die(mysql_error());
			$resultado3 = mysql_fetch_array($consulta3);
			$this->sede=$resultado3['nombre_sede'];
		}
	}
	function mostrar_medico_img(){
		/*Metodo para mostrar un usuario seleccionado */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM medico,imagen WHERE id_med='$id' AND galeria_image=id_med AND tabla_image='medico'";

			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->nombre=$resultado['nombre_med'];
			$this->prioridad=$resultado['orden_med'];
			$this->especialida=$resultado['especialida_med'];
			$this->sede=$resultado['sede_med'];
			$this->contenido=$resultado['descripcion_med'];
			$this->imagen=$resultado['directorio_image'];
		}
	}
	function insertar_medico(){
	/*Metodo para editar un usuario seleccionado */
		$this->accion="Datos del Especialista";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$sql="SELECT * FROM medico  WHERE nombre_med='$this->nombre' AND sede_med='$this->sede'";
			$consulta=mysql_query($sql) or die(mysql_error());
			if($resultado=mysql_fetch_array($consulta)){
                $this->mensaje2=2;
			}else{
				$sql2="INSERT INTO medico VALUES (NULL, '$this->nombre', '$this->especialidad', '$this->contenido','$this->prioridad', '$this->sede')";
				$consulta2=mysql_query($sql2) or die(mysql_error());
					$this->mensaje2=1;

			}

		}
	}

function editar_medico(){
	/*Metodo para editar un usuario seleccionado */
		$this->accion="Editando Datos del Especialista";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			$this->fecha=$this->convertir_fecha($this->fecha);
			$sql="UPDATE medico SET nombre_med='$this->nombre', especialidad_med='$this->especialidad', orden_med='$this->prioridad',  descripcion_med='$this->contenido', sede_med='$this->sede'  WHERE id_med='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$this->mensaje=1;
			$this->mostrar_medico();
		}else{
			$this->mostrar_medico();
		}
	}


	function eliminar_medico(){
	/*Metodo para eliminar un usuario seleccionado */
		$id=$_GET['id'];
		$sql="DELETE FROM medico WHERE id_med='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());

		$sql="DELETE FROM imagen WHERE galeria_image='$id' AND tabla_image='medico'";
		$consulta2=mysql_query($sql) or die(mysql_error());

		header("location:/admin/medico/");
	}

	

	
}
?>
