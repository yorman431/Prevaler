<?php
require_once('config/Classes/PHPExcel.php');
include_once('config/conexion.inc.php');

class MedicoExcel extends PHPExcel {
  
  var $file;
  var $excelReader;
  var $excelObj;
  var $excelHoja;
  var $lastRow;
  var $lastColumn;
  var $cantidadOk;
  var $cantidadNOk;
  var $accion;

  var $mensaje;
  var $nombre;
  var $especialidad;
  var $descripcion;
  var $sede;
  var $limite;

  var $connection;
  
  public function __construct(){
    $this->connection = new Connection();
  }
  
  function checkFile(){
    /* Desabilitado por manejo de archivos de forma temporal

    $directorio = 'archivos/';
    $directorioFinal = $directorio.basename($_FILES['excel']['name']);

    */
    $this->cantidadOk = 0;
    $this->cantidadNOk = 0;
    
    $extension = pathinfo(basename($_FILES['excel']['name']), PATHINFO_EXTENSION);
    $uploadOk = 1;

    if ($extension != 'xls' && $extension != 'xlsx'){
      $uploadOk = 0;
      $this->mensaje = "Error al cargar el archivo, archivo no válido";
    }else{
      if ($_FILES['excel']['tmp_name']){
        $this->asignarArchivo($_FILES['excel']['tmp_name']);
        $this->recorrerExcel();
      }else{
        $this->mensaje = "Error. No se pudo cargar el archivo";
      }
    }
  }

  function asignarArchivo($archivo){
    $this->file = $archivo; //asignamos a una variable la ubicacion del archivo excel
    $this->excelReader = PHPExcel_IOFactory::createReaderForFile($this->file); //utilizamos esta funcion para leer el archivo excel
    $this->excelObj = $this->excelReader->load($this->file); //transformamos el archivo excel en un objeto para facilitar su uso
    $this->excelHoja = $this->excelObj->getSheet(0); //getSheet nos permite especificar cual hoja del excel queremos cargar
    $this->lastRow = $this->excelHoja->getHighestRow(); //obtenemos la cantidad max de filas del archivo excel
    $this->lastColumn = $this->excelHoja->getHighestColumn(); //obtenemos la cantidad max de columnas del archivo excel
  }

  function recorrerExcel(){
    $this->sede = $_GET['sede'];

    for($i = 2; $i <= $this->lastRow; $i++){
      $guia = strtolower($this->excelHoja->getCell('A'.$i)->getValue());
      
      if ($guia != '')
        $this->cargarProducto($i);
        
      $this->nombre = '';
      $this->mensaje= '';
      $sql = '';
      $sql2 = '';
    }
    $this->mensaje = "Medicos Agregados: ".$this->cantidadOk." Medicos Actualizados: ".$this->cantidadNOk;
    echo ($this->mensaje);
  }

  function cargarProducto($column){
    $this->nombre = ucwords(strtolower($this->excelHoja->getCell('B'.$column)->getValue()));
    $this->especialidad = ucwords(strtolower($this->excelHoja->getCell('E'.$column)->getValue()));
    $this->descripcion = '<p>Consultas '.$this->excelHoja->getCell('F'.$column)->getValue().' '.$this->excelHoja->getCell('G'.$column)->getValue().'</p>';   

    switch ($this->especialidad) {

      case 'Cardiologo':
        $this->especialidad = 1;
        break;

      case 'Oftalmologo':
        $this->especialidad = 2;
        break;
      
      case 'Ginecologia':
        $this->especialidad = 3;
        break;

      case 'Urologia':
        $this->especialidad = 4;
        break;

      default:
        if ($this->especialidad != ''){
          if ($this->comprobarFacilidad()) {
            $this->especialidad = $this->facilidad();
          }else{
            $this->especialidad = $this->agregarFacilidad();
          }
        }
        break;
    }

    if ($this->nombre != '') {
      if ($this->comprobarMedico()){
        $this->editarMedico();
        $this->cantidadNOk++;
      }else{
        $this->agregarMedico();
        $this->cantidadOk++;
      }
    }
  }

  function facilidad() {
    $sql = 'SELECT id_fac FROM facilidad WHERE nombre_fac = ?';

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $this->especialidad);

      $query->execute();

      $this->connection->Close();

      $facilidad = $query->fetch();

    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    return $facilidad['id_fac'];
  }

  function agregarFacilidad(){
    $sql = "INSERT INTO facilidad (nombre_fac) VALUE (?)";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $this->especialidad);

      $query->execute();

      $id = $this->connection->lastInsertId();

      $this->connection->Close();

    }catch (PDOException $e){
      echo('Error code: '.$e->getMessage());
    }

    echo ('Valor de Id en agregarFacilidad: '.$id.'<br>');
    return $id;
  }

  function comprobarFacilidad() {
    $sql = 'SELECT * FROM facilidad WHERE nombre_fac = ?';

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $this->especialidad);

      $query->execute();

      $this->connection->Close();
      
    }catch(PDOException $e){
      echo 'Error code: '.$e->getMessage();
    }

    if ($query->fetchColumn() > 0){
      return true;
    }else{
      return false;
    }
  }

  function agregarMedico(){
    $sql = "INSERT INTO medico (nombre_med, especialidad_med, descripcion_med, sede_med)
            VALUES (?, ?, ?, ?)";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $this->nombre);
      $query->bindParam(2, $this->especialidad);
      $query->bindParam(3, $this->descripcion);
      $query->bindParam(4, $this->sede);

      $query->execute();

      $id = $this->connection->lastInsertId();

      $this->connection->Close();
    }catch (PDOException $e){
      echo ('Error code: '.$e->getMessage());
    }
    
    return $id;
  }

  function editarMedico(){
    $sql = "UPDATE medico SET especialidad_med = ?, descripcion_med = ? WHERE nombre_med = ?";

    try{
      $query = $this->connection->prepare($sql);

      $query->bindParam(1, $this->especialidad);
      $query->bindParam(2, $this->descripcion);
      $query->bindParam(3, $this->nombre);

      $query->execute();

      $this->connection->Close();
    }catch (PDOException $e){
      echo ('Error code: '.$e->getMessage());
    }
  }

  function comprobarMedico() {
      $sql = "SELECT COUNT(*) FROM medico WHERE nombre_med = ? AND sede = ?";

      try{
        $query = $this->connection->prepare($sql);
  
        $query->bindParam(1, $this->nombre);
        $query->bindParam(2, $this->sede);
  
        $query->execute();
  
        $this->connection->Close();

      }catch (PDOException $e){
        echo 'Error code: '.$e->getMessage();
      }

      if ($query->fetchColumn() > 0){
        return true;
      }else{
        return false;
      }
  }

  function mostrarExcel($lastId){
    echo("Id: ".$lastId."  Nombre: ".$this->nombre."  Especialidad:".$this->especialidad."<br>");
  }
}