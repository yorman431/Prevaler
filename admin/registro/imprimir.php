<?php 
/* header para Smarty */
define('CONFIG_DIR', $_SERVER['DOCUMENT_ROOT'].'/config/');
require_once(CONFIG_DIR . 'setupadmin.php');
/*  Fin header para Smarty */

// Lista Verificacion
include_once(CONFIG_DIR . 'conexion.inc.php');
include_once(CONFIG_DIR . 'class.ezpdf.php');
include_once(CONFIG_DIR . 'class.registro.php');
include_once(CONFIG_DIR . 'class.configuracion.php');

session_start();

function convertir_fecha($CampoFecha){
	if(!empty($CampoFecha)){
		if(strpos($CampoFecha,"-")){
			$conv_fecha = split("-",$CampoFecha); $conv_fecha = $conv_fecha[2]."/".$conv_fecha[1]."/".$conv_fecha[0];
		}else{
			$conv_fecha = split("/",$CampoFecha); $conv_fecha = $conv_fecha[2]."-".$conv_fecha[1]."-".$conv_fecha[0];
		}
		return $conv_fecha;
	}
}
	
$pdf =&new Cezpdf('letter','landscape');
$pdf->selectFont(FONT_DIR . 'Helvetica.afm');
$pdf->ezStartPageNumbers(740,30,10,'',utf8_decode('pág: {PAGENUM} de {TOTALPAGENUM}'),1);
$pdf->ezSetCmMargins(1,1,1,1); 

$datacreator = array (
                    'Title'=>'Reporte de Registrados',
                    'Author'=>utf8_decode('Alejandro Díaz & Adriana Neto'),
                    'Subject'=>'Reporte de Registrados en '.$nombre_empresa,
                    'Creator'=>utf8_decode('Alejandro Díaz'),
                    'Producer'=>'Adriana Neto'
                    );
$pdf->addInfo($datacreator);

$titulo =utf8_decode("Listado de Usuarios Registrados \n en ".$nombre_empresa." website");

if(isset($_SESSION['buscar']) && $_SESSION['buscar']!=""){
	$buscar=$_SESSION['buscar'];
	$sql="SELECT id_reg AS numero, id_reg, cedula_reg, tipo_reg, nombre_reg, apellido_reg, celular_reg, estado_reg, correo_reg FROM registro WHERE
			(cedula_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			nombre_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			apellido_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			mitwitter_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			nacimiento_reg LIKE '%' '".$_SESSION['buscar']."' '%' OR 
			correo_reg LIKE '%' '".$_SESSION['buscar']."' '%') GROUP BY id_part ORDER BY id_part, tipo_presenta_part ASC";
}else{
	$sql="SELECT id_reg AS numero, id_reg, cedula_reg, tipo_reg, nombre_reg, apellido_reg, celular_reg, estado_reg, correo_reg FROM registro GROUP BY id_reg ORDER BY id_reg, apellido_reg , nombre_reg ASC";
}
$consulta2=mysql_query($sql) or die(mysql_error());

 $ixx = 0;
 $cont=1;
 while($fila = mysql_fetch_assoc($consulta2)) {
	$fila['numero']=$cont++;
	$fila['cedula_reg']=$fila['tipo_reg'].$fila['cedula_reg'];
	$fila['nombre_reg']=utf8_decode($fila['nombre_reg']);
	$fila['apellido_reg']=utf8_decode($fila['apellido_reg']);
	$fila['estado_reg']=utf8_decode($fila['estado_reg']);
    $data2[] = array_merge($fila, array());
 }
      $titles = array('numero'=>utf8_decode('<b>Nº</b>'),
	 				  'cedula_reg'=>utf8_decode('<b>Cédula</b>'),
					  'nombre_reg'=>'<b>Nombre</b>',
					  'apellido_reg'=>'<b>Apellido</b>',
					  'celular_reg'=>'<b>Celular</b>',
					  'estado_reg'=>'<b>Estado</b>',
					  'correo_reg'=>'<b>Correo</b>');
					  
					  
      $options = array('shadeCol'=>array(0.9,0.9,0.9),
					   'showHeadings'=> 1,
					   'shade'=> 1,
					   'fontSize'=> 10,
					   'showLines'=>2,
                       'xOrientation'=>'center',
                       'width'=>700);


//Generando los pdf..

$pdf->ezText("$titulo", 14, array('justification' =>'center'));
$pdf->addJpegFromFile(IMAGES_DIR . "logon.jpg", 40, 520, 200, 60);
date_default_timezone_set('America/Caracas');
$pdf->addText(580,530,10,"<b>Fecha: </b>".date("d/m/Y"),0,0);
$pdf->addText(580,550,10,"<b>Hora:</b> ".date("H:i:s"),0,0);
$pdf->addText(580,570,10,"<b>Usuario:</b> ".utf8_decode($_SESSION['nombre_temp'])." ".utf8_decode($_SESSION['apellido_temp']),0,0);
$pdf->ezText("\n", 10);
$pdf->ezTable($data2, $titles, 'Registros de Usuarios', $options);
$pdf->ezText("\n", 10);
$pdf->ezText("\n", 10);
$pdf->addText(40,30,10,utf8_decode("<b>Propiedad de ".$nombre_empresa." | © ".date("Y")." Todos los Derechos Reservados.</b>"),0,0);
//ob_end_clean();
$pdf->ezStream();

?>