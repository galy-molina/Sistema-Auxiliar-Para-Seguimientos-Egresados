<?php

					$serber='localhost';
					$user1='root';
					$pass1='';
					$bd='sintegral';


function totales($serber,$user1,$pass1,$bd,$a){
               $connection = mysql_connect($serber,$user1,$pass1) or die ("Unable to connect!");
			   $query = "$a";
			   $result = mysql_db_query($bd, $query, $connection) or die ("Error in query: $query. " . mysql_error());
			   list($a) = mysql_fetch_row($result);
			   $data = mysql_num_rows($result);
			   mysql_free_result($result); 
			   
			   return $a;

}

/*$a=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_articulos_informe INNER JOIN c_informe_coltlax ON c_articulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2012');
$b=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_articulos_informe INNER JOIN c_informe_coltlax ON c_articulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2013');
$c=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_articulos_informe INNER JOIN c_informe_coltlax ON c_articulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2014');
$d=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_articulos_informe INNER JOIN c_informe_coltlax ON c_articulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2015');
$e=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_articulos_informe INNER JOIN c_informe_coltlax ON c_articulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2016');
*/

$a1=totales($serber,$user1,$pass1,$bd,'SELECT count(c_articulos_informecv.d_c_anio) as total FROM c_articulos_informecv where c_articulos_informecv.d_c_anio=2012');
$b1=totales($serber,$user1,$pass1,$bd,'SELECT count(c_articulos_informecv.d_c_anio) as total FROM c_articulos_informecv where c_articulos_informecv.d_c_anio=2013');
$c1=totales($serber,$user1,$pass1,$bd,'SELECT count(c_articulos_informecv.d_c_anio) as total FROM c_articulos_informecv where c_articulos_informecv.d_c_anio=2014');
$d1=totales($serber,$user1,$pass1,$bd,'SELECT count(c_articulos_informecv.d_c_anio) as total FROM c_articulos_informecv where c_articulos_informecv.d_c_anio=2015');
$e1=totales($serber,$user1,$pass1,$bd,'SELECT count(c_articulos_informecv.d_c_anio) as total FROM c_articulos_informecv where c_articulos_informecv.d_c_anio=2016 AND c_n_cve_persona !=7');

$a=$a+$a1;
$b=$b+$b1;
$c=$c+$c1;
$d=$d+$d1;
$e=$e+$e1;

$totala=$a+$b+$c+$d+$e;


//libros
/*
$ac=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_libros_informe INNER JOIN c_informe_coltlax ON c_libros_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2012');
$bc=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_libros_informe INNER JOIN c_informe_coltlax ON c_libros_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2013');
$cc=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_libros_informe INNER JOIN c_informe_coltlax ON c_libros_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2014');
$dc=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_libros_informe INNER JOIN c_informe_coltlax ON c_libros_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2015');
$ec=totales($serber,$user1,$pass1,$bd,'SELECT count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_libros_informe INNER JOIN c_informe_coltlax ON c_libros_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2016');
*/

$ac1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_libros_informecv where d_c_anio=2012');
$bc1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_libros_informecv where d_c_anio=2013');
$cc1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_libros_informecv where d_c_anio=2014');
$dc1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_libros_informecv where d_c_anio=2015');
$ec1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_libros_informecv where d_c_anio=2016 and c_n_cve_persona!=7');

$ac=$ac+$ac1;
$bc=$bc+$bc1;
$cc=$cc+$cc1;
$dc=$dc+$dc1;
$ec=$ec+$ec1;

$totalc=$ac+$bc+$cc+$dc+$ec;

//Capitulos libros
/*
$al=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2012');
$bl=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2013');
$cl=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2014');
$dl=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2015');
$el=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2016');
*/

$al1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_capitulos_informecv where d_c_anio=2012');
$bl1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_capitulos_informecv where d_c_anio=2013');
$cl1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_capitulos_informecv where d_c_anio=2014');
$dl1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_capitulos_informecv where d_c_anio=2015');
$el1=totales($serber,$user1,$pass1,$bd,'select count(*) from c_capitulos_informecv where d_c_anio=2016 and c_n_cve_persona!=7');

$al=$al+$al1;
$bl=$bl+$bl1;
$cl=$cl+$cl1;
$dl=$dl+$dl1;
$el=$el+$el1;

$totall=$al+$bl+$cl+$dl+$el;


