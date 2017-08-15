<!--
2. Realice un algoritmo que convierta 7 cantidades dadas en kilogramos a gramos y lo muestre en pantalla.  -->

<?php 

define("gramos","1000");
$kilos[]=3;
$kilos[]=5;
$kilos[]=7;
$kilos[]=9;
$kilos[]=11;
$kilos[]=13;
$kilos[]=15;
$conv[]=gramos*$kilos[0];
$conv[]=gramos*$kilos[1];
$conv[]=gramos*$kilos[2];
$conv[]=gramos*$kilos[3];
$conv[]=gramos*$kilos[4];
$conv[]=gramos*$kilos[5];
$conv[]=gramos*$kilos[6];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 2</title>
	<link rel="stylesheet" href="Style.css">
  </head>
  <body>
  <div class="container">
	<h3> 2. Realice un algoritmo que convierta 7 cantidades dadas en kilogramos a gramos y lo muestre en pantalla </h3>
	<h4> En la posición 0 Cantidad de kilos: <?php echo$kilos[0]?> </h4>
	<h4> En la posición 1 Cantidad de kilos: <?php echo$kilos[1]?> </h4>
	<h4> En la posición 2 Cantidad de kilos: <?php echo$kilos[2]?> </h4>
	<h4> En la posición 3 Cantidad de kilos: <?php echo$kilos[3]?> </h4>
	<h4> En la posición 4 Cantidad de kilos: <?php echo$kilos[4]?> </h4>
	<h4> En la posición 5 Cantidad de kilos: <?php echo$kilos[5]?> </h4>
	<h4> En la posición 6 Cantidad de kilos: <?php echo$kilos[6]?> </h4><hr/>
	<h4> En la posición 0 la conversión de kilos a gramos es: <?php echo$conv[0]?> </h4>
	<h4> En la posición 1 la conversión de kilos a gramos es: <?php echo$conv[1]?> </h4>
	<h4> En la posición 2 la conversión de kilos a gramos es: <?php echo$conv[2]?> </h4>
	<h4> En la posición 3 la conversión de kilos a gramos es: <?php echo$conv[3]?> </h4>
	<h4> En la posición 4 la conversión de kilos a gramos es: <?php echo$conv[4]?> </h4>
	<h4> En la posición 5 la conversión de kilos a gramos es: <?php echo$conv[5]?> </h4>
	<h4> En la posición 6 la conversión de kilos a gramos es: <?php echo$conv[6]?> </h4>
	
	</div>
	    		
</body>
</html>
