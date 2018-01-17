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

include_once('conexion.inc.php');

class Galeria{

	var $connection;

	var $nombre;
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
	
	function __construct(){
		$this->connection = new Connection;
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
		$this->fecha=$_POST['fecha'];
		$this->descripcion=$_POST['descripcion'];
	}
	
	function listar_galeria(){
		/* Metodo para listar las galerías y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if(isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
			$this->buscar=$_SESSION['buscar'];
			$sql="SELECT * FROM galeria WHERE 
			(nombre_gal LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			fecha_gal LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			descripcion_gal LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY fecha_gal DESC";
		}else{
			
			$sql="SELECT *, COUNT( * ) AS fotos FROM galeria GROUP BY id_gal";
		}
		//echo $sql;
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$sql="SELECT COUNT( * ) AS fotos FROM imagen WHERE galeria_image=".$resultado['id_gal']." AND tabla_image='galeria'";
			$contar=mysql_query($sql) or die(mysql_error());
			$numero=mysql_fetch_array($contar);
			$resultado['fotos']=$numero['fotos'];
			$this->listado[] = $resultado;
		}
	}
	
	function listar_galeria_publica(){
		/* Metodo para listar las galerías y sus opciones. */
			$sql="SELECT * FROM galeria, imagen WHERE galeria_image=id_gal AND tabla_image='galeria' ORDER BY id_image DESC";
		//echo $sql;
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
	}
	
	function listar_galeria_publica2(){
		/* Metodo para listar las galerías y sus opciones. */
			$sql="SELECT * FROM galeria GROUP BY id_gal ORDER BY id_gal DESC LIMIT 0,6";
		//echo $sql;
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$resultado['fecha_gal']=$this->convertir_fecha($resultado['fecha_gal']);
			$resultado['descripcion_gal']=strip_tags($resultado['descripcion_gal']);
			$this->listado[] = $resultado;
		}
	}
	
	
	function ultima_galeria($pos){
		/* Metodo para listar las galerías y sus opciones. */
			$sql="SELECT * FROM galeria, imagen WHERE id_gal=galeria_image AND tabla_image='galeria' AND nombre_gal='$pos' ORDER BY id_gal DESC";
		//echo $sql;
		$consulta=mysql_query($sql) or die(mysql_error());
		while($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
		}
	}
	
	function mostrar_galeria(){
		/*Metodo para mostrar una galería seleccionada */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM galeria WHERE id_gal='$id'";
			$consulta=mysql_query($sql);
			$resultado = mysql_fetch_array($consulta);
			$this->id = $_GET['id'];
			$this->nombre = $resultado['nombre_gal'];
			$this->fecha = $resultado['fecha_gal'];
			$this->descripcion = $resultado['descripcion_gal'];
		} 
	}
	