//Reseñas
/*
$al=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2012');
$bl=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2013');
$cl=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2014');
$dl=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2015');
$el=totales($serber,$user1,$pass1,$bd,'SELECT Count(c_informe_coltlax.c_n_cve_anio_informe) as total FROM c_capitulos_informe INNER JOIN c_informe_coltlax ON c_capitulos_informe.c_n_cve_informe_coltlax = c_informe_coltlax.c_n_cve_informe_coltlax where c_informe_coltlax.c_n_cve_anio_informe=2016');
*/

/*$ar=totales($serber,$user1,$pass1,$bd,'select count(*) from c_resena_cv where d_c_ano=2012');
$br=totales($serber,$user1,$pass1,$bd,'select count(*) from c_resena_cv where d_c_ano=2013');
$cr=totales($serber,$user1,$pass1,$bd,'select count(*) from c_resena_cv where d_c_ano=2014');
$dr=totales($serber,$user1,$pass1,$bd,'select count(*) from c_resena_cv where d_c_ano=2015');*/
$er=totales($serber,$user1,$pass1,$bd,'select count(*) from c_resena_cv where d_c_ano=2016 and c_n_cve_persona!=7');



$tota1r=$ar+$br+$cr+$dr+$er;

//Dictamen
/*$ad1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_dictamen_informecv where d_c_anio=2012');
$bd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_dictamen_informecv where d_c_anio=2013');
$cd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_dictamen_informecv where d_c_anio=2014');
$dd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_dictamen_informecv where d_c_anio=2015');*/
$ed1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_dictamen_informecv where d_c_anio=2016  and c_n_cve_persona!=7');

$adr=$ad+$ad1;
$bdr=$bd+$bd1;
$cdr=$cd+$cd1;
$ddr=$dd+$dd1;
$edr=$ed+$ed1;

$totaldic=$adr+$bdr+$cdr+$ddr+$edr;

//Difusión
/*$add1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_difusion_informe where d_c_anio like "2012%"');
$bdd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_difusion_informe where d_c_anio like "2013%"');
$cdd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_difusion_informe where d_c_anio like "2014%"');
$ddd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_difusion_informe where d_c_anio like "2015%"');*/
$edd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_difusion_informe where d_c_anio like "2016%"  and c_n_cve_persona!=7');

$addr=$add+$add1;
$bddr=$bdd+$bdd1;
$cddr=$cdd+$cdd1;
$dddr=$ddd+$ddd1;
$eddr=$edd+$edd1;

$totaldif=$addr+$bddr+$cddr+$dddr+$eddr;

//Proyectos
$ap1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_proyectos_informecv where d_c_aniop=2012');
$bp1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_proyectos_informecv where d_c_aniop=2013');
$cp1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_proyectos_informecv where d_c_aniop=2014');
$dp1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_proyectos_informecv where d_c_aniop=2015');
$ep1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_proyectos_informecv where d_c_aniop=2016  and c_n_persona!=7');

$apr=$ap+$ap1;
$bpr=$bp+$bp1;
$cpr=$cp+$cp1;
$dpr=$dp+$dp1;
$epr=$ep+$ep1;

$totalproy=$apr+$bpr+$cpr+$dpr+$epr;

//Revistas
/*$arr1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_revista_informe where d_c_anio=2012');
$brr1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_revista_informe where d_c_anio=2013');
$crr1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_revista_informe where d_c_anio=2014');
$drr1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_revista_informe where d_c_anio=2015');*/
$err1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_revista_informe where d_c_anio=2016  and c_n_cve_persona!=7');

$arr=$arr+$arr1;
$brr=$brr+$brr1;
$crr=$crr+$crr1;
$drr=$drr+$drr1;
$err=$err+$err1;

$totalrev=$arr+$brr+$crr+$drr+$err;

//Congresos
$acrr=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_participantes_ponenciascv where d_f_fecha_inicio like "2012%" and c_n_cve_persona!=7');
$bcrr=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_participantes_ponenciascv where d_f_fecha_inicio like "2013%" and c_n_cve_persona!=7');
$ccrr=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_participantes_ponenciascv where d_f_fecha_inicio like "2014%" and c_n_cve_persona!=7');
$dcrr=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_participantes_ponenciascv where d_f_fecha_inicio like "2015%" and c_n_cve_persona!=7');
$ecrr=totales($serber,$user1,$pass1,$bd,'SELECT count(*) as total FROM c_participantes_ponenciascv where d_f_fecha_inicio like "2016%" and c_n_cve_persona!=7');

$totalcong=$acrr+$bcrr+$ccrr+$dcrr+$ecrr;

