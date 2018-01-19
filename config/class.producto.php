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

class Producto{
	var $codigo;
	var $nombre;
	var $prioridad;
	var $fecha;
	var $color;
	var $descripcion;
	var $listado;
	var $listado2;
	var $buscar;
	var $mensaje;
	var $mensaje2;
	var $vistas;
	var $talla;
	var $telas;
	

	var $categoria;
	var $cantidad;
	var $id;
	var $id_cat;
	var $detal;
	var $mayor;
	var $limite;
	var $limite2;
	var $precio;
	var $imagen;
	var $ruta;
	var $suiche;
	var $claves;


	function Producto(){// Constructor
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
		$this->codigo=$_POST['codigo'];
		$this->nombre=$_POST['nombre'];
		$this->prioridad=$_POST['prioridad'];
		$this->descripcion=$_POST['descripcion'];
		

		/*
			$this->categoria=$_POST['categoria'];
			$this->cantidad=$_POST['cantidad'];
			$this->detal=$_POST['detal'];
			$this->mayor=$_POST['mayor'];
			$this->limite=$_POST['limite'];
			$this->claves=$_POST['claves'];
		*/
	}
	
	function listar_producto(){
		/* Metodo para listar los usuarios y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
			
		if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){	
			$this->buscar=$_SESSION['buscar'];
			/// $sql="SELECT * FROM producto, categoria WHERE id_cat=categoria_pro AND
			$sql="SELECT * FROM producto WHERE 
			(prioridad_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
			codigo_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			nombre_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			descripcion_pro LIKE '%' '".$_SESSION['buscar']."' '%') 
			ORDER BY prioridad_pro, prioridad_pro ASC";
		}else{
			/*
				$sql="SELECT id_pro, codigo_pro, nombre_pro, directorio_image, prioridad_pro FROM producto, imagen WHERE galeria_image = id_pro AND tabla_image = 'producto'";
			*/
			$sql="SELECT * FROM producto" ;
		}
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->suiche=false;
			$this->listado[] = $resultado;
		}
	}

	function listar_producto2(){
		/* Metodo para listar los usuarios y sus opciones. */
		$sql="SELECT id_pro, nombre_pro, directorio_image, prioridad_pro FROM producto, imagen WHERE id_pro = galeria_image AND tabla_image = 'producto' AND nombre_image = 'portada' ORDER BY prioridad_pro ASC";

		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->suiche=false;
			$this->listado[] = $resultado;
		}
	}

	function get_producto($id){
	/*Metodo para obtener el nombre de una categoria */
		$sql="SELECT * FROM producto, imagen WHERE id_pro = $id AND id_pro = galeria_image AND tabla_image = 'producto' ORDER BY prioridad_pro ASC";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);

		$this->listado = $resultado;
	}
	
	function listar_producto_categoria(){
		/* Metodo para listar los usuarios y sus opciones. */
		$sql = "SELECT id_cat, nombre_cat FROM categoria";
		$consulta = mysql_query($sql) or die (mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
		  $id = $resultado['id_cat'];
		  $sql2 = "SELECT id_pro, nombre_pro, directorio_image, categoria_pro FROM producto, imagen WHERE galeria_image = id_pro AND tabla_image = 'producto' AND categoria_pro = '$id'";
		  $consulta2 = mysql_query($sql2) or die (mysql_error());
		  while ($resultado2 = mysql_fetch_array($consulta2)){
		    $resultado2['precio_pro'] = number_format($resultado2['precio_pro'], 2, '.', '');
        $temp[] = $resultado2;
      }
      $resultado['imagenes'] = $temp;
      $this->listado[] = $resultado;
      unset($temp);
    }
	}
	
	function listar_producto_imagen(){
		/* Metodo para listar los usuarios y sus opciones. */
		if (isset($_POST['buscar']))
			$_SESSION['buscar']=$_POST['buscar'];
		$cat=$_SESSION['categoria_actual'];
		if($cat==6)
			$sql="SELECT * FROM producto, imagen WHERE galeria_image=id_pro AND tabla_image='Producto' AND nombre_image='portada' GROUP BY id_pro,id_image ORDER BY id_pro DESC, prioridad_pro ASC LIMIT 0, 20";
		else
			$sql="SELECT * FROM producto, imagen, categoria WHERE categoria_pro='$cat' AND galeria_image=id_pro AND tabla_image='Producto' AND nombre_image='portada' GROUP BY id_pro,id_image,id_pro ORDER BY categoria_pro, prioridad_pro ASC";
		
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$aux="";
			$this->mensaje="si";
			$resultado['detal_pro']=$this->convertir_moneda($resultado['detal_pro']);
			$resultado['mayor_pro']=$this->convertir_moneda($resultado['mayor_pro']);
			
				$sql2="SELECT * FROM categoria WHERE id_cat='$cat'";
				$consulta2=mysql_query($sql2) or die(mysql_error());
				$resultado2 = mysql_fetch_array($consulta2);
				$aux=$this->modificar_url($resultado2['claves_cat']);
				
			$resultado['url']=$aux."_".$this->modificar_url($resultado['claves_pro']);
			$temp=$resultado['limite_pro'];
			$resultado['cantidad_pro']=$resultado['limite_pro'];
			$resultado['limite_pro']=array(1,2,3,4,5,6,7,8,9,10,11);
			$this->descripcion=$resultado['descripcion_pro'];
			$this->listado[] = $resultado;
		}
	}
    function cargar_materiales(){
    	if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM tiene  WHERE producto_rel='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			while($resultado = mysql_fetch_array($consulta)){
				$id_fac= $resultado['facilidad_rel'];
				$sql2="SELECT * FROM facilidad  WHERE id_fac='$id_fac'";
				$consulta2=mysql_query($sql2) or die(mysql_error());	
				$resultado2 = mysql_fetch_array($consulta2);
				$this->listado[]= $resultado2;		
			}

		}
    }

	function listar_producto_imagen2(){
	if (isset($_POST['buscar']))
	  $_SESSION['buscar']=$_POST['buscar'];

	if (isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
	  $this->buscar=$_SESSION['buscar'];
	  $sql="SELECT * FROM producto, imagen WHERE (nombre_image LIKE '%' '".$_SESSION['buscar']."' '%' OR prioridad_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
	  codigo_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
	  nombre_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
	  categoria_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
	  limite_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
	  claves_pro LIKE '%' '".$_SESSION['buscar']."' '%' OR
	  descripcion_pro LIKE '%' '".$_SESSION['buscar']."' '%') AND galeria_image=id_pro AND tabla_image='Producto' 
	  GROUP BY id_pro,id_image ORDER BY categoria_pro, prioridad_pro ASC";
	  //AND nombre_image='portada'
	  $consulta=mysql_query($sql) or die(mysql_error());
	  while ($resultado = mysql_fetch_array($consulta)){
	    $this->mensaje="si";
	    setlocale(LC_ALL, 'es_ES');
	    //$resultado['nombre_pro']=ucwords(strtolower($resultado['nombre_pro']));
	    $resultado['detal_pro']=$this->convertir_moneda($resultado['detal_pro']);
	    $resultado['mayor_pro']=$this->convertir_moneda($resultado['mayor_pro']);
	    $resultado['detal_pro']=$this->mostrar_precio($resultado['detal_pro']);
	    $resultado['mayor_pro']=$this->mostrar_precio($resultado['mayor_pro']);
		$cat=$resultado['categoria_pro'];
	    $sql2="SELECT * FROM categoria WHERE id_cat='$cat'";
	    $consulta2=mysql_query($sql2) or die(mysql_error());
	    $resultado2 = mysql_fetch_array($consulta2);
	    $aux=$this->modificar_url($resultado2['claves_cat']);

	    $resultado['url']=$aux."_".$this->modificar_url($resultado['claves_pro']);
	    $temp=$resultado['limite_pro'];
	    $resultado['limite_pro']="";
	    //echo "Numero: ".$temp;

	    for($i=1;$i<=$temp;$i++){
	      if($i<=12)
	        $resultado['limite_pro'][]=$i;
	    }

	    $this->descripcion=$resultado['descripcion_pro'];

	    //Buscamos las tallas por producto
	    $id_buscar=$resultado['id_pro'];
	    $sql_tallas="SELECT * FROM facilidad, tiene WHERE producto_rel='$id_buscar' AND facilidad_rel=id_fac";
	    $consulta_tallas=mysql_query($sql_tallas) or die(mysql_error());
	    $temp2="";
	    while ($resultado_tallas = mysql_fetch_array($consulta_tallas)){
	      $temp2[]=$resultado_tallas;
	    }

	    $resultado['tallas']=$temp2;
	    $this->listado[] = $resultado;
	  }
	}
}

	
	function listar_producto_nuevo(){
		/* Metodo para listar los usuarios y sus opciones. */
		$sql="SELECT claves_pro, categoria_pro, id_pro, detal_pro, mayor_pro, directorio_image, nombre_image  FROM producto, imagen WHERE galeria_image=id_pro AND tabla_image='Producto' GROUP BY id_pro,id_image ORDER BY id_pro DESC, prioridad_pro ASC LIMIT 0 , 5";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$aux="";
			$this->mensaje="si";
			$resultado['detal_pro']=$this->convertir_moneda($resultado['detal_pro']);
			$resultado['mayor_pro']=$this->convertir_moneda($resultado['mayor_pro']);
			
				$cat=$resultado['categoria_pro'];
				$sql2="SELECT * FROM categoria WHERE id_cat='$cat'";
				$consulta2=mysql_query($sql2) or die(mysql_error());
				$resultado2 = mysql_fetch_array($consulta2);
				$aux=$this->modificar_url($resultado2['claves_cat']);
				$resultado['url']=$aux."_".$this->modificar_url($resultado['claves_pro']);
			
			$this->listado[] = $resultado;
		}
	}
	
	function listar_producto_vendido(){
		/* Metodo para listar los usuarios y sus opciones. */
		$sql="SELECT SUM(cantidad_det) AS TotalVentas, claves_pro, categoria_pro, producto_det, detal_pro, mayor_pro, id_pro, id_pro AS directorio_image FROM producto, detalle_pedido WHERE producto_det=id_pro GROUP BY producto_det ORDER BY SUM(cantidad_det) DESC LIMIT 0 , 5";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$aux="";
			$id_buscar=$resultado['id_pro'];
			$sql2="SELECT directorio_image FROM imagen WHERE galeria_image='$id_buscar'";
			$buscar=mysql_query($sql2)	or die(mysql_error());
			$resultados=mysql_fetch_array($buscar);
			$resultado['directorio_image']=$resultados['directorio_image'];
			$this->mensaje="si";
			$resultado['detal_pro']=$this->convertir_moneda($resultado['detal_pro']);
			$resultado['mayor_pro']=$this->convertir_moneda($resultado['mayor_pro']);
			
			$cat=$resultado['categoria_pro'];
			$sql2="SELECT * FROM categoria WHERE id_cat='$cat'";
			$consulta2=mysql_query($sql2) or die(mysql_error());
			$resultado2 = mysql_fetch_array($consulta2);
			$aux=$this->modificar_url($resultado2['claves_cat']);
			$resultado['url']=$aux."_".$this->modificar_url($resultado['claves_pro']);
				
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
	
	function mostrar_producto(){
		/*Metodo para mostrar un usuario seleccionado */
		//echo "El id: ".$_GET['id']."<br /><br />";
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="SELECT * FROM producto WHERE id_pro='$id'";

			/*
				$sql="SELECT * FROM producto, imagen WHERE id_pro='$id' AND galeria_image = id_pro AND tabla_image = 'producto'";
			*/
			
			//echo $sql."<br /><br />";
			
			$consulta=mysql_query($sql) or die(mysql_error());
			$resultado = mysql_fetch_array($consulta);
			$this->id=$id;
			$this->codigo=$resultado['codigo_pro'];
			$this->nombre=$resultado['nombre_pro'];
			$this->categoria=$resultado['categoria_pro'];
			$this->prioridad=$resultado['prioridad_pro'];
      		$this->color = $resultado['color_pro'];
			$this->telas=$resultado['telas_pro'];
			$this->talla=$resultado['talla_pro'];
			$this->descripcion=$resultado['descripcion_pro'];
			$this->vistas=$resultado['vistas_pro'];
		} 
	}
	
	function mostrar_precio($precio){
	/*Metodo para colocar los puntos al precio */
		$cantidad=strlen($precio);
		$variable_cadena = (string)$precio;

		$nuevo=""; $num=0;
		for($i=$cantidad;$i>0;$i--){
			if($num>=3){
				$num=0;
				$nuevo.=".";
			}
			$nuevo.=$variable_cadena[$i-1];
			$num++;
		}
		$temp="";
		for($i=strlen($nuevo);$i>=0;$i--){
			$temp.=$nuevo[$i];
		}

		return $temp;
	}

