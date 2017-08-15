<!--5. Desarrolle un algoritmo que pida 5 enteros lo eleve al cubo y lo muestre en pantalla.  -->

<?php    
$numeros['Numero1']=4;
$numeros['Numero2']=6;
$numeros['Numero3']=8;
$numeros['Numero4']=10;
$numeros['Numero5']=12;

$cubo['cubo1']=$numeros['Numero1']*$numeros['Numero1']*$numeros['Numero1'];
$cubo['cubo2']=$numeros['Numero2']*$numeros['Numero2']*$numeros['Numero2'];
$cubo['cubo3']=$numeros['Numero3']*$numeros['Numero3']*$numeros['Numero3'];
$cubo['cubo4']=$numeros['Numero4']*$numeros['Numero4']*$numeros['Numero4'];
$cubo['cubo5']=$numeros['Numero5']*$numeros['Numero5']*$numeros['Numero5'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 5</title>
	<link rel="stylesheet" href="Style.css">
	
  </head>
  <body>
	<div class="container">
	<h3>5. Desarrolle un algoritmo que pida 5 enteros lo eleve al cubo y lo muestre en pantalla.</h3>
	<h4> El número <?php echo $numeros['Numero1'], "  elevado al cubo es:", $cubo['cubo1'] ?> </h4>
	<h4> El número <?php echo $numeros['Numero2'], "  elevado al cubo es:", $cubo['cubo2'] ?> </h4>
	<h4> El número <?php echo $numeros['Numero3'], "  elevado al cubo es:", $cubo['cubo3'] ?> </h4>
	<h4> El número <?php echo $numeros['Numero4'], "  elevado al cubo es:", $cubo['cubo4'] ?> </h4>
	<h4> El número <?php echo $numeros['Numero5'], "  elevado al cubo es:", $cubo['cubo5'] ?> </h4>
	
	
	</div>
	
	    		
</body>
</html>