?>		


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Productividad COLTLAX</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	
	<style>
	.select {
	color:#000000;}

	.btn-label {position: relative;left: -12px;display: inline-block;padding: 6px 12px;background: rgba(0,0,0,0.15);border-radius: 3px 0 0 3px;}
	.btn-labeled {padding-top: 0;padding-bottom: 0;}
	.btn { margin-bottom:10px; }
</style>


	
	<script type="text/javascript" src="js/loader.js"></script>	
	<script>
	function dproduc(){
	a=form.mes.value;
	b=form.anio.value;
	
	if (a==""){alert('Selecciona el mes'); return false}
	else if (b==""){alert('Selecciona el año'); return false}
	else {window.open("../excel3/excel2.php?mes="+a+"&anio="+b);}
	}
	</script>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="green" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<img src="images/logo.png" alt="Colegio de Tlaxcala S.C." width="210">		</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">

	                <li class="active">
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Productividad</p>
	                    </a>
	                </li>
					
	                <li class="active">
	                    <a href="validardoc.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Evidencias por Docente</p>

	                    </a>
	                </li>					

	                <li>
	                    <a href="../excel2/excel2.php">
	                        <i class="material-icons">vertical_align_bottom</i>
	                        <p>Descargar Productividad 2016</p>
	                    </a>
	                </li>
                    
	               <!-- <li>
	                    <a href="../excel2/excel2e.php">
	                        <i class="material-icons">vertical_align_bottom</i>
	                        <p>Descargar Productividad Enero</p>
	                    </a>
	                </li>   -->
                    
                    	                <li class="list-group-item list-group-item-success">

	                       <form name="form" >
							<select name="mes">
							<option value="">Mes</option>
							<option value="1">Enero</option>
							<option value="2">Febrero</option>
							<option value="3">Marzo</option>
							<option value="4">Abril</option>
							<option value="5">Mayo</option>
							<option value="6">Junio</option>
							<option value="7">Julio</option>
							<option value="8">Agosto</option>
							<option value="9">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
							</select>
							<select name="anio">
							<option value="">Año</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							</select>
							</form>
							
							<button type="button" class="btn btn-labeled btn-success btn-sm" onclick="dproduc();">Descargar Productividad</button>
	                   
	                </li>                    


	                <li>
	                    <a href="articulos.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Art&iacute;culos</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="libros.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Libros</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="clibros.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Capitulos de Libros</p>
	                    </a>
	                </li>

	                <li>
	                    <a href="resenas.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Reseñas</p>
	                    </a>
	                </li>
					
	                <li>
	                    <a href="dictamen.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Dictámenes</p>
	                    </a>
	                </li>					
	                <li>
	                    <a href="difusion.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Difusión</p>
	                    </a>
	                </li>

	                <li>
	                    <a href="protecto.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Proyectos de Investigación</p>
	                    </a>
	                </li>					

	                <li>
	                    <a href="revistas.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Revistas</p>
	                    </a>
	                </li>
                    
                    <li>
	                    <a href="congresos.php">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Participación en Congresos</p>
	                    </a>
	                </li>		
					
	                <li>
	                    <a href="javascript:self.close();">
	                       <i class="material-icons">power_settings_new</i>
	                        <p>Cerrar</p>
	                    </a>
	                </li>	
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
				  <div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					  <a class="navbar-brand" href="#">Productividad del Colegio de Tlaxcala A.C.</a>					</div>
					
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">library_books</i>
								</div>
								<div class="card-content">
									<p class="category">Articulos</p>
									<h3 class="title"><?php echo "$e1"; ?></h3>
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">book</i>
								</div>
								<div class="card-content">
									<p class="category">Libros</p>
									<h3 class="title"><?php echo "$ec1"; ?></h3>
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">import_contacts</i>
								</div>
								<div class="card-content">
									<p class="category">Capitulos de libros</p>
									<h3 class="title"><?php echo "$el1"; ?></h3>
								</div>

							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">description</i>
								</div>
								<div class="card-content">
									<p class="category">Reseñas</p>
									<h3 class="title"><?php echo "$tota1r"; ?></h3>
								</div>

							</div>
						</div>
					</div>
					
<!-- 2do bloque-->					
<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">library_books</i>
								</div>
								<div class="card-content">
									<p class="category">Dictámenes</p>
									<h3 class="title"><?php echo "$totaldic"; ?></h3>
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">book</i>
								</div>
								<div class="card-content">
									<p class="category">Difusión</p>
									<h3 class="title"><?php echo "$totaldif"; ?></h3>
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">import_contacts</i>
								</div>
								<div class="card-content">
									<p class="category">Proyectos de Investigación</p>
									<h3 class="title"><?php echo "$totalproy"; ?></h3>
								</div>

							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">description</i>
								</div>
								<div class="card-content">
									<p class="category">Revistas</p>
									<h3 class="title"><?php echo "$totalrev"; ?></h3>
								</div>

							</div>
						</div>
					</div>
</div>					
<!-- fin 2do bloque -->

<!-- 3er bloque-->					
<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">library_books</i>
								</div>
								<div class="card-content">
									<p class="category">Congresos</p>
									<h3 class="title"><?php echo "$totalcong"; ?></h3>
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">book</i>
								</div>
								<div class="card-content">
									<p class="category">Pendiente</p>
									<h3 class="title"><?php echo "--"; ?></h3>
								</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">import_contacts</i>
								</div>
								<div class="card-content">
									<p class="category">Pendiente</p>
									<h3 class="title"><?php echo "---"; ?></h3>
								</div>

							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">description</i>
								</div>
								<div class="card-content">
									<p class="category">Pendiente</p>
									<h3 class="title"><?php echo "---"; ?></h3>
								</div>

							</div>
						</div>
					</div>
					</div>					
<!-- fin 3er bloque -->


					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="dailySalesChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Articulos</h4>
									<p class="category">Productividad Anual</p>									
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="emailsSubscriptionChart"></div>									
								</div>
								<div class="card-content">
									<h4 class="title">Libros</h4>
									<p class="category">Productividad Anual</p>									
								</div>


							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="completedTasksChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Capitulos de libros</h4>
									<p class="category">Productividad Anual</p>
								</div>

							</div>
						</div>
					</div>
					
					
<!-- Gráfica Pastel -->

<div class="row">
						<div class="col-md-12">
							<div id="piechart_3d" style="width: 700px; height: 400px;"></div>			
						</div>

</div>
<!-- Fin gráfica Pastel -->		
<hr>
<!-- Gráfica Barras -->

<div class="row">
						<div class="col-md-12">
							<div id="barra" style="width: 700px; height: 400px;"></div>			
						</div>

</div>
<!-- Fin gráfica Barras -->	

<hr>
<!-- Gráfica lineas -->

<div class="row">
  <div class="col-md-12">
    <div id="curve_chart" style="width: 700px; height: 400px"></div>
  </div>

</div>
<!-- Fin gráfica lineas -->					

					
					
					
				</div>
			</div>
			


			<footer class="footer">
				<div class="container-fluid">
					
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.coltlax.edu.mx">Colegio de Tlaxcala A.C.</a>
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script>
	



type = ['','info','success','warning','danger'];


demo = {
    initPickColor: function(){
        $('.pick-class-label').click(function(){
            var new_class = $(this).attr('new-class');
            var old_class = $('#display-buttons').attr('data-class');
            var display_div = $('#display-buttons');
            if(display_div.length) {
            var display_buttons = display_div.find('.btn');
            display_buttons.removeClass(old_class);
            display_buttons.addClass(new_class);
            display_div.attr('data-class', new_class);
            }
        });
    },

    initFormExtendedDatetimepickers: function(){
        $('.datetimepicker').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
         });
    },

    initDocumentationCharts: function(){
        /* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

        dataDailySalesChart = {
            labels: ['2012', '2013', '2014', '2015', '2016'],
            series: [
                [1, 14, 88, 80, 48]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 100, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);
    },

    initDashboardPageCharts: function(){

        /* ----------==========     Daily Sales Chart initialization    ==========---------- */
		
		

        dataDailySalesChart = {
            labels: ['2012', '2013', '2014', '2015', '2016'],
            series: [
                [<?php echo "$a,$b,$c,$d,$e";?>]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 100, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);



        /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

        dataCompletedTasksChart = {
            labels: ['2012', '2013', '2014', '2015', '2016'],
            series: [
                [<?php echo "$al,$bl,$cl,$dl,$el";?>]
            ]
        };

        optionsCompletedTasksChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 100, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0}
        }

        var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

        // start animation for the Completed Tasks Chart - Line Chart
        md.startAnimationForLineChart(completedTasksChart);



        /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

        var dataEmailsSubscriptionChart = {
		 labels: ['2012', '2013', '2014', '2015', '2016'],
          series: [
                [<?php echo "$ac,$bc,$cc,$dc,$ec";?>]

          ]
        };
        var optionsEmailsSubscriptionChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: 100,
            chartPadding: { top: 0, right: 3, bottom: 0, left: 0}
        };
        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 3,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];
        var emailsSubscriptionChart = Chartist.Bar('#emailsSubscriptionChart', dataEmailsSubscriptionChart, optionsEmailsSubscriptionChart, responsiveOptions);

        //start animation for the Emails Subscription Chart
        md.startAnimationForBarChart(emailsSubscriptionChart);

    },

    initGoogleMaps: function(){
        var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
        var mapOptions = {
          zoom: 13,
          center: myLatlng,
          scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
          styles: [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}]

        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!"
        });

        // To add the marker to the map, call setMap();
        marker.setMap(map);
    },

	showNotification: function(from, align){
    	color = Math.floor((Math.random() * 4) + 1);

    	$.notify({
        	icon: "notifications",
        	message: "Welcome to <b>Material Dashboard</b> - a beautiful freebie for every web developer."

        },{
            type: type[color],
            timer: 4000,
            placement: {
                from: from,
                align: align
            }
        });
	}



}
	
	
	
	
	
	</script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>
    
