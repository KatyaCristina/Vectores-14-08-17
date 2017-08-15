<!---7. Calcular la paga neta semanal de un trabajador conociendo el número de horas diarias trabajadas, la tarifa y 
el valor del impuesto.--->

<?php

	$horas["lunes"]=5;
	$horas["martes"]=8;
	$horas["miercoles"]=7;
	$horas["jueves"]=10;
	$horas["viernes"]=3;
	$totalhoras=$horas["lunes"]+$horas["martes"]+$horas["miercoles"]+$horas["jueves"]+$horas["viernes"];
	$tarifa=20000;
	$impuesto=6000;
	$paga=($totalhoras*$tarifa)-$impuesto;

    ?>
	<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 7</title>
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="container">
	<h3> 7. Calcular la paga neta semanal de un trabajador conociendo el número de horas diarias trabajadas, la tarifa y el valor del impuesto.</h3>
	<h4> Horas trabajadas: <?php echo $totalhoras ?> </h4>
	<h4> Valor tarifa: <?php echo $tarifa ?> </h4>
	<h4> Valor tasa de impuesto: <?php echo $impuesto ?> </h4>
	<h4> Paga neta: <?php echo $paga ?> </h4>
	</div>

	    		
</body>
</html>
