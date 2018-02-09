<?php
require_once('/config/Classes/PHPExcel.php');

class EXCEL extends PHPExcel{
  
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
  
  public function __construct(){
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
      
      $this->cargarProducto($i);
        
      $this->nombre = '';
      $this->mensaje= '';
      $sql = '';
      $sql2 = '';
    }
    $this->mensaje = "Productos Actualizados: ".$this->cantidadOk." Productos NO Actualizados: ".$this->cantidadNOk;
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
        $this->especialidad = $this->agregarFacilidad();
        break;
    }

    $sql = "SELECT * FROM medico WHERE nombre_med = '$this->nombre' AND sede = '$this->sede'";
    $consulta = mysql_query($sql) or die (mysql_error());
    $filas = mysql_num_rows($consulta);

    if ($filas == 0){
      $this->agregarMedico();
      $this->cantidadOk++;
    }else{
      $this->cantidadNOk++;
    }
  }

  function agregarMedico(){
    $sql2 = "INSERT INTO medico (nombre_med, especialidad_med, descripcion_med, sede_med)
            VALUES ('$this->nombre', '$this->especialidad', '$this->descripcion', '$this->sede')";
    $consulta2 = mysql_query($sql2) or die(mysql_error());

    $this->mostrarExcel(mysql_insert_id());
  }

  function agregarFacilidad(){
    $sql = "INSERT INTO facilidad (nombre_fac) VALUES ('$this->especialidad')";

    $consulta = mysql_query($sql) or die(mysql_error());

    return mysql_insert_id();
  }

  function mostrarExcel($lastId){
    echo("Id: ".$lastId."  Nombre: ".$this->nombre."  Especialidad:".$this->especialidad."<br>");
  }
}