<?php

function ceros($a){
	if ($a==""){
	$a=0;
	}
	
	return $a;
}

$totala=ceros($totala);
$totalc=ceros($totalc);
$totall=ceros($totall);
$totalr=ceros($totalr);
$totaldic=ceros($totaldic);
$totaldif=ceros($totaldif);
$totalproy=ceros($totalproy);
$totalrev=ceros($totalrev);
$totalcong=ceros($totalcong);




//graficas lineas
//Artículos
  $la1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_articulos_informecv`  where c_n_cve_centro_investigacion=1 and d_c_anio=2016 AND c_n_cve_persona !=7');
  $la2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_articulos_informecv`  where c_n_cve_centro_investigacion=2 and d_c_anio=2016 AND c_n_cve_persona !=7');	  
  $la3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_articulos_informecv`  where c_n_cve_centro_investigacion=3 and d_c_anio=2016 AND c_n_cve_persona !=7');  
  
//Libros
  $ll1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_libros_informecv`  where c_n_cve_centro_investigacion=1 and d_c_anio=2016 AND c_n_cve_persona !=7');
  $ll2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_libros_informecv`  where c_n_cve_centro_investigacion=2 and d_c_anio=2016 AND c_n_cve_persona !=7');	  
  $ll3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_libros_informecv`  where c_n_cve_centro_investigacion=3 and d_c_anio=2016 AND c_n_cve_persona !=7');    
  
