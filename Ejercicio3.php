<!--
3. Realice un algoritmo que convierta tres horas dadas a minutos y luego a segundo. -->

<?php 

$horas=array(5,10, 15);
$min=60;
//en minutos
$conv[0]=$horas[0]*$min;
$conv[1]=$horas[1]*$min;
$conv[2]=$horas[2]*$min;
//en segundos
$conv[4]=$conv[0]*$min;
$conv[5]=$conv[1]*$min;
$conv[6]=$conv[2]*$min;


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 3</title>
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="container">
	<h3>3. Realice un algoritmo que convierta tres horas dadas a minutos y luego a segundo </h3>
	<h4> Primera hora digitada: <?php echo $horas[0] ?> </h4>
	<h4> Segunda hora digitada: <?php echo $horas[1] ?> </h4>
	<h4> Tercera hora digitada: <?php echo $horas[2] ?> </h4>
	<hr/>
	<h4> <?php echo $horas[0], " horas en minutos equivalen a: ",$conv[0]," y en segundos equivalen a:", $conv[4], "." ?> </h4>
	<h4> <?php echo $horas[1], " horas en minutos equivalen a: ",$conv[1]," y en segundos equivalen a:", $conv[5], "." ?> </h4>
	<h4> <?php echo $horas[2], " horas en minutos equivalen a: ",$conv[2]," y en segundos equivalen a:", $conv[6], "." ?> </h4>
	
	</div>
	    		
</body>
</html>