function listar_facilidad($id){
		/* Metodo para listar los facilidades y sus opciones. */
		$sql="SELECT id_fac, nombre_fac, id_fac AS id_image, id_fac AS nombre_image, id_fac AS encendido FROM facilidad GROUP BY id_fac ORDER BY id_fac ASC";
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$buscar=$resultado['id_fac'];

			$sql="SELECT facilidad_rel FROM tiene WHERE producto_rel='$id' AND facilidad_rel='$buscar'";
			$facilidad=mysql_query($sql) or die(mysql_error());
			if($busca_fac = mysql_fetch_array($facilidad))
				$resultado['encendido']="on";
			else
				$resultado['encendido']="off";
				
			$this->mensaje="si";
			$this->listado[] = $resultado;
			
		}
	}

function listar_materiales(){
	$id=$_GET['id'];
	$sql="SELECT * FROM facilidad, tiene WHERE producto_rel='$id' AND facilidad_rel=id_fac";
	$verificar=mysql_query($sql) or die(mysql_error());
	while ($resultado = mysql_fetch_array($verificar)) {
		$this->listado[] = $resultado;
	}

}

function insertar_producto($con){
	/*Metodo para editar un usuario seleccionado */	
		$this->accion="Datos del Nuevo Producto";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
			$sql="SELECT nombre_pro FROM producto WHERE nombre_pro='$this->nombre'";
			$verificar=mysql_query($sql) or die(mysql_error());
			if(!$resultado = mysql_fetch_array($verificar)){
				$this->fecha=$this->convertir_fecha($this->fecha);
				$sql="INSERT INTO producto VALUES ('', '$this->codigo', '$this->nombre','$this->prioridad','$this->descripcion')";
				$consulta=mysql_query($sql) or die(mysql_error());
				$id=mysql_insert_id($con);
			
				header("location:/admin/producto/detalle.php?id=$id");
			}else{
				$this->mensaje2="error";
			}
		}
		$sql="SELECT * FROM categoria ORDER BY prioridad_cat ASC";
		$consulta=mysql_query($sql)or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$this->mensaje="si";
			$this->listado[] = $resultado;
	    }
	}
	
	function editar_producto(){
	/*Metodo para editar un usuario seleccionado */		
		$this->accion="Editando Datos del Producto";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$this->asignar_valores();
			$sql="UPDATE producto SET codigo_pro='$this->codigo', nombre_pro='$this->nombre', prioridad_pro='$this->prioridad',descripcion_pro='$this->descripcion' WHERE id_pro='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			//Actualizando facilidades de producto
				//$sql="DELETE FROM tiene WHERE producto_rel='$id'";
		        $consulta=mysql_query($sql) or die(mysql_error());
      
			header("location:/admin/producto/");
		}else{
		  $this->mostrar_producto();
		  $sql="SELECT * FROM categoria ORDER BY prioridad_cat ASC";
		  $consulta=mysql_query($sql) or die(mysql_error());
		  while ($resultado = mysql_fetch_array($consulta)){
				$this->mensaje="si";
				$this->listado[] = $resultado;
		  }
		}
	}
	
	function eliminar_producto(){
	/*Metodo para eliminar un usuario seleccionado */	
		$id=$_GET['id'];
		$sql="DELETE FROM producto WHERE id_pro='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		header("location:/admin/producto/");
	}
	
	function buscar_categorias($id){
	/*Metodo para buscar el nombre de la categoria */	
		$this->asignar_valores();
		$sql="SELECT * FROM subxcat, subcategoria WHERE categoria_rel='$id' AND subcategoria_rel=id_sub ORDER BY prioridad_sub";
		$buscar=mysql_query($sql) or die(mysql_error());
		unset($this->listado2);
		while ($resultado = mysql_fetch_array($buscar)){
			$this->mensaje="si";
			$this->listado2[] = $resultado;
		}
	}
	
	function get_categoria($id){
	/*Metodo para obtener el nombre de una categoria */	
		$sql="SELECT nombre_cat FROM categoria WHERE id_cat='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);

		return $resultado['nombre_cat'];
	}
	
		function get_subcategoria($id){
	/*Metodo para obtener el nombre de una categoria */	
		$sql="SELECT nombre_sub FROM subcategoria WHERE id_sub='$id'";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);

		return $resultado['nombre_sub'];
	}
	
	function crear_codigo($cat,$sub){
	/*Metodo para crear códigos de clasificados */
		$cat=$this->get_categoria($cat);
		$temp=explode(" ",$sub);
		$codigo.=$cat[0];
		$codigo.=$cat[1];
		$codigo.="-";
		$codigo.=$temp[1][0];
		$codigo.=$temp[1][1];
		$codigo=strtoupper($codigo);
		$codigo.=".";
		//$sql="SELECT COUNT(*) AS total FROM clasificado";
		$sql="SELECT MAX(id_pro) AS total FROM producto";
		$count=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_array($count);
		$total=$row['total'];
		$total++;
		if($total<=99 && $total>=10){
			$valor="0";
			$valor.=$total;
		} else if($total<=9){
			$valor="00";
			$valor.=$total;
		}else{
			$valor=$total;
		}
		$codigo.=$valor;
		
		return $codigo;
	}
	
	function editar_estado(){
	/*Metodo para editar un pagos seleccionado */	
		if (isset($_GET['valor']) && $_GET['valor']!="" && isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$valor=$_GET['valor'];
			//echo "Entro: ".$_GET['valor'];
			$sql="UPDATE producto SET aprobado_pro='$valor' WHERE id_pro='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			//if($valor==1)
				//$this->enviar_correos2($id);
			header("location:/admin/producto/");
		}
	}
	
	function convertir_moneda($valor){
	/*Metodo para modificar la moneda del sistema */
		//echo "Entro: ".$valor;
		$sql="SELECT * FROM configuracion";
		$consulta=mysql_query($sql) or die(mysql_error());
		$resultado=mysql_fetch_array($consulta);
		
		if(isset($_SESSION['moneda_temp']) && $_SESSION['moneda_temp']=="dollar")
			$valor=ceil($valor/$resultado['dolar_conf']);
			
		if(isset($_SESSION['moneda_temp']) && $_SESSION['moneda_temp']=="euro")
			$valor=ceil($valor/$resultado['euro_conf']);
		
		if(isset($_SESSION['moneda_temp']) && $_SESSION['moneda_temp']=="COP")
			$valor=ceil($valor*$resultado['cop_conf']);
			
		if(isset($_SESSION['moneda_temp']) && $_SESSION['moneda_temp']=="MXN")
			$valor=ceil($valor/$resultado['mxn_conf']);
				
		return $valor;
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
	
	function visita_producto(){
		/*Metodo para sumar una visita a un anuncio específico */
		if (isset($_GET['id']) && $_GET['id']!=""){
			$id=$_GET['id'];
			$sql="UPDATE producto SET vistas_pro=vistas_pro+1 WHERE id_pro='$id'";
			$sumatoria=mysql_query($sql) or die(mysql_error());
		}
	}
	function total_productos(){
		/*Metodo para sumar todos los productos*/
		$sql="SELECT COUNT(id_pro) AS total FROM producto";
		$sumatoria=mysql_query($sql) or die(mysql_error());
		$resultado = mysql_fetch_array($sumatoria);

		return $resultado['total'];
	}
	
	function buscar_recomendado($detal, $mayor, $nombre, $categoria, $id){
		/*Metodo para buscar autos recomendados */
		$precio_inicial=$detal-20;
		$precio_final=$detal+20;
		
		$palabras=explode(" ",$nombre);
		$sql="SELECT *, id_pro AS directorio_image, id_pro AS nombre_image FROM producto, categoria, imagen WHERE ";
		
		$sql.= "(";
			foreach($palabras as $valor => $indice){
				if($palabras[$valor]!="de" && $palabras[$valor]!="la" && $palabras[$valor]!="con" && $palabras[$valor]!="del")
					$sql.="nombre_pro LIKE '%' '".$palabras[$valor]."' '%' OR ";
					$sql.="descripcion_pro LIKE '%' '".$palabras[$valor]."' '%' OR ";
			}
			$sql.="id_pro LIKE '%' '".$palabras[$valor]."' '%') AND categoria_pro!='$categoria' AND id_pro!='$id'AND categoria_pro=id_cat AND galeria_image=id_cat AND tabla_image='categoria' GROUP BY id_pro ORDER BY RAND(), prioridad_pro ASC LIMIT 0,4";
			//echo $sql."<br /><br />";
			//exit();
		$consulta=mysql_query($sql) or die(mysql_error());
		while ($resultado = mysql_fetch_array($consulta)){
			$buscar=$resultado['id_pro'];
			$sql="SELECT directorio_image, nombre_image FROM imagen WHERE galeria_image='$buscar' AND tabla_image='producto' GROUP BY id_image ORDER BY id_image ";
			$imagenes=mysql_query($sql) or die(mysql_error());
			$respuesta = mysql_fetch_array($imagenes);
			$resultado['directorio_image']=$respuesta['directorio_image'];
			$resultado['nombre_image']=$respuesta['nombre_image'];
			$resultado['detal_pro']=$this->convertir_moneda($resultado['detal_pro']);
			$resultado['mayor_pro']=$this->convertir_moneda($resultado['mayor_pro']);
			$resultado['limite_pro']=array(1,2,3,4,5,6,7,8,9,10,11);
			$this->mensaje="si";
			//$resultado['precio_pro']=$this->mostrar_precio($resultado['precio_pro']);
			
			$this->listado[] = $resultado;
		 }
		 //print_r($this->listado);
	}

	function actualizar_vistas($id){
	/*Metodo para editar un pagos seleccionado */	
			//echo "Entro: ".$_GET['valor'];
			$sql="UPDATE producto SET vistas_pro=vistas_pro + 1 WHERE id_pro='$id'";
			$consulta=mysql_query($sql) or die(mysql_error());
			//if($valor==1)
				//$this->enviar_correos2($id);
		
	}

}

	
?>