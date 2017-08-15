<!--6. Realice un algoritmo que convierta 3 temperaturas expresados en grados kelvin a grados fahrenheit y lo muestre en pantalla.  -->

<?php 

$temp["tempk1"]=10;
$temp["tempk2"]=45;
$temp["tempk3"]=71;


$temp["tempf1"]= 1.8*($temp["tempk1"] - 273)+32;
$temp["tempf2"]= 1.8*($temp["tempk2"] - 273)+32;
$temp["tempf3"]= 1.8*($temp["tempk3"] - 273)+32;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 6</title>
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
	<div class="container">
	<h3>6. Realice un algoritmo que convierta 3 temperaturas expresados en grados kelvin a grados fahrenheit y lo muestre en pantalla </h3>
  	<h4> Temperatura en kelvin: <?php echo $temp["tempk1"], ", convertido a fahrenheit es: ",$temp["tempf1"] ?> </h4>
	<h4> Temperatura en kelvin: <?php echo $temp["tempk2"], ", convertido a fahrenheit es: ",$temp["tempf2"] ?> </h4>
	<h4> Temperatura en kelvin: <?php echo $temp["tempk3"], ", convertido a fahrenheit es: ",$temp["tempf3"] ?> </h4>
	  </div>  		
</body>
</html>
