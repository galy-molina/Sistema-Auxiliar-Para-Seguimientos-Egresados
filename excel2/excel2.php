<?php
  require_once('class/Worksheet.php');
  require_once('class/Workbook.php');

	$cve=$_GET['cve'];
  // koneksi ke mysql
  mysql_connect('localhost', 'root', '');
  mysql_select_db('registro1');

  // function untuk membuat header file excel
  function HeaderingExcel($filename) {
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=$filename" );
      header("Expires: 0");
      header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
      header("Pragma: public");
      }
	  
	  if ($cve==1){
	  $tipo="Estudia";
	  $tipos2=" where resultado1.resp1 like 'Estudia'";
	  }
	  
	  else if ($cve==2){
	  $tipo="Trabaja";
	  $tipos2=" where resultado1.resp1 like 'Trabaja'";
	  }
	  
	  else if ($cve==3){
	  $tipo="Estudia y Trabaja";
	  $tipos2=" where resultado1.resp1 like 'Estudia y Trabaja'";
	  }
	  
	  else if ($cve==4){
	  $tipo="No estudia, ni trabaja";
	  $tipos2=" where resultado1.resp1 like 'No estudia, ni trabaja'";
	  }
	  

  // membuat header file excel dan nama filenya
  

  $file='Egresados_'.$tipo.'_'.date('d-m-Y').'_'.date("h:i:sa").'_.xls';
  
  HeaderingExcel($file);

  // membuat workbook baru
  $workbook = new Workbook("");
  // membuat worksheet ke-1 (data laki-laki)
  $worksheet1 =& $workbook->add_worksheet('Total Egresados');

  // setting format header tabel data
  $format =& $workbook->add_format();
  $format->set_align('vcenter');
  $format->set_align('center');
  $format->set_color('white');
  $format->set_bold();
  $format->set_italic();
  $format->set_pattern();
  $format->set_fg_color('gray');

  // membuat header tabel dengan format
  $worksheet1->set_row(0, 15);
  $worksheet1->set_column(0, 0, 30);
  $worksheet1->write_string(0, 0, "Nombre", $format);
  $worksheet1->set_column(0, 1, 15);
  $worksheet1->write_string(0, 1, "Edad", $format);
  $worksheet1->set_column(0, 2, 15);
  $worksheet1->write_string(0, 2, "Domicilio", $format);
  $worksheet1->set_column(0, 3, 15);
  $worksheet1->write_string(0, 3, "Municipio", $format);
  $worksheet1->set_column(0, 4, 15);
  $worksheet1->write_string(0, 4, "Estado", $format);
  $worksheet1->set_column(0, 5, 15);
  $worksheet1->write_string(0, 5, "Estado Civil", $format);
  $worksheet1->set_column(0, 6, 15);
  $worksheet1->write_string(0, 6, "Telefono", $format);
  $worksheet1->set_column(0, 7, 15);
  $worksheet1->write_string(0, 7, "Correo", $format);
  


   $query = "SELECT
concat(formulario1.nombre,' ',formulario1.apellidos) as nombre,
formulario1.edad,
concat(formulario1.calle,' No. Ext. ',formulario1.next,'No. Int. ',formulario1.nint,'Col. ',formulario1.colonia,' CP. ',formulario1.cp) as domi,
formulario1.municipio as mun,
formulario1.efederativa as estado,
formulario1.civil as civil,
formulario1.telefono as telefono,
formulario1.correo as correo,
resultado1.resp1
FROM
resultado1
INNER JOIN formulario1 ON resultado1.mat = formulario1.ncontrol
".$tipos2;
  $hasil = mysql_query($query);
  $baris = 1;
  while ($data = mysql_fetch_array($hasil))
  {
        $worksheet1->write_string($baris, 0, $data['nombre']);
        $worksheet1->write_number($baris, 1, $data['edad']);	
		$worksheet1->write_string($baris, 2, $data['domi']);
        $worksheet1->write_string($baris, 3, $data['mun']);
        $worksheet1->write_string($baris, 4, $data['estado']);
        $worksheet1->write_string($baris, 5, $data['civil']);	
		$worksheet1->write_string($baris, 6, $data['telefono']);
        $worksheet1->write_string($baris, 7, $data['correo']);					
        $baris++;
  }



  $workbook->close();
?>