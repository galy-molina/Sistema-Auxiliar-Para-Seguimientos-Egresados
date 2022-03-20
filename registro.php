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
						
					<li>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" name="user" class="form-control" placeholder="Usuario">
							<input type="paasword" name="passwd" placeholder="Contraseña" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Ingresar
						</button>
					</form>
					</li>
					</ul>
				</div>
				
			</nav>
			
			<h2>Registro Egresados &gt;&gt; DGTI </h2>
			<p>&nbsp;</p>
			<h3>Registrate con tu número de control y crea una contraseña </h3>
			
			<form role="form" name="form" method="POST" action="verifica1.php">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Número de control
					</label>
					<input type="text" name="ncontrol" class="form-control" id="ncontrol" required />
				</div><br>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Escribe una contraseña
					</label>
					<input type="password" pattern=".{6,}" class="form-control" name="p1" id="p1" required /> m&iacute;nimo 6 caracteres
				</div>
				
				<div class="form-group ">
					 
					<label for="exampleInputPassword1">
						Repíte la contraseña
					</label>
					<input type="password" pattern=".{6,}" class="form-control" name="p2" id="p2" required />
				</div>
				
				<button type="button" class="btn btn-primary" onClick="compara()">
					Enviar
				</button>
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
		alert("las contrase�as no coinciden");
		return false;
	}
}
</script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>