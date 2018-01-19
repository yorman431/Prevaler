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

class Categoria{
	var $codigo;
	var $nombre;
	var $categoria;
	var $subcategoria;
	var $id;
	var $prioridad;
	var $etiqueta;
	var $padre;
	var $descripcion;
	var $listado;
	var $ruta;
	var $suiche=false;
	var $buscar;
	var $mensaje;
	var $accion;
	var $claves;

	function Categoria(){// Constructor
	}

	function asignar_valores(){
		/* Metodo para recibir valores del exterior. */
		$this->nombre=$_POST['nombre'];
		$this->prioridad=$_POST['prioridad'];
		$this->etiqueta=$_POST['etiqueta'];
		$this->padre=$_POST['padre'];
	}

	function asignar_valores2(){
		/* Metodo para recibir valores del exterior. */
		$this->id=$_POST['id_cat'];
		$this->prioridad=$_POST['id_sub'];
	}
  
  function listar_categoria_imagen($portada){
    /* Metodo para listar los usuarios y sus opciones. */
    $sql="SELECT *, id_cat AS id_image, id_cat AS nombre_image FROM categoria GROUP BY id_cat ORDER BY prioridad_cat";
    $consulta=mysql_query($sql) or die(mysql_error());
    while ($resultado = mysql_fetch_array($consulta)){
      $buscar=$resultado['id_cat'];
      $sql="SELECT id_image, nombre_image, directorio_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='categoria' AND nombre_image = '$portada' ORDER BY id_image";
      $imagenes=mysql_query($sql) or die(mysql_error());
      $respuesta = mysql_fetch_array($imagenes);
      $resultado['id_image']=$respuesta['id_image'];
      $resultado['nombre_image']=$respuesta['nombre_image'];
      $resultado['directorio_image'] = $respuesta['directorio_image'];
      $this->mensaje="si";
      $this->listado[] = $resultado;
    }
  }

