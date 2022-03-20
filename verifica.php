<?php
	require('conexion.php');
	$mat=$_POST['ncontrol'];
	$pas1=$_POST['p1'];
	
	
	$abc=substr($mat,0,1);
	
	//echo "$mat $pas1 $abc";

   if ($abc=="a" || $abc=="b" || $abc=="c" || $abc=="d" || $abc=="e" || $abc=="f" || $abc=="g" || $abc=="h" || $abc=="i" || $abc=="j" || $abc=="k" || $abc=="l" || $abc=="m" || $abc=="n" || $abc=="o" || $abc=="p" || $abc=="q" || $abc=="r" || $abc=="s" || $abc=="t" || $abc=="u" || $abc=="v" || $abc=="w" || $abc=="x" || $abc=="y" || $abc=="z" || $abc=="A" || $abc=="B" || $abc=="C" || $abc=="D" || $abc=="E" || $abc=="F" || $abc=="G" || $abc=="H" || $abc=="I" || $abc=="J" || $abc=="K" || $abc=="L" || $abc=="M" || $abc=="N" || $abc=="O" || $abc=="P" || $abc=="Q" || $abc=="R" || $abc=="S" || $abc=="T" || $abc=="U" || $abc=="V" || $abc=="W" || $abc=="X" || $abc=="Y" || $abc=="Z"){
		   $consulta="select nombre, clave from usuarios where nombre='".$mat."' and clave='".$pas1."'";
		   
		   echo "select nombre, clave from usuarios where nombre='".$mat."' and clave='".$pas1."'";;
			
			$resultado=$mysqli->query($consulta) or die (mysql_error());
			//echo "hola".$resultado[2];
			if ($resultado->num_rows>0)
			{
				
				
					//echo "ir a vinculación";
					include('reporte.php');
				
			}
			else
			{
				echo "<script type='text/javascript'>";
			  echo "alert('La clave no es correcta!')";
			  
			echo "</script>";
			include("index.php");	
			}
   }
   else
   {
		   $consulta="select ncontrol from formulario1 where ncontrol=".$mat." and pass='".$pas1."'";
		   
		 
			
			$resultado=$mysqli->query($consulta) or die (mysql_error());
			
		if ($resultado->num_rows>0)
		{
			
			
				//Echo "ir a ingreso";
				include('cuestionario1.php');
			
		}
		else
		{
			echo "<script type='text/javascript'>";
		  echo "alert('El usuario ya existe!')";
		echo "</script>";
		include("index.php");
		}
   }
	

?>