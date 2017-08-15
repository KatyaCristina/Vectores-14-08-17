<!--1. Realice un algoritmo que almacene en un vector cinco enteros y muestre en pantalla la suma de todos sus elementos. -->

<?php    
$numeros['Numero1']=4;
$numeros['Numero2']=6;
$numeros['Numero3']=8;
$numeros['Numero4']=10;
$numeros['Numero5']=12;
$suma=$numeros['Numero1']+$numeros['Numero2']+$numeros['Numero3']+$numeros['Numero4']+$numeros['Numero5'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 1</title>
	<link rel="stylesheet" href="Style.css">
	
  </head>
  <body>
	<div class="container">
	<h3> 1. Realice un algoritmo que almacene en un vector cinco enteros y muestre en pantalla la suma de todos sus elementos. </h3>
	<h4> Número 1: <?php echo $numeros['Numero1'] ?> </h4>
	<h4> Número 2: <?php echo $numeros['Numero2'] ?> </h4>
	<h4> Número 3: <?php echo $numeros['Numero3'] ?> </h4>
	<h4> Número 4: <?php echo $numeros['Numero4'] ?> </h4>
	<h4> Número 5: <?php echo $numeros['Numero5'] ?> </h4>
	<h4> La suma de todos los elementos es: <?php echo $suma ?> </h4>
	
	</div>
	
	    		
</body>
</html>
