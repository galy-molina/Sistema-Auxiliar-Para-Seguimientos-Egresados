<?php
$serber='localhost';	
$user1='root';
$pass1='';
$bd='registro1';
						
	$mysqli=new mysqli($serber,$user1,$pass1,$bd); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
			}
			//mysql_set_charset('utf8');
			$acentos = $mysqli->query("SET NAMES 'utf8'");
?>