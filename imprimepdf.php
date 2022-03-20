<?php   
      require_once('class.ezpdf.php');
         $pdf =& new Cezpdf('a4');
         $pdf->selectFont('../fonts/courier.afm');
         $pdf->ezSetCmMargins(1,1,1.5,1.5);
		 $con = mysql_connect("localhost","root","");
if (!$con)
{
  die('No puede conectarse ' . mysql_error());
  };
  
	     mysql_select_db("registro1", $con);
	
      
        $rs3=mysql_query("select distinct mat,resp1,resp2,resp3,resp4 from  resultado1 order by mat");
       
      $totEmp = mysql_num_rows($rs3);
      $ixx = 0;
        while($datatmp = mysql_fetch_assoc($rs3)) {
           $ixx = $ixx+1;
           $data[] = array_merge($datatmp, array('num'=>$ixx));
       }
	   header('Content-Type: text/html; charset=ISO-8859-1'); 
       $titles = array(
						'mat'=>'<b>Matricula</b>',
                        'resp1'=>'<b>Actividad que realizas actualmente</b>',
                        'resp2'=>'<b>Actualmente estudias en nivel superior</b>',
                        'resp3'=>'<b>causas por las que no estudias</b>',
                        'resp4'=>'<b>Institución donde cursa nivel superior</b>'
 
                  );
        $options = array(
                        'shadeCol'=>array(0.9,0.9,0.9),
                        'xOrientation'=>'center',
                       'width'=>500
  
                  );
$txttit = "<b>Reporte de seguimiento de egresados</b>\n";
$txttit.= "C.B.T.i.s. No.61 \n";
 
$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream()
				  ?>