//Capítulos Libros
  $lc1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_capitulos_informecv`  where c_n_cve_centro_investigacion=1 and d_c_anio=2016 AND c_n_cve_persona !=7');
  $lc2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_capitulos_informecv`  where c_n_cve_centro_investigacion=2 and d_c_anio=2016 AND c_n_cve_persona !=7');	  
  $lc3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_capitulos_informecv`  where c_n_cve_centro_investigacion=3 and d_c_anio=2016 AND c_n_cve_persona !=7');
  
//Reseñas
  $lr1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_resena_cv`  where c_n_cve_centro_investigacion=1 and d_c_ano=2016 AND c_n_cve_persona !=7');
  $lr2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_resena_cv`  where c_n_cve_centro_investigacion=2 and d_c_ano=2016 AND c_n_cve_persona !=7');	  
  $lr3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_resena_cv`  where c_n_cve_centro_investigacion=3 and d_c_ano=2016 AND c_n_cve_persona !=7');  
  
//Dictamenes
  $ld1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_dictamen_informecv`  where c_n_cve_centro_investigacion=1 and d_c_anio=2016 AND c_n_cve_persona !=7');
  $ld2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_dictamen_informecv`  where c_n_cve_centro_investigacion=2 and d_c_anio=2016 AND c_n_cve_persona !=7');	  
  $ld3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_dictamen_informecv`  where c_n_cve_centro_investigacion=3 and d_c_anio=2016 AND c_n_cve_persona !=7');    
  
//Difusión y divulgación
  $ldd1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_difusion_informe`  where c_n_cve_centro_investigacion=1 and d_c_anio like "2016%" AND c_n_cve_persona !=7');
  $ldd2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_difusion_informe`  where c_n_cve_centro_investigacion=2 and d_c_anio like "2016%" AND c_n_cve_persona !=7');	  
  $ldd3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_difusion_informe`  where c_n_cve_centro_investigacion=3 and d_c_anio like "2016%" AND c_n_cve_persona !=7');      
  
