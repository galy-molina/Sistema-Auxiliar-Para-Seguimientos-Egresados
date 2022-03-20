<?php
require('conexion.php');

					
					
function totales($serber,$user1,$pass1,$bd,$a){
               $connection = mysql_connect($serber,$user1,$pass1) or die ("Unable to connect!");
			   $query = "$a";
			   $result = mysql_db_query($bd, $query, $connection) or die ("Error in query: $query. " . mysql_error());
			   list($a) = mysql_fetch_row($result);
			   $data = mysql_num_rows($result);
			   mysql_free_result($result); 
			   
			   return $a;
			   }
			   
$a1=totales($serber,$user1,$pass1,$bd,'
SELECT
count(resultado1.resp1) as total
FROM
resultado1
where
resultado1.resp1 like "Estudia"
group by resultado1.resp1');			   

$a2=totales($serber,$user1,$pass1,$bd,'SELECT
count(resultado1.resp1) as total
FROM
resultado1
where
resultado1.resp1 like "Trabaja" 
group by resultado1.resp1');

$a3=totales($serber,$user1,$pass1,$bd,'SELECT
count(resultado1.resp1) as total
FROM
resultado1
where
resultado1.resp1 like "Estudia y Trabaja"
group by resultado1.resp1');			

$a4=totales($serber,$user1,$pass1,$bd,'SELECT
count(resultado1.resp1) as total
FROM
resultado1
where
resultado1.resp1 like "No estudia, ni trabaja"  

group by resultado1.resp1');	

function ceros($a){
	if ($a==""){
	$a=0;
	}
	
	return $a;
}

$a1=ceros($a1);
$a2=ceros($a2);
$a3=ceros($a3);
$a4=ceros($a4);



//echo "---- $a1 $a2 $a3 $a4 ---";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registro de Egresados - DGTI</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/loader.js"></script>
    <script>
	function excel(a){
	alert(" --- "+a);
	window.open("excel2/excel2.php?cve="+a);
	}
	</script>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<h3>&nbsp;</h3>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="index.php"><img src="images/dgeti.png" width="20%" alt="DGTI"/></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="index.php">Salir</a>
						</li>
						
						
					
					</ul>
				</div>
				
			</nav>
			
			<center><h2>Formulario de Reportes </h2></center>
			<form  method="POST" action="imprimepdf.php">
			
			
			
			 <center> Reporte pdf <br> 
						

<input class="form-btn btn-primary" name="submit" type="submit" value="Generar reporte" /></center>
				
				
			</form>
			<table class="table">

				<tbody align="center">
					<tr><td><button type="button" class="btn btn-primary" onClick="excel(1)">Estudia</button></td><td><button type="button" class="btn btn-primary" onClick="excel(2)">Trabaja</button></td><td><button type="button" class="btn btn-primary" onClick="excel(3)">Estudia y Trabaja</button></td><td><button type="button" class="btn btn-primary" onClick="excel(4)">No Estudia, No Trabaja</button></td></tr>
			<p>&nbsp;</p>
			</tbody>
			</table>
			
			<!-- Gráfica Pastel -->

<div class="row" align="center">
						<div class="col-md-12">
							<div id="piechart_3d" style="width: 700px; height: 400px;"></div>			
						</div>

</div>
			<hr>
			
			<p>
			<center>
			Centro de bachillerato tecnológico industrial y de servicios No. 61
			</center>
			</p>
	  </div>
		<div class="col-md-1">
		</div>
	</div>
</div>

<script type="text/javascript" src="js/loader.js"></script>
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Egresados Anual', 'Total'],
          ['Estudia',<?php echo "$a1"; ?>],
          ['Trabaja',<?php echo "$a2"; ?>],
          ['Estudia y Trabaja',<?php echo "$a3"; ?>],
          ['No estudia, ni trabaja',<?php echo "$a4"; ?>]
        ]);

        var options = {
          title: 'Egresados 2017 DGTI',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

	
	
  </body>
</html>