
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
			
			<h2>Registro Egresados &gt;&gt; DGTI </h2>
			<p>&nbsp;</p>
			<center><h4><strong>INSTRUCCIONES</strong></h4></center>
				<hr>
				<p aling="left">
				<ul>
				<li>Lea cuidadosamente cada una de las preguntas, así como las opciones de respuesta que se presentan.
				<br>
				<li>Anote los datos que se solicitan, sin utilizar abreviaturas y usando letra de molde.
				<br>
				<li>Para el caso de las preguntas de opción múltiple marque la opción sobre los incisos que elija como respuestas.
				<br>
				<li>Si necesita información sobre cómo llenar correctamente el cuestionario, consúltela con el responsable de la aplicación
				</ul>
				</p>
				</center>
			
			<form role="form" name="form" method="POST" action="guarda_usuario.php">
			<input type="hidden" value="<?php echo "$mat"; ?>" name=ncontrol >
			<input type="hidden" value="<?php echo "$pas1"; ?>" name=pas1 >
			
				<table class="table">

				<tbody>
					<tr><td>Tu Nombre (completo): <input type ="text" name="nombre" class="form-input" required></td><td>Apellidos: <input type ="text" size="35" name="apellidos" class="form-input" required></td><td>&nbsp;</td></tr>
					<tr><td>Tu edad
			<input type ="int" name="edad" class="form-input" required>
			</td><td>Género 
			<select   name="genero">
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select></td><td>&nbsp;</td></tr>
			<tr><td colspan="3" align="center"><h3>Domicilio Particular</h3></td></tr>				
			<tr>
			<td>Calle: <input type ="text" name="calle" class="form-input" required></td>
			<td>No.Ext: <input type ="int" name="next" class="form-input"required></td>
			<td>No.Int: <input type ="int" name="nint" class="form-input" required></td>
			</tr>
			<td>Colonia: <input type ="text" name="colonia"class="form-input" ><p><br></td>
			<td>C.P.: <input type ="int" name="cp"  class="form-input" ></td>
			<td>Teléfono: <input type ="int" name="telefono"></td>
			</tr>
			<tr>
			<td>C. Electrónico: <input type ="text" name="correo" class="form-input" ></td>
			<td>Municipio o Del.: <input type ="text" name="municipio" class="form-input"  ></td>
			<td>Estado: <input type ="text" name="efederativa" class="form-input"><td>
			</tr>
			<tr>
			<td>Estado civil: 
			<select name="civil">
							<option value="Soltero">Soltero(a)</option>
							<option value="Casado(a)">Casado(a)</option>
							<option value="Otro">Otro</option>
						</select>
			
			</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td></tr>		
			<tr><td colspan="3" align="center"><h3>Plantel de Egreso</h3></td></tr>
			<tr><td>Nombre:	<select   name="nombrep">
							<option value="CETIS">CETIS</option>
							<option value="CBTIS">CBTIS</option>
							<option value="CBTA">CBTA</option>
						</select>
			</td>
			<td>Número de plantel: <input type ="int" name="numerop" class="form-input" required></td>
			<td>Estado: <input type ="text" name="estadop" class="form-input" required></td>
			</tr>
			<tr>
			<td>Año de Ingreso: <input type ="int" name="adeingreso" class="form-input" required></td>
			<td>Año de Egreso: 	<input type ="int" name="adeegreso" class="form-input" required></td>
			<td>&nbsp;</td>
			</tr>
			<tr>
			<td colspan="2">	1.especialidad que estudió:
			<select   name="especialidade">
							<option value="Electrónica">Electrónica</option>
							<option value="Mantenimiento Automotriz">Mantenimiento Automotriz</option>
							<option value="Logística">Logística</option>
							<option value="Recursos humanos">Recursos Humanos</option>
							<option value="Puericultura">Puericultura</option>
							<option value="Programación">Programación</option>
							<option value="Transformación de plásticos">transformación de plásticos</option>
						</select>
			</td>
			<td>&nbsp;</td>
			</tr>
			<tr><td colspan="3" align="center"><button type="submit" class="btn btn-primary">Suscribirse</button></td></tr>			
			
				</tbody>
			</table>
			</form>
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