//Proyectos de Investigación
  $lp1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_proyectos_informecv`  where c_n_cve_centro_investigacion=1 and d_c_aniop=2016 and c_n_persona!=7');
  $lp2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_proyectos_informecv`  where c_n_cve_centro_investigacion=2 and d_c_aniop=2016 and c_n_persona!=7');	  
  $lp3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_proyectos_informecv`  where c_n_cve_centro_investigacion=3 and d_c_aniop=2016 and c_n_persona!=7');
  
//Revistas
  $lre1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_revista_informe`  where c_n_cve_centro_investigacion=1 and d_c_anio=2016 and c_n_cve_persona!=7');
  $lre2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_revista_informe`  where c_n_cve_centro_investigacion=2 and d_c_anio=2016 and c_n_cve_persona!=7');	  
  $lre3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_revista_informe`  where c_n_cve_centro_investigacion=3 and d_c_anio=2016 and c_n_cve_persona!=7'); 
  
//Participación en Congresos
  $lpc1=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_participantes_ponenciascv`  where c_n_cve_centro_investigacion=1 and d_f_fecha_inicio like "2016%" and c_n_cve_persona!=7');
  $lpc2=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_participantes_ponenciascv`  where c_n_cve_centro_investigacion=2 and d_f_fecha_inicio like "2016%" and c_n_cve_persona!=7');
  $lpc3=totales($serber,$user1,$pass1,$bd,'SELECT count(*) FROM `c_participantes_ponenciascv`  where c_n_cve_centro_investigacion=3 and d_f_fecha_inicio like "2016%" and c_n_cve_persona!=7');

?>    
	

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Productividad Anual', 'Total'],
          ['Articulos',<?php echo "$totala"; ?>],
          ['Libros',<?php echo "$totalc"; ?>],
          ['Cap. Libros',<?php echo "$totall"; ?>],
          ['Reseñas',<?php echo "$tota1r"; ?>],
          ['Dictamenes',<?php echo "$totaldic"; ?>],
          ['Difusión',<?php echo "$totaldif"; ?>],
          ['Proyectos',<?php echo "$totalproy"; ?>],
          ['Revistas',<?php echo "$totalrev"; ?>],
          ['Congresos',<?php echo "$totalcong"; ?>]
        ]);

        var options = {
          title: 'Productividad Anual COLTLAX A.C.',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
	

  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Productividad Anual', 'Total', { role: "style" } ],
          ['Articulos',<?php echo "$totala"; ?>, "green"],
          ['Libros',<?php echo "$totalc"; ?>, "green"],
          ['Cap. Libros',<?php echo "$totall"; ?>, "green"],
          ['Reseñas',<?php echo "$tota1r"; ?>, "green"],
          ['Dictamenes',<?php echo "$totaldic"; ?>, "green"],
          ['Difusión',<?php echo "$totaldif"; ?>, "green"],
          ['Proyectos',<?php echo "$totalproy"; ?>, "green"],
          ['Revistas',<?php echo "$totalrev"; ?>, "green"],
          ['Congresos',<?php echo "$totalcong"; ?>, "green"]
        ]);		  
          

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Productividad Anual",
        width: 700,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("barra"));
      chart.draw(view, options);
  }
  </script>
  
 <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
	  		  		  		  
	
		['Productividad', 'Centro 1', 'Centro 2', 'Centro 3'],
		['Art.',<?php echo "$la1,$la2,$la3"; ?> ],
		['Lib.',<?php echo "$ll1,$ll2,$ll3"; ?> ],
		['CLib.',<?php echo "$lc1,$lc2,$lc3"; ?> ],
		['Res.',<?php echo "$lr1,$lr2,$lr3"; ?> ],
		['Dict.',<?php echo "$ld1,$ld2,$ld3"; ?> ],
		['Dif.',<?php echo "$ldd1,$ldd2,$ldd3"; ?> ],
		['Proy.',<?php echo "$lp1,$lp2,$lp3"; ?> ],
		['Rev.',<?php echo "$lre1,$lre2,$lre3"; ?> ],
		['PCong.',<?php echo "$lpc1,$lpc2,$lpc3"; ?> ]	  
          











		  
        ]);

        var options = {
          title: 'Productividad por Centro de Investigación 2016',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>  
  


</html>

