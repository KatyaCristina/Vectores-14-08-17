<!--8. Realice un algoritmo que calcule el área de 5 paralelogramos, cuyas medidas están almacenadas en dos vectores y lo muestre en pantalla.  -->

<?php 
$base=array("base1"=>12, "base2"=>8, "base3"=>6, "base4"=>20, "base5"=>7);
$altura=array("altura1"=>8, "altura2"=>6, "altura3"=>4, "altura4"=>12, "altura5"=>5);
$area[0]=$base["base1"]*$altura["altura1"];
$area[1]=$base["base2"]*$altura["altura2"];
$area[2]=$base["base3"]*$altura["altura3"];
$area[3]=$base["base4"]*$altura["altura4"];
$area[4]=$base["base5"]*$altura["altura5"];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Ejercicio 4</title>
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
	<div class="container">
	<h3>4. Realice un algoritmo que calcule el área de un 5 paralelogramos, cuyas medidas están almacenadas en dos vectores y lo muestre en pantalla </h3>
	<h4> Paralelogramo 1: <?php echo "base ",$base["base1"],", altura ",$altura["altura1"] ?> </h4>
	<h4> Paralelogramo 2: <?php echo "base ",$base["base2"],", altura ",$altura["altura2"] ?> </h4>
	<h4> Paralelogramo 3: <?php echo "base ",$base["base3"],", altura ",$altura["altura3"] ?> </h4>
	<h4> Paralelogramo 4: <?php echo "base ",$base["base4"],", altura ",$altura["altura4"] ?> </h4>
	<h4> Paralelogramo 5: <?php echo "base ",$base["base5"],", altura ",$altura["altura5"] ?> </h4>
	<hr/>
	
	<h4> El área del paralelogramo 1 es: <?php echo $area[0] ?> </h4>
	<h4> El área del paralelogramo 2 es: <?php echo $area[1] ?> </h4>
	<h4> El área del paralelogramo 3 es: <?php echo $area[2] ?> </h4>
	<h4> El área del paralelogramo 4 es: <?php echo $area[3] ?> </h4>
	<h4> El área del paralelogramo 5 es: <?php echo $area[4] ?> </h4>
	</div>
	    		
</body>
</html>