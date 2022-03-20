<?php 
	header("Content-Type: text/html;charset=utf-8");
	require('conexion.php');
	//mysql_set_charset('utf8');
	$mat=$_POST['ncontrol'];
	$consulta="select ncontrol from formulario1 where ncontrol=".$mat;
	
	$resultado=$mysqli->query($consulta) or die (mysql_error());
	
if ($resultado->num_rows>0)
{
	echo" <br><br><center><h1>La matricula ya existe</h1>";
	$asd=1;
}
else{
print("No Existen registros");
	$nom=$_POST['nombre'];
	$pas1=$_POST['pas1'];
	$apellidos=$_POST['apellidos'];
	$edad=$_POST['edad'];
	$genero=$_POST['genero'];
	$calle=$_POST['calle'];
	$next=$_POST['next'];
	$nint=$_POST['nint'];
	$colonia=$_POST['colonia'];
	$cp=$_POST['cp'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$municipio=$_POST['municipio'];
	$efed=$_POST['efederativa'];
	$civil=$_POST['civil'];
	$nombrep=$_POST['nombrep'];
	$numerop=$_POST['numerop'];
	$estadop=$_POST['estadop'];
	$adeingreso=$_POST['adeingreso'];
	$adeegreso=$_POST['adeegreso'];
	$esp=$_POST['especialidade'];
	
	$cad1="INSERT INTO formulario1(ncontrol,pass,nombre,apellidos,edad,genero,calle,next,nint,colonia,cp,telefono,correo,municipio,efederativa,civil,nombrep,numerop,estadop,adeingreso,adeegreso,especialidade)" ;
	$cad2="VALUES ('$mat','$pas1','$nom','$apellidos','$edad','$genero','$calle','$next','$nint','$colonia','$cp','$telefono','$correo','$municipio','$efed','$civil','$nombrep','$numerop','$estadop','$adeingreso','$adeegreso','$esp')";
	$query=$cad1.$cad2;
		$resultado=$mysqli->query($query);
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Registro de Egresados</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>


<!-- Cambio de aspecto -->

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
							<a href="registro.php">Registro</a>
						</li>
						<li>
							<a href="index.php">Salir</a>
						</li>
						
					
					</ul>
				</div>
				
			</nav>

	
			
			<?php if($asd==0 || $asd==""){ ?>
				<center><h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<center><h1>&nbsp</h1>		
			<?php	} ?>	

<p>&nbsp;</p>
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

<!-- fin -->

</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>



</body>
</html>