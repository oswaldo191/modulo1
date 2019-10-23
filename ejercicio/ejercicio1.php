<?php 

$x = 144;
$y = 999;

$suma = $x + $y;

$resta = $x - $y;

$mult = $x * $y;

$div = $x / $y;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1</title>
</head>
<body>
	<h2>Valores de variables</h2>
	<p>Valor variable x = <?php echo $x;?></p>
	<p>Valor variable y = <?php echo $y;?></p>
	<br>
	<h2>Suma</h2>
	<p>La suma es: <?php echo $suma;?></p>
	<br>
	<h2>Resta</h2>
	<p>La resta es: <?php echo $resta;?></p>
	<br>
	<h2>Multiplicación</h2>
	<p>La multiplicación es: <?php echo $mult;?></p>
	<br>
	<h2>División</h2>
	<p>La división es: <?php echo $div;?></p>

</body>
</html>