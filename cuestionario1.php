<?php
$consulta1="select count(resp6) as total from resultado1 where tipo=1 and mat=".$mat;
	
	$resultado=$mysqli->query($consulta1) or die (mysql_error());
	$actor = $resultado->fetch_assoc();
	$total1= $actor['total'];
	if ($total1>0){
		echo "<script type='text/javascript'>";
  echo "alert('Ya contestaste el cuestionario!')";
echo "</script>";
include("index.php");
	}
		else{
			?>
		
	



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cestionario para Egresados - DGTI</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script type="text/javascript">
		function mostrar(a){
		//alert("hola"+a);
		if (a==1){
		document.getElementById('p3').style.display = 'block';
		document.getElementById('p5').style.display = 'block';
		document.getElementById('p6').style.display = 'block';
		document.getElementById('p7').style.display = 'block';
		document.getElementById('p8').style.display = 'block';
		document.getElementById('p9').style.display = 'block';
		document.getElementById('p4').style.display = 'none';
		document.getElementById('p10').style.display = 'none';
		document.getElementById('p11').style.display = 'none';
		document.getElementById('p12').style.display = 'none';
		document.getElementById('p13').style.display = 'none';
		document.getElementById('p14').style.display = 'none';
		document.getElementById('p15').style.display = 'none';
		document.getElementById('p16').style.display = 'none';
		document.getElementById('p17').style.display = 'none';
		document.getElementById('p18').style.display = 'none';
		document.getElementById('p19').style.display = 'none';
		document.getElementById('p20').style.display = 'none';
		document.getElementById('p21').style.display = 'none';
		document.getElementById('p22').style.display = 'none';
		document.getElementById('p23').style.display = 'none';
		document.getElementById('p24').style.display = 'none';
		document.getElementById('p25').style.display = 'none';
		document.getElementById('p26').style.display = 'none';
		document.getElementById('p27').style.display = 'none';
		document.getElementById('p28').style.display = 'none';
		document.getElementById('p29').style.display = 'none';
		}
		else if (a==2){
		document.getElementById('p5').style.display = 'none';
		document.getElementById('p6').style.display = 'none';
		document.getElementById('p7').style.display = 'none';
		document.getElementById('p8').style.display = 'none';
		document.getElementById('p9').style.display = 'none';
		document.getElementById('p4').style.display = 'block';
		document.getElementById('p10').style.display = 'block';
		document.getElementById('p11').style.display = 'block';
		document.getElementById('p12').style.display = 'block';
		document.getElementById('p13').style.display = 'block';
		document.getElementById('p14').style.display = 'block';
		document.getElementById('p15').style.display = 'block';
		document.getElementById('p16').style.display = 'block';
		document.getElementById('p17').style.display = 'block';
		document.getElementById('p18').style.display = 'block';
		document.getElementById('p19').style.display = 'block';
		document.getElementById('p20').style.display = 'block';
		document.getElementById('p21').style.display = 'block';
		document.getElementById('p22').style.display = 'block';
		document.getElementById('p23').style.display = 'block';
		document.getElementById('p24').style.display = 'block';
		document.getElementById('p25').style.display = 'block';
		document.getElementById('p26').style.display = 'block';
		document.getElementById('p27').style.display = 'block';
		document.getElementById('p28').style.display = 'block';
		document.getElementById('p29').style.display = 'block';
		}
		else if (a==3){
		document.getElementById('p3').style.display = 'block';
		document.getElementById('p5').style.display = 'block';
		document.getElementById('p6').style.display = 'block';
		document.getElementById('p7').style.display = 'block';
		document.getElementById('p8').style.display = 'block';
		document.getElementById('p9').style.display = 'block';
		document.getElementById('p4').style.display = 'block';
		document.getElementById('p10').style.display = 'block';
		document.getElementById('p11').style.display = 'block';
		document.getElementById('p12').style.display = 'block';
		document.getElementById('p13').style.display = 'block';
		document.getElementById('p14').style.display = 'block';
		document.getElementById('p15').style.display = 'block';
		document.getElementById('p16').style.display = 'block';
		document.getElementById('p17').style.display = 'block';
		document.getElementById('p18').style.display = 'block';
		document.getElementById('p19').style.display = 'block';
		document.getElementById('p20').style.display = 'block';
		document.getElementById('p21').style.display = 'block';
		document.getElementById('p22').style.display = 'block';
		document.getElementById('p23').style.display = 'block';
		document.getElementById('p24').style.display = 'block';
		document.getElementById('p25').style.display = 'block';
		document.getElementById('p26').style.display = 'block';
		document.getElementById('p27').style.display = 'block';
		document.getElementById('p28').style.display = 'block';
		document.getElementById('p29').style.display = 'block';
		}
		else {
		document.getElementById('p5').style.display = 'none';
		document.getElementById('p6').style.display = 'none';
		document.getElementById('p7').style.display = 'none';
		document.getElementById('p8').style.display = 'none';
		document.getElementById('p9').style.display = 'none';
		document.getElementById('p4').style.display = 'block';
		document.getElementById('p10').style.display = 'block';
		document.getElementById('p11').style.display = 'none';
		document.getElementById('p12').style.display = 'none';
		document.getElementById('p13').style.display = 'none';
		document.getElementById('p14').style.display = 'none';
		document.getElementById('p15').style.display = 'none';
		document.getElementById('p16').style.display = 'none';
		document.getElementById('p17').style.display = 'none';
		document.getElementById('p18').style.display = 'none';
		document.getElementById('p19').style.display = 'none';
		document.getElementById('p20').style.display = 'none';
		document.getElementById('p21').style.display = 'none';
		document.getElementById('p22').style.display = 'none';
		document.getElementById('p23').style.display = 'none';
		document.getElementById('p24').style.display = 'none';
		document.getElementById('p25').style.display = 'none';
		document.getElementById('p26').style.display = 'none';
		document.getElementById('p27').style.display = 'none';
		document.getElementById('p28').style.display = 'block';
		document.getElementById('p29').style.display = 'none';
		}
		}
		</script>
		<script>
		function mostrarb(a){
		//alert("hola"+a);
		if (a==1){
			
			document.getElementById('p4').style.display = 'none';
			}
			else if (a==2){
			
			document.getElementById('p4').style.display = 'block';
			}
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
							<a href="registro.php">Registro</a>
						</li>
						<li>
							<a href="index.php">Salir</a>
						</li>
						
					
					</ul>
				</div>
				
			</nav>
			
			<h3>Cestionario para Egresados &gt;&gt; DGTI </h3>
			<p>&nbsp;</p>
			
			<br>
				<center><h4><strong>INSTRUCCIONES</strong></h4></center>
				<hr>
				<p aling="left">
				<big>
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
				
			    <hr>
				
				<form  method="POST" action="agrega.php">
				<input type="hidden" value="<?php echo "$mat"; ?>" name=ncontrol >
				<h4><strong>A.	ASPECTO  ACADÉMICO</strong> </h4>
				2. ¿Qué actividades realiza actualmente?<p>
				<input type=radio name="p2" value="Estudia" onClick="mostrar(1)" >Estudia<p>
				<input type=radio name="p2" value="Trabaja" onClick="mostrar(2)" >Trabaja (pase a la pregunta 4 y considere que no debe contestar el inciso a)<p>
				<input type=radio name="p2" value="Estudia y Trabaja" onClick="mostrar(3)" >Estudia y trabaja<p>
				<input type=radio name="p2" value="No estudia, ni trabaja" onClick="mostrar(4)" >No estudia, ni trabaja(pase a la pregunta 4 y considere que no debe contestar el inciso a)<p>
				
				<div id="p3"  style='display:none;'>
				<hr>
				<h4><strong>3.	¿Actualmente estudia en el Nivel Superior?</strong></h4>
				<p>
				<input type=radio name="p3"  value="Si" onClick="mostrarb(1)" >a)	Sí (pase a la pregunta 5)<p>
				<input type=radio name="p3"   value="No" onClick="mostrarb(2)" >b)	No<p>
				</div>
				<div id="p4"  style='display:none;'>
				<hr>
				<h4><strong>
				4.	¿Cuáles son las causas por las que actualmente no estudia en el Nivel Superior?</strong></h4>
				<p>
				<input type=radio name="p4a" value="Realiza otros estudios">Realiza otros estudios (capacitación, especialización, cursos, etc.)<p>
				<input type=radio name="p4a" value="No aprobó exámen de admisión">No aprobó el examen de admisión <p>
				<input type=radio name="p4a" value="Falta de interés por estudiar">Falta de interés por estudiar<p>
				<input type=radio name="p4a" value="Ubicación lejana de la Institución Educativa">Ubicación lejana de las Instituciones Educativas<p>
				<input type=radio name="p4a" value="Falta de recursos económicos">Falta de recursos económicos<p>
				<input type=radio name="p4a" value="No ofrece carrera de preferencia">No se ofrece la carrera de su preferencia en la región<p>
				<input type=radio name="p4a" value="Problemas personales y familliares">Problemas personales y familiares<p>
				<input type=radio name="p4" value="Otras">Otras, especifique <p>
				<p>
				</div>
				<div id="p5"  style='display:none;'>
				<center><strong>SI NO ESTUDIA, NI TRABAJA PASE A LA PREGUNTA 10 Y RECUERDE QUE NO PUEDE CONTESTAR LOS INCISOS A y/o B SEGÚN LE CORRESPONDA.</center></strong><br>
				<hr>
				<h4><strong>5.	¿En qué institución cursa estudios superiores?</strong></h4>
				<p>
				a) <input type=radio name="p5" value="Instituto Tecnológico">Instituto Tecnológico (IT)<p>
				b) <input type=radio name="p5" value="Instituto tecnológico Superior">Instituto Tecnológico Superior (ITS)<p>
				c) <input type=radio name="p5" value="Estudios tecnológicos del mar">Instituto Tecnológico del Mar (ITMAR)<p>
				d) <input type=radio name="p5" value="Instituto tecnologico Agropecuario">Instituto Tecnológico Agropecuario (ITA) o Instituto Tecnológico Forestal (ITF)<p>
				e) <input type=radio name="p5" value="Universidad Autónoma Agraria">Universidad Autónoma Agraria Antonio Narro (UAAAN)<p>
				f) <input type=radio name="p5" value="Universidad Estatal">Universidad Estatal o Autónoma<p>
				g) <input type=radio name="p5" value="Institución Privada">Institución privada<p>
				h) <input type=radio name="p5" value="Instituto Politécnico Nacional">Instituto Politécnico Nacional (IPN)<p>
				i) <input type=radio name="p5" value="Universidad Autónoma Metropolitana">Universidad Autónoma Metropolitana (UAM)<p>
				j) <input type=radio name="p5" value="Universisdad Nacional Autónoma de México">Universidad Nacional Autónoma de México (UNAM)<p>
				k) <input type=radio name="p5" value="Universidad Autonoma de Chapingo">Universidad Autónoma de Chapingo<p>
				l) <input type=radio name="p5" value="Universidad Pedagógica Nacional">Universidad Pedagógica Nacional <p>
				m) <input type=radio name="p5" value="Escuela Normal">Escuela Normal<p>
				n) <input type=radio name="p5" value="Universidad Tecnológica">Universidad Tecnológica<p>
				o) <input type=radio name="p5" value="Otra">Otra<p>
				<p>
				</div>
				<div id="p6"  style='display:none;'>
				<hr>
				<h4><strong>6. Anote el nombre completo y sin abreviaturas de la carrera que cursa actualmente en el Nivel Superior.</strong></h4>
							<input type =text name="p6" class="form-input"  size="50"><p>
				</div>
				<div id="p7"  style='display:none;'>			
				<hr>
				<h4><strong>7.¿Los estudios que realiza actualmente, tienen relación con la carrera del Bachillerato Tecnológico que cursó?</strong></h4>
				<p>
				a) <input type=radio name="p7" value="Sí, completamente">Sí, completamente <p>
				b) <input type=radio name="p7" value="Parcialmente">Parcialmente<p>
				c) <input type=radio name="p7" value="No tienen relación">No tienen relación<p>
				<p>
				</div>
				<div id="p8"  style='display:none;'>
				<hr>
				<h4><strong>8.	¿Cuántas materias ha reprobado durante los trimestres, cuatrimestres o semestres que ha cursado en el Nivel Superior?</strong></h4>
				<p>
				a) <input type=radio name="p8" value="No he reprobado">No he reprobado (si trabaja pase a la pregunta 11 y si no pase a la 10)<p>
				b) <input type=radio name="p8" value="Una">Una<p>
				c) <input type=radio name="p8" value="Dos">Dos <p>
				d) <input type=radio name="p8" value="Tres">Tres<p>
				e) <input type=radio name="p8" value="Más de tres">Más de tres<p>
				<p>
				</div>
				<div id="p9"  style='display:none;'>
				<hr>
				<h4><strong>9.	¿Cuáles son las causas que han dificultado su desarrollo académico en el Nivel Superior?</strong></h4>
				<p>
				a) <input type=radio name="p9" value="Conocimientos insuficientes del bachillerato">Conocimientos insuficientes del bachillerato<p>
				b) <input type=radio name="p9" value="Dificultad de las materias">Dificultad de las materias<p>
				c) <input type=radio name="p9" value="Falta de hábitos de estudio eficaces">Falta de hábitos de estudio eficaces<p>
				d) <input type=radio name="p9" value="Falta de material de estudio">Falta de material de estudio <p>
				e) <input type=radio name="p9" value="Falta de tiempo para estudiar">Falta de tiempo para estudiar<p>
				f) <input type=radio name="p9" value="Ausentismo">Ausentismo<p>
				g) <input type=radio name="p9" value="Insuficiente preparación de los temas por parte del profesor">Insuficiente preparación de los temas por parte del profesor <p>
				h) <input type=radio name="p9" value="Insuficiente formación didáctica del profesor">Insuficiente formación didáctica del profesor<p>
				i) <input type=radio name="p9" value="Ausentismo del profes">Ausentismo del profesor<p>
				j) <input type=radio name="p9" value="Evaluaciones mal diseñadas">Evaluaciones mal diseñadas<p>
				k) <input type=radio name="p9" value="Otras">Otras<p>
				<p>
				</div>
				<div id="p10"  style='display:none;'>
				<center><strong>SI TRABAJA,   PASE A LA PREGUNTA 11.</strong></center><p>
				<br>
				<center>B.	UBICACIÓN LABORAL DE LOS EGRESADOS</center><hr>
				<p>
				<br>
				<hr>
				<h4><strong>10.	¿Cuáles son las causas por las que no trabaja?</strong></h4>
				<p>
				a) <input type=radio name="p10" value="Continúa estudios superiores">Continúa estudios superiores<p>
				b) <input type=radio name="p10" value="Continua otros estudios">Continúa otros estudios<p>
				c) <input type=radio name="p10" value="Ubicación lejana de los centros de trabajo">Ubicación lejana de los centros de trabajo<p>
				d) <input type=radio name="p10" value="Las empresas ofrecen salarios bajos">Las empresas ofrecen salarios bajos<p>
				e) <input type=radio name="p10" value="No hay trabajo relacionado con la carrera que estudió">No hay trabajo relacionado con la carrera que estudió<p>
				f) <input type=radio name="p10" value="Solicitó trabajo relacionado con su perfil de egreso y no fue admitido (pase a la pregunta 13">Solicitó  relacionado con su perfil de egreso y no fue admitido (pase a la pregunta 13)<p>
				g) <input type=radio name="p10" value="Espera respuesta a una solicitud de trabajo">Espera respuesta a una solicitud de trabajo <p>
				h) <input type=radio name="p10" value="Por cuestiones personales">Por cuestiones personales<p>
				i) <input type=radio name="p10" value="Otras">Otras<p>
				</div>
				<div id="p11"  style='display:none;'>
				<hr>
				<center><strong>PASE A LA PREGUNTA 28</strong></center><p>
				<hr>
				<br>
				<hr>
				<h4><strong>11.	¿Las actividades que realiza en su trabajo tienen relación con la carrera que estudió en el bachillerato tecnológico?</strong></h4><p>
				
				a) <input type=radio name="p11" value="Sí, completamente">Sí, completamente (pase a la pregunta 14)<p>
				b) <input type=radio name="p11" value="Parcialmente">Parcialmente<p>
				c) <input type=radio name="p11" value="No tienen relación">No tienen relación<p>
				<p>
				</div>
				<div id="p12"  style='display:none;'>
				<hr>
				<h4><strong>12.	¿Cuáles son las causas por las que actualmente no trabaja en actividades propias de su perfil de egreso?</strong></h4>
				<p>
				a) <input type=radio name="p12" value="Continúa estudios superiores">Continúa estudios superiores<p>
				b) <input type=radio name="p12" value="Continúa otros estudios (capacitación, especialización, cursos, etc">Continúa otros estudios (capacitación, especialización, cursos, etc.)<p>
				c) <input type=radio name="p12" value="Falta de interés por trabajar en su área">Falta de interés por trabajar en su área<p>
				d) <input type=radio name="p12" value="No encontró trabajo relacionado con la carrera que estudió">No encontró trabajo relacionado con la carrera que estudió<p>
				e) <input type=radio name="p12" value="Ubicación lejana de los centros de trabajo">Ubicación lejana de los centros de trabajo<p>
				f) <input type=radio name="p12" value="Las empresas ofrecen salarios bajos">Las empresas ofrecen salarios bajos <p>
				g) <input type=radio name="p12" value="Por los horarios de trabajo">Por los horarios de trabajo<p>
				h) <input type=radio name="p12" value="Solicitó trabajo relacionado con su perfil de egreso y no fue admitido">Solicitó trabajo relacionado con su perfil de egreso y no fue admitido (pase a la pregunta 13)<p>
				i) <input type=radio name="p12" value="El trabajo que desarrolla, se relaciona parcialmente con el perfil de egreso">El trabajo que desarrolla, se relaciona parcialmente con el perfil de egreso<p>
				j) <input type=radio name="p12" value="Otras">Otras
				</div>
				<div id="p13"  style='display:none;'>
				<hr>
				<center><strong>SI TRABAJA PASE A LA PREGUNTA 27 Y SI NO TRABAJA PASE A LA 28</strong></center><p>
				<hr>
				<br>
				<hr>
				<h4><strong>13.	Si solicitó empleo relacionado con su perfil de egreso y no fue admitido, ¿Cuál fue el motivo?</strong></h4>
				
				a) <input type=radio name="p13" value="La escuela de procedenci">La escuela de procedencia<p>
				b) <input type=radio name="p13" value="Falta de experiencia en el área">Falta de experiencia en el área<p>
				c) <input type=radio name="p13" value="No aprobó el examen de selecció">No aprobó el examen de selección<p>
				d) <input type=radio name="p13" value="No está titulado">No está titulado<p>
				e) <input type=radio name="p13" value="Aspectos personales (edad, sexo, estado civil, etc.)">Aspectos personales (edad, sexo, estado civil, etc.)<p>
				f) <input type=radio name="p13" value="Otros">Otros
				<hr>
				<center><strong>SI TRABAJA PASE A LA PREGUNTA 27 Y SI NO TRABAJA PASE A LA 28</center></strong><p>
				<hr>
				<br>
				</div>
				<div id="p14"  style='display:none;'>
				<hr>
				<h4><strong>14.	¿En qué lugar trabaja actualmente?</strong></h4>
				<p>
				a) <input type=radio name="p14" value="Constituí mi propia empresa con un giro relacionado con mi perfil de egreso">Constituí mi propia empresa con un giro relacionado con mi perfil de egreso (pase a la pregunta 17)<p>
				b) <input type=radio name="p14" value="Negocio familiar ">Negocio familiar (pase a la pregunta 17)<p>
				c) <input type=radio name="p14" value="Cooperativa">Cooperativa<p>
				d) <input type=radio name="p14" value="Institución del sector público">Institución del sector público<p>
				e) <input type=radio name="p14" value="Empresa del sector privado">Empresa del sector privado <p>
				f) <input type=radio name="p14" value="Organismo o institución de participación pública y privada">Organismo o institución de participación pública y privada<p>
				g) <input type=radio name="p14" value="Otro">Otro
				</div>
				<div id="p15"  style='display:none;'>
				<hr>
					  <br>
				<hr>
				<h4><strong>15.	¿Qué medio le permitió conseguir su trabajo actual? (marque una sola opción)</strong></h4>
				<p>
				a) <input type=radio name="p15" value="Bolsa de trabajo del plantel de egreso">Bolsa de trabajo del plantel de egreso<p>
				b) <input type=radio name="p15" value="A través del servicio social">A través del servicio social<p>
				c) <input type=radio name="p15" value="A través de prácticas profesionales">A través de prácticas profesionales<p>
				d) <input type=radio name="p15" value="Bolsa de trabajo del servicio estatal de empleo">Bolsa de trabajo del servicio estatal de empleo<p>
				e) <input type=radio name="p15" value="A través de internet">A través de internet<p>
				f) <input type=radio name="p15" value="Medios de comunicación masiva">Medios de comunicación masiva<p>
				g) <input type=radio name="p15" value="Recomendación de familiares y amigos">Recomendación de familiares y amigos<p>
				h)<input type=radio name="p15" value="Información proporcionada por otra persona respecto a vacantes">Información proporcionada por otra persona respecto a vacantes<p>
				i) <input type=radio name="p15" value="Feria del empleo">Feria del empleo<p>
				j) <input type=radio name="p15" value="Otro">Otro<p>
				</div>
				<div id="p16"  style='display:none;'>
				<hr>
				<h4><strong>16.	¿Cuáles fueron los requisitos más importantes que la empresa u organismo consideró para contratarlo?</strong></h4>
				<p>
				a) <input type=radio name="p16" value="Ninguno">Ninguno<p>
				b) <input type=radio name="p16"  value="Certificado de estudios del Bachillerato">Certificado de estudios del Bachillerato<p>
				c) <input type=radio name="p16"  value="Título de Técnico, Técnico Profesional ó Tecnólogo">Título de Técnico, Técnico Profesional o Tecnólogo<p>
				d) <input type=radio name="p16"  value="Promedio de calificación en los estudios de Nivel Medio Superior">Promedio de calificación en los estudios de Nivel Medio Superior<p>
				e) <input type=radio name="p16"  value="Prestigio de la institución de egreso">Prestigio de la institución de egreso<p>
				f) <input type=radio name="p16"  value="Aprobación de exámenes de selección">Aprobación de exámenes de selección <p>
				g) <input type=radio name="p16"  value="Experiencia laboral en el área">Experiencia laboral en el área<p>
				h) <input type=radio name="p16" value="Aspectos personales (edad, sexo, estado civil, etc">Aspectos personales (edad, sexo, estado civil, etc.)<p>
				i) <input type=radio name="p16"  value="Recomendación">Recomendación<p>
				j) <input type=radio name="p16"  value="Conocimiento básicos de computación">Conocimiento básicos de computación<p>
				k) <input type=radio name="p16"  value="Dominio de un idioma extranjero">Dominio de un idioma extranjero <p>
				l) <input type=radio name="p16"  value="Otro">Otro<hr><p>
				</div>
				<div id="p17"  style='display:none;'>
				<hr>
				<h4><strong>17.	Marque el sector económico de su empresa o negocio familiar.</strong></h4>
				<p>
				<input type=radio name="p17" value="AGROPECUARIO">AGROPECUARIO<p>							
				<input type=radio name="p17" value="COMERCIO">COMERCIO<p>	
				<input type=radio name="p17" value="INDUSTRIAL">INDUSTRIAL<p>
				<input type=radio name="p17" value="SERVICIOS">SERVICIOS<p>
				</div>
				<div id="p18"  style='display:none;'>
				<hr>
				<h4><strong>18.	Indique la actividad económica de la empresa u organismo en el que trabaja</strong></h4>
				<p>
				a) <input type=radio name="p18" value="Agropecuaria">Agropecuaria<p>		
				b) <input type=radio name="p18" value="Silvicultura">Silvicultura<p>		
				c) <input type=radio name="p18" value="Pesca y acuacultura">Pesca y acuacultura<p>	
				d) <input type=radio name="p18" value="Minería">Minería<p>					
				e) <input type=radio name="p18" value="Alimentos, bebidas y tabaco">Alimentos, bebidas y tabaco<p>	
				f) <input type=radio name="p18" value="Textiles, vestido y cuero">Textiles, vestido y cuero<p> 	
				g) <input type=radio name="p18" value="Madera y sus productos">Madera y sus productos<p> 		
				h) <input type=radio name="p18" value="Papel, imprenta y editoriales">Papel, imprenta y editoriales<p>	
				i) <input type=radio name="p18" value="Química, derivada del petróleo">Química, derivada del petróleo<p>	
				j) <input type=radio name="p18" value="Caucho y plástico">Caucho y plástico<p> 
				k) <input type=radio name="p18" value="Minerales no metálicos, excepto derivados del petróleo">Minerales no metálicos, excepto derivados del petróleo<p>
				l) <input type=radio name="p18" value="Industrias metálicas básicas">Industrias metálicas básicas<p>
				m) <input type=radio name="p18" value="Productos metálicos, maquinaria y equipo">Productos metálicos, maquinaria y equipo<p>
				n) <input type=radio name="p18" value="Construcción">Construcción<p>
				o) <input type=radio name="p18" value="Electricidad, gas y agua">Electricidad, gas y agua<p>
				p) <input type=radio name="p18" value="Comercio, restaurantes y hotele">Comercio, restaurantes y hoteles<p>
				q) <input type=radio name="p18" value="Transporte, almacenaje y comunicaciones">Transporte, almacenaje y comunicaciones<p>
				r) <input type=radio name="p18" value="Servicios financieros, seguros, actividades inmobiliarias y de alquile">Servicios financieros, seguros, actividades inmobiliarias y de alquiler<p>
				s) <input type=radio name="p18" value="Servicios comunales, sociales y personale">Servicios comunales, sociales y personales<p>
				t) <input type=radio name="p18" value="Otro">Otro
				<p>
				</div>
				<div id="p19"  style='display:none;'>
				<hr>
				<h4><strong>19.	Indique en cuál de las funciones laborales que se enlistan se inserta la actividad principal que desarrolla en su centro de trabajo </strong></h4>
				<p>
				a) <input type=radio name="p19" value="Aplicar las técnicas adecuadas para el montaje de las instalaciones, equipo y sistemas">Aplicar las técnicas adecuadas para el montaje de las instalaciones, equipo y sistemas.<p>
				b) <input type=radio name="p19" value="Supervisar los procesos de producción en montaje de sistemas, equipos y partes">Supervisar los procesos de producción en montaje de sistemas, equipos y partes.<p>
				c) <input type=radio name="p19" value="Aplicar procesos de producción y de control de calidad">Aplicar procesos de producción y de control de calidad.<p>
				d) <input type=radio name="p19" value="Ejecutar los procesos de fabricación y ensamblado">Ejecutar los procesos de fabricación y ensamblado.<p>
				e) <input type=radio name="p19" value="Operar, programar e instalar máquinas para la explotación de bienes de capital">Operar, programar e instalar máquinas para la explotación de bienes de capital.<p>
				f) <input type=radio name="p19" value="Participar en los programas de operación y conservación de los equipos e instalaciones industriales">Participar en los programas de operación y conservación de los equipos e instalaciones industriales.<p>
				g) <input type=radio name="p19" value="Administrar recursos humanos, materiales y financieros">Administrar recursos humanos, materiales y financieros<p>
				h) <input type=radio name="p19" value="Manejar, controlar y operar equipo de cómputo y los sistemas de procesamiento de dato">Manejar, controlar y operar equipo de cómputo y los sistemas de procesamiento de datos.<p>
				i) <input type=radio name="p19" value="Operar procedimientos administrativos y de control de gestión">Operar procedimientos administrativos y de control de gestión.<p>
				j) <input type=radio name="p19" value="Otro">Otro
				<p>
				</div>
				<div id="p20"  style='display:none;'>
				<hr>
				<h4><strong>20.	¿Qué nivel jerárquico ocupa en la empresa u organismo donde trabaja?</strong></h4>
				<p>
				a) <input type=radio name="p20" value="Mando intermedio ">Mando intermedio  (jefe de departamento o equivalente)<p>
				b) <input type=radio name="p20" value="Técnico o equivalente">Técnico o equivalente<p>
				c) <input type=radio name="p20" value="Auxiliar o equivalente">Auxiliar o equivalente<p>
				d) <input type=radio name="p20" value="Otro"><label for="">Otro
				<p>
				</div>
				<div id="p21"  style='display:none;'>
				<hr>
				<h4><strong>21.	¿A cuánto asciende su salario mensual? Consulte  el monto del salario mínimo vigente en la región</strong></h4>
				<p>
				a) <input type=radio name="p21" value="Menos de un salario mínim">Menos de un salario mínimo<p> 
				b) <input type=radio name="p21" value="Un salario mínimo">Un salario mínimo<p>
				c) <input type=radio name="p21" value="Dos salarios mínimos">Dos salarios mínimos<p>
				d) <input type=radio name="p21" value="Tres salarios mínimos">Tres salarios mínimos<p>
				e) <input type=radio name="p21" value="Cuatro salarios mínimos">Cuatro salarios mínimos<p>
				f) <input type=radio name="p21" value="Cinco salarios mínimos">Cinco salarios mínimos<p>
				g) <input type=radio name="p21" value="Seis salarios mínimos">Seis salarios mínimos<p>
				h) <input type=radio name="p21" value="Otro">Otro
				<p>
				</div>
				<div id="p22"  style='display:none;'>
				<hr>
				C.DESEMPEÑO PROFESIONAL
				<p>
				<hr>
				<h4><strong>22.	La formación académica que recibió le ha permitido realizar las actividades que desempeña en su ámbito laboral:</strong></h4>
				<p>
				a) <input type=radio name="p22" value="Eficientemente">Eficientemente<p>
				b) <input type=radio name="p22" value="Aceptablemente">Aceptablemente<p>
				c) <input type=radio name="p22" value="Con inconvenientes">Con inconvenientes<p>
				d) <input type=radio name="p22" value="No me ha permitido desarrollar las actividades encomendadas">No me ha permitido desarrollar las actividades encomendadas (pase a la pregunta 24)
				<p>
				</div>
				<div id="p23"  style='display:none;'>
				<hr>
				<h4><strong>23.	Si la formación académica, obtenida en la escuela, le ha permitido desarrollar los siguientes aspectos, marque la opción que corresponda según sea el caso: </strong></h4>
				<p>
				a) <input type=radio name="p23" value="Contribuir al aprovechamiento de los recursos materiales">Contribuir al aprovechamiento de los recursos materiales <p>
				b) <input type=radio name="p23" value="Contribuir al aprovechamiento de los recursos humanos">Contribuir al aprovechamiento de los recursos humanos <p>
				c) <input type=radio name="p23" value="Contribuir a la reducción de los tiempos de producción y mejora de la misma">Contribuir a la reducción de los tiempos de producción y mejora de la misma<p>
				d) <input type=radio name="p23" value="Cooperar en la reducción de costos de producción">Cooperar en la reducción de costos de producción <p>
				e) <input type=radio name="p23" value="Cooperar en el diseño de estrategias o mecanismos para mejorar la  calidad de los productos">Cooperar en el diseño de estrategias o mecanismos para mejorar la  calidad de los productos<p>
				f) <input type=radio name="p23" value="Contribuir a la adaptación, simplificación e innovación de procesos administrativos y/o productos">Contribuir a la adaptación, simplificación e innovación de procesos administrativos y/o productos<p>
				g) <input type=radio name="p23" value="Contribuir a la adaptación e innovación de tecnología">Contribuir a la adaptación e innovación de tecnología<p>
				h) <input type=radio name="p23" value="Contar con elementos para la toma de decisiones ">Contar con elementos para la toma de decisiones <p>
				i) <input type=radio name="p23" value="Contar con elementos para integrarse al trabajo en equipo">Contar con elementos para integrarse al trabajo en equipo<p>
				j) <input type=radio name="p23" value="otro">Otro
				<p>
				</div>
				<div id="p24"  style='display:none;'>
				<hr>
				<h4><strong>24.	¿Qué aspectos considera necesarios para desempeñarse eficientemente en sus actividades laborales y que no fueron desarrollados suficientemente durante su formación académica? </strong></h4>
				<p>
				a) <input type=radio name="p24" value="Redactar documentos de trabajo considerando el formato adecuado y aplicando correctamente reglas básicas de redacción y ortografía.">Redactar documentos de trabajo considerando el formato adecuado y aplicando correctamente reglas básicas de redacción y ortografía.<p>
				b) <input type=radio name="p24" value="Contar con estrategias para organizar ideas y datos para comunicarse claramente con los demás,  formular preguntas y recibir información.">Contar con estrategias para organizar ideas y datos para comunicarse claramente con los demás,  formular preguntas y recibir información.<p>
				c) <input type=radio name="p24" value="Conocer el lenguaje de gráficas, tablas, planos diagramas y utilizarlos como insumos para la realización de trabajos.">Conocer el lenguaje de gráficas, tablas, planos diagramas y utilizarlos como insumos para la realización de trabajos.<p>
				d) <input type=radio name="p24" value="Dominar un idioma extranjero.">Dominar un idioma extranjero.<p>
				e) <input type=radio name="p24" value="Contar con estrategias para buscar fuentes de información orientada a confirmar o modificar la existente y utilizarlas en la solución de problemas o elaboración de trabajos.">Contar con estrategias para buscar fuentes de información orientada a confirmar o modificar la existente y utilizarlas en la solución de problemas o elaboración de trabajos.<p>
				f) <input type=radio name="p24" value="Conocer el funcionamiento de maquinaria, equipo y/o sistemas de la empresa "p17" trabaja, así como el "p15" de herramientas.">Conocer el funcionamiento de maquinaria, equipo y/o sistemas de la empresa donde trabaja, así como el empleo de herramientas.<p>
				g) <input type=radio name="p24" value="Contar con los conocimientos para realizar la instalación, revisión y diagnóstico de maquinarias y equipos.">Contar con los conocimientos para realizar la instalación, revisión y diagnóstico de maquinarias y equipos. <p>
				h) <input type=radio name="p24" value="Contar con conocimientos para aportar soluciones que ayuden a la optimización de recursos materiales, humanos y financieros.">Contar con conocimientos para aportar soluciones que ayuden a la optimización de recursos materiales, humanos y financieros.<p>
				i) <input type=radio name="p24" value="Contar con conocimientos suficientes para proponer innovaciones de los procesos productivos">Contar con conocimientos suficientes para proponer innovaciones de los procesos productivos<p>
				j) <input type=radio name="p24" value="Contar con estrategias para integrarse, participar activamente y defender propuestas en grupos de trabajo.">Contar con estrategias para integrarse, participar activamente y defender propuestas en grupos de trabajo.<p>
				k) <input type=radio name="p24" value="Contar con estrategias para tomar decisiones de manera fundamentada.">Contar con estrategias para tomar decisiones de manera fundamentada.<p>
				l) <input type=radio name="p24" value="otras">Otras
				<p>
				</div>
				<div id="p25"  style='display:none;'>
				<hr>
				<h4><strong>25.	¿Qué aspectos considera la empresa u organismo donde trabaja para calificar su desempeño laboral?</strong></h4>
				<p>
				a) <input type=radio name="p25" value="Desconoce los aspectos"> Desconoce los aspectos<p>
				b) <input type=radio name="p25" value="No se califica el desempeño laboral en su empresa"> No se califica el desempeño laboral en su empresa<p>
				c) <input type=radio name="p25" value="Aportación de elementos (ideas, herramientas, etc.) para mejorarlos productos laborales"> Aportación de elementos (ideas, herramientas, etc.) para mejorarlos productos laborales<p>
				d) <input type=radio name="p25" value="Aportación de elementos (ideas, herramientas, etc.) para mejorar los procesos laborales"> Aportación de elementos (ideas, herramientas, etc.) para mejorar los procesos laborales<p>
				e) <input type=radio name="p25" value="Calidad de los productos del trabajo individual"> Calidad de los productos del trabajo individual<p>
				f) <input type=radio name="p25" value="Aportación e iniciativa para proponer alternativas de solución a problemas"> Aportación e iniciativa para proponer alternativas de solución a problemas<p>
				g) <input type=radio name="p25" value="Creatividad e iniciativa en el desarrollo de sus actividades"> Creatividad e iniciativa en el desarrollo de sus actividades<p>
				h) <input type=radio name="p25" value="Tasa de productividad"> Tasa de productividad<p>
				i) <input type=radio name="p25" value="Disposición para realizar las actividades laborales"> Disposición para realizar las actividades laborales<p>
				j) <input type=radio name="p25" value="Puntualidad y asistencia"> Puntualidad y asistencia  <p>
				k) <input type=radio name="p25" value="Cumplimiento de las normas de higiene y seguridad en el trabajo"> Cumplimiento de las normas de higiene y seguridad en el trabajo <p>
				<p>
				</div>
				<div id="p26"  style='display:none;'>
				<hr>
				Para contestar la siguiente pregunta, considere las siguientes definiciones:
				<p>
				<i><strong>Capacitación Inductiva:</strong> Busca la integración rápida y eficaz del trabajador de nuevo ingreso, a la empresa organismo que lo contrató.
				<p>
				<strong>Capacitación para el puesto:</strong> Proceso de enseñanza orientado a propiciar en el trabajador de nuevo ingreso que no cumple con el perfil requerido, el aprendizaje de conocimientos y el desarrollo de habilidades para que realice eficientemente las funciones inherentes a su puesto.
				<p>
				<strong>Capacitación para el cambio de puesto:</strong> Proceso de enseñanza orientado a propiciar  en el trabajador, el aprendizaje de conocimientos y el desarrollo de habilidades que le permitan realizan eficientemente las funciones relacionadas con un puesto que no ha desempeñado.
				<p>
				<strong>Capacitación para el desarrollo:</strong> Proceso de enseñanza que apoya el aprendizaje de conocimientos, el desarrollo de habilidades y el cambio de actitudes para mejorar la relación del trabajador tanto en el ámbito laboral como en el personal.
				<p></i>
				<hr>
				<h4><strong>26.	¿Qué tipos de capacitación ha recibido en su trabajo actual?</strong></h4>
				<p>
				a) <input type=radio name="p26" value="No he recibido capacitación">No he recibido capacitación<p>
				b) <input type=radio name="p26" value="Inductiva">Inductiva<p>
				c) <input type=radio name="p26" value="Para el puesto">Para el puesto<p>
				d) <input type=radio name="p26" value="Para el cambio de puesto<">Para el cambio de puesto<p>
				e) <input type=radio name="p26" value="Para el desarrollo">Para el desarrollo<p>
				</div>
				<div id="p27"  style='display:none;'>
				<hr>
				D.	PERTINENCIA DE LOS SERVICIOS EDUCATIVOS.
				<p>
				
				<hr>
				<h4><strong>27.	¿Considera que el acervo bibliográfico existente en el plantel, está actualizado conforme a las actividades de aprendizaje desarrolladas y que inciden en lo que actualmente realiza?</strong></h4>
				<p>
				a) <input type=radio name="p27" value="Sí">Sí<p>
				b) <input type=radio name="p27" value="No">No<p>
				<p>
				</div>
				<div id="p28"  style='display:none;'>
				<hr>
				<h4><strong>28.	De las actividades relativas a orientación educativa que recibió en el plantel, ¿cuál fue la más  importante para usted? </strong></h4>
				<p>
				a) <input type=radio name="p28" value="No recibí orientación">  No recibí orientación.<p>
				b) <input type=radio name="p28" value="Institucional o escolar (disciplina)">  Institucional o escolar (disciplina)<p>  
				c) <input type=radio name="p28" value="Apoyo al adolescente o psicosocial">  Apoyo al adolescente o psicosocial<p>
				d) <input type=radio name="p28" value="Vocacional">  Vocacional<p> 
				e) <input type=radio name="p28" value="Pedagógica (Técnicas de Estudio)">  Pedagógica (Técnicas de Estudio)<p> 
				</div>
				<div id="p29"  style='display:none;'>
				<hr>
				<h4><strong>29.	De las actividades curriculares  en las que participó, ¿cuál fue la que usted realizo?</strong></h4>
				<p>
				a) <input type=radio name="p29" value="No participé en actividades curriculares">  No participé en actividades curriculares <p>
				b) <input type=radio name="p29" value="artísticas y culturales">  artísticas y culturales<p>
				c) <input type=radio name="p29" value="cívicas">  cívicas<p>
				d) <input type=radio name="p29" value="recreativas (excursiones, campamentos, etc.)">  recreativas (excursiones, campamentos, etc.)<p>
				e) <input type=radio name="p29" value="deportivas">  deportivas<p>
				f) <input type=radio name="p29" value="educación para la salud">  educación para la salud<p>
				<p>
				</div>
				<hr>
				 <center> <h4><strong>GRACIAS POR SU COLABORACIÓN, FAVOR DE ENVIAR EL CUESTIONARIO.</strong></h4><br>
				 <input class="form-btn" name="submit" type="submit" value="Enviar encuesta" /></center>
				 
				</form>
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
<?php
		}
	
?>