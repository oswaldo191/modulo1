<?php 


class peso {

	function __construct($moneda)
	{
		 $this->moneda = $moneda;
	}

	 function peso($moneda) {

	 	$dolar = $moneda;

	 	$peso = 0.01;

	    $result = $peso / $dolar;

	    return $result;
	}

}

$cambio = new peso($_GET["moneda"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cambio a peso</title>
</head>
<body>

	<h1>Cambio a peso</h1>
	<p>Peso recibido: <?php echo $_GET["moneda"];?> / US$ 53.00 = <?php echo $cambio->peso($_GET["moneda"]); ?></p>

</body>
</html>