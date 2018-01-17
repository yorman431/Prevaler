<?php
include_once('conexion.inc.php');
class Banner{
  var $connection;
  var $buscar;
	var $etiqueta;
	var $url;
	var $tipo;
	var $vinculo;
	var $ubicacion;
  var $prioridad;
	var $mensaje;
	var $accion;
	var $listado;
	var $id;
	var $fotos;
	function __construct(){
	  $this->connection = new Connection;
	}
	function asignar_valores(){
		$this->etiqueta=$_POST['etiqueta'];
		$this->vinculo=$_POST['vinculo'];
		$this->ubicacion=$_POST['ubicacion'];
    $this->prioridad = $_POST['prioridad'];
	}
	function listar_banner(){
		if(isset($_POST['buscar']) && $_POST['buscar']!=""){
      $_SESSION['buscar']=$_POST['buscar'];
			$this->buscar=$_SESSION['buscar'];
      $buscar = '%'.$_POST['buscar'].'%';
			$sql="SELECT * FROM banner 
						WHERE(etiqueta_ban LIKE ? OR
									url_ban LIKE ? OR
									vinculo_ban LIKE ?)";

      try{
        $query = $this->connection->prepare($sql);
        $query->bindParam(1, $buscar);
        $query->bindParam(2, $buscar);
        $query->bindParam(3, $buscar);
        $query->bindParam(4, $buscar);
        $query->execute();
        $this->connection->Close();
        if ($this->listado = $query->fetchAll()) {
          $this->mensaje = 'si';
        }
      }catch(PDOException $e){
        echo "Error Code: ".$e->getMessage();
      }
		}else{
			$sql="SELECT * FROM banner GROUP BY id_ban DESC";
      try{
        $query = $this->connection->prepare($sql);
        $query->execute();
        if ($this->listado = $query->fetchAll()) {
          $this->mensaje = 'si';
        }
      }catch(PDOException $e){
        echo "Error Code: ".$e->getMessage();
      }
		}
	}
	function listar_banner_publica(){
	  $sql="SELECT * FROM banner ORDER BY id_ban ASC";
    try{
      $query = $this->connection->prepare($sql);
      $query->execute();
      $this->connection->Close();
      $this->listado = $query->fetchAll();
    }catch (PDOException $e){
      echo ('Error Code: '. $e->getMessage());
      exit();
    }
	}

	function listar_banner_ubicacion($ubicacion){
    /* Metodo para listar las galerías y sus opciones. */
    $sql="SELECT * FROM banner WHERE ubicacion_ban = ? ORDER BY id_ban ASC";

		try{
			$query = $this->connection->prepare($sql);
			$query->bindParam(1, $ubicacion);

			$query->execute();

			$this->connection->Close();

			$this->listado = $query->fetchAll();
		}catch(PDOexception $e){
			echo 'Error code: '.$e->getMessage();
		}
	}
	
