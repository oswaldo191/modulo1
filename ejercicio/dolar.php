<?php 


class dolar {

	function __construct($moneda)
	{
		 $this->moneda = $moneda;
	}

	 function dolar($moneda) {

	 	$peso = $moneda;

	 	$dolar = 53;

	    $result = $peso * $dolar;

	    return $result;
	}

}

$cambio = new dolar($_GET["moneda"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cambio a dolar</title>
</head>
<body>

	<h1>Cambio a dolar</h1>
	<p>La tasa del dolar es de : RD$ 53.00</p>
	<p><?php echo $_GET["moneda"];?> x RD$ 53.00 = <?php echo $cambio->dolar($_GET["moneda"]); ?></p>

</body>
</html>