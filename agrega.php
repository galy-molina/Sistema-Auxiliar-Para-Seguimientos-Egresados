<?php 
	header("Content-Type: text/html;charset=utf-8");
	require('conexion.php');
	mysql_set_charset('utf8');
	
	$mat=$_POST['ncontrol'];
	$pr2=$_POST['p2'];
	$pr3=$_POST['p3'];
	$pr4=$_POST['p4a'];
	$pr5=$_POST['p5'];
	$pr6=$_POST['p6'];
	$pr7=$_POST['p7'];
	$pr8=$_POST['p8'];
	$pr9=$_POST['p9'];
	$pr10=$_POST['p10'];
	$pr11=$_POST['p11'];
	$pr12=$_POST['p12'];
	$pr13=$_POST['p13'];
	$pr14=$_POST['p14'];
	$pr15=$_POST['p15'];
	$pr16=$_POST['p16'];
	$pr17=$_POST['p17'];
	$pr18=$_POST['p18'];
	$pr19=$_POST['p19'];
	$pr20=$_POST['p20'];
	$pr21=$_POST['p21'];
	$pr22=$_POST['p22'];
	$pr23=$_POST['p23'];
	$pr24=$_POST['p24'];
	$pr25=$_POST['p25'];
	$pr26=$_POST['p26'];
	$pr27=$_POST['p27'];
	$pr28=$_POST['p28'];
	$pr29=$_POST['p29'];	
	
	
	
	$consulta1="insert into resultado1
	set mat='$mat',
	tipo=1,
	resp1='$pr2',
	resp2='$pr3',
	resp3='$pr4',
	resp4='$pr5',
	resp5='$pr6',
	resp6='$pr7',
	resp7='$pr8',
	resp8='$pr9',
	resp9='$pr10',
	resp10='$pr11',
	resp11='$pr12',
	resp12='$pr13',
	resp13='$pr14',
	resp14='$pr15',
	resp15='$pr16',
	resp16='$pr17',
	resp17='$pr18',
	resp18='$pr19',
	resp19='$pr20',
	resp20='$pr21',
	resp21='$pr22',
	resp22='$pr23',
	resp23='$pr24',
	resp24='$pr25',
	resp25='$pr26',
	resp26='$pr27',
	resp27='$pr28',
	resp28='$pr29'";
	
	$resultado=$mysqli->query($consulta1) or die (mysql_error());
	
	$consulta1="select count(resp6) as total from resultado1 where tipo=1 and resp6 like 'Si%' group by mat";
	
	$resultado=$mysqli->query($consulta1) or die (mysql_error());
	$actor = $resultado->fetch_assoc();
	$total1= $actor['total'];
	//echo "<br> $total1";
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
					</button><a class="navbar-brand" href="index.php"><img src="images/dgeti.png" width="20%" alt="DGTI"/></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="index.php">Inicio</a>
						</li>
						<li>
							<a href="registro.php">Registro</a>
						</li>
						
					
					</ul>
				</div>
				
			</nav>
			<center>
			<h2>Se Registro el Cuestionario de Egresados &gt;&gt; DGTI </h2>
			</center>
			<hr>
			
			<p>
			<center>
			Centro de bachillerato tecnol�gico industrial y de servicios No. 61
			</center>
			</p>
	  </div>
		<div class="col-md-1">
		</div>
	</div>
</div>
<script>
function compara(){
	a=document.form.p1.value;
	b=document.form.p2.value;
	if(a==b)
	{
		//return true;
		form.submit();
	}
	else{
		alert("las contrase?as no coinciden");
		return false;
	}
}
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
