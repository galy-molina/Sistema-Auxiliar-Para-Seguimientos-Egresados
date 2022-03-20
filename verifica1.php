<?php
	require('conexion.php');
	$mat=$_POST['ncontrol'];
	$pas1=$_POST['p1'];
	$pas2=$_POST['p2'];
	$consulta="select ncontrol from formulario1 where ncontrol=".$mat;
	
	$resultado=$mysqli->query($consulta) or die (mysql_error());
	
if ($resultado->num_rows==0)
{
	if ($pas1!=$pas2)
	{
		//echo "Las contraseñas no coinciden";
		//echo"<a href='verifica.php'>Regresar</a>";
	}
	else{
		//Echo "ir a ingreso";
		include('ingreso.php');
	}
}
else
	
{
	echo "<script type='text/javascript'>";
  echo "alert('El usuario ya existe!')";
 // echo "javascript:history.back(1)";
echo "</script>";
include("verifica.php");
}
?>