	function mostrar_banner(){
		$this->accion="Banner Details";
		if (isset($_GET['id']) && $_GET['id']!=""){
			$sql='SELECT * FROM banner WHERE id_ban = ?';
			
			try{
				$query = $this->connection->prepare($sql);
				$query->bindParam(1, $_GET['id']);
				$query->execute();
				
				$this->connection->Close();
				
				$resultado = $query->fetch();
        $this->id = $_GET['id'];
        $this->etiqueta=$resultado['etiqueta_ban'];
        $this->url=$resultado['url_ban'];
				$this->tipo=$resultado['tipo_ban'];
				$this->ubicacion = $resultado['ubicacion_ban'];
				$this->vinculo=$resultado['vinculo_ban'];
				$this->ubicacion = $resultado['ubicacion_ban'];
        
			}catch (PDOException $e){
				echo ('Error Code: '.$e->getMessage());
			}
		}
	}
	function insertar_banner(){
		$this->accion= "New Banner Data";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar"){
			$this->asignar_valores();
				if (is_uploaded_file($_FILES['documento']['tmp_name'])) {
					if ($_FILES['documento']['type'] == "image/jpeg" || $_FILES['documento']['type'] == "image/pjpeg"){
						if ($_FILES['documento']['size']>=512000){
							$this->mensaje=1;
              exit();
						}else{
              header("location:/admin/banner/");
							if($_FILES['documento']['type'] == "image/jpeg")
								$archivo = time().".jpg";
							else if($_FILES['documento']['type'] == "image/pjpeg")
								$archivo = time().".jpg";
							$tipo=$_FILES['documento']['type'];
							
							if(isset($archivo))
								move_uploaded_file($_FILES['documento']['tmp_name'], "../../imagenes/banner/".$archivo);
              $sql = 'INSERT INTO banner (etiqueta_ban, url_ban, ubicacion_ban, tipo_ban, vinculo_ban)
                      VALUES(?, ?, ?, ?, ?)';
              try {
                $query = $this->connection->prepare($sql);
                $query->bindParam(1, $this->etiqueta);
                $query->bindParam(2, $archivo);
								$query->bindParam(3, $this->ubicacion);
								$query->bindParam(4, $tipo);
								$query->bindParam(5, $this->vinculo);
                $query->execute();
                $this->connection->Close();
              } catch (PDOException $e) {
                echo ("Error Code: ".$e->getMessage());
              }
					 	}
					}else{
						$this->mensaje=2;
					}
				} else {
					$this->mensaje=3;
				}
		}
	}
	function editar_banner(){
		$this->accion="Editing Banner";
		if (isset($_POST['envio']) && $_POST['envio']=="Guardar" && isset($_GET['id']) && $_GET['id']!=""){
			$this->asignar_valores();
				if (is_uploaded_file($_FILES['documento']['tmp_name'])) {
					if ($_FILES['documento']['type'] == "image/jpeg" || $_FILES['documento']['type'] == "image/pjpeg"){
						if ($_FILES['documento']['size']>=512000){
							$this->mensaje=1;
						}else{
              header("location:/admin/banner/");
              
              if($_FILES['documento']['type'] == "image/jpeg")
								$archivo = time().".jpg";
							else if($_FILES['documento']['type'] == "image/pjpeg")
								$archivo = time().".jpg";
							$tipo=$_FILES['documento']['type'];
							
							if (isset($archivo))
								move_uploaded_file($_FILES['documento']['tmp_name'], "../../imagenes/banner/".$archivo);
							
							$sql="SELECT url_ban FROM banner WHERE id_ban = ?";
							
							try{
								$query = $this->connection->prepare($sql);
								
								$query->bindParam(1, $_GET['id']);
								$query->execute();
								
								$this->connection->Close();
								
								$resultado = $query->fetch();
								
								$borrar = '../../imagenes/banner/'.$resultado['url_ban'];
								unlink($borrar);
							}catch (PDOException $e){
								echo ('Error Code: '.$e->getMessage());
							}
       
							$sql = 'UPDATE banner SET
												etiqueta_ban = ?,
												url_ban = ?,
												ubicacion_ban = ?,
												tipo_ban = ?,
												vinculo_ban = ? 
											WHERE id_ban = ?';
							
							try{
                unset($query);
                
                $query = $this->connection->prepare($sql);
								
								$query->bindParam(1, $this->etiqueta);
								$query->bindParam(2, $archivo);
								$query->bindParam(3, $this->ubicacion);
								$query->bindParam(4, $tipo);
								$query->bindParam(5, $this->vinculo);
								$query->bindParam(6, $_GET['id']);
								$query->execute();
								
								$this->connection->Close();
							}catch (PDOException $e){
								echo ('Error Code: '.$e->getMessage());
							}
						}
					}else{
						$this->mensaje=2;
					}
				}
		}else{
		  $this->mostrar_banner();
		}
	}
	function eliminar_banner(){
    header('location: /admin/banner/');
    $sql="SELECT url_ban FROM banner WHERE id_ban = ?";
		
		try{
			$query = $this->connection->prepare($sql);
			$query->bindParam(1, $_GET['id']);
			$query->execute();
			
			$this->connection->Close();
			
			$resultado = $query->fetch();
			
			$archivo = '../../imagenes/banner/'.$resultado['url_ban'];
			
		}catch (PDOException $e){
			echo ('Error Code: '.$e->getMessage());
		}
		
		$sql = 'DELETE FROM banner WHERE id_ban = ?';
		
		try{
			unset($query);
			$query = $this->connection->prepare($sql);
			
			$query->bindParam(1, $_GET['id']);
			$query->execute();
			
			$this->connection->Close();
			
			if(isset($archivo))
				unlink($archivo);
			
		}catch (PDOException $e){
			echo ('Error Code: '.$e->getMessage());
		}
	}
}