function insertar_galeria(){
	/*Metodo para insertar una galería seleccionada */
		$this->accion="Datos de Galer&iacute;a Nueva";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$this->descripcion=html_entity_decode($this->descripcion);
			$sql="INSERT INTO galeria VALUES ('','$this->nombre', '$this->fecha', '$this->descripcion')";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/galeria/");
		}
	}
	
	function editar_galeria(){
	/*Metodo para editar una galería seleccionada */		
		$this->accion="Editing Application Data";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			//$this->descripcion=html_entity_decode($this->descripcion);
			$sql="UPDATE galeria SET nombre_gal='$this->nombre', fecha_gal='$this->fecha', descripcion_gal='$this->descripcion' WHERE id_gal='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			header("location:/admin/galeria/");
		}else{
		  $this->mostrar_galeria();
		}
	}
	
	function eliminar_galeria(){
	/*Metodo para eliminar una galeria seleccionada */	
		$id=$_GET['id'];
		$sql="DELETE FROM galeria WHERE id_gal='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		
		$sql="DELETE FROM imagen WHERE galeria_image='$id' AND tabla_image='galeria'";
		$consulta2=mysql_query($sql) or die(mysql_error());
		
		header("location:/admin/galeria/");
	}
	
	function mostrar_imagenes($tabla){
		if (isset($_GET['id']) && $_GET['id']!=""){
			
			$sql='SELECT * FROM imagen WHERE galeria_image = ? AND tabla_image = ? ORDER BY id_image ASC';
			
			try{
				$query = $this->connection->prepare($sql);
				
				$query->bindParam(1, $_GET['id']);
				$query->bindParam(2, $tabla);
				$query->execute();
				
				$this->connection->Close();
				if($this->listado = $query->fetchAll()){
					$this->mensaje = 'si';
				}
			}catch (PDOException $e){
				echo ('Error Code: '.$e->getMessage());
			}
		}
	}

	function mostrar_imagenes2($tabla){
		/*Metodo para mostrar las imagenes de la galeria */
			$sql="SELECT * FROM imagen WHERE tabla_image='$tabla' ORDER BY galeria_image";
			$consulta=mysql_query($sql);
			while($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$this->listado[] = $resultado;
			}
	}
	
	function mostrar_imagenes3($tabla){
		/*Metodo para mostrar las imagenes de la galeria */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM imagen WHERE galeria_image='$id' AND tabla_image='$tabla' AND nombre_image='arriba'";
			$consulta=mysql_query($sql);
			while($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$this->listado[] = $resultado;
			}
		} 
	}
	
	
	function mostrar_imagenes_portada($tabla){
		/*Metodo para mostrar las imagenes de la galeria */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM imagen WHERE galeria_image='$id' AND tabla_image='$tabla' AND nombre_image!='portada' ORDER BY id_image";
			$consulta=mysql_query($sql);
			while($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$this->listado[] = $resultado;
			}
		} 
	}
	
	function mostrar_imagenes4($id){
		/*Metodo para mostrar las imagenes de la galeria */
			$sql="SELECT * FROM imagen WHERE galeria_image='$id' AND tabla_image='producto' AND nombre_image!='portada'";
			$consulta=mysql_query($sql);
			while($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$this->listado[] = $resultado;
			}
	
	}
	

	function insertar_imagen($carpeta){
		$this->accion="Insertar Imagen";
		if (isset($_POST['envio']) && $_POST['envio']=="Enviar"){
			$this->asignar_valores();
			$id=$_GET['id'];
			if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
				if ($_FILES['archivo']['type'] == "image/jpeg" || $_FILES['archivo']['type'] == "image/pjpeg" || $_FILES['archivo']['type'] == "image/png"){
					if ($_FILES['archivo']['size']>=512000){
						$this->mensaje=1;
					}else{
						if($carpeta=="subcategoria")
							header("location:/admin/link/sublink_detalle.php?id=$id");
						else
							header("location:/admin/$carpeta/detalle.php?id=$id");
						
						if($_FILES['archivo']['type'] == "image/jpeg")
							$archivo = time().".jpg";
						else if($_FILES['archivo']['type'] == "image/pjpeg")
							$archivo = time().".jpg";
						else if($_FILES['archivo']['type'] == "image/png")
							$archivo = time().".png";
						$tipo=$_FILES['archivo']['type'];
						$directorio="../../imagenes/".$carpeta;
						if (!is_dir($directorio)) exec("mkdir $directorio");
						$directorio.="/".$archivo;
						$directorio2=$carpeta."/".$archivo;
						$directorio3="../../imagenes/".$carpeta."/".$archivo;
						$temp="../../imagenes/miniaturas/".$carpeta;
						if (!is_dir($temp)) exec("mkdir $temp");
						$directorio4=$temp."/".$archivo;
						move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
						$this->crear_miniatura($directorio3, $directorio4, 300, $tipo);
						$sql = "INSERT INTO imagen (directorio_image, tipo_image, galeria_image, nombre_image, tabla_image)
										VALUES ( ?, ?, ?, ?, ?)";
						
						try{
							$query = $this->connection->prepare($sql);
							
							$query->bindParam(1, $directorio2);
							$query->bindParam(2, $tipo);
							$query->bindParam(3, $id);
							$query->bindParam(4, $this->nombre);
							$query->bindParam(5, $carpeta);
							$query->execute();
							
							$this->connection->Close();
						}catch (PDOException $e){
							echo ('Error Code: '.$e->getMessage());
						}
					}
				}else{
					$this->mensaje=2;
				}
			}else{
				$this->mensaje=3;
			}
		}
	}
	
	function eliminar_imagen(){
		$carpeta=$_GET['tabla'];
		$id_back=$_GET['back'];
    
    header("location:/admin/$carpeta/detalle.php?id=$id_back");
    if($carpeta=="subcategoria")
      header("location:/admin/link/sublink_detalle.php?id=$id_back");
    else
      header("location:/admin/$carpeta/detalle.php?id=$id_back");
		
		$sql = "SELECT directorio_image, nombre_image FROM imagen
					WHERE id_image = ? AND tabla_image = ?";
		
		try{
			$query = $this->connection->prepare($sql);
			
			$query->bindParam(1, $_GET['id']);
			$query->bindParam(2, $_GET['tabla']);
			$query->execute();
			
			$this->connection->Close();
			
			$resultado = $query->fetch();
      $directorio="../../imagenes/".$resultado['directorio_image'];
      unlink($directorio);
		}catch (PDOException $e){
			echo ('Error Code: '.$e->getMessage());
		}
    
    $sql = "DELETE FROM imagen WHERE id_image = ? AND tabla_image = ?";
		
		try{
			unset($query);
      unset($resultado);
      
			$query = $this->connection->prepare($sql);
      $query->bindParam(1, $_GET['id']);
      $query->bindParam(2, $_GET['tabla']);
      $query->execute();
      
      $this->connection->Close();
      
      $resultado = $query->fetch();
      $directorio2="../../imagenes/miniaturas/".$resultado['directorio_image'];
      unlink($directorio2);
			
		}catch (PDOException $e){
			echo ('Error Code: '.$e->getMessage());
		}
	}
	
	function buscar_logo($id){
		/* Metodo para buscar el icono. */
		$sql="SELECT directorio_image FROM producto, imagen WHERE id_pro='$id' AND galeria_image=id_pro AND tabla_image='producto' AND nombre_image='logo' GROUP BY id_pro";
		//echo $sql;
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado = mysql_fetch_array($consulta);
		return $this->modificar_url($resultado['directorio_image']);
	}
	
	function crear_miniatura( $pathToImages, $pathToThumbs, $thumbWidth, $tipo ) {
		  //echo "Creating thumbnail for {$fname} <br />";
		  // load image and get image size
		  
		  if($tipo == "image/jpeg")
		  		$img = imagecreatefromjpeg( $pathToImages );
		  else if($tipo == "image/gif")
				$img = imagecreatefromgif( $pathToImages );
		  else if($tipo == "image/png")
				$img = imagecreatefrompng( $pathToImages );
		
		  $width = imagesx( $img );
		  $height = imagesy( $img );
	
		  // calculate thumbnail size
		  $new_width = $thumbWidth;
		  $new_height = floor( $height * ( $thumbWidth / $width ) );
	
		  // create a new temporary image
		  $tmp_img = imagecreatetruecolor( $new_width, $new_height );
		  if($tipo == "image/png"){
			  imagealphablending($tmp_img, false);
		  }
		  	  // copy and resize old image into new image 
		      imagecopyresampled( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
	
		  // save thumbnail into a file
		  if($tipo == "image/jpeg")
		  		imagejpeg( $tmp_img, $pathToThumbs, 100);
		  else if($tipo == "image/gif")
				imagegif( $tmp_img, $pathToThumbs);
		  else if($tipo == "image/png"){
		  		imagesavealpha($tmp_img, true);
				imagepng( $tmp_img, $pathToThumbs);
		  }
	 }
	 
	 function modificar_url($url){
		 /* Metodo para modificar url */
		 $temp=explode("/", $url);
		 $url=$temp[0]."/miniatura/".$temp[1];
		 return  $url;
	 }
}
?>