	function listar_categoria_menu(){
		/* Metodo para listar las categorias de categorias. */
		$sql="SELECT *, id_cat AS lista FROM categoria WHERE padre_cat='0' ORDER BY prioridad_cat,id_cat, nombre_cat ASC";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$padre=$resultado['id_cat'];
			$sql2="SELECT * FROM categoria WHERE padre_cat='$padre' ORDER BY prioridad_cat,id_cat, nombre_cat ASC";
			$consulta2=mysql_query($sql2) or die(mysql_error());
			$lista="";
			while ($resultado2 = mysql_fetch_array($consulta2)){
				$lista[]=$resultado2;
			}
			$resultado['lista']=$lista;
			$this->listado[] = $resultado;
		}
	}

	function buscar_ruta_nodo($id){
		/* Metodo para listar las categorias de categorias. */
		$sql2="SELECT id_cat,nombre_cat,padre_cat FROM categoria WHERE id_cat='$id'";
		$buscar=mysql_query($sql2)	or die(mysql_error());
		$resultados=mysql_fetch_array($buscar);
		if($this->suiche==false){
			$this->ruta[]=$resultados;
			if($resultados['padre_cat']==0) $this->suiche=true;
			$this->buscar_ruta_nodo($resultados['padre_cat']);
		}
	}

	function ruta_categoria($id){
			$this->suiche=false;
			//Cálculo de Ruta de Nodo
			$this->ruta="";
			$temp="";
			$this->buscar_ruta_nodo($id);
			for($i=count($this->ruta)-1;$i>=0;$i--){
				$temp.=" &raquo; ".$this->ruta[$i]['nombre_cat'];
			}
			return($temp);
	}

	function mostrar_categoria(){
		/*Metodo para mostrar la categoria seleccionada */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM categoria WHERE id_cat='$id'";
			$consulta=mysql_query($sql);
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->nombre=$resultado['nombre_cat'];
			$this->etiqueta=$resultado['etiqueta_cat'];
			$this->prioridad=$resultado['prioridad_cat'];
			$this->padre=$resultado['padre_cat'];
			$this->claves=$resultado['claves_cat'];
			$this->descripcion=$resultado['descripcion_cat'];
			$this->crearArbol('categoria','id_cat','nombre_cat','padre_cat',0,'&mdash;');
		//print_r($this->listado);
		}
	}

	function listar_categoria(){
		/* Metodo para listar las categorias de categorias. */
		$this->crearArbol('categoria','id_cat','nombre_cat','padre_cat',0,'&mdash;');

		$this->mensaje="si";
	}

	//function crearArbol($tabla,$id_field,$show_data,$link_field,$parent,$prefix){
	function crearArbol($tabla,$id_field,$show_data,$link_field,$parent,$prefix){
		/*Armar query*/
		$sql='SELECT *,id_cat AS ruta FROM '.$tabla.' WHERE '.$link_field.'='.$parent.' GROUP BY '.'prioridad_cat, id_cat';
		/*Asumiendo que se usa MySQL (se puede cambiar facilmente a otra db)*/

		$consulta=@mysql_query($sql) or die(mysql_error());
		if($consulta){
			   /*Recorrer todos las entradas */
			   while($resultado=mysql_fetch_array($consulta)){
			/* Imprimir campo a mostrar*/
					//echo($prefix.$resultado[$show_data].'<br>');
					$resultado[$show_data]=$prefix."&raquo; ".$resultado[$show_data];
					//$this->buscar_ruta_nodo($resultado['id_cat']);
					//$resultado['ruta']=$this->ruta;
					$this->listado[] = $resultado;

			/* imprimir arbol the "hijos" de este elemento*/
					$this->crearArbol($tabla,$id_field,$show_data,
								   $link_field,$resultado[$id_field],$prefix.$prefix);
			   }
		}
	}

	function cargar_subcategorias($id){
		/*Metodo para mostrar la categoria seleccionada */
			//echo $id;
			$sql="SELECT *, id_cat AS url FROM categoria, imagen WHERE padre_cat='$id' AND galeria_image=id_cat AND tabla_image='categoria' ORDER BY prioridad_cat, id_cat, nombre_cat";
			$consulta=mysql_query($sql) or die(mysql_error());
			if($resultado = mysql_fetch_array($consulta)){
				do{
					$this->mensaje="si";
					$resultado['url']=$this->modificar_url($resultado['claves_cat']);
					$this->listado[] = $resultado;
				}while ($resultado = mysql_fetch_array($consulta));
			}else{
				header("location:/redactar.php?id=$id#next");
			}
	}

	function cargar_subcategorias2($id){
		/*Metodo para mostrar la categoria seleccionada */
			$sql="SELECT *, id_cat AS url FROM categoria, imagen WHERE padre_cat='$id' AND galeria_image=id_cat AND tabla_image='categoria' ORDER BY prioridad_cat, id_cat, nombre_cat";
			$consulta=mysql_query($sql) or die(mysql_error());
			if($resultado = mysql_fetch_array($consulta)){
				do{
					$this->mensaje="si";
					$resultado['url']=$this->modificar_url($resultado['claves_cat']);
					$this->listado[] = $resultado;
				}while ($resultado = mysql_fetch_array($consulta));
			}else{
				$sql2="SELECT * FROM categoria WHERE id_cat='$id'";
				$consulta2=mysql_query($sql2) or die(mysql_error());
				$resultado2 = mysql_fetch_array($consulta2);
				$temp=$this->modificar_url($resultado2['claves_cat']);
				header("location:/".$temp."-".$id);
			}
	}

	function mostrar_subcategoria(){
		/*Metodo para mostrar la subcategoria seleccionada */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM subcategoria WHERE id_sub='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->nombre=$resultado['nombre_sub'];
			$this->prioridad=$resultado['prioridad_sub'];
		}
	}

	function insertar_categoria(){
	/*Metodo para insertar una categoria */
		$this->accion="Datos de Categoría";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$sql="SELECT * FROM categoria WHERE nombre_cat='$this->nombre' AND padre_cat='$this->padre'";
			$consulta=mysql_query($sql) or die(mysql_error());
			if($resultado=mysql_fetch_array($consulta)){
				$this->mensaje=1;
			}else{
				$sql="INSERT INTO categoria VALUES (NULL, '$this->nombre', '$this->etiqueta', '$this->prioridad', '$this->padre')";
				$consulta=mysql_query($sql) or die(mysql_error());
				header("location:/admin/categoria/");
			}
		}
		$this->crearArbol('categoria','id_cat','nombre_cat','padre_cat',0,'&mdash;');
	}

	function editar_categoria(){
	/*Metodo para editar una categoria */
		$this->accion="Editando Datos de Categoría";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			$sql="SELECT * FROM categoria WHERE nombre_cat='$this->nombre' AND id_cat!='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			if($resultado=mysql_fetch_array($consulta)){
				$this->mensaje=1;
			}else{
				$sql="UPDATE categoria SET nombre_cat='$this->nombre', etiqueta_cat='$this->etiqueta', prioridad_cat='$this->prioridad', padre_cat='$this->padre' WHERE id_cat='$id'";
				$consulta=mysql_query($sql) or die(mysql_error());
				header("location:/admin/categoria/");
			}
		}else{
		  $this->mostrar_categoria();
		}
	}

	function eliminar_categoria(){
	/*Metodo para eliminar una categoria */
		$id=$_GET['id'];
		$sql="SELECT id_pro FROM producto WHERE categoria_pro='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		if($resultado=mysql_fetch_array($consulta)){
		    header("location:/admin/categoria/?error=1");
		}else{
			$sql="DELETE FROM categoria WHERE id_cat='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());

			header("location:/admin/categoria/");
		}
	}

	function get_categoria($id){
	/*Metodo para obtener el nombre de una categoria */
		$sql="SELECT nombre_cat FROM categoria WHERE id_cat='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);

		return $resultado['nombre_cat'];
	}

	function get_categoria2($id){
	/*Metodo para obtener el nombre de una categoria */
		$sql="SELECT id_cat, nombre_cat FROM categoria WHERE id_cat='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);

		$this->listado = $resultado;
	}

	function get_categoria3($id){
	/*Metodo para obtener el nombre de una categoria */
		$sql="SELECT id_cat, nombre_cat FROM categoria, producto WHERE id_pro='$id' AND id_cat = categoria_pro";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);

		$this->listado = $resultado;
	}

	function modificar_url($url) {
		$url = strtolower($url);
		//Rememplazamos caracteres especiales latinos
		$find = array(' ');
		$repl = array('_');
		$url = str_replace ($find, $repl, $url);
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
		$repl = array('a', 'e', 'i', 'o', 'u', 'n');
		$url = str_replace ($find, $repl, utf8_encode($url));
		//utf8_decode();
		// Añaadimos los guiones
		$find = array(' ', '&', '\r\n', '\n', '+');
		$url = str_replace ($find, '_', $url);

		// Eliminamos y Reemplazamos demás caracteres especiales
		$find = array('/[^a-z0-9\-<>\_]/', '/[\-]+/', '/<[^>]*>/');
		$repl = array('', '_', '');
		$url = preg_replace ($find, $repl, $url);


	return $url;
	}
}
